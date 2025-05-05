<template>
    <AppLayout>
        <section id="hero" class="main-banner">
            <div class="container">
                <div class="breadcrumb-block" data-aos="fade-up">
                    <h1 class="_30px-title-white">Jobs</h1>
                    <div class="text-merge">
                        <a href="/" class="breadcrumb">Home</a>
                        <div class="breadcrumb">/</div>
                        <div class="breadcrumb">Jobs</div>
                    </div>
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
                                    <div class="widget-title">Categories</div>
                                    <div class="w-dyn-list">
                                        <div role="list" class="job-categories w-dyn-items">
                                            <div role="listitem" class="w-dyn-item" data-aos="fade-up" data-aos-delay="300">
                                                <a href="/job-category/ux-ui-designer" class="job-category-link w-inline-block">
                                                    <div>UX UI Designer</div>
                                                    <div class="_16px-semibold-primary-200">10</div>
                                                </a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item" data-aos="fade-up" data-aos-delay="400">
                                                <a href="/job-category/content-writer" class="job-category-link w-inline-block">
                                                    <div>Content Writer</div>
                                                    <div class="_16px-semibold-primary-200">21</div>
                                                </a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item" data-aos="fade-up" data-aos-delay="500">
                                                <a href="/job-category/website-developer" class="job-category-link w-inline-block">
                                                    <div>Website Developer</div>
                                                    <div class="_16px-semibold-primary-200">4</div>
                                                </a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item" data-aos="fade-up" data-aos-delay="600">
                                                <a href="/job-category/hr-executive" class="job-category-link w-inline-block">
                                                    <div>HR Executive</div>
                                                    <div class="_16px-semibold-primary-200">2</div>
                                                </a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item" data-aos="fade-up" data-aos-delay="700">
                                                <a href="/job-category/digital-marketer" class="job-category-link w-inline-block">
                                                    <div>Digital Marketer</div>
                                                    <div class="_16px-semibold-primary-200">18</div>
                                                </a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item" data-aos="fade-up" data-aos-delay="800">
                                                <a href="/job-category/accounting-expert" class="job-category-link w-inline-block">
                                                    <div>Accounting Expert</div>
                                                    <div class="_16px-semibold-primary-200">8</div>
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
                                                    <Link :href="route('job.detail', { slug: job.id })" class="margin-bottom-12px w-inline-block">
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
                                                                <div>{{ job.experience }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <Link :href="route('job.detail', { slug: job.id })" class="apply-button padding-x-38px w-inline-block">
                                                <div>Apply Now</div>
                                                <div class="icon">chevron_right</div>
                                            </Link>
                                            <div v-if="job.featured" class="w-layout-hflex featured-tag frid">
                                                <img src="/images/award-line.svg" loading="lazy" alt="" class="image-18px" />
                                                <div>Featured</div>
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
import { Link } from '@inertiajs/vue3';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { defineProps, onMounted } from 'vue';
import { route } from 'ziggy-js';

const props = defineProps<{ jobs: any[] }>();

onMounted(() => {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false,
    });
});
</script>

<style></style>
