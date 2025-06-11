<template>
    <AppLayout>
        <Head :title="t('contact.title')" />
        <section id="hero" class="main-banner">
            <div class="container">
                <div class="breadcrumb-block left-align-block">
                    <h1 class="_30px-title-white">{{ t('contact.title') }}</h1>
                    <div class="text-merge">
                        <a href="/" class="breadcrumb">{{ t('contact.breadcrumb.home') }}</a>
                        <div class="breadcrumb">/</div>
                        <div class="breadcrumb">{{ t('contact.breadcrumb.contact') }}</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="negative-section">
            <div class="container">
                <div class="_2-column-block">
                    <div data-w-id="c1228b0b-6967-9fbf-31c4-dfefec73c3a5"
                        style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                        class="contact-contents">
                        <h2 class="_48px-title">{{ t('contact.hero.title') }}</h2>
                        <p>{{ t('contact.hero.description') }}</p>
                        <div class="w-layout-vflex contact-info-block-wrapper">
                            <div class="w-layout-hflex icon-block">
                                <div class="contact-icon-wrapper-40px">
                                    <div>fmd_good</div>
                                </div>
                                <div class="w-layout-vflex _2px-gap">
                                    <div class="_20px-title">{{ t('contact.info.admissions.title') }}</div>
                                    <p>{{ t('contact.info.admissions.address') }}</p>
                                </div>
                            </div>
                            <div class="w-layout-hflex icon-block">
                                <div class="contact-icon-wrapper-40px">
                                    <div>local_phone</div>
                                </div>
                                <div class="w-layout-vflex _2px-gap">
                                    <div class="_20px-title">{{ t('contact.info.contact.title') }}</div>
                                    <p>{{ t('contact.info.contact.phone') }}</p>
                                </div>
                            </div>
                            <div class="w-layout-hflex icon-block">
                                <div class="contact-icon-wrapper-40px">
                                    <div>mail_outline</div>
                                </div>
                                <div class="w-layout-vflex _2px-gap">
                                    <div class="_20px-title">{{ t('contact.info.email.title') }}</div>
                                    <p>{{ t('contact.info.email.address') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="c1228b0b-6967-9fbf-31c4-dfefec73c3c8"
                        style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                        class="_50-width-block max-width-645px w-form">
                        <form id="wf-form-contact-form" name="wf-form-contact-form" data-name="contact form"
                            method="get" class="cotnact-form" data-wf-page-id="6645e06843781558142958fb"
                            data-wf-element-id="c1228b0b-6967-9fbf-31c4-dfefec73c3c9" aria-label="contact form">
                            <div class="vertical-left-top _10px-gap">
                                <div class="_38px-title">{{ t('contact.form.title') }}</div>
                                <p>{{ t('contact.form.description') }}</p>
                            </div>
                            <div class="w-layout-hflex field-inputs-wrapper">
                                <div class="w-layout-vflex full-width">
                                    <label for="name" class="input-label">{{ t('contact.form.fields.name.label') }}</label>
                                    <input class="contact-input-field w-input" maxlength="256" name="First-Name"
                                        data-name="First Name" :placeholder="t('contact.form.fields.name.placeholder')"
                                        type="text" id="name" required>
                                </div>
                                <div class="w-layout-vflex full-width">
                                    <label for="Email" class="input-label">{{ t('contact.form.fields.email.label') }}</label>
                                    <input class="contact-input-field w-input" maxlength="256" name="Email"
                                        data-name="Email" :placeholder="t('contact.form.fields.email.placeholder')"
                                        type="email" id="Email" required>
                                </div>
                            </div>
                            <div class="w-layout-hflex field-inputs-wrapper">
                                <div class="w-layout-vflex full-width">
                                    <label for="phone" class="input-label">{{ t('contact.form.fields.phone.label') }}</label>
                                    <input class="contact-input-field w-input" maxlength="256" name="phone"
                                        data-name="phone" :placeholder="t('contact.form.fields.phone.placeholder')"
                                        type="tel" id="phone" required>
                                </div>
                                <div class="w-layout-vflex full-width">
                                    <label for="Subject" class="input-label">{{ t('contact.form.fields.subject.label') }}</label>
                                    <input class="contact-input-field w-input" maxlength="256" name="Subject"
                                        data-name="Subject" :placeholder="t('contact.form.fields.subject.placeholder')"
                                        type="text" id="Subject">
                                </div>
                            </div>
                            <textarea id="Message-8" name="Message" maxlength="5000" data-name="Message"
                                :placeholder="t('contact.form.fields.message.placeholder')"
                                class="contact-input-field text-area w-input"></textarea>
                            <input type="submit" :data-wait="t('contact.form.submit.sending')"
                                class="submit-button w-button" :value="t('contact.form.submit.text')">
                        </form>
                        <div class="success-message w-form-done" tabindex="-1" role="region"
                            aria-label="contact form success">
                            <div>{{ t('contact.form.messages.success') }}</div>
                        </div>
                        <div class="error-message w-form-fail" tabindex="-1" role="region"
                            aria-label="contact form failure">
                            <div>{{ t('contact.form.messages.error') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>

<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { onMounted } from 'vue';
import { useI18n } from 'vue-i18n';

const { t } = useI18n();

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
</style>

<style>
/* Custom Swiper Navigation Buttons */
.swiper {
    position: unset;
}

.swiper-button-next,
.swiper-button-prev {
    background-color: var(--primary-color, #333);
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

.swiper-button-next:after,
.swiper-button-prev:after {
    font-size: 18px;
    font-weight: bold;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
    background-color: var(--secondary-color, #555);
}
</style>
