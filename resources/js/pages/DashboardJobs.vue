<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import DashboardLayout from '@/layouts/DashboardLayout.vue';
import { Head, router, useForm, usePage } from '@inertiajs/vue3';
import { Pencil, Plus, Trash2 } from 'lucide-vue-next';
import { computed, ref } from 'vue';

interface Company {
    id: number;
    name: string;
}

interface Job {
    id: number;
    title: string;
    location: string;
    type: string;
    salary: string;
    experience: string;
    company: Company;
}

const page = usePage();
const jobs = computed<Job[]>(() => (page.props.jobs as Job[]) || []);
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
    // company_id: '',
    description: '',
    responsibilities: '',
    skills: '',
});

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
    // form.company_id = job.company?.id ? String(job.company.id) : '';
    form.description = (job as any).description || '';
    form.responsibilities = Array.isArray((job as any).responsibilities) ? (job as any).responsibilities.join('\n') : '';
    form.skills = Array.isArray((job as any).skills) ? (job as any).skills.join('\n') : '';
    editingId.value = job.id;
    showModal.value = true;
};

const closeModal = () => {
    showModal.value = false;
    form.clearErrors();
};

const saveJob = () => {
    loading.value = true;
    error.value = '';
    const payload = useForm({
        ...form.data(),
        responsibilities: form.responsibilities.split('\n').filter((s: string) => s.trim()),
        skills: form.skills.split('\n').filter((s: string) => s.trim()),
    });
    if (isEdit.value && editingId.value) {
        payload.put(`/dashboard/jobs/${editingId.value}`, {
            preserveScroll: true,
            onSuccess: () => {
                // router.reload({ only: ['jobs'] });
                closeModal();
            },
            onError: () => {
                error.value = 'Lỗi khi lưu job';
            },
            onFinish: () => {
                loading.value = false;
            },
        });
    } else {
        payload.post('/dashboard/jobs', {
            preserveScroll: true,
            onSuccess: () => {
                console.log('success');
                // router.reload({ only: ['jobs'] });
                closeModal();
            },
            onError: () => {
                console.log('error');
                error.value = 'Lỗi khi lưu job';
            },
            onFinish: () => {
                console.log('finish');
                loading.value = false;
            },
        });
    }
};

const deleteJob = (id: number) => {
    if (!confirm('Bạn có chắc muốn xóa job này?')) return;
    loading.value = true;
    form.delete(`/dashboard/jobs/${id}`, {
        preserveScroll: true,
        onSuccess: () => {
            // router.reload({ only: ['jobs'] });
        },
        onError: () => {
            error.value = 'Lỗi khi xóa job';
        },
        onFinish: () => {
            loading.value = false;
        },
    });
};
</script>

<template>
    <Head title="Quản lý Jobs" />
    <DashboardLayout :breadcrumbs="[{ title: 'Dashboard', href: '/dashboard' }]">
        <div class="p-6">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="text-2xl font-bold">Quản lý Jobs</h2>
                <Button @click="openAdd" class="flex items-center gap-2" size="sm"><Plus class="h-4 w-4" /> Thêm Job</Button>
            </div>
            <div v-if="error" class="mb-2 text-red-500">{{ error }}</div>
            <table class="min-w-full border bg-white">
                <thead>
                    <tr>
                        <th class="border px-2 py-1">#</th>
                        <th class="border px-2 py-1">Tên Job</th>
                        <!-- <th class="border px-2 py-1">Công ty</th> -->
                        <th class="border px-2 py-1">Lương</th>
                        <th class="border px-2 py-1">Loại</th>
                        <th class="border px-2 py-1">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(job, idx) in jobs" :key="job.id">
                        <td class="border px-2 py-1">{{ idx + 1 }}</td>
                        <td class="border px-2 py-1">{{ job.title }}</td>
                        <!-- <td class="border px-2 py-1">{{ job.company?.name }}</td> -->
                        <td class="border px-2 py-1">{{ job.salary }}</td>
                        <td class="border px-2 py-1">{{ job.type }}</td>
                        <td class="border px-2 py-1">
                            <Button @click="openEdit(job)" size="icon" variant="secondary" class="mr-2"><Pencil class="h-4 w-4" /></Button>
                            <Button @click="deleteJob(job.id)" size="icon" variant="destructive"><Trash2 class="h-4 w-4" /></Button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div v-if="loading" class="mt-2">Đang tải...</div>

            <!-- Modal Thêm/Sửa -->
            <div v-if="showModal" class="bg-opacity-30 fixed inset-0 z-50 flex items-center justify-center bg-black">
                <div class="w-full max-w-lg rounded bg-white p-6 shadow-lg">
                    <h3 class="mb-4 text-lg font-bold">{{ isEdit ? 'Sửa Job' : 'Thêm Job' }}</h3>
                    <form @submit.prevent="saveJob">
                        <div class="mb-2">
                            <Label for="job-title">Tên Job</Label>
                            <Input id="job-title" v-model="form.title" required placeholder="Tên Job" />
                        </div>
                        <!-- <div class="mb-2">
                            <Label for="company-id">Công ty ID</Label>
                            <Input id="company-id" v-model="form.company_id" required placeholder="Công ty ID" />
                        </div> -->
                        <div class="mb-2">
                            <Label for="salary">Lương</Label>
                            <Input id="salary" v-model="form.salary" required placeholder="Lương" />
                        </div>
                        <div class="mb-2">
                            <Label for="type">Loại</Label>
                            <Input id="type" v-model="form.type" required placeholder="Loại" />
                        </div>
                        <div class="mb-2">
                            <Label for="location">Địa điểm</Label>
                            <Input id="location" v-model="form.location" required placeholder="Địa điểm" />
                        </div>
                        <div class="mb-2">
                            <Label for="experience">Kinh nghiệm</Label>
                            <Input id="experience" v-model="form.experience" required placeholder="Kinh nghiệm" />
                        </div>
                        <div class="mb-2">
                            <Label for="description">Mô tả</Label>
                            <textarea id="description" v-model="form.description" class="w-full rounded border border-gray-300 px-2 py-1" required />
                        </div>
                        <div class="mb-2">
                            <Label for="responsibilities">Responsibilities (mỗi dòng 1 mục)</Label>
                            <textarea
                                id="responsibilities"
                                v-model="form.responsibilities"
                                class="w-full rounded border border-gray-300 px-2 py-1"
                                required
                            />
                        </div>
                        <div class="mb-2">
                            <Label for="skills">Skills (mỗi dòng 1 mục)</Label>
                            <textarea id="skills" v-model="form.skills" class="w-full rounded border border-gray-300 px-2 py-1" required />
                        </div>
                        <div class="mt-4 flex justify-end gap-2">
                            <Button type="button" variant="secondary" @click="closeModal">Hủy</Button>
                            <Button type="submit">Lưu</Button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </DashboardLayout>
</template>

<style scoped>
/* .btn {
    @apply rounded bg-gray-200 px-3 py-1 hover:bg-gray-300;
}
.btn-primary {
    @apply bg-blue-600 text-white hover:bg-blue-700;
}
.btn-warning {
    @apply bg-yellow-400 text-white hover:bg-yellow-500;
}
.btn-danger {
    @apply bg-red-500 text-white hover:bg-red-600;
}
.btn-xs {
    @apply px-2 py-0.5 text-xs;
}
.input {
    @apply rounded border px-2 py-1;
}
.border-gray-300 {
    @apply border-gray-300;
} */
</style>
