<script setup lang="ts">
import { useI18n } from 'vue-i18n';

const { t } = useI18n();

interface Blog {
    id: number;
    title: string;
    image: string;
    slug: string;
}

defineProps<{
    blogs: Blog[];
}>();
</script>

<template>
    <section class="section">
        <div class="container">
            <div data-aos="fade-up" class="title-wrapper">
                <div class="mask">
                    <h2 class="heading">
                        {{ t('home.news.title') }}
                    </h2>
                </div>
                <div class="mask">
                    <p class="_16px-500">
                        {{ t('home.news.description') }}
                    </p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="w-layout-hflex blog-container">
                <div class="_50-block w-dyn-list">
                    <div role="list" class="padding-x-40px w-dyn-items">
                        <div role="listitem" class="w-dyn-item" v-if="blogs.length > 0">
                            <div class="w-layout-vflex featured-blog">
                                <a :href="`/blog/${blogs[0].slug}`" class="mask _10px-rounded w-inline-block">
                                    <img :src="blogs[0].image" loading="lazy" alt="" sizes="(max-width: 479px) 100vw, (max-width: 991px) 84vw, 41vw"
                                        class="featured-blog-list-thumbnail" />
                                </a>
                                <a :href="`/blog/${blogs[0].slug}`" class="margin-top-40px-bottom-50px w-inline-block">
                                    <h4 class="heading">{{ blogs[0].title }}</h4>
                                </a>
                                <a :href="`/blog/${blogs[0].slug}`" class="read-more-link w-inline-block">
                                    <div>{{ t('home.news.readMore') }}</div>
                                    <div class="icon">chevron_right</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-dyn-list contents">
                    <div role="list" class="blog-list-grid w-dyn-items">
                        <div role="listitem" class="w-dyn-item" v-for="blog in blogs.slice(1)" :key="blog.id">
                            <div class="blog-list-card">
                                <a :href="`/blog/${blog.slug}`" class="mask blog-list-thumbnail w-inline-block">
                                    <img :src="blog.image" loading="lazy" alt="" sizes="(max-width: 479px) 100vw, 200px"
                                        class="blog-list-thumbnail" />
                                </a>
                                <div class="w-layout-vflex blog-list-body">
                                    <a :href="`/blog/${blog.slug}`" class="mask w-inline-block">
                                        <h6 class="heading">{{ blog.title }}</h6>
                                    </a>
                                    <a :href="`/blog/${blog.slug}`" class="read-more-link w-inline-block">
                                        <div>{{ t('home.news.readMore') }}</div>
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
</template>

<style scoped>
@import '@css/main.css';
</style>