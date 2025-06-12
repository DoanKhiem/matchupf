<script setup lang="ts">
import { useI18n } from 'vue-i18n';

interface Job {
    id: number;
    title: string;
    location: string;
    salary: string;
    type: string;
    experience: string;
}

defineProps<{
    jobs: Job[]
}>();

const { t } = useI18n();
</script>

<template>
    <section class="section">
        <div class="container">
            <div data-aos="fade-up" class="title-wrapper">
                <div class="mask">
                    <h2 class="heading">
                        {{ t('home.jobs.title') }}
                    </h2>
                </div>
                <div class="mask">
                    <p class="_16px-500">
                        {{ t('home.jobs.description') }}
                    </p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="w-dyn-list">
                <div role="list" class="_2-column-grid w-dyn-items">
                    <div v-for="job in jobs" :key="job.id" role="listitem" class="w-dyn-item">
                        <div class="job-list-card">
                            <div class="w-layout-hflex job-header-wrapper">
                                <img src="/images/logo-13.webp" loading="lazy"
                                    class="company-image-with-neutral-50-bg" />
                                <div class="w-layout-vflex job-info">
                                    <a :href="route('job.detail', { id: job.id })" 
                                        class="margin-bottom-12px w-inline-block">
                                        <h6 class="heading">{{ job.title }}</h6>
                                    </a>
                                    <div class="w-layout-hflex job-location-salary-wrapper">
                                        <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                            <div class="_18px-icon-neutral-200">place</div>
                                            <div class="_14px-400-neutral-200">{{ job.location }}</div>
                                        </div>
                                        <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                            <div class="_18px-icon-neutral-200">payments</div>
                                            <div class="_14px-400-neutral-200">{{ job.salary }}</div>
                                        </div>
                                    </div>
                                    <div class="margin-top-20px">
                                        <div class="w-layout-hflex _20px-gap">
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
                            <a :href="route('job.detail', { id: job.id })" 
                                class="apply-button w-inline-block">
                                <div>{{ t('home.jobs.applyNow') }}</div>
                                <div class="icon">chevron_right</div>
                            </a>
                            <div style="height: 0%" class="hover-color-primary"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blur-div-470px-size bottom-right"></div>
        </div>
    </section>
</template>

<style scoped>
@import '@css/main.css';
</style>