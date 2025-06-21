<script setup lang="ts">
import { Button } from '@/components/ui/button';
import DashboardLayout from '@/layouts/DashboardLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';
import { Modal, Table } from 'ant-design-vue';
import type { ColumnsType } from 'ant-design-vue/es/table';
import { Eye, Download } from 'lucide-vue-next';
import { computed, h, ref } from 'vue';

interface Job {
    id: number;
    title: string;
    company?: {
        name: string;
    };
}

interface JobApplication {
    id: number;
    name: string;
    email: string;
    cv_path: string;
    message: string;
    status: string;
    created_at: string;
    job: Job;
}

const page = usePage();
const applications = computed<JobApplication[]>(() => (page.props.applications as JobApplication[]) || []);
const loading = ref(false);

const showModal = ref(false);
const selectedApplication = ref<JobApplication | null>(null);

const columns: ColumnsType<JobApplication> = [
    {
        title: '#',
        dataIndex: 'id',
        key: 'id',
        width: 60,
    },
    {
        title: 'Applicant',
        key: 'applicant',
        customRender: ({ record }: { record: JobApplication }) => {
            return h('div', { class: 'flex flex-col' }, [
                h('div', { class: 'font-medium' }, record.name),
                h('div', { class: 'text-sm text-gray-500' }, record.email),
            ]);
        },
    },
    {
        title: 'Job',
        key: 'job',
        customRender: ({ record }: { record: JobApplication }) => {
            return h('div', { class: 'flex flex-col' }, [
                h('div', { class: 'font-medium' }, record.job.title),
                h('div', { class: 'text-sm text-gray-500' }, record.job.company?.name || 'N/A'),
            ]);
        },
    },
    {
        title: 'Status',
        dataIndex: 'status',
        key: 'status',
        width: 100,
        customRender: ({ record }: { record: JobApplication }) => {
            const statusColors = {
                pending: 'bg-yellow-100 text-yellow-800',
                reviewed: 'bg-blue-100 text-blue-800',
                accepted: 'bg-green-100 text-green-800',
                rejected: 'bg-red-100 text-red-800',
            };
            const colorClass = statusColors[record.status as keyof typeof statusColors] || 'bg-gray-100 text-gray-800';
            return h('span', { 
                class: `px-2 py-1 rounded-full text-xs font-medium ${colorClass}` 
            }, record.status.charAt(0).toUpperCase() + record.status.slice(1));
        },
    },
    {
        title: 'Applied Date',
        dataIndex: 'created_at',
        key: 'created_at',
        width: 120,
        customRender: ({ record }: { record: JobApplication }) => {
            return h('div', { class: 'text-sm' }, new Date(record.created_at).toLocaleDateString());
        },
    },
    {
        title: 'Actions',
        key: 'actions',
        width: 120,
        customRender: ({ record }: { record: JobApplication }) => {
            return h('div', { class: 'flex gap-2' }, [
                h(
                    Button,
                    {
                        onClick: () => openView(record),
                        size: 'icon',
                        variant: 'secondary',
                    },
                    () => h(Eye, { class: 'h-4 w-4' }),
                ),
                h(
                    Button,
                    {
                        onClick: () => downloadCV(record),
                        size: 'icon',
                        variant: 'outline',
                    },
                    () => h(Download, { class: 'h-4 w-4' }),
                ),
            ]);
        },
    },
];

const openView = (application: JobApplication) => {
    selectedApplication.value = application;
    showModal.value = true;
};

const closeModal = () => {
    showModal.value = false;
    selectedApplication.value = null;
};

const downloadCV = (application: JobApplication) => {
    if (application.cv_path) {
        const link = document.createElement('a');
        link.href = `/storage/${application.cv_path}`;
        link.download = `CV_${application.name}_${application.job.title}.pdf`;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
};

const getStatusColor = (status: string) => {
    const statusColors = {
        pending: 'bg-yellow-100 text-yellow-800',
        reviewed: 'bg-blue-100 text-blue-800',
        accepted: 'bg-green-100 text-green-800',
        rejected: 'bg-red-100 text-red-800',
    };
    return statusColors[status as keyof typeof statusColors] || 'bg-gray-100 text-gray-800';
};
</script>

<template>
    <Head title="Job Applications" />
    <DashboardLayout :breadcrumbs="[{ title: 'Dashboard', href: '/dashboard' }]">
        <div class="p-6">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="text-2xl font-bold">Job Applications</h2>
                <div class="text-sm text-gray-500">
                    Total: {{ applications.length }} applications
                </div>
            </div>

            <Table 
                :columns="columns" 
                :data-source="applications" 
                :loading="loading" 
                :pagination="{ pageSize: 10 }" 
                row-key="id" 
            />

            <!-- View Application Modal -->
            <Modal 
                v-model:open="showModal" 
                title="Application Details" 
                @cancel="closeModal" 
                :footer="null"
                width="600px"
            >
                <div v-if="selectedApplication" class="space-y-6">
                    <!-- Applicant Information -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-3">Applicant Information</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm font-medium text-gray-600">Name</label>
                                <p class="text-gray-900">{{ selectedApplication.name }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-600">Email</label>
                                <p class="text-gray-900">{{ selectedApplication.email }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Job Information -->
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-3">Job Information</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm font-medium text-gray-600">Job Title</label>
                                <p class="text-gray-900">{{ selectedApplication.job.title }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-600">Company</label>
                                <p class="text-gray-900">{{ selectedApplication.job.company?.name || 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Application Details -->
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-3">Application Details</h3>
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="text-sm font-medium text-gray-600">Status</label>
                                <span :class="`px-2 py-1 rounded-full text-xs font-medium ${getStatusColor(selectedApplication.status)}`">
                                    {{ selectedApplication.status.charAt(0).toUpperCase() + selectedApplication.status.slice(1) }}
                                </span>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-600">Applied Date</label>
                                <p class="text-gray-900">{{ new Date(selectedApplication.created_at).toLocaleDateString() }}</p>
                            </div>
                        </div>
                        
                        <div v-if="selectedApplication.message">
                            <label class="text-sm font-medium text-gray-600">Message</label>
                            <p class="text-gray-900 mt-1">{{ selectedApplication.message }}</p>
                        </div>
                    </div>

                    <!-- CV Download -->
                    <div class="bg-yellow-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-3">CV/Resume</h3>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600">CV File</p>
                                <p class="text-gray-900">{{ selectedApplication.cv_path ? 'CV uploaded' : 'No CV uploaded' }}</p>
                            </div>
                            <Button 
                                v-if="selectedApplication.cv_path"
                                @click="downloadCV(selectedApplication)" 
                                variant="outline"
                                class="flex items-center gap-2"
                            >
                                <Download class="h-4 w-4" />
                                Download CV
                            </Button>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-end gap-2 pt-4 border-t">
                        <Button variant="secondary" @click="closeModal">
                            Close
                        </Button>
                    </div>
                </div>
            </Modal>
        </div>
    </DashboardLayout>
</template>

<style scoped>
/* Add any custom styles here */
</style> 