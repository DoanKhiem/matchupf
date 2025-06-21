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
                                    <img src="/images/map-pin-line.png" loading="lazy" alt=""
                                        class="image-24px margin-top-3px" />
                                    <div class="vertical-left-top _4px-gap">
                                        <div class="_20px-500">{{ t('jobDetail.info.location') }}</div>
                                        <p class="_16px-500">{{ job.location }}</p>
                                    </div>
                                </div>
                                <div class="w-layout-hflex job-info-block">
                                    <img src="/images/time-line.png" loading="lazy" alt=""
                                        class="image-24px margin-top-3px" />
                                    <div class="vertical-left-top _4px-gap">
                                        <div class="_20px-500">{{ t('jobDetail.info.jobType') }}</div>
                                        <p class="_16px-500">{{ job.type }}</p>
                                    </div>
                                </div>
                                <div class="w-layout-hflex job-info-block">
                                    <img src="/images/money-dollar-box-line.png" loading="lazy" alt=""
                                        class="image-24px margin-top-3px" />
                                    <div class="vertical-left-top _4px-gap">
                                        <div class="_20px-500">{{ t('jobDetail.info.salaryRange') }}</div>
                                        <p class="_16px-500">{{ job.salary }}</p>
                                    </div>
                                </div>
                                <div class="w-layout-hflex job-info-block last">
                                    <img src="/images/user-line-green.png" loading="lazy" alt=""
                                        class="image-24px margin-top-3px" />
                                    <div class="vertical-left-top _4px-gap">
                                        <div class="_20px-500">{{ t('jobDetail.info.experience') }}</div>
                                        <div class="text-merge">
                                            <p class="_16px-500">{{ job.experience }}</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="primary-button full-button w-inline-block" @click="showForm = true">
                                    <div class="button-text-wrapper">
                                        <div class="default-text">{{ t('jobDetail.apply.button') }}</div>
                                        <!-- <div class="hover-text">{{ t('jobDetail.apply.button') }}</div> -->
                                    </div>
                                    <div class="icon-18px">chevron_right</div>
                                </button>
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
                                    <img src="/images/Bg_Vector.png" loading="lazy" alt=""
                                        class="image-24px my-0 mr-2" /> {{ responsibility }}
                                </p>
                                <!-- </ul> -->
                                <h4>{{ t('jobDetail.description.requiredSkills') }}</h4>
                                <!-- <ul role="list"> -->
                                <p v-for="(skill, index) in job.skills" :key="index">
                                    <img src="/images/Bg_Vector.png" loading="lazy" alt=""
                                        class="image-24px my-0 mr-2" /> {{ skill }}
                                </p>
                                <!-- </ul> -->
                                <h4>{{ t('jobDetail.description.benefits') }}</h4>
                                <!-- <ul role="list"> -->
                                <p v-for="(benefit, index) in job.benefits" :key="index">
                                    <img src="/images/Bg_Vector.png" loading="lazy" alt=""
                                        class="image-24px my-0 mr-2" /> {{ benefit }}
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
        <div :style="{ display: showForm ? 'flex' : 'none', opacity: showForm ? 1 : 0 }" class="form-fixed-wrapper">
            <div class="apply-form-wrapper w-form">
                <div class="vertical-center-align">
                    <div class="margin-bottom-12px">
                        <h2 class="heading">Ready to apply?</h2>
                    </div>
                    <div class="margin-bottom-20px">
                        <p class="primary-200">Please fill out the form below to apply for this position. We will review your application and get back to you soon.</p>
                    </div>
                </div>
                <form @submit.prevent="submitApplication" class="vertical-left-stretch">
                    <input class="apply-input-field w-input" maxlength="256" name="name" data-name="Name"
                        placeholder="Name" type="text" id="name" v-model="form.name" :required="true">
                    <div v-if="form.errors.name" class="text-red-500 text-sm mt-1">{{ form.errors.name }}</div>
                    
                    <input class="apply-input-field w-input" maxlength="256" name="email" data-name="email"
                        placeholder="Email" type="email" id="email" v-model="form.email" :required="true">
                    <div v-if="form.errors.email" class="text-red-500 text-sm mt-1">{{ form.errors.email }}</div>
                    
                    <input class="apply-input-field w-input" name="cv" data-name="cv"
                        placeholder="Upload CV" type="file" id="cv" @change="handleFileUpload" accept=".pdf,.doc,.docx" :required="true">
                    <div v-if="form.errors.cv" class="text-red-500 text-sm mt-1">{{ form.errors.cv }}</div>
                    
                    <textarea placeholder="Message" maxlength="5000" id="message" name="message" data-name="message"
                        class="apply-input-field min-height-100 w-input" v-model="form.message"></textarea>
                    <div v-if="form.errors.message" class="text-red-500 text-sm mt-1">{{ form.errors.message }}</div>
                    
                    <button type="submit" :disabled="form.processing" class="primary-button w-button">
                        {{ form.processing ? 'Submitting...' : 'Submit Application' }}
                    </button>
                </form>
                
                <!-- Success Message -->
                <div v-if="showSuccess" class="w-form-done" tabindex="-1" role="region" aria-label="Application success">
                    <div>{{ successMessage }}</div>
                </div>
                
                <!-- Error Message -->
                <div v-if="showError" class="w-form-fail" tabindex="-1" role="region" aria-label="Application failure">
                    <div>{{ errorMessage }}</div>
                </div>
                
                <div data-w-id="089958f4-c60d-d648-1d96-4d65f9081090" class="form-close-icon" @click="closeForm">
                    close</div>
            </div>
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
import { Head, useForm, usePage } from '@inertiajs/vue3';

const { t } = useI18n();
const page = usePage();
const props = defineProps<{ job: any }>();
const job = ref(props.job);
const showForm = ref(false);
const showSuccess = ref(false);
const showError = ref(false);
const successMessage = ref('');
const errorMessage = ref('');

const form = useForm({
    name: '',
    email: '',
    cv: null as File | null,
    message: ''
});

// Check for flash messages on component mount
onMounted(() => {
    const flash = page.props.flash as any;
    if (flash?.success) {
        successMessage.value = flash.success;
        showSuccess.value = true;
        setTimeout(() => {
            showSuccess.value = false;
        }, 5000);
    }
    
    if (flash?.error) {
        errorMessage.value = flash.error;
        showError.value = true;
        setTimeout(() => {
            showError.value = false;
        }, 5000);
    }

    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false,
    });
});

const handleFileUpload = (event: Event) => {
    const target = event.target as HTMLInputElement;
    if (target.files && target.files[0]) {
        form.cv = target.files[0];
    }
};

const submitApplication = () => {
    if (!form.cv) {
        errorMessage.value = 'Please select a CV file.';
        showError.value = true;
        return;
    }

    showError.value = false;
    showSuccess.value = false;

    form.post(`/job/${job.value.id}/apply`, {
        preserveScroll: true,
        onSuccess: () => {
            successMessage.value = 'Your application has been submitted successfully!';
            showSuccess.value = true;
            resetForm();
            setTimeout(() => {
                showForm.value = false;
                showSuccess.value = false;
            }, 3000);
        },
        onError: (errors) => {
            // Validation errors will be automatically displayed in the form
            // Only show generic error if no specific validation errors
            if (!Object.keys(errors).length) {
                errorMessage.value = 'An error occurred while submitting your application.';
                showError.value = true;
            }
        },
    });
};

const resetForm = () => {
    form.reset();
    // Reset file input
    const fileInput = document.getElementById('cv') as HTMLInputElement;
    if (fileInput) {
        fileInput.value = '';
    }
};

const closeForm = () => {
    showForm.value = false;
    showSuccess.value = false;
    showError.value = false;
    resetForm();
};
</script>

<style scoped>
@import '@css/main.css';

.my-0 {
    margin-top: 0px !important;
    margin-bottom: 0px !important;
}

.w-form-done {
    display: block !important;
    background-color: #d4edda;
    color: #155724;
    padding: 15px;
    border-radius: 5px;
    margin-top: 15px;
}

.w-form-fail {
    display: block !important;
    background-color: #f8d7da;
    color: #721c24;
    padding: 15px;
    border-radius: 5px;
    margin-top: 15px;
}
</style>
