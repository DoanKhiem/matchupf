<script setup lang="ts">
import { router } from '@inertiajs/vue3';
import { useI18n } from 'vue-i18n';

interface Category {
    id: number;
    title: string;
    description: string;
    jobs_count: number;
}

defineProps<{
    categories: Category[]
}>();

const { t } = useI18n();

const goToCategory = (category: Category) => {
    router.visit(route('job.category', { 
        slug: category.title.toLowerCase().replace(/\s+/g, '-') 
    }));
};
</script>

<template>
    <section class="section">
        <div class="container">
            <div data-aos="fade-up" class="title-wrapper">
                <div class="mask">
                    <h2 class="heading">
                        {{ t('home.categories.title') }}
                    </h2>
                </div>
                <div class="mask">
                    <p class="_16px-500">
                        {{ t('home.categories.description') }}
                    </p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="_2-column-block">
                <div data-delay="4000" data-animation="slide" class="testimonial-slider-3-col w-slider static"
                    data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false"
                    data-autoplay-limit="0" data-nav-spacing="4" data-duration="500" data-infinite="true" role="region"
                    aria-label="carousel">
                    <div class="mask-18 w-slider-mask" id="w-slider-mask-0">
                        <div v-for="category in categories" :key="category.id" class="margin-right-30px w-slide" role="group">
                            <div class="w-dyn-list">
                                <div role="list" class="w-dyn-items">
                                    <div role="listitem" class="w-dyn-item">
                                        <div class="job-category-card" @click="goToCategory(category)" style="cursor: pointer;">
                                            <div class="category-icon">
                                                <img src="/images/pencil-ruler-2-line.png" loading="lazy" alt=""
                                                    class="image-24px" />
                                            </div>
                                            <h6 class="category-title">{{ category.title }}</h6>
                                            <div class="category-text-mask">
                                                <p>
                                                    {{ category.description }}
                                                </p>
                                            </div>
                                            <div class="vertical-center-align">
                                                <div class="text-merge">
                                                    <div class="_16px-700-uppercase-secondary">{{ category.jobs_count }}</div>
                                                    <div class="_16px-700-uppercase-secondary">{{ t('home.categories.jobs') }}</div>
                                                </div>
                                            </div>
                                            <div style="height: 0%; display: flex" class="category-hover">
                                                <div class="secondary-button w-inline-block" style="opacity: 0">
                                                    <div class="button-text-wrapper">
                                                        <div class="default-text">{{ t('home.categories.viewJob') }}</div>
                                                        <!-- <div class="hover-text">{{ t('home.categories.viewJob') }}</div> -->
                                                    </div>
                                                    <div class="icon-18px">chevron_right</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
@import '@css/main.css';
</style>