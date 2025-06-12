<script setup lang="ts">
import { Button } from '@/components/ui/button';
import DashboardLayout from '@/layouts/DashboardLayout.vue';
import { Head, useForm, usePage } from '@inertiajs/vue3';
import { Input as AInput, Form, Modal, Select, Table } from 'ant-design-vue';
import type { ColumnsType } from 'ant-design-vue/es/table';
import { Pencil, Plus, Trash2 } from 'lucide-vue-next';
import { computed, h, ref } from 'vue';

interface Company {
    id: number;
    name: string;
}

interface Category {
    id: number;
    title: string;
}

interface Job {
    id: number;
    title: string;
    location: string;
    type: string;
    salary: string;
    experience: string;
    status: string;
    logo: string | null;
    slug: string;
    description: string;
    responsibilities: string[];
    skills: string[];
    benefits: string[];
    category_id: number;
    company?: Company;
}

const page = usePage();
const jobs = computed<Job[]>(() => (page.props.jobs as Job[]) || []);
const categories = computed<Category[]>(() => (page.props.categories as Category[]) || []);
const loading = ref(false);
const error = ref('');

const showModal = ref(false);
const isEdit = ref(false);
const editingId = ref<number | null>(null);

const form = useForm({
    title: '',
    location: '',
    type: '',
    salary: '',
    experience: '',
    status: 'active',
    description: '',
    responsibilities: '',
    skills: '',
    benefits: '',
    category_id: '',
    logo: null as File | string | null,
});

const columns: ColumnsType<Job> = [
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
        title: 'Location',
        dataIndex: 'location',
        key: 'location',
    },
    {
        title: 'Type',
        dataIndex: 'type',
        key: 'type',
    },
    {
        title: 'Salary',
        dataIndex: 'salary',
        key: 'salary',
    },
    {
        title: 'Status',
        dataIndex: 'status',
        key: 'status',
    },
    {
        title: 'Actions',
        key: 'actions',
        width: 120,
        customRender: ({ record }: { record: Job }) => {
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
                        onClick: () => deleteJob(record.id),
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

const openEdit = (job: Job) => {
    isEdit.value = true;
    form.reset();
    form.title = job.title;
    form.location = job.location;
    form.type = job.type;
    form.salary = job.salary;
    form.experience = job.experience;
    form.status = job.status;
    form.description = job.description;
    form.responsibilities = Array.isArray(job.responsibilities) ? job.responsibilities.join('\n') : '';
    form.skills = Array.isArray(job.skills) ? job.skills.join('\n') : '';
    form.benefits = Array.isArray(job.benefits) ? job.benefits.join('\n') : '';
    form.category_id = String(job.category_id);
    editingId.value = job.id;
    showModal.value = true;
};

const closeModal = () => {
    showModal.value = false;
    form.clearErrors();
};

const handleFileChange = (e: Event) => {
    const target = e.target as HTMLInputElement;
    if (target.files && target.files[0]) {
        const file = target.files[0];
        if (!file.type.startsWith('image/')) {
            error.value = 'You can only upload image files!';
            return;
        }
        if (file.size / 1024 / 1024 > 2) {
            error.value = 'Image must be smaller than 2MB!';
            return;
        }
        form.logo = file;
    }
};

const saveJob = () => {
    loading.value = true;
    error.value = '';
    const payload = useForm({
        ...form.data(),
        responsibilities: form.responsibilities.split('\n').filter((s: string) => s.trim()),
        skills: form.skills.split('\n').filter((s: string) => s.trim()),
        benefits: form.benefits.split('\n').filter((s: string) => s.trim()),
        _method: isEdit.value ? 'PUT' : 'POST',
    });

    if (isEdit.value && editingId.value) {
        payload.post(`/dashboard/jobs/${editingId.value}`, {
            preserveScroll: true,
            onSuccess: () => {
                closeModal();
            },
            onError: (errors) => {
                error.value = 'Error saving job';
                form.errors = errors;
            },
            onFinish: () => {
                loading.value = false;
            },
        });
    } else {
        payload.post('/dashboard/jobs', {
            preserveScroll: true,
            onSuccess: () => {
                closeModal();
            },
            onError: (errors) => {
                error.value = 'Error saving job';
                form.errors = errors;
            },
            onFinish: () => {
                loading.value = false;
            },
        });
    }
};

const deleteJob = (id: number) => {
    if (!confirm('Are you sure you want to delete this job?')) return;
    loading.value = true;
    form.delete(`/dashboard/jobs/${id}`, {
        preserveScroll: true,
        onSuccess: () => {
            // router.reload({ only: ['jobs'] });
        },
        onError: () => {
            error.value = 'Error deleting job';
        },
        onFinish: () => {
            loading.value = false;
        },
    });
};
</script>

<template>
    <Head title="Manage Jobs" />
    <DashboardLayout :breadcrumbs="[{ title: 'Dashboard', href: '/dashboard' }]">
        <div class="p-6">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="text-2xl font-bold">Manage Jobs</h2>
                <Button @click="openAdd" class="flex items-center gap-2" size="sm"> <Plus class="h-4 w-4" /> Add Job </Button>
            </div>
            <div v-if="error" class="mb-2 text-red-500">{{ error }}</div>

            <Table :columns="columns" :data-source="jobs" :loading="loading" :pagination="{ pageSize: 10 }" row-key="id" />

            <Modal v-model:open="showModal" :title="isEdit ? 'Edit Job' : 'Add Job'" @cancel="closeModal" :footer="null">
                <Form layout="vertical" @finish="saveJob">
                    <div v-if="error" class="mb-4 text-red-500">{{ error }}</div>
                    <!-- <Form.Item label="Logo" name="logo" :validate-status="form.errors.logo ? 'error' : ''" :help="form.errors.logo">
                        <div class="flex flex-col gap-2">
                            <div v-if="form.logo && typeof form.logo === 'string'" class="mb-2">
                                <img :src="form.logo" alt="Logo" class="h-20 w-20 object-cover rounded" />
                            </div>
                            <input
                                type="file"
                                accept="image/*"
                                @change="handleFileChange"
                                class="block w-full text-sm text-gray-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-md file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-primary file:text-white
                                    hover:file:bg-primary/90"
                            />
                        </div>
                    </Form.Item> -->
                    <Form.Item label="Title" required :validate-status="form.errors.title ? 'error' : ''" :help="form.errors.title">
                        <AInput v-model:value="form.title" placeholder="Job Title" />
                    </Form.Item>
                    <Form.Item label="Location" required :validate-status="form.errors.location ? 'error' : ''" :help="form.errors.location">
                        <AInput v-model:value="form.location" placeholder="Location" />
                    </Form.Item>
                    <Form.Item label="Type" required :validate-status="form.errors.type ? 'error' : ''" :help="form.errors.type">
                        <Select v-model:value="form.type">
                            <Select.Option value="Full Time">Full Time</Select.Option>
                            <Select.Option value="Part Time">Part Time</Select.Option>
                            <Select.Option value="Remote">Remote</Select.Option>
                        </Select>
                    </Form.Item>
                    <Form.Item label="Salary" required :validate-status="form.errors.salary ? 'error' : ''" :help="form.errors.salary">
                        <AInput v-model:value="form.salary" placeholder="Salary" />
                    </Form.Item>
                    <Form.Item label="Experience" required :validate-status="form.errors.experience ? 'error' : ''" :help="form.errors.experience">
                        <AInput v-model:value="form.experience" placeholder="Experience" />
                    </Form.Item>
                    <Form.Item label="Status" required :validate-status="form.errors.status ? 'error' : ''" :help="form.errors.status">
                        <Select v-model:value="form.status">
                            <Select.Option value="active">Active</Select.Option>
                            <Select.Option value="inactive">Inactive</Select.Option>
                        </Select>
                    </Form.Item>
                    <Form.Item label="Description" required :validate-status="form.errors.description ? 'error' : ''" :help="form.errors.description">
                        <AInput.TextArea v-model:value="form.description" placeholder="Job Description" />
                    </Form.Item>
                    <Form.Item label="Responsibilities (one per line)" required :validate-status="form.errors.responsibilities ? 'error' : ''" :help="form.errors.responsibilities">
                        <AInput.TextArea v-model:value="form.responsibilities" placeholder="Enter responsibilities" />
                    </Form.Item>
                    <Form.Item label="Skills (one per line)" required :validate-status="form.errors.skills ? 'error' : ''" :help="form.errors.skills">
                        <AInput.TextArea v-model:value="form.skills" placeholder="Enter required skills" />
                    </Form.Item>
                    <Form.Item label="Benefits (one per line)" required :validate-status="form.errors.benefits ? 'error' : ''" :help="form.errors.benefits">
                        <AInput.TextArea v-model:value="form.benefits" placeholder="Enter benefits" />
                    </Form.Item>
                    <Form.Item label="Category" required :validate-status="form.errors.category_id ? 'error' : ''" :help="form.errors.category_id">
                        <Select v-model:value="form.category_id" placeholder="Select category">
                            <Select.Option v-for="category in categories" :key="category.id" :value="category.id">
                                {{ category.title }}
                            </Select.Option>
                        </Select>
                    </Form.Item>
                    <div class="mt-4 flex justify-end gap-2">
                        <Button type="button" variant="secondary" @click="closeModal">Cancel</Button>
                        <Button type="submit" @click="saveJob">Save</Button>
                    </div>
                </Form>
            </Modal>
        </div>
    </DashboardLayout>
</template>

<style scoped>
/* Add any custom styles here */
</style>
