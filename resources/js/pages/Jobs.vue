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
                                    <div role="listitem" class="full-width w-dyn-item" data-aos="fade-up" data-aos-delay="400">
                                        <div
                                            id="w-node-_682c5bf2-4926-dbc3-1ac5-f2a02042f823-704c5045"
                                            data-w-id="682c5bf2-4926-dbc3-1ac5-f2a02042f823"
                                            class="job-grid-card"
                                        >
                                            <div class="w-layout-hflex job-grid-header">
                                                <img loading="lazy" src="/images/Group103.webp" alt="" class="image-80px" />
                                                <div class="w-layout-vflex center-align-job-card">
                                                    <Link
                                                        :href="route('job.detail', { slug: 'senior-frontend-engineer' })"
                                                        class="margin-bottom-12px w-inline-block"
                                                    >
                                                        <h6 class="heading">SENIOR FRONTEND ENGINEER</h6>
                                                    </Link>
                                                    <div class="w-layout-hflex job-location-salary-wrapper">
                                                        <div class="w-layout-hflex horizontal-left-center-8px-gap">
                                                            <div class="_18px-icon-neutral-200">place</div>
                                                            <div class="_14px-400-neutral-200">ThaiLand</div>
                                                        </div>
                                                        <div class="w-layout-hflex horizontal-left-center-8px-gap">
                                                            <div class="_18px-icon-neutral-200">payments</div>
                                                            <div class="_14px-400-neutral-200">$35K</div>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-30px">
                                                        <div class="w-layout-hflex _10px-gap">
                                                            <div class="w-layout-hflex text-button">
                                                                <div>Full Time</div>
                                                            </div>
                                                            <div class="w-layout-hflex text-button">
                                                                <div>In house</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <Link
                                                :href="route('job.detail', { slug: 'senior-frontend-engineer' })"
                                                class="apply-button padding-x-38px w-inline-block"
                                            >
                                                <div>Apply Now</div>
                                                <div class="icon">chevron_right</div>
                                            </Link>
                                            <div class="w-layout-hflex featured-tag frid">
                                                <img src="/images/award-line.svg" loading="lazy" alt="" class="image-18px" />
                                                <div>Featured</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="full-width w-dyn-item" data-aos="fade-up" data-aos-delay="500">
                                        <div
                                            id="w-node-_682c5bf2-4926-dbc3-1ac5-f2a02042f823-704c5045"
                                            data-w-id="682c5bf2-4926-dbc3-1ac5-f2a02042f823"
                                            class="job-grid-card"
                                        >
                                            <div class="w-layout-hflex job-grid-header">
                                                <img loading="lazy" src="/images/Group103.webp" alt="" class="image-80px" />
                                                <div class="w-layout-vflex center-align-job-card">
                                                    <Link
                                                        :href="route('job.detail', { slug: 'senior-digital-marketing' })"
                                                        class="margin-bottom-12px w-inline-block"
                                                    >
                                                        <h6 class="heading">SENIOR DIGITAL MARKETING</h6>
                                                    </Link>
                                                    <div class="w-layout-hflex job-location-salary-wrapper">
                                                        <div class="w-layout-hflex horizontal-left-center-8px-gap">
                                                            <div class="_18px-icon-neutral-200">place</div>
                                                            <div class="_14px-400-neutral-200">ThaiLand</div>
                                                        </div>
                                                        <div class="w-layout-hflex horizontal-left-center-8px-gap">
                                                            <div class="_18px-icon-neutral-200">payments</div>
                                                            <div class="_14px-400-neutral-200">$35K</div>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-30px">
                                                        <div class="w-layout-hflex _10px-gap">
                                                            <div class="w-layout-hflex text-button">
                                                                <div>Full Time</div>
                                                            </div>
                                                            <div class="w-layout-hflex text-button">
                                                                <div>In house</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <Link
                                                :href="route('job.detail', { slug: 'senior-digital-marketing' })"
                                                class="apply-button padding-x-38px w-inline-block"
                                            >
                                                <div>Apply Now</div>
                                                <div class="icon">chevron_right</div>
                                            </Link>
                                            <div class="w-layout-hflex featured-tag frid">
                                                <img src="/images/award-line.svg" loading="lazy" alt="" class="image-18px" />
                                                <div>Featured</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="full-width w-dyn-item" data-aos="fade-up" data-aos-delay="600">
                                        <div
                                            id="w-node-_682c5bf2-4926-dbc3-1ac5-f2a02042f823-704c5045"
                                            data-w-id="682c5bf2-4926-dbc3-1ac5-f2a02042f823"
                                            class="job-grid-card"
                                        >
                                            <div class="w-layout-hflex job-grid-header">
                                                <img loading="lazy" src="/images/Group103.webp" alt="" class="image-80px" />
                                                <div class="w-layout-vflex center-align-job-card">
                                                    <Link
                                                        :href="route('job.detail', { slug: 'qc-manual' })"
                                                        class="margin-bottom-12px w-inline-block"
                                                    >
                                                        <h6 class="heading">QC MANUAL</h6>
                                                    </Link>
                                                    <div class="w-layout-hflex job-location-salary-wrapper">
                                                        <div class="w-layout-hflex horizontal-left-center-8px-gap">
                                                            <div class="_18px-icon-neutral-200">place</div>
                                                            <div class="_14px-400-neutral-200">ThaiLand</div>
                                                        </div>
                                                        <div class="w-layout-hflex horizontal-left-center-8px-gap">
                                                            <div class="_18px-icon-neutral-200">payments</div>
                                                            <div class="_14px-400-neutral-200">$35K</div>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-30px">
                                                        <div class="w-layout-hflex _10px-gap">
                                                            <div class="w-layout-hflex text-button">
                                                                <div>Full Time</div>
                                                            </div>
                                                            <div class="w-layout-hflex text-button">
                                                                <div>In house</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <Link
                                                :href="route('job.detail', { slug: 'qc-manual' })"
                                                class="apply-button padding-x-38px w-inline-block"
                                            >
                                                <div>Apply Now</div>
                                                <div class="icon">chevron_right</div>
                                            </Link>
                                            <div class="w-layout-hflex featured-tag frid">
                                                <img src="/images/award-line.svg" loading="lazy" alt="" class="image-18px" />
                                                <div>Featured</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="listitem" class="full-width w-dyn-item" data-aos="fade-up" data-aos-delay="700">
                                        <div
                                            id="w-node-_682c5bf2-4926-dbc3-1ac5-f2a02042f823-704c5045"
                                            data-w-id="682c5bf2-4926-dbc3-1ac5-f2a02042f823"
                                            class="job-grid-card"
                                        >
                                            <div class="w-layout-hflex job-grid-header">
                                                <img loading="lazy" src="/images/Group103.webp" alt="" class="image-80px" />
                                                <div class="w-layout-vflex center-align-job-card">
                                                    <Link
                                                        :href="route('job.detail', { slug: 'senior-ux-ui-designer' })"
                                                        class="margin-bottom-12px w-inline-block"
                                                    >
                                                        <h6 class="heading">SENIOR UX/UI DESIGNER</h6>
                                                    </Link>
                                                    <div class="w-layout-hflex job-location-salary-wrapper">
                                                        <div class="w-layout-hflex horizontal-left-center-8px-gap">
                                                            <div class="_18px-icon-neutral-200">place</div>
                                                            <div class="_14px-400-neutral-200">ThaiLand</div>
                                                        </div>
                                                        <div class="w-layout-hflex horizontal-left-center-8px-gap">
                                                            <div class="_18px-icon-neutral-200">payments</div>
                                                            <div class="_14px-400-neutral-200">$35K</div>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-30px">
                                                        <div class="w-layout-hflex _10px-gap">
                                                            <div class="w-layout-hflex text-button">
                                                                <div>Full Time</div>
                                                            </div>
                                                            <div class="w-layout-hflex text-button">
                                                                <div>In house</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <Link
                                                :href="route('job.detail', { slug: 'senior-ux-ui-designer' })"
                                                class="apply-button padding-x-38px w-inline-block"
                                            >
                                                <div>Apply Now</div>
                                                <div class="icon">chevron_right</div>
                                            </Link>
                                            <div class="w-layout-hflex featured-tag frid">
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
import { onMounted } from 'vue';
import { route } from 'ziggy-js';

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
