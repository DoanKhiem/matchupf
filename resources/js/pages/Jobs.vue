<template>
    <AppLayout>
        <Head :title="t('jobs.title')" />
        <section id="hero" class="main-banner">
            <div class="container">
                <div class="breadcrumb-block" data-aos="fade-up">
                    <h1 class="_30px-title-white">
                        {{ t('jobs.title') }}
                        <span v-if="props.selectedCategory">{{ t('jobs.breadcrumb.in') }} {{ props.selectedCategory }}</span>
                    </h1>
                    <div class="text-merge">
                        <a href="/" class="breadcrumb">{{ t('jobs.breadcrumb.home') }}</a>
                        <div class="breadcrumb">/</div>
                        <div class="breadcrumb">{{ t('jobs.breadcrumb.jobs') }}</div>
                    </div>
                    <form v-if="!props.selectedCategory" class="banner-search-wrapper w-form" @submit.prevent="onSearch">
                        <input
                            class="banner-search-input w-input"
                            maxlength="256"
                            name="query"
                            :placeholder="t('jobs.search.placeholder')"
                            type="search"
                            id="search-4"
                            v-model="search"
                        />
                        <input type="submit" class="search-button-material w-button" value="search" />
                    </form>
                </div>
            </div>
        </section>
        <div class="page-wrapper">
            <section class="section">
                <div class="container">
                    <div class="_2-column-block-top reverse">
                        <div class="sidebar-form" data-aos="fade-right" data-aos-delay="100">
                            <div class="sidebar-wrapper">
                                <div class="job-widget" data-aos="fade-up" data-aos-delay="200">
                                    <div class="widget-title">{{ t('jobs.sidebar.categories') }}</div>
                                    <div class="w-dyn-list">
                                        <div role="list" class="job-categories w-dyn-items">
                                            <div
                                                v-for="category in props.categories"
                                                :key="category.id"
                                                role="listitem"
                                                class="w-dyn-item"
                                                data-aos="fade-up"
                                            >
                                                <a
                                                    :href="`/job-category/${category.title.toLowerCase().replace(/\s+/g, '-')}`"
                                                    class="job-category-link w-inline-block"
                                                    :class="{ 'w--current': category.title === props.selectedCategory }"
                                                >
                                                    <div>{{ category.title }}</div>
                                                    <div class="_16px-semibold-primary-200">{{ category.jobs_count }}</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="full-width">
                            <div class="full-width w-dyn-list">
                                <div role="list" class="jobs-grid w-dyn-items">
                                    <div v-for="job in props.jobs" :key="job.id" role="listitem" class="full-width w-dyn-item" data-aos="fade-up">
                                        <div class="job-grid-card">
                                            <div class="w-layout-hflex job-grid-header">
                                                <img loading="lazy" :src="job.company?.logo || '/images/Group103.webp'" alt="" class="image-80px" />
                                                <div class="w-layout-vflex center-align-job-card">
                                                    <Link :href="route('job.detail', { id: job.id })" class="margin-bottom-12px w-inline-block">
                                                        <h6 class="heading">{{ job.title }}</h6>
                                                    </Link>
                                                    <div class="w-layout-hflex job-location-salary-wrapper">
                                                        <div class="w-layout-hflex horizontal-left-center-8px-gap">
                                                            <div class="_18px-icon-neutral-200">place</div>
                                                            <div class="_14px-400-neutral-200">{{ job.location }}</div>
                                                        </div>
                                                        <div class="w-layout-hflex horizontal-left-center-8px-gap">
                                                            <div class="_18px-icon-neutral-200">payments</div>
                                                            <div class="_14px-400-neutral-200">{{ job.salary }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-30px">
                                                        <div class="w-layout-hflex _10px-gap">
                                                            <div class="w-layout-hflex text-button">
                                                                <div>{{ job.type }}</div>
                                                            </div>
                                                            <div class="w-layout-hflex text-button">
                                                                <div>{{ job.experience }} {{ t('jobs.job.experience') }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <Link :href="route('job.detail', { id: job.id })" class="apply-button padding-x-38px w-inline-block">
                                                <div>{{ t('jobs.job.apply') }}</div>
                                                <div class="icon">chevron_right</div>
                                            </Link>
                                            <div v-if="job.featured" class="w-layout-hflex featured-tag frid">
                                                <img src="/images/award-line.svg" loading="lazy" alt="" class="image-18px" />
                                                <div>{{ t('jobs.job.featured') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="navigation" aria-label="List" class="w-pagination-wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { defineProps, onMounted, ref } from 'vue';
import { route } from 'ziggy-js';
import { router } from '@inertiajs/vue3';
import { useI18n } from 'vue-i18n';

const { t } = useI18n();
const props = defineProps<{ jobs: any[]; categories: any[]; selectedCategory?: string; searchQuery?: string }>();
const search = ref(props.searchQuery || '');

onMounted(() => {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false,
    });
});

const onSearch = () => {
    router.get('/jobs', { query: search.value });
}
</script>

<style scoped>
@import '@css/main.css';
</style>
