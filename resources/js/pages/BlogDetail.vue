<template>
    <AppLayout>
        <Head :title="t('blogDetail.title')" />
        <section id="hero" class="main-banner">
            <div class="container">
                <div class="breadcrumb-block" data-aos="fade-up">
                    <h1 class="_48-px-white-heading">{{ t('blogDetail.title') }}</h1>
                    <div class="text-merge">
                        <a href="/" class="breadcrumb">{{ t('blogDetail.breadcrumb.home') }}</a>
                        <div class="breadcrumb">/</div>
                        <a href="/blogs" class="breadcrumb">{{ t('blogDetail.breadcrumb.blogs') }}</a>
                        <div class="breadcrumb">/</div>
                        <div class="breadcrumb">{{ blog.title }}</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="page-wrapper">
            <section class="_60px-margin-section">
                <div class="container">
                    <div class="_2-column-block-top">
                        <div data-w-id="f9b2db65-7220-7c3d-fff2-999e420a1446" style="
                                opacity: 1;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            " class="sidebar" data-aos="fade-right" data-aos-delay="100">
                            <form action="/search" class="search-block w-form">
                                <input class="blog-search-field w-input" maxlength="256" name="query"
                                    :placeholder="t('blogDetail.search.placeholder')" type="search" id="search"
                                    required /><input type="submit" class="search-button w-button" value="" />
                            </form>
                            <div class="widget">
                                <div class="sidebar-title">{{ t('blogDetail.sidebar.popularPost') }}</div>
                                <div class="w-dyn-list">
                                    <div role="list" class="featured-properties-wrapper w-dyn-items">
                                        <div role="listitem" class="w-dyn-item" v-for="popularBlog in popularBlogs"
                                            :key="popularBlog.id">
                                            <div class="featured-blogs">
                                                <a :href="`/blog/${popularBlog.slug}`"
                                                    class="mask related-post w-inline-block"><img alt="" loading="lazy"
                                                        width="70" :src="popularBlog.image"
                                                        class="featured-image" /></a><a
                                                    :href="`/blog/${popularBlog.slug}`" class="mask w-inline-block">
                                                    <div class="post-title">{{ popularBlog.title }}</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- You can uncomment and modify these sections if needed -->
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
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="sidebar-title">Tags</div>
                            <div class="w-dyn-list">
                                <div role="list" class="tags-container w-dyn-items">
                                    <div role="listitem" class="w-dyn-item">
                                        <a href="/blog-tags/design" class="tag-button">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        </div>
                        <div class="main-block" style="
                                opacity: 1;
                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                transform-style: preserve-3d;
                            " data-aos="fade-left" data-aos-delay="200">
                            <img loading="lazy" width="70" :src="blog.image" alt="" class="post-image"
                                data-aos="zoom-in" data-aos-delay="300" />
                            <h2 class="blog-heading" data-aos="fade-up" data-aos-delay="400">{{ blog.title }}</h2>
                            <p class="blog-date" data-aos="fade-up" data-aos-delay="450">{{ blog.created_at }}</p>

                            <div class="rich-text-block w-richtext" data-aos="fade-up" data-aos-delay="500"
                                v-html="blog.content"></div>

                            <div class="tag-block" data-aos="fade-up" data-aos-delay="1000">
                                <!-- <div class="tag-block">
                                <div class="_18px-title">Tags:</div>
                                <div class="w-dyn-list">
                                    <div role="list" class="flex-horizontal _6px-gap w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div class="flex-horizontal">
                                                <a href="/blog-tags/tech-talk" class="link-text">Tech Talk</a>
                                                <div>,</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                                <div class="tag-block">
                                    <div class="_18px-title">{{ t('blogDetail.share.title') }}</div>
                                    <div class="social-share-icon-container">
                                        <a :href="`https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`" target="_blank"
                                            class="social-share-icon"></a>
                                        <a :href="`https://twitter.com/intent/tweet?url=${pageUrl}&text=${blog.title}`" target="_blank"
                                            class="social-share-icon twitter"></a>
                                        <a :href="`https://www.pinterest.com/pin/create/button/?url=${pageUrl}&media=${blog.image}&description=${blog.title}`" target="_blank"
                                            class="social-share-icon pinterest"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blur-div-470px-size"></div>
                    <div class="blur-div-470px-size right-middle"></div>
                    <div class="blur-div-470px-size bottom-left"></div>
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
import { computed, onMounted } from 'vue';
import { useI18n } from 'vue-i18n';

const { t } = useI18n();

interface Blog {
    id: number;
    title: string;
    image: string;
    content: string;
    created_at: string;
    slug: string;
}

interface PopularBlog {
    id: number;
    title: string;
    image: string;
    slug: string;
}

const page = usePage();
const blog = computed<Blog>(() => page.props.blog as Blog);
const popularBlogs = computed<PopularBlog[]>(() => (page.props.popularBlogs as PopularBlog[]) || []);
const pageUrl = computed(() => `${window.location.origin}/blog/${blog.value.slug}`);

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

.blog-date {
    color: #666;
    font-size: 14px;
    margin-bottom: 20px;
}

.post-image {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 30px;
}
</style>
