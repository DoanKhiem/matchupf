<script setup lang="ts">
import { Button } from '@/components/ui/button';
import DashboardLayout from '@/layouts/DashboardLayout.vue';
import { Head, useForm, usePage } from '@inertiajs/vue3';
import { Input as AInput, Form, Modal, Table } from 'ant-design-vue';
import type { ColumnsType } from 'ant-design-vue/es/table';
import { Pencil, Plus, Trash2 } from 'lucide-vue-next';
import { computed, h, ref } from 'vue';
import RichTextEditor from '@/components/RichTextEditor.vue';

interface Blog {
    id: number;
    title: string;
    slug: string;
    image: string;
    content: string;
}

const page = usePage();
const blogs = computed<Blog[]>(() => (page.props.blogs as Blog[]) || []);
const loading = ref(false);
const error = ref('');

const showModal = ref(false);
const isEdit = ref(false);
const editingId = ref<number | null>(null);
const fileInput = ref<HTMLInputElement | null>(null);

const form = useForm({
    title: '',
    content: '',
    image: null as File | string | null,
});

const columns: ColumnsType<Blog> = [
    {
        title: '#',
        dataIndex: 'id',
        key: 'id',
        width: 60,
    },
    {
        title: 'Title',
        dataIndex: 'title',
        key: 'title',
    },
    {
        title: 'Image',
        dataIndex: 'image',
        key: 'image',
        width: 100,
        customRender: ({ record }: { record: Blog }) => {
            return h('img', {
                src: record.image,
                alt: record.title,
                class: 'h-10 w-10 object-cover rounded',
            });
        },
    },
    {
        title: 'Actions',
        key: 'actions',
        width: 120,
        customRender: ({ record }: { record: Blog }) => {
            return h('div', { class: 'flex gap-2' }, [
                h(
                    Button,
                    {
                        onClick: () => openEdit(record),
                        size: 'icon',
                        variant: 'secondary',
                    },
                    () => h(Pencil, { class: 'h-4 w-4' }),
                ),
                h(
                    Button,
                    {
                        onClick: () => deleteBlog(record.id),
                        size: 'icon',
                        variant: 'destructive',
                    },
                    () => h(Trash2, { class: 'h-4 w-4' }),
                ),
            ]);
        },
    },
];

const openAdd = () => {
    isEdit.value = false;
    form.reset();
    editingId.value = null;
    showModal.value = true;
};

const openEdit = (blog: Blog) => {
    isEdit.value = true;
    form.reset();
    form.title = blog.title;
    form.content = blog.content;
    form.image = blog.image;
    editingId.value = blog.id;
    showModal.value = true;
};

const closeModal = () => {
    showModal.value = false;
    error.value = '';
    form.clearErrors();
    if (fileInput.value) {
        fileInput.value.value = '';
    }
};

const handleFileChange = (e: Event) => {
    const target = e.target as HTMLInputElement;
    if (target.files && target.files[0]) {
        const file = target.files[0];
        if (!file.type.startsWith('image/')) {
            error.value = 'You can only upload image files!';
            return;
        }
        if (file.size / 1024 / 1024 > 5) {
            error.value = 'Image must be smaller than 5MB!';
            return;
        }
        form.image = file;
    }
};

const saveBlog = () => {
    loading.value = true;
    error.value = '';
    const payload = useForm({
        ...form.data(),
        _method: isEdit.value ? 'PUT' : 'POST',
    });

    // If editing and no new image is uploaded, set image to null
    if (isEdit.value && !(form.image instanceof File)) {
        payload.image = null;
    }

    if (isEdit.value && editingId.value) {
        payload.post(`/dashboard/blogs/${editingId.value}`, {
            preserveScroll: true,
            onSuccess: () => {
                closeModal();
            },
            onError: (errors) => {
                error.value = 'Error saving blog';
                form.errors = errors;
            },
            onFinish: () => {
                loading.value = false;
            },
        });
    } else {
        payload.post('/dashboard/blogs', {
            preserveScroll: true,
            onSuccess: () => {
                closeModal();
            },
            onError: (errors) => {
                error.value = 'Error saving blog';
                form.errors = errors;
            },
            onFinish: () => {
                loading.value = false;
            },
        });
    }
};

const deleteBlog = (id: number) => {
    if (!confirm('Are you sure you want to delete this blog?')) return;
    loading.value = true;
    form.delete(`/dashboard/blogs/${id}`, {
        preserveScroll: true,
        onSuccess: () => {
            // router.reload({ only: ['blogs'] });
        },
        onError: () => {
            error.value = 'Error deleting blog';
        },
        onFinish: () => {
            loading.value = false;
        },
    });
};
</script>

<template>
    <Head title="Manage Blogs" />
    <DashboardLayout :breadcrumbs="[{ title: 'Dashboard', href: '/dashboard' }]">
        <div class="p-6">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="text-2xl font-bold">Manage Blogs</h2>
                <Button @click="openAdd" class="flex items-center gap-2" size="sm"> <Plus class="h-4 w-4" /> Add Blog </Button>
            </div>
            <!-- <div v-if="error" class="mb-2 text-red-500">{{ error }}</div> -->

            <Table :columns="columns" :data-source="blogs" :loading="loading" :pagination="{ pageSize: 10 }" row-key="id" />

            <Modal v-model:open="showModal" :title="isEdit ? 'Edit Blog' : 'Add Blog'" @cancel="closeModal" :footer="null">
                <Form layout="vertical" @finish="saveBlog">
                    <div v-if="error" class="mb-4 text-red-500">{{ error }}</div>
                    <Form.Item label="Title" required :validate-status="form.errors.title ? 'error' : ''" :help="form.errors.title">
                        <AInput v-model:value="form.title" placeholder="Blog Title" />
                    </Form.Item>
                    <Form.Item label="Content" required :validate-status="form.errors.content ? 'error' : ''" :help="form.errors.content">
                        <RichTextEditor v-model="form.content" />
                    </Form.Item>
                    <Form.Item label="Image" required :validate-status="form.errors.image ? 'error' : ''" :help="form.errors.image">
                        <div class="flex flex-col gap-2">
                            <div v-if="form.image && typeof form.image === 'string'" class="mb-2">
                                <img :src="form.image" alt="Blog Image" class="h-20 w-20 object-cover rounded" />
                            </div>
                            <input
                                type="file"
                                accept="image/*"
                                @change="handleFileChange" 
                                ref="fileInput"
                                class="block w-full text-sm text-gray-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-md file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-primary file:text-white
                                    hover:file:bg-primary/90"
                            />
                        </div>
                    </Form.Item>
                    <div class="mt-4 flex justify-end gap-2">
                        <Button type="button" variant="secondary" @click="closeModal">Cancel</Button>
                        <Button html-type="submit" @click="saveBlog">Save</Button>
                    </div>
                </Form>
            </Modal>
        </div>
    </DashboardLayout>
</template>

<style scoped>
/* Add any custom styles here */
</style> 