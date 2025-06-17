<template>
    <div
        data-animation="over-right"
        class="navbar w-nav"
        data-easing2="ease"
        data-easing="ease"
        data-collapse="medium"
        data-w-id="6999f335-005a-f68f-bf29-0723f291d072"
        role="banner"
        data-duration="400"
        id="navbar"
        style="background-color: rgb(255, 255, 255)"
    >
        <nav class="container">
            <div class="navbar-wrapper">
                <div class="nav-logo-menu-wrapper">
                    <Link href="/" aria-current="page" class="site-logo-wrapper w-nav-brand w--current" aria-label="home"
                        ><img src="/images/logo.png" loading="lazy" width="70" alt="" class="site-logo"
                    /></Link>
                    <nav role="navigation" class="nav-menu-wrapper w-nav-menu">
                        <ul role="list" class="nav-menu w-list-unstyled">
                            <li class="nav-list">
                                <div class="nav-icon-and-text-wrapper">
                                    <Link :href="route('home')" class="nav-link" :class="{ 'w--current': $page.url === '/' }">{{ t('navbar.home') }}</Link>
                                </div>
                            </li>
                            <li class="nav-list">
                                <div class="nav-icon-and-text-wrapper">
                                    <Link :href="route('jobs')" class="nav-link" :class="{ 'w--current': $page.url.startsWith('/jobs') }">{{ t('navbar.jobs') }}</Link>
                                </div>
                            </li>
                            <!-- <li class="nav-list">
                                <div class="nav-icon-and-text-wrapper"><a href="/companies"
                                        class="nav-link">Companies</a></div>
                            </li> -->
                            <li class="nav-list-for-dropdown">
                                <div
                                    data-hover="true"
                                    data-delay="0"
                                    data-w-id="4ef02e47-0ea5-5857-a6ac-bbd1e53c8ba5"
                                    class="nav-link-dropdown w-dropdown"
                                >
                                    <div
                                        class="nav-link w-dropdown-toggle"
                                        :class="{
                                            'w--current': ['/about', '/pricing', '/faq', '/post-a-job-restricted'].includes($page.url),
                                        }"
                                        id="w-dropdown-toggle-1"
                                        aria-controls="w-dropdown-list-1"
                                        aria-haspopup="menu"
                                        aria-expanded="false"
                                        role="button"
                                        tabindex="0"
                                    >
                                        <div>{{ t('navbar.cv') }}</div>
                                        <div
                                            class="icon-20px"
                                           >
                                            keyboard_arrow_down
                                        </div>
                                    </div>
                                    <nav
                                        class="dropdown-options w-dropdown-list"
                                        id="w-dropdown-list-1"
                                        aria-labelledby="w-dropdown-toggle-1"
                                        >
                                        <div class="nav-dropdown-contents-fastfood">
                                            <Link
                                                href="/about"
                                                class="submenu-link w-dropdown-link"
                                                :class="{ 'w--current': $page.url === '/about' }"
                                                tabindex="0"
                                                >{{ t('navbar.about') }}</Link
                                            >
                                            <Link
                                                href="/pricing"
                                                class="submenu-link w-dropdown-link"
                                                :class="{ 'w--current': $page.url === '/pricing' }"
                                                tabindex="0"
                                                >{{ t('navbar.pricing') }}</Link
                                            >
                                            <Link
                                                href="/faq"
                                                class="submenu-link w-dropdown-link"
                                                :class="{ 'w--current': $page.url === '/faq' }"
                                                tabindex="0"
                                                >{{ t('navbar.faq') }}</Link
                                            >
                                            <Link
                                                href="/contact"
                                                class="submenu-link w-dropdown-link"
                                                :class="{ 'w--current': $page.url === '/contact' }"
                                                tabindex="0"
                                                >{{ t('navbar.contact') }}</Link
                                            >
                                            <Link
                                                href="/post-a-job-restricted"
                                                class="submenu-link w-dropdown-link"
                                                :class="{
                                                    'w--current': $page.url === '/post-a-job-restricted',
                                                }"
                                                tabindex="0"
                                                >{{ t('navbar.postJobRestricted') }}</Link
                                            >
                                        </div>
                                    </nav>
                                </div>
                            </li>
                            <li class="nav-list">
                                <div class="nav-icon-and-text-wrapper">
                                    <Link :href="route('blogs')" class="nav-link" :class="{ 'w--current': $page.url.startsWith('/blogs') }">{{ t('navbar.news') }}</Link>
                                </div>
                            </li>
                            <li class="nav-list">
                                <div class="nav-icon-and-text-wrapper">
                                    <Link :href="route('contact')" class="nav-link" :class="{ 'w--current': $page.url.startsWith('/contact') }">{{ t('navbar.contact') }}</Link>
                                </div>
                            </li>
                            <!-- <li class="list-for-button-icon"><a data-w-id="d8d360e1-f645-321f-d65f-94a46da5403d"
                                    href="/post-a-job" class="nav-button w-inline-block"><img
                                        src="@/assets/images/edit-line.svg"
                                        loading="lazy" alt="" height="Auto" class="image-24px">
                                    <div class="button-text-wrapper">
                                        <div class="default-text">Post A Job</div>
                                        <div class="hover-text">Post A Job</div>
                                    </div>
                                </a></li> -->
                        </ul>
                    </nav>
                </div>
                <div class="hide-from-tablet-horizontal">
                    <div class="language-select-wrapper">
                        <div class="language-select" @click="isLanguageOpen = !isLanguageOpen">
                            <img :src="`/images/${currentLanguage.flag}.png`" alt="" class="image-flag">
                            <span>{{ currentLanguage.name }}</span>
                            <div class="icon-20px">keyboard_arrow_down</div>
                        </div>
                        <div v-if="isLanguageOpen" class="language-dropdown">
                            <div 
                                v-for="lang in languages" 
                                :key="lang.code"
                                class="language-option"
                                @click="changeLanguage(lang.code); isLanguageOpen = false"
                            >
                                <img :src="`/images/${lang.flag}.png`" alt="" class="image-flag">
                                <span>{{ lang.name }}</span>
                            </div>
                        </div>
                    </div>
                    <Link data-w-id="d8d360e1-f645-321f-d65f-94a46da5403d" :href="route('login')" class="nav-button w-inline-block"
                        ><img src="/images/edit-line.svg" loading="lazy" alt="" height="Auto" class="image-24px" />
                        <div class="button-text-wrapper">
                            <div class="default-text"  >
                                {{ t('navbar.postJob') }}
                            </div>
                            <!-- <div class="hover-text" >
                                {{ t('navbar.postJob') }}
                            </div> -->
                        </div>
                    </Link>
                </div>
                <div
                    class="menu-button w-nav-button"
                    style="-webkit-user-select: text"
                    aria-label="menu"
                    role="button"
                    tabindex="0"
                    aria-controls="w-nav-overlay-0"
                    aria-haspopup="menu"
                    aria-expanded="false"
                >
                    <div class="hamburger-icon" :style="isMenuOpen ? 'display: none' : 'display: block'" @click="isMenuOpen = true">menu</div>
                    <div class="cross-icon" :style="isMenuOpen ? 'display: block' : 'display: none'" @click="isMenuOpen = false">cancel</div>
                </div>
            </div>
        </nav>
        <div
            class="w-nav-overlay"
            data-wf-ignore=""
            id="w-nav-overlay-0"
            :style="isMenuOpen ? 'height: 100vh; display: block; width: 260px' : 'display: none'"
        >
            <nav
                role="navigation"
                class="nav-menu-wrapper w-nav-menu"
                data-nav-menu-open=""
                :style="isMenuOpen ? 'height: 100vh; transition: all, transform 400ms; transform: translateX(0px)' : 'display: none'"
            >
                <ul role="list" class="nav-menu w-list-unstyled">
                    <li class="nav-list">
                        <div class="nav-icon-and-text-wrapper">
                            <Link :href="route('home')" class="nav-link" :class="{ 'w--current': $page.url === '/' }">{{ t('navbar.home') }}</Link>
                        </div>
                    </li>
                    <li class="nav-list">
                        <div class="nav-icon-and-text-wrapper">
                            <Link :href="route('jobs')" class="nav-link" :class="{ 'w--current': $page.url === '/jobs' }">{{ t('navbar.jobs') }}</Link>
                        </div>
                    </li>
                    <!-- <li class="nav-list">
            <div class="nav-icon-and-text-wrapper"><a href="/companies"
                class="nav-link">Companies</a></div>
          </li> -->
                    <li class="nav-list-for-dropdown">
                        <div data-hover="true" data-delay="0" data-w-id="4ef02e47-0ea5-5857-a6ac-bbd1e53c8ba5" class="nav-link-dropdown w-dropdown">
                            <div
                                class="nav-link w-dropdown-toggle"
                                :class="{
                                    'w--current': ['/about', '/pricing', '/faq', '/post-a-job-restricted'].includes($page.url),
                                }"
                                id="w-dropdown-toggle-1-mobile"
                                aria-controls="w-dropdown-list-1-mobile"
                                aria-haspopup="menu"
                                aria-expanded="false"
                                role="button"
                                tabindex="0"
                            >
                                <div>{{ t('navbar.cv') }}</div>
                                <div class="icon-20px">keyboard_arrow_down</div>
                            </div>
                            <nav
                                class="dropdown-options w-dropdown-list"
                                id="w-dropdown-list-1-mobile"
                                aria-labelledby="w-dropdown-toggle-1-mobile"
                                style="
                                    display: none;
                                    opacity: 0;
                                    transform: translate3d(0px, 20px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style: preserve-3d;
                                "
                            >
                                <div class="nav-dropdown-contents-fastfood">
                                    <Link
                                        href="/about"
                                        class="submenu-link w-dropdown-link"
                                        :class="{ 'w--current': $page.url === '/about' }"
                                        tabindex="0"
                                        >{{ t('navbar.about') }}</Link
                                    >
                                    <Link
                                        href="/pricing"
                                        class="submenu-link w-dropdown-link"
                                        :class="{ 'w--current': $page.url === '/pricing' }"
                                        tabindex="0"
                                        >{{ t('navbar.pricing') }}</Link
                                    >
                                    <Link
                                        href="/faq"
                                        class="submenu-link w-dropdown-link"
                                        :class="{ 'w--current': $page.url === '/faq' }"
                                        tabindex="0"
                                        >{{ t('navbar.faq') }}</Link
                                    >
                                    <Link
                                        href="/contact"
                                        class="submenu-link w-dropdown-link"
                                        :class="{ 'w--current': $page.url === '/contact' }"
                                        tabindex="0"
                                        >{{ t('navbar.contact') }}</Link
                                    >
                                    <Link
                                        href="/post-a-job-restricted"
                                        class="submenu-link w-dropdown-link"
                                        :class="{ 'w--current': $page.url === '/post-a-job-restricted' }"
                                        tabindex="0"
                                        >{{ t('navbar.postJobRestricted') }}</Link
                                    >
                                </div>
                            </nav>
                        </div>
                    </li>
                    <li class="nav-list">
                        <div class="nav-icon-and-text-wrapper">
                            <Link :href="route('blogs')" class="nav-link" :class="{ 'w--current': $page.url === '/blogs' }">{{ t('navbar.news') }}</Link>
                        </div>
                    </li>
                    <li class="nav-list">
                        <div class="nav-icon-and-text-wrapper">
                            <Link :href="route('contact')" class="nav-link" :class="{ 'w--current': $page.url === '/contact' }">{{ t('navbar.contact') }}</Link>
                        </div>
                    </li>
                    <!-- <li class="nav-list">
                        <Link :href="route('login')" class="login-link w-inline-block">
                            <img src="/images/user-line.svg" loading="lazy" alt="" class="image-16px" />
                            <div>Log in</div>
                        </Link>
                    </li> -->
                    <!-- <li class="nav-list"> -->
                        <div class="language-select-wrapper mobile-language">
                            <div class="language-select" @click="isLanguageOpen = !isLanguageOpen">
                                <img :src="`/images/${currentLanguage.flag}.png`" alt="" class="image-flag">
                                <span>{{ currentLanguage.name }}</span>
                                <div class="icon-20px">keyboard_arrow_down</div>
                            </div>
                            <div v-if="isLanguageOpen" class="language-dropdown">
                                <div 
                                    v-for="lang in languages" 
                                    :key="lang.code"
                                    class="language-option"
                                    @click="changeLanguage(lang.code); isLanguageOpen = false"
                                >
                                    <img :src="`/images/${lang.flag}.png`" alt="" class="image-flag">
                                    <span>{{ lang.name }}</span>
                                </div>
                            </div>
                        </div>
                    <!-- </li> -->
                    <li class="list-for-button-icon">
                        <Link data-w-id="d8d360e1-f645-321f-d65f-94a46da5403d" :href="route('login')" class="nav-button w-inline-block">
                            <img src="/images/edit-line.svg" loading="lazy" alt="" height="Auto" class="image-24px" />
                            <div class="button-text-wrapper">
                                <div class="default-text">{{ t('navbar.postJob') }}</div>
                                <div class="hover-text">{{ t('navbar.postJob') }}</div>
                            </div>
                        </Link>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import { useI18n } from 'vue-i18n';

const $page = usePage();
const isMenuOpen = ref<boolean>(false);
const isLanguageOpen = ref<boolean>(false);
const { t, locale } = useI18n();

const languages = [
    { code: 'vi', name: 'Tiếng Việt', flag: 'VN' },
    { code: 'en', name: 'English', flag: 'GB' }
];

const currentLanguage = computed(() => {
    return languages.find(lang => lang.code === locale.value) || languages[0];
});

const changeLanguage = (langCode: string) => {
    locale.value = langCode;
};
</script>

<style scoped>
.nav-link.w--current {
    /* color: #83C75D; */
    font-weight: 500;
}

.submenu-link.w--current {
    /* color: #83C75D; */
    font-weight: 500;
}

.language-select-wrapper {
    position: relative;
    /* margin-right: 0px; */
}

.language-select {
    display: flex;
    align-items: center;
    gap: 8px;
    background: none;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    padding: 8px 16px;
    cursor: pointer;
    font-size: 14px;
    color: #4b5563;
    transition: all 0.3s ease;
    min-width: 120px;
}

.language-dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    margin-top: 4px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    z-index: 50;
}

.language-option {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    cursor: pointer;
    transition: background-color 0.2s;
}

.language-option:hover {
    background-color: #f3f4f6;
}

.image-flag {
    width: 20px;
    height: 20px;
    object-fit: contain;
}

.mobile-language {
    margin: 16px;
    width: calc(100% - 32px);
}

.mobile-language .language-select {
    width: 100%;
    justify-content: space-between;
}

.mobile-language .language-dropdown {
    width: 100%;
    left: 0;
}
</style>

<style scoped>
@import '@css/main.css';
</style>
