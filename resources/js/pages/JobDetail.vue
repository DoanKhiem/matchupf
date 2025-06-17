<template>
    <AppLayout>
        <Head :title="t('jobDetail.title')" />
        <section id="hero" class="main-banner">
            <div class="container">
                <div class="breadcrumb-block" data-aos="fade-up">
                    <h1 class="_30px-title-white">{{ t('jobDetail.title') }}</h1>
                    <div class="text-merge">
                        <a href="/" class="breadcrumb">{{ t('jobDetail.breadcrumb.home') }}</a>
                        <div class="breadcrumb">/</div>
                        <div class="breadcrumb">{{ t('jobDetail.breadcrumb.jobs') }}</div>
                        <div class="breadcrumb">/</div>
                        <div class="breadcrumb">{{ job?.title || t('jobDetail.title') }}</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="page-wrapper" v-if="job">
            <section class="_60px-margin-section">
                <div class="container">
                    <div class="_2-column-block-top">
                        <div class="w-layout-vflex sidebar" data-aos="fade-right" data-aos-delay="100">
                            <div class="w-layout-vflex job-details-block-left-align">
                                <div class="w-layout-hflex job-info-block">
                                    <img src="/images/map-pin-line.png" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                    <div class="vertical-left-top _4px-gap">
                                        <div class="_20px-500">{{ t('jobDetail.info.location') }}</div>
                                        <p class="_16px-500">{{ job.location }}</p>
                                    </div>
                                </div>
                                <div class="w-layout-hflex job-info-block">
                                    <img src="/images/time-line.png" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                    <div class="vertical-left-top _4px-gap">
                                        <div class="_20px-500">{{ t('jobDetail.info.jobType') }}</div>
                                        <p class="_16px-500">{{ job.type }}</p>
                                    </div>
                                </div>
                                <div class="w-layout-hflex job-info-block">
                                    <img src="/images/money-dollar-box-line.png" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                    <div class="vertical-left-top _4px-gap">
                                        <div class="_20px-500">{{ t('jobDetail.info.salaryRange') }}</div>
                                        <p class="_16px-500">{{ job.salary }}</p>
                                    </div>
                                </div>
                                <div class="w-layout-hflex job-info-block last">
                                    <img src="/images/user-line-green.png" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                    <div class="vertical-left-top _4px-gap">
                                        <div class="_20px-500">{{ t('jobDetail.info.experience') }}</div>
                                        <div class="text-merge">
                                            <p class="_16px-500">{{ job.experience }}</p>
                                        </div>
                                    </div>
                                </div>
                                <a data-w-id="081325f6-2dc0-8ac3-8042-83b3e7870577" href="#" class="primary-button full-button w-inline-block">
                                    <div class="button-text-wrapper">
                                        <div class="default-text">{{ t('jobDetail.apply.button') }}</div>
                                        <!-- <div class="hover-text">{{ t('jobDetail.apply.button') }}</div> -->
                                    </div>
                                    <div class="icon-18px">chevron_right</div>
                                </a>
                            </div>
                            <!-- <div class="w-layout-vflex job-details-block">
                                <img :src="job.company.logo" loading="lazy" alt="" class="image-60px" />
                                <div class="margin-bottom-10px">
                                    <div class="_30px-title">{{ job.company.name }}</div>
                                </div>
                                <p class="primary-200">
                                    {{ job.company.description }}
                                </p>
                                <div class="w-layout-vflex job-details-wrapper">
                                    <div class="w-layout-hflex job-between-block">
                                        <div class="w-layout-hflex _8px-gap">
                                            <img src="/images/briefcase-line.svg" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                            <div class="job-meta-text">Primary Industry</div>
                                        </div>
                                        <div class="_14px-neutral-200">{{ job.company.industry }}</div>
                                    </div>
                                    <div class="w-layout-hflex job-between-block">
                                        <div class="w-layout-hflex _8px-gap">
                                            <img src="/images/home-4-line.svg" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                            <div class="job-meta-text">Founded in</div>
                                        </div>
                                        <div class="_14px-neutral-200">{{ job.company.founded }}</div>
                                    </div>
                                    <div class="w-layout-hflex job-between-block">
                                        <div class="w-layout-hflex _8px-gap">
                                            <img src="/images/shape-2-fill.svg" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                            <div class="job-meta-text">Company size</div>
                                        </div>
                                        <div class="_14px-neutral-200">{{ job.company.size }}</div>
                                    </div>
                                    <div class="w-layout-hflex job-between-block">
                                        <div class="w-layout-hflex _8px-gap">
                                            <img src="/images/map-pin-line.svg" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                            <div class="job-meta-text">Location</div>
                                        </div>
                                        <div class="_14px-neutral-200">{{ job.location }}</div>
                                    </div>
                                    <div class="w-layout-hflex job-between-block">
                                        <div class="w-layout-hflex _8px-gap">
                                            <img src="/images/global-line.svg" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                            <div class="job-meta-text">Website</div>
                                        </div>
                                        <a :href="job.company.website" class="_14px-neutral-200">Visit Site</a>
                                    </div>
                                    <div class="w-layout-hflex job-between-block">
                                        <div class="w-layout-hflex _8px-gap">
                                            <img src="/images/links-line.svg" loading="lazy" alt="" class="image-24px margin-top-3px" />
                                            <div class="job-meta-text">Social Profile</div>
                                        </div>
                                        <div class="horizontal-left-center-20px-gap">
                                            <a :href="job.company.social.facebook" target="_blank" class="social-icon-links-gray"></a
                                            ><a :href="job.company.social.instagram" target="_blank" class="social-icon-links-gray instagram"></a
                                            ><a :href="job.company.social.twitter" target="_blank" class="social-icon-links-gray twitter"></a
                                            ><a :href="job.company.social.linkedin" target="_blank" class="social-icon-links-gray linkedin"></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="apply-button-with-hover full-button w-inline-block">
                                    <div>View Company Profile</div>
                                    <div class="icon">chevron_right</div>
                                </a>
                            </div> -->
                        </div>
                        <div class="main-block" data-aos="fade-left" data-aos-delay="200">
                            <div class="job-rich-text w-richtext">
                                <h4>{{ t('jobDetail.description.title') }}</h4>
                                <p v-for="(paragraph, index) in job.description.split('\n\n')" :key="index">
                                    {{ paragraph }}
                                </p>
                                <h4>{{ t('jobDetail.description.responsibilities') }}</h4>
                                <!-- <ul role="list"> -->
                                    <p v-for="(responsibility, index) in job.responsibilities" :key="index">
                                        <img src="/images/Bg_Vector.png" loading="lazy" alt="" class="image-24px my-0 mr-2" /> {{ responsibility }}
                                    </p>
                                <!-- </ul> -->
                                <h4>{{ t('jobDetail.description.requiredSkills') }}</h4>
                                <!-- <ul role="list"> -->
                                    <p v-for="(skill, index) in job.skills" :key="index">
                                        <img src="/images/Bg_Vector.png" loading="lazy" alt="" class="image-24px my-0 mr-2" /> {{ skill }}
                                    </p>
                                <!-- </ul> -->
                                <h4>{{ t('jobDetail.description.benefits') }}</h4>
                                <!-- <ul role="list"> -->
                                    <p v-for="(benefit, index) in job.benefits" :key="index">
                                        <img src="/images/Bg_Vector.png" loading="lazy" alt="" class="image-24px my-0 mr-2" /> {{ benefit }}
                                    </p>
                                <!-- </ul> -->
                            </div>
                            <div class="blur-div-470px-size right-middle"></div>
                        </div>
                    </div>
                    <div class="blur-div-470px-size"></div>
                    <div class="blur-div-470px-size bottom-left"></div>
                    <div class="blur-div-470px-size right-middle"></div>
                </div>
            </section>
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { onMounted } from 'vue';
import { ref } from 'vue';
import { useI18n } from 'vue-i18n';
import { Head } from '@inertiajs/vue3';

const { t } = useI18n();
const props = defineProps<{ job: any }>();
const job = ref(props.job);

onMounted(() => {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false,
    });
});
</script>

<style scoped>
@import '@css/main.css';
.my-0 {
    margin-top: 0px !important;
    margin-bottom: 0px !important;
}
</style>
