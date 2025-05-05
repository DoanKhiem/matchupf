<script setup lang="ts">
import DashboardLayout from '@/layouts/app/DashboardSidebarLayout.vue';
// import type { BreadcrumbItemType } from '@/types';

// interface Props {
//     breadcrumbs?: BreadcrumbItemType[];
// }

// withDefaults(defineProps<Props>(), {
//     breadcrumbs: () => [],
// });
</script>

<template>
    <DashboardLayout>
        <slot />
    </DashboardLayout>
</template>
