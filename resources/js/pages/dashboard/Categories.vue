<script setup lang="ts">
import { Button } from '@/components/ui/button';
import DashboardLayout from '@/layouts/DashboardLayout.vue';
import { Head, useForm, usePage } from '@inertiajs/vue3';
import { Input as AInput, Form, Modal, Table } from 'ant-design-vue';
import type { ColumnsType } from 'ant-design-vue/es/table';
import { Pencil, Plus, Trash2 } from 'lucide-vue-next';
import { computed, h, ref } from 'vue';

interface Category {
    id: number;
    title: string;
    description: string;
}

const page = usePage();
const categories = computed<Category[]>(() => (page.props.categories as Category[]) || []);
const loading = ref(false);
const error = ref('');

const showModal = ref(false);
const isEdit = ref(false);
const editingId = ref<number | null>(null);

const form = useForm({
    title: '',
    description: '',
});

const columns: ColumnsType<Category> = [
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
        title: 'Description',
        dataIndex: 'description',
        key: 'description',
    },
    {
        title: 'Actions',
        key: 'actions',
        width: 120,
        customRender: ({ record }: { record: Category }) => {
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
                        onClick: () => deleteCategory(record.id),
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

const openEdit = (category: Category) => {
    isEdit.value = true;
    form.reset();
    form.title = category.title;
    form.description = category.description;
    editingId.value = category.id;
    showModal.value = true;
};

const closeModal = () => {
    showModal.value = false;
    form.clearErrors();
};

const saveCategory = () => {
    loading.value = true;
    error.value = '';
    const payload = useForm({
        ...form.data(),
    });
    if (isEdit.value && editingId.value) {
        payload.put(`/dashboard/categories/${editingId.value}`, {
            preserveScroll: true,
            onSuccess: () => {
                closeModal();
            },
            onError: (errors) => {
                error.value = 'Error saving category';
                form.errors = errors;
            },
            onFinish: () => {
                loading.value = false;
            },
        });
    } else {
        payload.post('/dashboard/categories', {
            preserveScroll: true,
            onSuccess: () => {
                closeModal();
            },
            onError: (errors) => {
                error.value = 'Error saving category';
                form.errors = errors;
            },
            onFinish: () => {
                loading.value = false;
            },
        });
    }
};

const deleteCategory = (id: number) => {
    if (!confirm('Are you sure you want to delete this category?')) return;
    loading.value = true;
    form.delete(`/dashboard/categories/${id}`, {
        preserveScroll: true,
        onSuccess: () => {
            // router.reload({ only: ['categories'] });
        },
        onError: () => {
            error.value = 'Error deleting category';
        },
        onFinish: () => {
            loading.value = false;
        },
    });
};
</script>

<template>
    <Head title="Manage Categories" />
    <DashboardLayout :breadcrumbs="[{ title: 'Dashboard', href: '/dashboard' }]">
        <div class="p-6">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="text-2xl font-bold">Manage Categories</h2>
                <Button @click="openAdd" class="flex items-center gap-2" size="sm"> <Plus class="h-4 w-4" /> Add Category </Button>
            </div>
            <div v-if="error" class="mb-2 text-red-500">{{ error }}</div>

            <Table :columns="columns" :data-source="categories" :loading="loading" :pagination="{ pageSize: 10 }" row-key="id" />

            <Modal v-model:open="showModal" :title="isEdit ? 'Edit Category' : 'Add Category'" @cancel="closeModal" :footer="null">
                <Form layout="vertical" @finish="saveCategory">
                    <div v-if="error" class="mb-4 text-red-500">{{ error }}</div>
                    <Form.Item label="Title" required :validate-status="form.errors.title ? 'error' : ''" :help="form.errors.title">
                        <AInput v-model:value="form.title" placeholder="Category Title" />
                    </Form.Item>
                    <Form.Item label="Description" required :validate-status="form.errors.description ? 'error' : ''" :help="form.errors.description">
                        <AInput v-model:value="form.description" placeholder="Category Description" />
                    </Form.Item>
                    <div class="mt-4 flex justify-end gap-2">
                        <Button type="button" variant="secondary" @click="closeModal">Cancel</Button>
                        <Button html-type="submit" @click="saveCategory">Save</Button>
                    </div>
                </Form>
            </Modal>
        </div>
    </DashboardLayout>
</template>

<style scoped>
/* Add any custom styles here */
</style>
