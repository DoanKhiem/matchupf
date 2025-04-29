<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { onMounted } from "vue";
import AOS from 'aos';
import "aos/dist/aos.css";

onMounted(() => {
  AOS.init({
    duration: 800,
    easing: "ease-in-out",
    once: true,
    mirror: false,
  });
});

</script>

<template>
    <AppLayout>
    <section data-w-id="2d078ec3-5ddf-3dd2-d4c8-7b67748eb155" class="hero-section">
        <div class="container">
            <div class="_2-column-block">
                <div data-aos="fade-right" data-aos-delay="100" class="hero-contents">
                    <div class="margin-bottom-10px">
                        <div class="_20px-title-secondary">Your Path to Success Starts Here</div>
                    </div>
                    <h1 class="heading white">Discover Exciting Job Openings with Us</h1>
                    <div class="find-job-form-wrapper">
                        <div class="job-form-block">
                            <form action="/search" class="job-form-wrapper w-form">
                                <div class="full-width">
                                    <label for="field" class="_14px-500">Search your dream job</label
                                    ><input
                                        class="job-search-field w-input"
                                        maxlength="256"
                                        name="query"
                                        placeholder="Search Job"
                                        type="search"
                                        id="search-2"
                                        required
                                    />
                                </div>
                                <input type="submit" class="job-search-absolute-button w-button" value="Search" />
                            </form>
                        </div>
                        <div class="pink-blur-block"></div>
                    </div>
                    <div class="margin-left-25px">
                        <div
                            class="w-layout-hflex text-merge _12px-gap"
                            style="
                                opacity: 1;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            "
                        >
                            <div class="_16px-500 white">Popular:</div>
                            <p class="neutral-100">Digital Marketer, Web Designer</p>
                        </div>
                    </div>
                    <div data-w-id="5456d97f-c42d-2653-f8f6-615f9178405b" class="logo-slider-wrapper">
                        <div
                            style="
                                transform: translate3d(-28.4154%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                    skew(0deg, 0deg);
                                transform-style: preserve-3d;
                                will-change: transform;
                            "
                            class="logo-container"
                        >
                            <img src="/images/Frame.svg" loading="lazy" alt="" class="logo-image" /><img
                                src="/images/logo-5.svg"
                                loading="lazy"
                                alt=""
                                class="logo-image"
                            /><img src="/images/logo-77.svg" loading="lazy" alt="" class="logo-image" /><img
                                src="/images/logo-74.svg"
                                loading="lazy"
                                alt=""
                                class="logo-image"
                            /><img src="/images/logo-4.svg" loading="lazy" alt="" class="logo-image" /><img
                                src="/images/logo-4.svg"
                                loading="lazy"
                                alt=""
                                class="logo-image"
                            /><img src="/images/logo-5.svg" loading="lazy" alt="" class="logo-image" /><img
                                src="/images/logo-77.svg"
                                loading="lazy"
                                alt=""
                                class="logo-image"
                            />
                        </div>
                    </div>
                    <div class="blur-div-470px-size"></div>
                </div>
                <div data-aos="fade-left" data-aos-delay="200" class="image-wrapper-40">
                    <img
                        src="/images/Hwp1.png"
                        loading="lazy"
                        sizes="(max-width: 479px) 93vw, (max-width: 991px) 95vw, 39vw"
                        alt=""
                        class="hero-image"
                    />
                    <div
                        data-w-id="f9e01134-9500-fcd2-017e-10e2a476cf65"
                        class="w-layout-hflex floating-card top-left"
                        style="
                            opacity: 1;
                            transform: translate3d(0px, 0.15465px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                            will-change: transform;
                        "
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
                    </div>
                    <div
                        data-w-id="7603802c-4780-245c-99c4-f7fdc89ff8c8"
                        class="w-layout-hflex floating-card bottom-right"
                        style="
                            opacity: 1;
                            transform: translate3d(0px, 0.15465px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                            will-change: transform;
                        "
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
                        style="
                            opacity: 1;
                            transform: translate3d(0px, -5.35065px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                            will-change: transform;
                        "
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
                        style="
                            opacity: 1;
                            transform: translate3d(0px, -5.35065px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                            will-change: transform;
                        "
                    >
                        <img src="/images/icon.png" loading="lazy" alt="" class="image-50px" />
                        <div class="w-layout-vflex">
                            <h5 class="heading">30 +</h5>
                            <p class="_14px-500">Daily Job Post</p>
                        </div>
                    </div>
                    <div
                        style="
                            opacity: 1;
                            transform: translate3d(0%, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                        "
                        class="hero-bg"
                    ></div>
                    <div
                        style="
                            opacity: 1;
                            transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                        "
                        class="hero-bg-bottom-right"
                    ></div>
                </div>
            </div>
        </div>
        <div class="blur-div-470px-size top-right"></div>
        <div class="pink-blur-block top-right"></div>
    </section>

    <div class="page-wrapper">
        <section class="section">
            <div class="container">
                <div data-aos="fade-up" class="title-wrapper">
                    <div class="mask">
                        <h2
                            class="heading"
                            style="
                                opacity: 1;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            "
                        >
                            Trending Job Categories
                        </h2>
                    </div>
                    <div class="mask">
                        <p
                            class="_16px-500"
                            style="
                                opacity: 1;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            "
                        >
                            Discover the most sought-after job categories on Job TNC, from tech and healthcare to remote work.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="100" class="_2-column-block">
                    <div
                        data-delay="4000"
                        data-animation="slide"
                        class="testimonial-slider-3-col w-slider static"
                        data-autoplay="false"
                        data-easing="ease"
                        data-hide-arrows="false"
                        data-disable-swipe="false"
                        data-autoplay-limit="0"
                        data-nav-spacing="4"
                        data-duration="500"
                        data-infinite="true"
                        role="region"
                        aria-label="carousel"
                    >
                        <div class="mask-18 w-slider-mask" id="w-slider-mask-0">
                            <div
                                class="margin-right-30px w-slide"
                                aria-label="1 of 6"
                                role="group"
                                style="transition: all; transform: translateX(0px); opacity: 1"
                            >
                                <div class="w-dyn-list">
                                    <div role="list" class="w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div class="job-category-card">
                                                <div class="category-icon">
                                                    <img src="/images/pencil-ruler-2-line.png" loading="lazy" alt="" class="image-24px" />
                                                </div>
                                                <h6 class="category-title">UX UI Designer</h6>
                                                <div class="category-text-mask">
                                                    <p>Leads design projects, creating and refining product designs for optimal user experience.</p>
                                                </div>
                                                <div class="vertical-center-align">
                                                    <div class="text-merge">
                                                        <div class="_16px-700-uppercase-secondary">10</div>
                                                        <div class="_16px-700-uppercase-secondary">Jobs</div>
                                                    </div>
                                                </div>
                                                <div style="height: 0%; display: flex" class="category-hover">
                                                    <a href="/job-category/ux-ui-designer" class="secondary-button w-inline-block" style="opacity: 0">
                                                        <div class="button-text-wrapper">
                                                            <div class="default-text">View Job</div>
                                                            <div class="hover-text">View Job</div>
                                                        </div>
                                                        <div class="icon-18px">chevron_right</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="margin-right-30px w-slide"
                                aria-label="2 of 6"
                                role="group"
                                aria-hidden="true"
                                style="transition: all; transform: translateX(0px); opacity: 1"
                            >
                                <div class="w-dyn-list" aria-hidden="true">
                                    <div role="list" class="w-dyn-items" aria-hidden="true">
                                        <div role="listitem" class="w-dyn-item" aria-hidden="true">
                                            <div class="job-category-card" aria-hidden="true">
                                                <div class="category-icon" aria-hidden="true">
                                                    <img
                                                        src="/images/ball-pen-line.png"
                                                        loading="lazy"
                                                        alt=""
                                                        class="image-24px"
                                                        aria-hidden="true"
                                                    />
                                                </div>
                                                <h6 class="category-title" aria-hidden="true">Content Writer</h6>
                                                <div class="category-text-mask" aria-hidden="true">
                                                    <p aria-hidden="true">Develops engaging and innovative content for various media platforms.</p>
                                                </div>
                                                <div class="vertical-center-align" aria-hidden="true">
                                                    <div class="text-merge" aria-hidden="true">
                                                        <div class="_16px-700-uppercase-secondary" aria-hidden="true">21</div>
                                                        <div class="_16px-700-uppercase-secondary" aria-hidden="true">Jobs</div>
                                                    </div>
                                                </div>
                                                <div style="height: 0%; display: flex" class="category-hover" aria-hidden="true">
                                                    <a
                                                        href="/job-category/content-writer"
                                                        class="secondary-button w-inline-block"
                                                        tabindex="-1"
                                                        aria-hidden="true"
                                                        style="opacity: 0"
                                                    >
                                                        <div class="button-text-wrapper" aria-hidden="true">
                                                            <div class="default-text" aria-hidden="true">View Job</div>
                                                            <div class="hover-text" aria-hidden="true">View Job</div>
                                                        </div>
                                                        <div class="icon-18px" aria-hidden="true">chevron_right</div>
                                                    </a>
                                                </div>
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
                                style="transition: all; transform: translateX(0px); opacity: 1"
                            >
                                <div class="w-dyn-list" aria-hidden="true">
                                    <div role="list" class="w-dyn-items" aria-hidden="true">
                                        <div role="listitem" class="w-dyn-item" aria-hidden="true">
                                            <div class="job-category-card" aria-hidden="true">
                                                <div class="category-icon" aria-hidden="true">
                                                    <img src="/images/global-line.png" loading="lazy" alt="" class="image-24px" aria-hidden="true" />
                                                </div>
                                                <h6 class="category-title" aria-hidden="true">Website Developer</h6>
                                                <div class="category-text-mask" aria-hidden="true">
                                                    <p aria-hidden="true">
                                                        Design, build, and maintain websites; HTML, CSS, JavaScript proficiency required.
                                                    </p>
                                                </div>
                                                <div class="vertical-center-align" aria-hidden="true">
                                                    <div class="text-merge" aria-hidden="true">
                                                        <div class="_16px-700-uppercase-secondary" aria-hidden="true">4</div>
                                                        <div class="_16px-700-uppercase-secondary" aria-hidden="true">Jobs</div>
                                                    </div>
                                                </div>
                                                <div style="height: 0%; display: flex; width: 301.594px" class="category-hover" aria-hidden="true">
                                                    <a
                                                        href="/job-category/website-developer"
                                                        class="secondary-button w-inline-block"
                                                        tabindex="-1"
                                                        aria-hidden="true"
                                                        style="opacity: 0"
                                                    >
                                                        <div class="button-text-wrapper" aria-hidden="true">
                                                            <div
                                                                class="default-text"
                                                                aria-hidden="true"
                                                                style="
                                                                    transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                                                                        rotateZ(0deg) skew(0deg, 0deg);
                                                                    transform-style: preserve-3d;
                                                                "
                                                            >
                                                                View Job
                                                            </div>
                                                            <div
                                                                class="hover-text"
                                                                aria-hidden="true"
                                                                style="
                                                                    transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                                                                        rotateZ(0deg) skew(0deg, 0deg);
                                                                    transform-style: preserve-3d;
                                                                "
                                                            >
                                                                View Job
                                                            </div>
                                                        </div>
                                                        <div class="icon-18px" aria-hidden="true">chevron_right</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="margin-right-30px w-slide"
                                aria-label="4 of 6"
                                role="group"
                                aria-hidden="true"
                                style="transition: all; transform: translateX(0px); opacity: 1"
                            >
                                <div class="w-dyn-list" aria-hidden="true">
                                    <div role="list" class="w-dyn-items" aria-hidden="true">
                                        <div role="listitem" class="w-dyn-item" aria-hidden="true">
                                            <div class="job-category-card" aria-hidden="true">
                                                <div class="category-icon" aria-hidden="true">
                                                    <img src="/images/user-line.png" loading="lazy" alt="" class="image-24px" aria-hidden="true" />
                                                </div>
                                                <h6 class="category-title" aria-hidden="true">HR Executive</h6>
                                                <div class="category-text-mask" aria-hidden="true">
                                                    <p aria-hidden="true">
                                                        Manage recruitment, employee relations, and compliance; strong communication skills required.
                                                    </p>
                                                </div>
                                                <div class="vertical-center-align" aria-hidden="true">
                                                    <div class="text-merge" aria-hidden="true">
                                                        <div class="_16px-700-uppercase-secondary" aria-hidden="true">2</div>
                                                        <div class="_16px-700-uppercase-secondary" aria-hidden="true">Jobs</div>
                                                    </div>
                                                </div>
                                                <div style="height: 0%; display: flex; width: 301.594px" class="category-hover" aria-hidden="true">
                                                    <a
                                                        href="/job-category/hr-executive"
                                                        class="secondary-button w-inline-block"
                                                        tabindex="-1"
                                                        aria-hidden="true"
                                                        style="opacity: 0"
                                                    >
                                                        <div class="button-text-wrapper" aria-hidden="true">
                                                            <div
                                                                class="default-text"
                                                                aria-hidden="true"
                                                                style="
                                                                    transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                                                                        rotateZ(0deg) skew(0deg, 0deg);
                                                                    transform-style: preserve-3d;
                                                                "
                                                            >
                                                                View Job
                                                            </div>
                                                            <div
                                                                class="hover-text"
                                                                aria-hidden="true"
                                                                style="
                                                                    transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg)
                                                                        rotateZ(0deg) skew(0deg, 0deg);
                                                                    transform-style: preserve-3d;
                                                                "
                                                            >
                                                                View Job
                                                            </div>
                                                        </div>
                                                        <div class="icon-18px" aria-hidden="true">chevron_right</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="margin-right-30px w-slide"
                                aria-label="5 of 6"
                                role="group"
                                aria-hidden="true"
                                style="transition: all; transform: translateX(0px); opacity: 1"
                            >
                                <div class="w-dyn-list" aria-hidden="true">
                                    <div role="list" class="w-dyn-items" aria-hidden="true">
                                        <div role="listitem" class="w-dyn-item" aria-hidden="true">
                                            <div class="job-category-card" aria-hidden="true">
                                                <div class="category-icon" aria-hidden="true">
                                                    <img src="/images/survey-line.png" loading="lazy" alt="" class="image-24px" aria-hidden="true" />
                                                </div>
                                                <h6 class="category-title" aria-hidden="true">Digital Marketer</h6>
                                                <div class="category-text-mask" aria-hidden="true">
                                                    <p aria-hidden="true">
                                                        Develop and execute online marketing strategies; SEO, PPC, social media expertise needed.
                                                    </p>
                                                </div>
                                                <div class="vertical-center-align" aria-hidden="true">
                                                    <div class="text-merge" aria-hidden="true">
                                                        <div class="_16px-700-uppercase-secondary" aria-hidden="true">18</div>
                                                        <div class="_16px-700-uppercase-secondary" aria-hidden="true">Jobs</div>
                                                    </div>
                                                </div>
                                                <div style="height: 0%; display: flex" class="category-hover" aria-hidden="true">
                                                    <a
                                                        href="/job-category/digital-marketer"
                                                        class="secondary-button w-inline-block"
                                                        tabindex="-1"
                                                        aria-hidden="true"
                                                        style="opacity: 0"
                                                    >
                                                        <div class="button-text-wrapper" aria-hidden="true">
                                                            <div class="default-text" aria-hidden="true">View Job</div>
                                                            <div class="hover-text" aria-hidden="true">View Job</div>
                                                        </div>
                                                        <div class="icon-18px" aria-hidden="true">chevron_right</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="margin-right-30px w-slide"
                                aria-label="6 of 6"
                                role="group"
                                aria-hidden="true"
                                style="transition: all; transform: translateX(0px); opacity: 1"
                            >
                                <div class="w-dyn-list" aria-hidden="true">
                                    <div role="list" class="w-dyn-items" aria-hidden="true">
                                        <div role="listitem" class="w-dyn-item" aria-hidden="true">
                                            <div class="job-category-card" aria-hidden="true">
                                                <div class="category-icon" aria-hidden="true">
                                                    <img src="/images/bank-fill.png" loading="lazy" alt="" class="image-24px" aria-hidden="true" />
                                                </div>
                                                <h6 class="category-title" aria-hidden="true">Accounting Expert</h6>
                                                <div class="category-text-mask" aria-hidden="true">
                                                    <p aria-hidden="true">
                                                        Designs user interfaces and improves user experience through research and feedback analysis.
                                                    </p>
                                                </div>
                                                <div class="vertical-center-align" aria-hidden="true">
                                                    <div class="text-merge" aria-hidden="true">
                                                        <div class="_16px-700-uppercase-secondary" aria-hidden="true">8</div>
                                                        <div class="_16px-700-uppercase-secondary" aria-hidden="true">Jobs</div>
                                                    </div>
                                                </div>
                                                <div style="height: 0%; display: flex" class="category-hover" aria-hidden="true">
                                                    <a
                                                        href="/job-category/accounting-expert"
                                                        class="secondary-button w-inline-block"
                                                        tabindex="-1"
                                                        aria-hidden="true"
                                                        style="opacity: 0"
                                                    >
                                                        <div class="button-text-wrapper" aria-hidden="true">
                                                            <div class="default-text" aria-hidden="true">View Job</div>
                                                            <div class="hover-text" aria-hidden="true">View Job</div>
                                                        </div>
                                                        <div class="icon-18px" aria-hidden="true">chevron_right</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div aria-live="off" aria-atomic="true" class="w-slider-aria-label" data-wf-ignore=""></div>
                        </div>
                        <div
                            class="w-slider-arrow-left hidden"
                            role="button"
                            tabindex="0"
                            aria-controls="w-slider-mask-0"
                            aria-label="previous slide"
                        ></div>
                        <div
                            class="w-slider-arrow-right hidden"
                            role="button"
                            tabindex="0"
                            aria-controls="w-slider-mask-0"
                            aria-label="next slide"
                        ></div>
                        <div class="slide-nav-bottom-right-white-bg w-slider-nav w-round">
                            <div
                                class="w-slider-dot w-active"
                                data-wf-ignore=""
                                aria-label="Show slide 1 of 6"
                                aria-pressed="true"
                                role="button"
                                tabindex="0"
                                style="margin-left: 4px; margin-right: 4px"
                            ></div>
                            <div
                                class="w-slider-dot"
                                data-wf-ignore=""
                                aria-label="Show slide 2 of 6"
                                aria-pressed="false"
                                role="button"
                                tabindex="-1"
                                style="margin-left: 4px; margin-right: 4px"
                            ></div>
                            <div
                                class="w-slider-dot"
                                data-wf-ignore=""
                                aria-label="Show slide 3 of 6"
                                aria-pressed="false"
                                role="button"
                                tabindex="-1"
                                style="margin-left: 4px; margin-right: 4px"
                            ></div>
                            <div
                                class="w-slider-dot"
                                data-wf-ignore=""
                                aria-label="Show slide 4 of 6"
                                aria-pressed="false"
                                role="button"
                                tabindex="-1"
                                style="margin-left: 4px; margin-right: 4px"
                            ></div>
                            <div
                                class="w-slider-dot"
                                data-wf-ignore=""
                                aria-label="Show slide 5 of 6"
                                aria-pressed="false"
                                role="button"
                                tabindex="-1"
                                style="margin-left: 4px; margin-right: 4px"
                            ></div>
                            <div
                                class="w-slider-dot"
                                data-wf-ignore=""
                                aria-label="Show slide 6 of 6"
                                aria-pressed="false"
                                role="button"
                                tabindex="-1"
                                style="margin-left: 4px; margin-right: 4px"
                            ></div>
                        </div>
                    </div>
                    <div class="testimonial-slider-nav-style-css w-embed">
                        <!-- <style>
							.w-slider-dot {
								background: #E6E6E8;
							}

							.w-slider-dot.w-active {
								background: var(--1-main-colors--secondary);
							}
						</style> -->
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div data-aos="fade-up" class="title-wrapper">
                    <div class="mask">
                        <h2
                            class="heading"
                            style="
                                opacity: 1;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            "
                        >
                            Popular jobs
                        </h2>
                    </div>
                    <div class="mask">
                        <p
                            class="_16px-500"
                            style="
                                opacity: 1;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            "
                        >
                            Explore top career opportunities in high-demand fields, including technology, healthcare, finance, and creative
                            industries.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="100" class="w-dyn-list">
                    <div
                        style="
                            opacity: 1;
                            transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                        "
                        role="list"
                        class="_2-column-grid w-dyn-items"
                    >
                        <div role="listitem" class="w-dyn-item">
                            <div class="job-list-card">
                                <div class="w-layout-hflex job-header-wrapper">
                                    <img src="/images/logo-13.webp" loading="lazy" alt="" class="company-image-with-neutral-50-bg" />
                                    <div class="w-layout-vflex job-info">
                                        <a href="/job/hr-executive" class="margin-bottom-12px w-inline-block">
                                            <h6 class="heading">HR Executive</h6>
                                        </a>
                                        <div class="w-layout-hflex job-location-salary-wrapper">
                                            <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                                <div class="_18px-icon-neutral-200">place</div>
                                                <div class="_14px-400-neutral-200">California</div>
                                            </div>
                                            <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                                <div class="_18px-icon-neutral-200">payments</div>
                                                <div class="_14px-400-neutral-200">$15K</div>
                                            </div>
                                        </div>
                                        <div class="margin-top-20px">
                                            <div class="w-layout-hflex _20px-gap">
                                                <div class="w-layout-hflex text-button">
                                                    <div>Part Time</div>
                                                </div>
                                                <div class="w-layout-hflex text-button">
                                                    <div>Remote</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/job/hr-executive" class="apply-button w-inline-block">
                                    <div>Apply Now</div>
                                    <div class="icon">chevron_right</div>
                                </a>
                                <div style="height: 0%" class="hover-color-primary"></div>
                            </div>
                        </div>

                        <div role="listitem" class="w-dyn-item">
                            <div class="job-list-card">
                                <div class="w-layout-hflex job-header-wrapper">
                                    <img src="/images/logo-14.webp" loading="lazy" alt="" class="company-image-with-neutral-50-bg" />
                                    <div class="w-layout-vflex job-info">
                                        <a href="/job/ui-ux-designer" class="margin-bottom-12px w-inline-block">
                                            <h6 class="heading">UI/UX Designer</h6>
                                        </a>
                                        <div class="w-layout-hflex job-location-salary-wrapper">
                                            <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                                <div class="_18px-icon-neutral-200">place</div>
                                                <div class="_14px-400-neutral-200">New York City</div>
                                            </div>
                                            <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                                <div class="_18px-icon-neutral-200">payments</div>
                                                <div class="_14px-400-neutral-200">$15k - 20k</div>
                                            </div>
                                        </div>
                                        <div class="margin-top-20px">
                                            <div class="w-layout-hflex _20px-gap">
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
                                <a href="/job/ui-ux-designer" class="apply-button w-inline-block">
                                    <div>Apply Now</div>
                                    <div class="icon">chevron_right</div>
                                </a>
                                <div style="height: 0%" class="hover-color-primary"></div>
                            </div>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                            <div class="job-list-card">
                                <div class="w-layout-hflex job-header-wrapper">
                                    <img src="/images/logo-14.webp" loading="lazy" alt="" class="company-image-with-neutral-50-bg" />
                                    <div class="w-layout-vflex job-info">
                                        <a href="/job/ui-ux-designer" class="margin-bottom-12px w-inline-block">
                                            <h6 class="heading">UI/UX Designer</h6>
                                        </a>
                                        <div class="w-layout-hflex job-location-salary-wrapper">
                                            <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                                <div class="_18px-icon-neutral-200">place</div>
                                                <div class="_14px-400-neutral-200">New York City</div>
                                            </div>
                                            <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                                <div class="_18px-icon-neutral-200">payments</div>
                                                <div class="_14px-400-neutral-200">$15k - 20k</div>
                                            </div>
                                        </div>
                                        <div class="margin-top-20px">
                                            <div class="w-layout-hflex _20px-gap">
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
                                <a href="/job/ui-ux-designer" class="apply-button w-inline-block">
                                    <div>Apply Now</div>
                                    <div class="icon">chevron_right</div>
                                </a>
                                <div style="height: 0%" class="hover-color-primary"></div>
                            </div>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                            <div class="job-list-card">
                                <div class="w-layout-hflex job-header-wrapper">
                                    <img src="/images/logo-14.webp" loading="lazy" alt="" class="company-image-with-neutral-50-bg" />
                                    <div class="w-layout-vflex job-info">
                                        <a href="/job/ui-ux-designer" class="margin-bottom-12px w-inline-block">
                                            <h6 class="heading">UI/UX Designer</h6>
                                        </a>
                                        <div class="w-layout-hflex job-location-salary-wrapper">
                                            <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                                <div class="_18px-icon-neutral-200">place</div>
                                                <div class="_14px-400-neutral-200">New York City</div>
                                            </div>
                                            <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                                <div class="_18px-icon-neutral-200">payments</div>
                                                <div class="_14px-400-neutral-200">$15k - 20k</div>
                                            </div>
                                        </div>
                                        <div class="margin-top-20px">
                                            <div class="w-layout-hflex _20px-gap">
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
                                <a href="/job/ui-ux-designer" class="apply-button w-inline-block">
                                    <div>Apply Now</div>
                                    <div class="icon">chevron_right</div>
                                </a>
                                <div style="height: 0%" class="hover-color-primary"></div>
                            </div>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                            <div class="job-list-card">
                                <div class="w-layout-hflex job-header-wrapper">
                                    <img src="/images/logo-14.webp" loading="lazy" alt="" class="company-image-with-neutral-50-bg" />
                                    <div class="w-layout-vflex job-info">
                                        <a href="/job/ui-ux-designer" class="margin-bottom-12px w-inline-block">
                                            <h6 class="heading">UI/UX Designer</h6>
                                        </a>
                                        <div class="w-layout-hflex job-location-salary-wrapper">
                                            <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                                <div class="_18px-icon-neutral-200">place</div>
                                                <div class="_14px-400-neutral-200">New York City</div>
                                            </div>
                                            <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                                <div class="_18px-icon-neutral-200">payments</div>
                                                <div class="_14px-400-neutral-200">$15k - 20k</div>
                                            </div>
                                        </div>
                                        <div class="margin-top-20px">
                                            <div class="w-layout-hflex _20px-gap">
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
                                <a href="/job/ui-ux-designer" class="apply-button w-inline-block">
                                    <div>Apply Now</div>
                                    <div class="icon">chevron_right</div>
                                </a>
                                <div style="height: 0%" class="hover-color-primary"></div>
                            </div>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                            <div class="job-list-card">
                                <div class="w-layout-hflex job-header-wrapper">
                                    <img src="/images/logo-14.webp" loading="lazy" alt="" class="company-image-with-neutral-50-bg" />
                                    <div class="w-layout-vflex job-info">
                                        <a href="/job/ui-ux-designer" class="margin-bottom-12px w-inline-block">
                                            <h6 class="heading">UI/UX Designer</h6>
                                        </a>
                                        <div class="w-layout-hflex job-location-salary-wrapper">
                                            <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                                <div class="_18px-icon-neutral-200">place</div>
                                                <div class="_14px-400-neutral-200">New York City</div>
                                            </div>
                                            <div class="w-layout-hflex horizontal-left-center-4px-gap">
                                                <div class="_18px-icon-neutral-200">payments</div>
                                                <div class="_14px-400-neutral-200">$15k - 20k</div>
                                            </div>
                                        </div>
                                        <div class="margin-top-20px">
                                            <div class="w-layout-hflex _20px-gap">
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
                                <a href="/job/ui-ux-designer" class="apply-button w-inline-block">
                                    <div>Apply Now</div>
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

        <section class="primary-bg-section">
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
                            Discover how our platform connects employers with talented candidates through intuitive job postings and seamless hiring
                            processes.
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
        </section>

        <section class="section">
            <div class="container">
                <div data-aos="fade-up" class="_2-column-block _100px-gap">
                    <div class="image-wrapper-46">
                        <div
                            class="rotate-image"
                            style="
                                will-change: transform;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0.0125deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            "
                        >
                            <img
                                src="/images/MqN1.png"
                                loading="lazy"
                                sizes="(max-width: 479px) 93vw, (max-width: 991px) 95vw, 43vw"
                                alt=""
                                class="man-image"
                            />
                            <div class="absolute-banner-bg"></div>
                        </div>
                        <img
                            src="/images/MaskGroup.png"
                            loading="lazy"
                            alt=""
                            class="_200px-absolute-image"
                            style="
                                will-change: transform;
                                transform: translate3d(-56.9715px, 33.983px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                    skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            "
                        />
                        <div
                            class="floating-card-man"
                            style="
                                transform: translate3d(0px, -0.0723px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                    skew(0deg, 0deg);
                                transform-style: preserve-3d;
                                will-change: transform;
                            "
                        >
                            <img src="/images/text1.svg" loading="lazy" alt="" class="image-50px" />
                            <h6 class="heading">Cutting-Edge Job <br />Matching Technology</h6>
                        </div>
                        <div
                            class="floating-card-vertical"
                            style="
                                transform: translate3d(0px, 7.8048px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                                will-change: transform;
                            "
                        >
                            <img src="/images/process1.svg" loading="lazy" alt="" class="image-50px" />
                            <h6 class="heading">Cutting-Edge Job <br />Matching Technology</h6>
                        </div>
                        <div class="man-image-bg"></div>
                        <div class="blur-div-470px-size bottom-right"></div>
                    </div>
                    <div class="contents">
                        <div class="margin-bottom-20px">
                            <div class="_24px-title-secondary">Attracting Over 5K Top Talent</div>
                        </div>
                        <h2 class="heading">Join TNC Elite Network for Career Opportunities Today!</h2>
                        <p class="margin-55px">
                            Join TNC Elite Network for Career Opportunities Today: Gain access to a curated platform offering tailored career
                            opportunities, mentorship programs, industry insights, and networking events designed to advance your professional
                            journey.
                        </p>
                        <a href="/contact" class="primary-button w-inline-block">
                            <div class="button-text-wrapper">
                                <div class="default-text">Join Jobs TNC</div>
                                <div class="hover-text">Join Jobs TNC</div>
                            </div>
                            <div class="icon-18px">chevron_right</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
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
                            style="transition: all; transform: translateX(-450.094px); opacity: 1"
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
                            style="transition: all; transform: translateX(-450.094px); opacity: 1"
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
                            style="transition: all; transform: translateX(-450.094px); opacity: 1"
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
                        <div
                            class="margin-right-30px w-slide"
                            aria-label="4 of 6"
                            role="group"
                            aria-hidden="true"
                            style="transition: all; transform: translateX(-450.094px); opacity: 1"
                        >
                            <div class="testiimonial-wrapper" aria-hidden="true">
                                <div class="testimonial-card-med" aria-hidden="true" style="background-color: rgb(255, 255, 255)">
                                    <div class="_20px-500" aria-hidden="true" style="color: rgb(4, 8, 27)">Excellent User Support</div>
                                    <p class="_16px-500" aria-hidden="true" style="color: rgb(87, 90, 102)">
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
                                    <div class="polygon-arrow" aria-hidden="true" style="background-color: rgb(255, 255, 255)"></div>
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
                            aria-label="5 of 6"
                            role="group"
                            aria-hidden="true"
                            style="transition: all; transform: translateX(-450.094px); opacity: 1"
                        >
                            <div class="testiimonial-wrapper" aria-hidden="true">
                                <div class="testimonial-card-med" aria-hidden="true">
                                    <div class="_20px-500" aria-hidden="true">User-Friendly Job Finder</div>
                                    <p class="_16px-500" aria-hidden="true">
                                        Job TNC's customer service is top-notch. The responsive support team assists users promptly queries and
                                        providing guidance throughout search process.
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
                                    <img width="70" loading="lazy" alt="" src="/images/Ellipse21.png" class="testimonial-author" aria-hidden="true" />
                                    <div aria-hidden="true">
                                        <div class="_16px-500 _0-8-opacity" aria-hidden="true">Jenny Wilson</div>
                                        <div class="margin-top-2px" aria-hidden="true">
                                            <div class="_14px-text" aria-hidden="true">UI Designer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="margin-right-30px w-slide"
                            aria-label="6 of 6"
                            role="group"
                            aria-hidden="true"
                            style="transition: all; transform: translateX(-450.094px); opacity: 1"
                        >
                            <div class="testiimonial-wrapper" aria-hidden="true">
                                <div class="testimonial-card-med" aria-hidden="true">
                                    <div class="_20px-500" aria-hidden="true">Exceptional Job Matching Service</div>
                                    <p class="_16px-500" aria-hidden="true">
                                        Job TNC excels at matching users with suitable positions. The platform's algorithm considers user
                                        qualifications, delivering highly relevant job suggestions.
                                    </p>
                                    <div class="star-wrapper-margin-top-18px" aria-hidden="true">
                                        <div class="star-icofont" aria-hidden="true"></div>
                                        <div class="star-icofont" aria-hidden="true"></div>
                                        <div class="star-icofont" aria-hidden="true"></div>
                                        <div class="star-icofont" aria-hidden="true"></div>
                                        <div class="star-icofont" aria-hidden="true"></div>
                                        <div class="polygon-arrow" aria-hidden="true"></div>
                                    </div>
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
                        <div aria-live="off" aria-atomic="true" class="w-slider-aria-label" data-wf-ignore="">Slide 2 of 6.</div>
                    </div>
                    <div class="w-slider-arrow-left hidden" role="button" tabindex="0" aria-controls="w-slider-mask-1" aria-label="previous slide">
                        <div class="w-icon-slider-left"></div>
                    </div>
                    <div class="w-slider-arrow-right hidden" role="button" tabindex="0" aria-controls="w-slider-mask-1" aria-label="next slide">
                        <div class="w-icon-slider-right"></div>
                    </div>
                    <div class="testimonial-navigation w-slider-nav w-round">
                        <div
                            class="w-slider-dot"
                            data-wf-ignore=""
                            aria-label="Show slide 1 of 6"
                            aria-pressed="false"
                            role="button"
                            tabindex="-1"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                        <div
                            class="w-slider-dot w-active"
                            data-wf-ignore=""
                            aria-label="Show slide 2 of 6"
                            aria-pressed="true"
                            role="button"
                            tabindex="0"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                        <div
                            class="w-slider-dot"
                            data-wf-ignore=""
                            aria-label="Show slide 3 of 6"
                            aria-pressed="false"
                            role="button"
                            tabindex="-1"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                        <div
                            class="w-slider-dot"
                            data-wf-ignore=""
                            aria-label="Show slide 4 of 6"
                            aria-pressed="false"
                            role="button"
                            tabindex="-1"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                        <div
                            class="w-slider-dot"
                            data-wf-ignore=""
                            aria-label="Show slide 5 of 6"
                            aria-pressed="false"
                            role="button"
                            tabindex="-1"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                        <div
                            class="w-slider-dot"
                            data-wf-ignore=""
                            aria-label="Show slide 6 of 6"
                            aria-pressed="false"
                            role="button"
                            tabindex="-1"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="primary-bg-section">
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
                            Discover Exceptional Talent
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
                            Discover Exceptional Talent: Identify, attract, and nurture top-tier professionals to drive innovation and success.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="100" class="testimonial-slider-3-col">
                    <div class="mask-23 w-slider-mask" id="w-slider-mask-2">
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
                        <div
                            class="margin-right-30px w-slide"
                            aria-label="5 of 8"
                            role="group"
                            aria-hidden="true"
                            style="transition: all; transform: translateX(0px); opacity: 1"
                        >
                            <div class="team-card" aria-hidden="true">
                                <img
                                    src="/images/Rectangle13.png"
                                    loading="lazy"
                                    sizes="(max-width: 479px) 100vw, (max-width: 991px) 45vw, 22vw"
                                    alt=""
                                    aria-hidden="true"
                                />
                                <div class="bottom-lineaer-overlay" aria-hidden="true">
                                    <div aria-hidden="true">
                                        <div class="_20px-title-white" aria-hidden="true">Annette Black</div>
                                        <div class="_14px-primary-100" aria-hidden="true">UI Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="margin-right-30px w-slide"
                            aria-label="6 of 8"
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
                            aria-label="7 of 8"
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
                            aria-label="8 of 8"
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
                        <div aria-live="off" aria-atomic="true" class="w-slider-aria-label" data-wf-ignore=""></div>
                    </div>
                    <div
                        class="w-slider-arrow-left hidden"
                        role="button"
                        tabindex="0"
                        aria-controls="w-slider-mask-2"
                        aria-label="previous slide"
                    ></div>
                    <div class="w-slider-arrow-right hidden" role="button" tabindex="0" aria-controls="w-slider-mask-2" aria-label="next slide"></div>
                    <div class="testimonial-navigation w-slider-nav w-round">
                        <div
                            class="w-slider-dot w-active"
                            data-wf-ignore=""
                            aria-label="Show slide 1 of 8"
                            aria-pressed="true"
                            role="button"
                            tabindex="0"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                        <div
                            class="w-slider-dot"
                            data-wf-ignore=""
                            aria-label="Show slide 2 of 8"
                            aria-pressed="false"
                            role="button"
                            tabindex="-1"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                        <div
                            class="w-slider-dot"
                            data-wf-ignore=""
                            aria-label="Show slide 3 of 8"
                            aria-pressed="false"
                            role="button"
                            tabindex="-1"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                        <div
                            class="w-slider-dot"
                            data-wf-ignore=""
                            aria-label="Show slide 4 of 8"
                            aria-pressed="false"
                            role="button"
                            tabindex="-1"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                        <div
                            class="w-slider-dot"
                            data-wf-ignore=""
                            aria-label="Show slide 5 of 8"
                            aria-pressed="false"
                            role="button"
                            tabindex="-1"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                        <div
                            class="w-slider-dot"
                            data-wf-ignore=""
                            aria-label="Show slide 6 of 8"
                            aria-pressed="false"
                            role="button"
                            tabindex="-1"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                        <div
                            class="w-slider-dot"
                            data-wf-ignore=""
                            aria-label="Show slide 7 of 8"
                            aria-pressed="false"
                            role="button"
                            tabindex="-1"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                        <div
                            class="w-slider-dot"
                            data-wf-ignore=""
                            aria-label="Show slide 8 of 8"
                            aria-pressed="false"
                            role="button"
                            tabindex="-1"
                            style="margin-left: 3px; margin-right: 3px"
                        ></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div data-aos="fade-up" class="title-wrapper">
                    <div class="mask">
                        <h2
                            class="heading"
                            style="
                                opacity: 1;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            "
                        >
                            Our Latest News
                        </h2>
                    </div>
                    <div class="mask">
                        <p
                            class="_16px-500"
                            style="
                                opacity: 1;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            "
                        >
                            Stay updated with the newest and finest developments, events, and achievements from our community.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="100" class="w-layout-hflex blog-container">
                    <div
                        style="
                            opacity: 1;
                            transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                            transform-style: preserve-3d;
                        "
                        class="_50-block w-dyn-list"
                    >
                        <div role="list" class="padding-x-40px w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                <div class="w-layout-vflex featured-blog">
                                    <a href="/blog/10-tech-trends-shaping-the-future-of-business" class="mask _10px-rounded w-inline-block"
                                        ><img
                                            src="/images/Rectangle688.webp"
                                            loading="lazy"
                                            alt=""
                                            sizes="(max-width: 479px) 100vw, (max-width: 991px) 84vw, 41vw"
                                            class="featured-blog-list-thumbnail"
                                            style="
                                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                                    skew(0deg, 0deg);
                                                transform-style: preserve-3d;
                                            " /></a
                                    ><a href="/blog/10-tech-trends-shaping-the-future-of-business" class="margin-top-40px-bottom-50px w-inline-block">
                                        <h4 class="heading" style="color: rgb(0, 13, 131)">10 Tech Trends Shaping the Future of Business</h4> </a
                                    ><a href="/blog/10-tech-trends-shaping-the-future-of-business" class="read-more-link w-inline-block">
                                        <div>Read more</div>
                                        <div class="icon">chevron_right</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-dyn-list contents">
                        <div
                            style="
                                opacity: 1;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            "
                            role="list"
                            class="blog-list-grid w-dyn-items"
                        >
                            <div role="listitem" class="w-dyn-item">
                                <div class="blog-list-card">
                                    <a
                                        href="/blog/strategies-for-improving-your-interpersonal-skills"
                                        class="mask blog-list-thumbnail w-inline-block"
                                        style="
                                            transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                                skew(0deg, 0deg);
                                            transform-style: preserve-3d;
                                        "
                                        ><img
                                            src="/images/Rectangle690.webp"
                                            loading="lazy"
                                            alt=""
                                            sizes="(max-width: 479px) 100vw, 200px"
                                            class="blog-list-thumbnail"
                                            style="
                                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                                    skew(0deg, 0deg);
                                                transform-style: preserve-3d;
                                            "
                                    /></a>
                                    <div class="w-layout-vflex blog-list-body">
                                        <a href="/blog/strategies-for-improving-your-interpersonal-skills" class="mask w-inline-block">
                                            <h6 class="heading" style="color: rgb(0, 13, 131)">
                                                Strategies for Improving Your Interpersonal Skills
                                            </h6> </a
                                        ><a href="/blog/strategies-for-improving-your-interpersonal-skills" class="read-more-link w-inline-block">
                                            <div>Read more</div>
                                            <div class="icon">chevron_right</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div role="listitem" class="w-dyn-item">
                                <div class="blog-list-card">
                                    <a href="/blog/strategies-for-building-a-successful-online-store" class="mask blog-list-thumbnail w-inline-block"
                                        ><img
                                            src="/images/Rectangle689.webp"
                                            loading="lazy"
                                            alt=""
                                            sizes="(max-width: 479px) 100vw, 200px"
                                            class="blog-list-thumbnail"
                                    /></a>
                                    <div class="w-layout-vflex blog-list-body">
                                        <a href="/blog/strategies-for-building-a-successful-online-store" class="mask w-inline-block">
                                            <h6 class="heading">Strategies for Building a Successful Online Store</h6> </a
                                        ><a href="/blog/strategies-for-building-a-successful-online-store" class="read-more-link w-inline-block">
                                            <div>Read more</div>
                                            <div class="icon">chevron_right</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div role="listitem" class="w-dyn-item">
                                <div class="blog-list-card">
                                    <a href="/blog/tips-and-techniques-for-overcoming-creative-blocks" class="mask blog-list-thumbnail w-inline-block"
                                        ><img src="/images/Rectangle691.png" loading="lazy" alt="" class="blog-list-thumbnail"
                                    /></a>
                                    <div class="w-layout-vflex blog-list-body">
                                        <a href="/blog/tips-and-techniques-for-overcoming-creative-blocks" class="mask w-inline-block">
                                            <h6 class="heading">Tips and Techniques for Overcoming Creative Blocks</h6> </a
                                        ><a href="/blog/tips-and-techniques-for-overcoming-creative-blocks" class="read-more-link w-inline-block">
                                            <div>Read more</div>
                                            <div class="icon">chevron_right</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blur-div-470px-size"></div>
            </div>
        </section>
    </div>
    </AppLayout>
</template>
