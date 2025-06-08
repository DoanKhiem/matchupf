<template>
    <AppLayout>
        <Head title="News & Events" />
        <section id="hero" class="main-banner">
            <div class="container">
                <div class="breadcrumb-block" data-aos="fade-up">
                    <h1 class="_30px-title-white">News & Events</h1>
                    <div class="text-merge">
                        <a href="/" class="breadcrumb">Home</a>
                        <div class="breadcrumb">/</div>
                        <div class="breadcrumb">News & Events</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="page-wrapper">
            <section class="white-section">
                <div class="large-container container">
                    <div class="static container">
                        <Swiper
                            :slides-per-view="3"
                            :space-between="30"
                            :navigation="true"
                            :breakpoints="{
                                320: { slidesPerView: 1 },
                                768: { slidesPerView: 3 },
                            }"
                            :loop="true"
                            :modules="[Navigation, Pagination, Scrollbar, A11y]"
                            :autoplay="{
                                delay: 2000,
                                disableOnInteraction: false,
                            }"
                        >
                            <SwiperSlide v-for="blog in blogs" :key="blog.id">
                                <div class="blog-card-grid">
                                    <a :href="`/blog/${blog.slug}`" class="mask w-inline-block">
                                        <img :src="blog.img" class="blog-thumbnail" />
                                    </a>
                                    <div class="blog-body-grid">
                                        <a :href="`/blog/${blog.slug}`" class="mask w-inline-block">
                                            <h3 class="blog-card-title">{{ blog.title }}</h3>
                                        </a>
                                        <div class="margin-bottom-20px">
                                            <div class="category-text-mask">
                                                <p class="neutral-300">{{ blog.desc }}</p>
                                            </div>
                                        </div>
                                        <router-link :to="{ name: 'blog-detail', params: { id: blog.slug } }" class="blog-button w-inline-block">
                                            <div>Read more</div>
                                            <div class="_24px-icon" aria-hidden="true">navigate_next</div>
                                        </router-link>
                                    </div>
                                </div>
                            </SwiperSlide>
                        </Swiper>
                    </div>
                </div>
            </section>
            <section class="_60px-margin-section">
                <div class="container">
                    <div class="_2-column-block-top reverse">
                        <div
                            data-w-id="a06ac0ee-27f8-9df6-3154-f067caabc778"
                            style="
                                opacity: 1;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            "
                            class="sidebar _20px-gap"
                            data-aos="fade-right"
                            data-aos-delay="200"
                        >
                            <form action="/search" class="search-block w-form">
                                <input
                                    class="blog-search-field w-input"
                                    maxlength="256"
                                    name="query"
                                    placeholder="Search…"
                                    type="search"
                                    id="search"
                                    required
                                /><input type="submit" class="search-button w-button" value="" />
                            </form>
                            <div class="widget">
                                <div class="sidebar-title">Popular Post</div>
                                <div class="w-dyn-list">
                                    <div role="list" class="featured-properties-wrapper w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" v-for="blog in popularBlogs" :key="blog.id">
                                            <div class="featured-blogs">
                                                <a :href="`/blog/${blog.slug}`" class="mask related-post w-inline-block">
                                                    <img alt="" loading="lazy" width="70" :src="blog.image" class="featured-image" />
                                                </a>
                                                <a :href="`/blog/${blog.slug}`" class="mask w-inline-block">
                                                    <div class="post-title">{{ blog.title }}</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="widget">
                                <div class="sidebar-title">Categories</div>
                                <div class="w-dyn-list">
                                    <div role="list" class="category-container w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="/blog-categories/creative-corner" class="property-category-block w-inline-block"
                                                ><div class="icon">chevron_right</div>
                                                <div class="category">Creative Corner</div></a
                                            >
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="/blog-categories/tech-talk" class="property-category-block w-inline-block"
                                                ><div class="icon">chevron_right</div>
                                                <div class="category">Tech Talk</div></a
                                            >
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="/blog-categories/innovation-insights" class="property-category-block w-inline-block"
                                                ><div class="icon">chevron_right</div>
                                                <div class="category">Innovation Insights</div></a
                                            >
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="/blog-categories/business-buzz" class="property-category-block w-inline-block"
                                                ><div class="icon">chevron_right</div>
                                                <div class="category">Business Buzz</div></a
                                            >
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="/blog-categories/digital-trends" class="property-category-block w-inline-block"
                                                ><div class="icon">chevron_right</div>
                                                <div class="category">Digital Trends</div></a
                                            >
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="/blog-categories/industry-spotlight" class="property-category-block w-inline-block"
                                                ><div class="icon">chevron_right</div>
                                                <div class="category">Industry Spotlight</div></a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="widget">
                                <div class="sidebar-title">Tags</div>
                                <div class="w-dyn-list">
                                    <div role="list" class="tags-container w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="/blog-tags/design" class="tag-button">Design</a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="/blog-tags/tech-talk" class="tag-button">Tech Talk</a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="/blog-tags/business-buzz" class="tag-button">Business Buzz</a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="/blog-tags/digital-trends" class="tag-button">Digital Trends</a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="/blog-tags/industry-spotlight" class="tag-button">Industry Spotlight</a>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="/blog-tags/creative-corner" class="tag-button">Creative Corner</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="blur-div-470px-size right-middle"></div>
                        </div>
                        <div class="full-width w-dyn-list">
                            <div
                                data-w-id="6dae297c-b538-2197-6d8e-712641568c75"
                                style="
                                    opacity: 1;
                                    transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style: preserve-3d;
                                "
                                role="list"
                                class="vertical-blog-list-40px w-dyn-items"
                                data-aos="fade-left"
                                data-aos-delay="300"
                            >
                                <div
                                    role="listitem"
                                    class="w-dyn-item"
                                    data-aos="fade-up"
                                    data-aos-delay="400"
                                    v-for="(blog, index) in blogs"
                                    :key="blog.id"
                                >
                                    <div class="blog-card">
                                        <a :href="`/blog/${blog.slug}`" class="blog-thumbnail-mask w-inline-block">
                                            <img alt="" loading="lazy" width="70" :src="blog.img" class="blog-thumbnail-list" />
                                        </a>
                                        <div class="blog-body">
                                            <a :href="`/blog/${blog.slug}`" class="mask w-inline-block">
                                                <h3 class="blog-card-title">{{ blog.title }}</h3>
                                                <div class="margin-top-20px">
                                                    <p class="neutral-300">{{ blog.desc }}</p>
                                                </div>
                                            </a>
                                            <div class="margin-top-40px">
                                                <router-link
                                                    :to="{
                                                        name: 'blog-detail',
                                                        params: {
                                                            id: blog.slug,
                                                        },
                                                    }"
                                                    class="blog-button w-inline-block"
                                                >
                                                    <div>Read more</div>
                                                    <div class="icon">east</div>
                                                </router-link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blur-div-470px-size middle-top"></div>
                    <div class="blur-div-470px-size right-middle"></div>
                </div>
            </section>
        </div>
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
