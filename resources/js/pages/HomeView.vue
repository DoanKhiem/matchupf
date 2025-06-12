<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { onMounted } from 'vue';
import { useI18n } from 'vue-i18n';
import Categories from './home/Categories.vue';
import Jobs from './home/Jobs.vue';
import News from './home/News.vue';

const { t } = useI18n();

interface Category {
    id: number;
    title: string;
    description: string;
    jobs_count: number;
}

interface Job {
    id: number;
    title: string;
    location: string;
    salary: string;
    type: 'full_time' | 'part_time';
    work_type: 'remote' | 'in_house';
}

interface Blog {
    id: number;
    title: string;
    image: string;
    slug: string;
}

defineProps<{
    categories: Category[];
    jobs: Job[];
    blogs: Blog[];
}>();

onMounted(() => {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false,
    });
});
</script>

<template>
    <AppLayout>

        <Head title="Home" />
        <section data-w-id="2d078ec3-5ddf-3dd2-d4c8-7b67748eb155" class="hero-section">
            <div class="container">
                <div class="_2-column-block">
                    <div data-aos="fade-right" data-aos-delay="100" class="hero-contents">
                        <div class="margin-bottom-10px">
                            <div class="_20px-title-secondary">{{ t('home.hero.subtitle') }}</div>
                        </div>
                        <h1 class="heading black">{{ t('home.hero.title') }}</h1>
                        <div class="find-job-form-wrapper">
                            <div class="job-form-block">
                                <form action="/search" class="job-form-wrapper w-form">
                                    <div class="full-width">
                                        <label for="field" class="_14px-500">{{ t('home.hero.search.label') }}</label>
                                        <input class="job-search-field w-input" maxlength="256" name="query"
                                            :placeholder="t('home.hero.search.placeholder')" type="search" id="search-2"
                                            required />
                                    </div>
                                    <input type="submit" class="job-search-absolute-button w-button"
                                        :value="t('home.hero.search.button')" />
                                </form>
                            </div>
                            <div class="pink-blur-block"></div>
                        </div>
                        <div class="margin-left-25px">
                            <div class="w-layout-hflex text-merge _12px-gap" style="
                                    opacity: 1;
                                    transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style: preserve-3d;
                                ">
                                <div class="_16px-500 black">{{ t('home.hero.search.popular') }}</div>
                                <p class="neutral-100">{{ t('home.hero.search.popularJobs') }}</p>
                            </div>
                        </div>
                        <div data-w-id="5456d97f-c42d-2653-f8f6-615f9178405b" class="logo-slider-wrapper">
                            <div style="
                                    transform: translate3d(-28.4154%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                        skew(0deg, 0deg);
                                    transform-style: preserve-3d;
                                    will-change: transform;
                                " class="logo-container">
                                <img src="/images/Frame.svg" loading="lazy" alt="" class="logo-image" /><img
                                    src="/images/logo-5.svg" loading="lazy" alt="" class="logo-image" /><img
                                    src="/images/logo-77.svg" loading="lazy" alt="" class="logo-image" /><img
                                    src="/images/logo-74.svg" loading="lazy" alt="" class="logo-image" /><img
                                    src="/images/logo-4.svg" loading="lazy" alt="" class="logo-image" /><img
                                    src="/images/logo-4.svg" loading="lazy" alt="" class="logo-image" /><img
                                    src="/images/logo-5.svg" loading="lazy" alt="" class="logo-image" /><img
                                    src="/images/logo-77.svg" loading="lazy" alt="" class="logo-image" />
                            </div>
                        </div>
                        <div class="blur-div-470px-size"></div>
                    </div>
                    <div data-aos="fade-left" data-aos-delay="200" class="image-wrapper-40">
                        <img src="/images/banner.jpg" loading="lazy"
                            sizes="(max-width: 479px) 93vw, (max-width: 991px) 95vw, 39vw" alt="" class="hero-image"
                            style="border-radius: 20px;" />
                        <!-- <div
                            data-w-id="f9e01134-9500-fcd2-017e-10e2a476cf65"
                            class="w-layout-hflex floating-card top-left"
                        >
                            <img src="/images/icon.png" loading="lazy" alt="" class="image-50px" />
                            <div class="w-layout-vflex">
                                <h5 class="heading">30 +</h5>
                                <p class="_14px-500">Daily Job Post</p>
                            </div>
                        </div>
                        <div
                            data-w-id="7603802c-4780-245c-99c4-f7fdc89ff8c8"
                            class="w-layout-hflex floating-card bottom-right"
                        >
                            <img src="/images/icon(1).png" loading="lazy" alt="" class="image-50px" />
                            <div class="w-layout-vflex">
                                <h5 class="heading">250k +</h5>
                                <p class="_14px-500">Daily Active users</p>
                            </div>
                        </div>
                        <div
                            data-w-id="234285d1-2181-ca9d-640b-821702c79ec7"
                            class="w-layout-hflex floating-card bottom-left"
                        >
                            <img src="/images/icon(2).png" loading="lazy" alt="" class="image-50px" />
                            <div class="w-layout-vflex">
                                <h5 class="heading">12k +</h5>
                                <p class="_14px-500">Open Job Positions</p>
                            </div>
                        </div>
                        <div
                            data-w-id="789e92cf-4119-e257-814f-0b3eaa68cf9a"
                            class="w-layout-hflex floating-card top-right"
                        >
                        <img src="/images/Group129.png" loading="lazy" alt="" class="image-height-85px" />
                            <div class="w-layout-vflex">
                                <h5 class="heading">500 +</h5>
                                <p class="_14px-500">5 Star Reviews</p>
                                <div class="rating-wrapper-with-margin-both-sides">
                                    <div class="rating-icon"></div>
                                    <div class="rating-icon"></div>
                                    <div class="rating-icon"></div>
                                    <div class="rating-icon"></div>
                                    <div class="rating-icon"></div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="hero-bg" ></div>
                        <div class="hero-bg-bottom-right" ></div> -->
                    </div>
                </div>
            </div>
            <div class="blur-div-470px-size top-right"></div>
            <div class="pink-blur-block top-right"></div>
        </section>

        <div class="page-wrapper">
            <Categories :categories="categories" />
            <Jobs :jobs="jobs" />

            <!-- <section class="primary-bg-section">
                <div class="container">
                    <div data-aos="fade-up" class="title-wrapper">
                        <div class="mask">
                            <h2
                                style="
                                    opacity: 1;
                                    transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style: preserve-3d;
                                "
                                class="white-heading"
                            >
                                How Job TNC&nbsp;Works
                            </h2>
                        </div>
                        <div class="mask">
                            <p
                                style="
                                    opacity: 1;
                                    transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style: preserve-3d;
                                "
                                class="_16px-500-neutral-50"
                            >
                                Discover how our platform connects employers with talented candidates through intuitive job postings and seamless
                                hiring processes.
                            </p>
                        </div>
                    </div>
                    <div
                        style="
                            opacity: 1;
                            transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                        "
                        class="_50-block"
                    ></div>
                    <div
                        style="
                            opacity: 1;
                            transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                        "
                        class="_4-column-grid"
                    >
                        <div class="how-it-works-card">
                            <div class="svg-wrapper-job">
                                <img src="/images/Vector.png" loading="lazy" alt="" class="image-24px" />
                            </div>
                            <div class="margin-top-30px">
                                <h6 class="white-heading primary-50">Register your Account</h6>
                            </div>
                            <p class="white-0-8">Sign up now to access features and stay connected with our community.</p>
                        </div>
                        <div class="how-it-works-card">
                            <div class="svg-wrapper-job">
                                <img src="/images/Vector-1.png" loading="lazy" alt="" class="image-24px" />
                            </div>
                            <div class="margin-top-30px">
                                <h6 class="white-heading primary-50">Upload your CV</h6>
                            </div>
                            <p class="white-0-8">Submit your resume to explore opportunities and connect with employers.</p>
                        </div>
                        <div class="how-it-works-card">
                            <div class="svg-wrapper-job">
                                <img src="/images/Vector-2.png" loading="lazy" alt="" class="image-24px" />
                            </div>
                            <div class="margin-top-30px">
                                <h6 class="white-heading primary-50">Apply for Job</h6>
                            </div>
                            <p class="white-0-8">Take the next step in career by submitting application for job opportunities.</p>
                        </div>
                        <div class="how-it-works-card">
                            <div class="svg-wrapper-job">
                                <img src="/images/Vector-3.png" loading="lazy" alt="" class="image-24px" />
                            </div>
                            <div class="margin-top-30px">
                                <h6 class="white-heading primary-50">Or Hire</h6>
                            </div>
                            <p class="white-0-8">Find the perfect candidate to meet your organization's needs and drive your success.</p>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="section">
                <div class="container">
                    <div data-aos="fade-up" class="_2-column-block _100px-gap">
                        <div class="image-wrapper-46">
                            <div class="rotate-image">
                                <img src="/images/banner-2.png" loading="lazy"
                                    sizes="(max-width: 479px) 93vw, (max-width: 991px) 95vw, 43vw" alt=""
                                    class="man-image" style="border-radius: 20px;" />
                                <!-- <div class="absolute-banner-bg"></div> -->
                            </div>
                            <!-- <img
                                src="/images/MaskGroup.png"
                                loading="lazy"
                                alt=""
                                class="_200px-absolute-image"
                                /> -->
                            <!-- <div class="floating-card-man">
                                <img src="/images/text1.svg" loading="lazy" alt="" class="image-50px" />
                                <h6 class="heading">Cutting-Edge Job <br />Matching Technology</h6>
                            </div>
                            <div class="floating-card-vertical" >
                                <img src="/images/process1.svg" loading="lazy" alt="" class="image-50px" />
                                <h6 class="heading">Cutting-Edge Job <br />Matching Technology</h6>
                            </div> -->
                            <div class="man-image-bg"></div>
                            <div class="blur-div-470px-size bottom-right"></div>
                        </div>
                        <div class="contents">
                            <div class="margin-bottom-20px">
                                <div class="_24px-title-secondary">{{ t('home.join.subtitle') }}</div>
                            </div>
                            <h2 class="heading">{{ t('home.join.title') }}</h2>
                            <p class="margin-55px">{{ t('home.join.description') }}</p>
                            <a href="/contact" class="primary-button w-inline-block">
                                <div class="button-text-wrapper">
                                    <div class="default-text">{{ t('home.join.button') }}</div>
                                    <div class="hover-text">{{ t('home.join.button') }}</div>
                                </div>
                                <div class="icon-18px">chevron_right</div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="section">
                <div class="container">
                    <div data-aos="fade-up" class="title-wrapper _10px">
                        <div class="_24px-title-secondary">Success Stories</div>
                        <h2 class="heading">Hear What Our Users <br />Have to Say!</h2>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="100" class="testimonial-slider-3-col">
                        <div class="mask-31 w-slider-mask" id="w-slider-mask-1">
                            <div
                                class="margin-right-30px w-slide"
                                aria-label="1 of 6"
                                role="group"
                                aria-hidden="true"
                                style="transition: all; opacity: 1"
                            >
                                <div class="testiimonial-wrapper" aria-hidden="true">
                                    <div class="testimonial-card-med" aria-hidden="true">
                                        <div class="_20px-500" aria-hidden="true">Excellent User Support</div>
                                        <p class="_16px-500" aria-hidden="true">
                                            The platform's robust search filters and real-time updates make job hunting seamless, ensuring users find
                                            relevant opportunities quickly and efficiently.
                                        </p>
                                        <div class="star-wrapper-margin-top-18px" aria-hidden="true">
                                            <div class="star-icofont" aria-hidden="true"></div>
                                            <div class="star-icofont" aria-hidden="true"></div>
                                            <div class="star-icofont" aria-hidden="true"></div>
                                            <div class="star-icofont" aria-hidden="true"></div>
                                            <div class="star-icofont" aria-hidden="true"></div>
                                        </div>
                                        <div class="polygon-arrow" aria-hidden="true"></div>
                                    </div>
                                    <div class="testimonial-author-block" aria-hidden="true">
                                        <img
                                            width="70"
                                            sizes="40px"
                                            alt=""
                                            src="/images/Ellipse21.webp"
                                            loading="lazy"
                                            class="testimonial-author"
                                            aria-hidden="true"
                                        />
                                        <div aria-hidden="true">
                                            <div class="_16px-500 _0-8-opacity" aria-hidden="true">Cameron Williamson</div>
                                            <div class="margin-top-2px" aria-hidden="true">
                                                <div class="_14px-text" aria-hidden="true">UI Designer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="margin-right-30px w-slide"
                                aria-label="2 of 6"
                                role="group"
                                style="transition: all; opacity: 1"
                            >
                                <div class="testiimonial-wrapper">
                                    <div class="testimonial-card-med" style="background-color: rgb(255, 255, 255)">
                                        <div class="_20px-500" style="color: rgb(4, 8, 27)">User-Friendly Job Finder</div>
                                        <p class="_16px-500" style="color: rgb(87, 90, 102)">
                                            Job TNC's customer service is top-notch. The responsive support team assists users promptly, queries and
                                            providing guidance throughout search process.
                                        </p>
                                        <div class="star-wrapper-margin-top-18px">
                                            <div class="star-icofont"></div>
                                            <div class="star-icofont"></div>
                                            <div class="star-icofont"></div>
                                            <div class="star-icofont"></div>
                                            <div class="star-icofont"></div>
                                        </div>
                                        <div class="polygon-arrow" style="background-color: rgb(255, 255, 255)"></div>
                                    </div>
                                    <div class="testimonial-author-block">
                                        <img width="70" loading="lazy" alt="" src="/images/Ellipse21.png" class="testimonial-author" />
                                        <div>
                                            <div class="_16px-500 _0-8-opacity">Jenny Wilson</div>
                                            <div class="margin-top-2px">
                                                <div class="_14px-text">UI Designer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="margin-right-30px w-slide"
                                aria-label="3 of 6"
                                role="group"
                                aria-hidden="true"
                                style="transition: all; opacity: 1"
                            >
                                <div class="testiimonial-wrapper" aria-hidden="true">
                                    <div class="testimonial-card-med" aria-hidden="true" style="background-color: rgb(255, 255, 255)">
                                        <div class="_20px-500" aria-hidden="true" style="color: rgb(4, 8, 27)">Exceptional Job Matching Service</div>
                                        <p class="_16px-500" aria-hidden="true" style="color: rgb(87, 90, 102)">
                                            Job TNC excels at matching users with suitable positions. The platform's algorithm considers user
                                            qualifications delivering highly relevant job suggestions.
                                        </p>
                                        <div class="star-wrapper-margin-top-18px" aria-hidden="true">
                                            <div class="star-icofont" aria-hidden="true"></div>
                                            <div class="star-icofont" aria-hidden="true"></div>
                                            <div class="star-icofont" aria-hidden="true"></div>
                                            <div class="star-icofont" aria-hidden="true"></div>
                                            <div class="star-icofont" aria-hidden="true"></div>
                                        </div>
                                        <div class="polygon-arrow" aria-hidden="true" style="background-color: rgb(255, 255, 255)"></div>
                                    </div>
                                    <div class="testimonial-author-block" aria-hidden="true">
                                        <img
                                            width="70"
                                            loading="lazy"
                                            alt=""
                                            src="/images/Ellipse21(1).png"
                                            class="testimonial-author"
                                            aria-hidden="true"
                                        />
                                        <div aria-hidden="true">
                                            <div class="_16px-500 _0-8-opacity" aria-hidden="true">Ronald Richards</div>
                                            <div class="margin-top-2px" aria-hidden="true">
                                                <div class="_14px-text" aria-hidden="true">UI Designer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="primary-bg-section">
                <div class="container">
                    <div data-aos="fade-up" class="title-wrapper">
                        <div class="mask">
                            <h2 class="white-heading">{{ t('home.coreValues.title') }}</h2>
                        </div>
                        <div class="mask">
                            <p class="_16px-500-neutral-50">{{ t('home.coreValues.subtitle') }}</p>
                        </div>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="100" class="testimonial-slider-3-col">
                        <div class="mask-31 w-slider-mask" id="w-slider-mask-1">
                            <div class="margin-right-30px w-slide">
                                <div class="testiimonial-wrapper">
                                    <div class="testimonial-card-med" style="padding-top: 70px;">
                                        <input type="submit" data-wait="Please wait..."
                                            class="newsletter-submit-button w-button icon-value" value="💌" />
                                        <div class="_20px-500">{{ t('home.coreValues.dedication.title') }}</div>
                                        <p class="_16px-500">{{ t('home.coreValues.dedication.description') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="margin-right-30px w-slide">
                                <div class="testiimonial-wrapper">
                                    <div class="testimonial-card-med" style="padding-top: 70px;">
                                        <input type="submit" data-wait="Please wait..."
                                            class="newsletter-submit-button w-button icon-value" value="📦" />
                                        <div class="_20px-500">{{ t('home.coreValues.development.title') }}</div>
                                        <p class="_16px-500">{{ t('home.coreValues.development.description') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="margin-right-30px w-slide">
                                <div class="testiimonial-wrapper">
                                    <div class="testimonial-card-med" style="padding-top: 70px;">
                                        <input type="submit" data-wait="Please wait..."
                                            class="newsletter-submit-button w-button icon-value" value="⚠️" />
                                        <div class="_20px-500">{{ t('home.coreValues.professionalism.title') }}</div>
                                        <p class="_16px-500">{{ t('home.coreValues.professionalism.description') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="mask-23 w-slider-mask" id="w-slider-mask-2">
                            <div
                                class="margin-right-30px w-slide"
                                aria-label="1 of 8"
                                role="group"
                                style="transition: all; transform: translateX(0px); opacity: 1"
                            >
                                <div class="team-card">
                                    <img
                                        src="/images/Rectangle13.png"
                                        loading="lazy"
                                        sizes="(max-width: 479px) 100vw, (max-width: 991px) 45vw, 22vw"
                                        alt=""
                                    />
                                    <div class="bottom-lineaer-overlay">
                                        <div>
                                            <div class="_20px-title-white">Annette Black</div>
                                            <div class="_14px-primary-100">UI Designer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="margin-right-30px w-slide"
                                aria-label="2 of 8"
                                role="group"
                                aria-hidden="true"
                                style="transition: all; transform: translateX(0px); opacity: 1"
                            >
                                <div class="team-card" aria-hidden="true">
                                    <img
                                        src="/images/Rectangle14.png"
                                        loading="lazy"
                                        sizes="(max-width: 479px) 100vw, (max-width: 991px) 45vw, 22vw"
                                        alt=""
                                        aria-hidden="true"
                                    />
                                    <div class="bottom-lineaer-overlay" aria-hidden="true">
                                        <div aria-hidden="true">
                                            <div class="_20px-title-white" aria-hidden="true">Ana Mon</div>
                                            <div class="_14px-primary-100" aria-hidden="true">UI Designer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="margin-right-30px w-slide"
                                aria-label="3 of 8"
                                role="group"
                                aria-hidden="true"
                                style="transition: all; transform: translateX(0px); opacity: 1"
                            >
                                <div class="team-card" aria-hidden="true">
                                    <img
                                        src="/images/Rectangle12.png"
                                        loading="lazy"
                                        sizes="(max-width: 479px) 100vw, (max-width: 991px) 45vw, 22vw"
                                        alt=""
                                        aria-hidden="true"
                                    />
                                    <div class="bottom-lineaer-overlay" aria-hidden="true">
                                        <div aria-hidden="true">
                                            <div class="_20px-title-white" aria-hidden="true">Darrell Steward</div>
                                            <div class="_14px-primary-100" aria-hidden="true">UI Designer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="margin-right-30px w-slide"
                                aria-label="4 of 8"
                                role="group"
                                aria-hidden="true"
                                style="transition: all; transform: translateX(0px); opacity: 1"
                            >
                                <div class="team-card" aria-hidden="true">
                                    <img
                                        src="/images/Rectangle12.png"
                                        loading="lazy"
                                        sizes="(max-width: 479px) 100vw, (max-width: 991px) 45vw, 22vw"
                                        alt=""
                                        aria-hidden="true"
                                    />
                                    <div class="bottom-lineaer-overlay" aria-hidden="true">
                                        <div aria-hidden="true">
                                            <div class="_20px-title-white" aria-hidden="true">Kristin Watson</div>
                                            <div class="_14px-primary-100" aria-hidden="true">UI Designer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>

            <News :blogs="blogs" />
        </div>
    </AppLayout>
</template>

<style scoped>
@import '@css/main.css';

.icon-value {
    inset: 14px auto 0 25px;
}
</style>
