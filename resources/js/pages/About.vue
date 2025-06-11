<template>
    <AppLayout>
        <Head :title="t('about.title')" />
        <section id="hero" class="main-banner">
            <div class="container">
                <div class="breadcrumb-block">
                    <h1 class="_30px-title-white">{{ t('about.title') }}</h1>
                    <div class="text-merge">
                        <a href="/" class="breadcrumb">{{ t('about.breadcrumb.home') }}</a>
                        <div class="breadcrumb">/</div>
                        <div class="breadcrumb">{{ t('about.breadcrumb.about') }}</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="page-wrapper">
            <section class="section">
                <div class="container">
                    <div class="_2-column-block">
                        <div class="double-image-wrapper-15px-gap">
                            <div class="w-layout-vflex _49">
                                <img
                                    src="https://cdn.prod.website-files.com/6645e067437815581429586a/66474e56efc5ddbc7c8076be_Rectangle%20259.png"
                                    loading="lazy"
                                    style="
                                        opacity: 1;
                                        transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                            skew(0deg, 0deg);
                                        transform-style: preserve-3d;
                                    "
                                    data-w-id="b2774d72-5169-0c2b-dd9c-c7511d2af25d"
                                    alt=""
                                    class="_370px-image"
                                />
                                <div
                                    data-w-id="56e9233a-57b4-34cd-eba9-56cf6e856d39"
                                    style="
                                        opacity: 1;
                                        transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                            skew(0deg, 0deg);
                                        transform-style: preserve-3d;
                                    "
                                    class="image-between-block"
                                >
                                    <div class="w-layout-vflex vertical-center-align">
                                        <div class="_30px-title">100k</div>
                                        <p class="_16px-500">Daily active users</p>
                                    </div>
                                    <div class="_84px-height-divider"></div>
                                    <div class="w-layout-vflex vertical-center-align">
                                        <div class="_30px-title">5k</div>
                                        <p class="_16px-500">Open Job Positions</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-layout-vflex _49">
                                <div
                                    data-w-id="682a634f-0aa6-e4c7-45b6-364bf0aed6a1"
                                    style="
                                        opacity: 1;
                                        transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                            skew(0deg, 0deg);
                                        transform-style: preserve-3d;
                                    "
                                    class="w-layout-vflex image-floating-banner multiimages-block"
                                >
                                    <img
                                        src="https://cdn.prod.website-files.com/6645e067437815581429586a/6694daf8ea2e0e33ac6a7558_Group%20130%20(2).png"
                                        loading="lazy"
                                        alt=""
                                        class="image-158px"
                                    />
                                    <div class="_20px-title-neutral-300">Expert Candidate</div>
                                </div>
                                <img
                                    class="_370px-image"
                                    src="https://cdn.prod.website-files.com/6645e067437815581429586a/66474e5f1a91bfa7e1e1dee4_Rectangle%20260.png"
                                    alt=""
                                    style="
                                        opacity: 1;
                                        transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                            skew(0deg, 0deg);
                                        transform-style: preserve-3d;
                                    "
                                    sizes="(max-width: 479px) 100vw, (max-width: 991px) 46vw, (max-width: 1279px) 30vw, 370px"
                                    data-w-id="b2774d72-5169-0c2b-dd9c-c7511d2af25c"
                                    loading="lazy"
                                    srcset="
                                        https://cdn.prod.website-files.com/6645e067437815581429586a/66474e5f1a91bfa7e1e1dee4_Rectangle%20260-p-500.png 500w,
                                        https://cdn.prod.website-files.com/6645e067437815581429586a/66474e5f1a91bfa7e1e1dee4_Rectangle%20260.png       680w
                                    "
                                />
                            </div>
                            <div class="blur-div-470px-size"></div>
                        </div>
                        <div class="contents">
                            <div class="margin-bottom-6px">
                                <div class="_20px-title-secondary">{{ t('about.hero.title') }}</div>
                            </div>
                            <h2 class="heading">{{ t('about.hero.subtitle') }}</h2>
                            <div class="margin-top-40px-bottom-50px">
                                <p>{{ t('about.hero.description') }}</p>
                            </div>
                            <h2 class="heading">{{ t('about.contact.title') }}</h2>
                            <div class="margin-top-40px-bottom-50px">
                                <p>
                                    <b>{{ t('about.contact.company') }}</b><br />
                                    {{ t('about.contact.address') }}<br />
                                    {{ t('about.contact.phone') }}<br />
                                    {{ t('about.contact.email') }}<br />
                                    {{ t('about.contact.website') }}
                                </p>
                            </div>
                            <a data-w-id="6bcc436e-f391-e4e1-1e4d-674835ea7bde" href="/contact" class="primary-button w-inline-block">
                                <div class="button-text-wrapper">
                                    <div class="default-text">{{ t('about.contact.button') }}</div>
                                    <div class="hover-text">{{ t('about.contact.button') }}</div>
                                </div>
                                <div class="icon-18px">chevron_right</div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="container">
                    <div class="_2-column-block">
                        <div class="contents-40">
                            <div class="margin-bottom-6px">
                                <div class="_20px-title-secondary">{{ t('about.mission.title') }}</div>
                            </div>
                            <div class="margin-top-40px">
                                <p>
                                    <b>{{ t('about.mission.mission.title') }}</b><br />
                                    {{ t('about.mission.mission.description') }}<br /><br />
                                    <b>{{ t('about.mission.vision.title') }}</b><br />
                                    {{ t('about.mission.vision.description') }}
                                </p>
                            </div>
                        </div>
                        <div
                            data-w-id="8d5e61e2-d32c-96c3-8eec-7d2e18ce9104"
                            style="
                                opacity: 1;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            "
                            class="image-wrapper-50"
                        >
                            <img
                                src="https://cdn.prod.website-files.com/6645e067437815581429586a/66475232eec3374f657c759b_Rectangle%20261.png"
                                loading="lazy"
                                sizes="(max-width: 479px) 94vw, (max-width: 767px) 95vw, (max-width: 991px) 96vw, 48vw"
                                srcset="
                                    https://cdn.prod.website-files.com/6645e067437815581429586a/66475232eec3374f657c759b_Rectangle%20261-p-500.png   500w,
                                    https://cdn.prod.website-files.com/6645e067437815581429586a/66475232eec3374f657c759b_Rectangle%20261-p-800.png   800w,
                                    https://cdn.prod.website-files.com/6645e067437815581429586a/66475232eec3374f657c759b_Rectangle%20261-p-1080.png 1080w,
                                    https://cdn.prod.website-files.com/6645e067437815581429586a/66475232eec3374f657c759b_Rectangle%20261.png        1124w
                                "
                                alt=""
                            />
                            <div
                                data-w-id="82397a2f-c62b-77e9-63c1-65622c878974"
                                class="about-floating-card"
                                style="
                                    will-change: transform;
                                    transform: translate3d(0px, -0.1px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                        skew(0deg, 0deg);
                                    transform-style: preserve-3d;
                                "
                            >
                                <img
                                    src="https://cdn.prod.website-files.com/6645e067437815581429586a/664ae4fcbe13f14e04599298_promotion%20(1)%201.png"
                                    loading="lazy"
                                    alt=""
                                    class="image-67px"
                                />
                                <div class="_20px-title-primary">Big Career <br />Opportunities</div>
                            </div>
                        </div>
                    </div>
                    <div class="blur-div-470px-size top-right"></div>
                    <div class="blur-div-470px-size bottom-left"></div>
                    <img
                        src="https://cdn.prod.website-files.com/6645e067437815581429586a/6694ddcbe94e44b491b3855f_Star%2016.svg"
                        loading="lazy"
                        style="
                            transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(360deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                            will-change: transform;
                        "
                        data-w-id="c13f6e02-6d00-0900-9757-545f8c5b152d"
                        alt=""
                        class="image-120px-absolute-left-30"
                    /><img
                        src="https://cdn.prod.website-files.com/6645e067437815581429586a/6694de522516d055fe87768e_Polygon%202.svg"
                        loading="lazy"
                        style="
                            transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(360deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                            will-change: transform;
                        "
                        data-w-id="9405f8bb-1a33-2326-1f8f-a8822ff8ecf2"
                        alt=""
                        class="image-84px-absolute-left--1"
                    />
                </div>
            </section>
            <section class="section">
                <div class="container">
                    <div class="_2-column-block">
                        <div class="contents-40">
                            <div class="margin-bottom-6px">
                                <div class="_20px-title-secondary">{{ t('about.values.title') }}</div>
                            </div>
                            <div class="margin-top-40px">
                                <p>
                                    <b>{{ t('about.values.responsibility.title') }}</b><br />
                                    {{ t('about.values.responsibility.description') }}<br /><br />
                                    <b>{{ t('about.values.creative.title') }}</b><br />
                                    {{ t('about.values.creative.description') }}<br /><br />
                                    <b>{{ t('about.values.connect.title') }}</b><br />
                                    {{ t('about.values.connect.description') }}
                                </p>
                            </div>
                        </div>
                        <div
                            data-w-id="8d5e61e2-d32c-96c3-8eec-7d2e18ce9104"
                            style="
                                opacity: 1;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            "
                            class="image-wrapper-50"
                        >
                            <img
                                src="https://cdn.prod.website-files.com/6645e067437815581429586a/66475232eec3374f657c759b_Rectangle%20261.png"
                                loading="lazy"
                                sizes="(max-width: 479px) 94vw, (max-width: 767px) 95vw, (max-width: 991px) 96vw, 48vw"
                                srcset="
                                    https://cdn.prod.website-files.com/6645e067437815581429586a/66475232eec3374f657c759b_Rectangle%20261-p-500.png   500w,
                                    https://cdn.prod.website-files.com/6645e067437815581429586a/66475232eec3374f657c759b_Rectangle%20261-p-800.png   800w,
                                    https://cdn.prod.website-files.com/6645e067437815581429586a/66475232eec3374f657c759b_Rectangle%20261-p-1080.png 1080w,
                                    https://cdn.prod.website-files.com/6645e067437815581429586a/66475232eec3374f657c759b_Rectangle%20261.png        1124w
                                "
                                alt=""
                            />
                            <div
                                data-w-id="82397a2f-c62b-77e9-63c1-65622c878974"
                                class="about-floating-card"
                                style="
                                    will-change: transform;
                                    transform: translate3d(0px, -0.1px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                        skew(0deg, 0deg);
                                    transform-style: preserve-3d;
                                "
                            >
                                <img
                                    src="https://cdn.prod.website-files.com/6645e067437815581429586a/664ae4fcbe13f14e04599298_promotion%20(1)%201.png"
                                    loading="lazy"
                                    alt=""
                                    class="image-67px"
                                />
                                <div class="_20px-title-primary">Big Career <br />Opportunities</div>
                            </div>
                        </div>
                    </div>
                    <div class="blur-div-470px-size top-right"></div>
                    <div class="blur-div-470px-size bottom-left"></div>
                    <img
                        src="https://cdn.prod.website-files.com/6645e067437815581429586a/6694ddcbe94e44b491b3855f_Star%2016.svg"
                        loading="lazy"
                        style="
                            transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(360deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                            will-change: transform;
                        "
                        data-w-id="c13f6e02-6d00-0900-9757-545f8c5b152d"
                        alt=""
                        class="image-120px-absolute-left-30"
                    /><img
                        src="https://cdn.prod.website-files.com/6645e067437815581429586a/6694de522516d055fe87768e_Polygon%202.svg"
                        loading="lazy"
                        style="
                            transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(360deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                            will-change: transform;
                        "
                        data-w-id="9405f8bb-1a33-2326-1f8f-a8822ff8ecf2"
                        alt=""
                        class="image-84px-absolute-left--1"
                    />
                </div>
            </section>
            
            
           
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';
import { useI18n } from 'vue-i18n';
import AOS from 'aos';
import 'aos/dist/aos.css';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
import { computed, onMounted } from 'vue';

const { t } = useI18n();

interface Blog {
    id: number;
    title: string;
    img: string;
    desc: string;
    slug: string;
    created_at: string;
}

interface PopularBlog {
    id: number;
    title: string;
    image: string;
    slug: string;
}

const page = usePage();
const blogs = computed<Blog[]>(() => (page.props.blogs as Blog[]) || []);
const popularBlogs = computed<PopularBlog[]>(() => (page.props.popularBlogs as PopularBlog[]) || []);

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

.w-slider-dot {
    background: #e6e6e8;
}
.w-slider-dot.w-active {
    background: var(--1-main-colors--secondary);
}
</style>
