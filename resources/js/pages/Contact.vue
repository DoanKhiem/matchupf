<template>
    <AppLayout>
        <Head title="Contact" />
        <section id="hero" class="main-banner">
            <div class="container">
                <div class="breadcrumb-block left-align-block">
                    <h1 class="_30px-title-white">Contact us</h1>
                    <div class="text-merge"><a href="/" class="breadcrumb">Home</a>
                        <div class="breadcrumb">/</div>
                        <div class="breadcrumb">Contact us</div>
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
                        <h2 class="_48px-title">We're Here to Help!</h2>
                        <p>Bold ellipse plugin list flatten. Plugin frame figjam component share variant figjam. Device
                            horizontal auto draft ellipse outline pen fill. Main polygon vector prototype layer. Polygon
                            variant create line editor selection.</p>
                        <div class="w-layout-vflex contact-info-block-wrapper">
                            <div class="w-layout-hflex icon-block">
                                <div class="contact-icon-wrapper-40px">
                                    <div>fmd_good</div>
                                </div>
                                <div class="w-layout-vflex _2px-gap">
                                    <div class="_20px-title">Admissions Office:</div>
                                    <p>68 Nguyen Hue, Ben Nghe Ward, District 1, Ho Chi Minh City, Vietnam.</p>
                                </div>
                            </div>
                            <div class="w-layout-hflex icon-block">
                                <div class="contact-icon-wrapper-40px">
                                    <div>local_phone</div>
                                </div>
                                <div class="w-layout-vflex _2px-gap">
                                    <div class="_20px-title">Contact</div>
                                    <p>0703066003</p>
                                </div>
                            </div>
                            <div class="w-layout-hflex icon-block">
                                <div class="contact-icon-wrapper-40px">
                                    <div>mail_outline</div>
                                </div>
                                <div class="w-layout-vflex _2px-gap">
                                    <div class="_20px-title">Email:</div>
                                    <p>matchupfast@matchupf.com</p>
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
                                <div class="_38px-title">Get in touch</div>
                                <p>List team variant line style shadow bullet prototype image connection follower.</p>
                            </div>
                            <div class="w-layout-hflex field-inputs-wrapper">
                                <div class="w-layout-vflex full-width"><label for="name"
                                        class="input-label">Name</label><input class="contact-input-field w-input"
                                        maxlength="256" name="First-Name" data-name="First Name" placeholder="your name"
                                        type="text" id="name" required=""></div>
                                <div class="w-layout-vflex full-width"><label for="Email"
                                        class="input-label">Email</label><input class="contact-input-field w-input"
                                        maxlength="256" name="Email" data-name="Email" placeholder="your email"
                                        type="email" id="Email" required=""></div>
                            </div>
                            <div class="w-layout-hflex field-inputs-wrapper">
                                <div class="w-layout-vflex full-width"><label for="phone"
                                        class="input-label">Phone</label><input class="contact-input-field w-input"
                                        maxlength="256" name="phone" data-name="phone" placeholder="your phone"
                                        type="tel" id="phone" required=""></div>
                                <div class="w-layout-vflex full-width"><label for="Subject"
                                        class="input-label">Subject</label><input class="contact-input-field w-input"
                                        maxlength="256" name="Subject" data-name="Subject" placeholder="subject"
                                        type="text" id="Subject"></div>
                            </div><textarea id="Message-8" name="Message" maxlength="5000" data-name="Message"
                                placeholder="your message"
                                class="contact-input-field text-area w-input"></textarea><input type="submit"
                                data-wait="Messege Sending" class="submit-button w-button" value="Submit Message">
                        </form>
                        <div class="success-message w-form-done" tabindex="-1" role="region"
                            aria-label="contact form success">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="error-message w-form-fail" tabindex="-1" role="region"
                            aria-label="contact form failure">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>

<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';
import AOS from 'aos';
import 'aos/dist/aos.css';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
import { A11y, Navigation, Pagination, Scrollbar } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { computed, onMounted } from 'vue';

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

/* Chỉnh vị trí nút */
/* .swiper-button-next {
    right: 0px;
}

.swiper-button-prev {
    left: 0px;
} */
</style>
