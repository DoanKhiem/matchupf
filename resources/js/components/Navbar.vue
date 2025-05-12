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
                                    <Link :href="route('home')" class="nav-link" :class="{ 'w--current': $page.url === '/' }">Home</Link>
                                </div>
                            </li>
                            <li class="nav-list">
                                <div class="nav-icon-and-text-wrapper">
                                    <Link :href="route('jobs')" class="nav-link" :class="{ 'w--current': $page.url.startsWith('/jobs') }">Jobs</Link>
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
                                            'w--current': ['/about', '/pricing', '/faq', '/contact', '/post-a-job-restricted'].includes($page.url),
                                        }"
                                        id="w-dropdown-toggle-1"
                                        aria-controls="w-dropdown-list-1"
                                        aria-haspopup="menu"
                                        aria-expanded="false"
                                        role="button"
                                        tabindex="0"
                                    >
                                        <div>CV</div>
                                        <div
                                            class="icon-20px"
                                            style="
                                                transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                                    skew(0deg, 0deg);
                                                transform-style: preserve-3d;
                                            "
                                        >
                                            keyboard_arrow_down
                                        </div>
                                    </div>
                                    <nav
                                        class="dropdown-options w-dropdown-list"
                                        id="w-dropdown-list-1"
                                        aria-labelledby="w-dropdown-toggle-1"
                                        style="
                                            display: none;
                                            opacity: 0;
                                            transform: translate3d(0px, 20px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
                                                skew(0deg, 0deg);
                                            transform-style: preserve-3d;
                                        "
                                    >
                                        <div class="nav-dropdown-contents-fastfood">
                                            <Link
                                                href="/about"
                                                class="submenu-link w-dropdown-link"
                                                :class="{ 'w--current': $page.url === '/about' }"
                                                tabindex="0"
                                                >About</Link
                                            >
                                            <Link
                                                href="/pricing"
                                                class="submenu-link w-dropdown-link"
                                                :class="{ 'w--current': $page.url === '/pricing' }"
                                                tabindex="0"
                                                >Pricing</Link
                                            >
                                            <Link
                                                href="/faq"
                                                class="submenu-link w-dropdown-link"
                                                :class="{ 'w--current': $page.url === '/faq' }"
                                                tabindex="0"
                                                >FAQ</Link
                                            >
                                            <Link
                                                href="/contact"
                                                class="submenu-link w-dropdown-link"
                                                :class="{ 'w--current': $page.url === '/contact' }"
                                                tabindex="0"
                                                >Contact</Link
                                            >
                                            <Link
                                                href="/post-a-job-restricted"
                                                class="submenu-link w-dropdown-link"
                                                :class="{
                                                    'w--current': $page.url === '/post-a-job-restricted',
                                                }"
                                                tabindex="0"
                                                >Post A Job - Restricted</Link
                                            >
                                        </div>
                                    </nav>
                                </div>
                            </li>
                            <li class="nav-list">
                                <div class="nav-icon-and-text-wrapper">
                                    <Link :href="route('blogs')" class="nav-link" :class="{ 'w--current': $page.url.startsWith('/blogs') }">Blogs</Link>
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
                    <!-- <Link :href="route('login')" class="login-link w-inline-block"
                        ><img src="/images/user-line.svg" loading="lazy" alt="" class="image-16px" />
                        <div>Log in</div>
                    </Link> -->
                    <Link data-w-id="d8d360e1-f645-321f-d65f-94a46da5403d" :href="route('login')" class="nav-button w-inline-block"
                        ><img src="/images/edit-line.svg" loading="lazy" alt="" height="Auto" class="image-24px" />
                        <div class="button-text-wrapper">
                            <div
                                class="default-text"
                                style="
                                    transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style: preserve-3d;
                                "
                            >
                                Post A Job
                            </div>
                            <div
                                class="hover-text"
                                style="
                                    transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
                                    transform-style: preserve-3d;
                                "
                            >
                                Post A Job
                            </div>
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
                            <Link :href="route('home')" class="nav-link" :class="{ 'w--current': $page.url === '/' }">Home</Link>
                        </div>
                    </li>
                    <li class="nav-list">
                        <div class="nav-icon-and-text-wrapper">
                            <Link :href="route('jobs')" class="nav-link" :class="{ 'w--current': $page.url === '/jobs' }">Jobs</Link>
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
                                    'w--current': ['/about', '/pricing', '/faq', '/contact', '/post-a-job-restricted'].includes($page.url),
                                }"
                                id="w-dropdown-toggle-1-mobile"
                                aria-controls="w-dropdown-list-1-mobile"
                                aria-haspopup="menu"
                                aria-expanded="false"
                                role="button"
                                tabindex="0"
                            >
                                <div>CV</div>
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
                                        >About</Link
                                    >
                                    <Link
                                        href="/pricing"
                                        class="submenu-link w-dropdown-link"
                                        :class="{ 'w--current': $page.url === '/pricing' }"
                                        tabindex="0"
                                        >Pricing</Link
                                    >
                                    <Link
                                        href="/faq"
                                        class="submenu-link w-dropdown-link"
                                        :class="{ 'w--current': $page.url === '/faq' }"
                                        tabindex="0"
                                        >FAQ</Link
                                    >
                                    <Link
                                        href="/contact"
                                        class="submenu-link w-dropdown-link"
                                        :class="{ 'w--current': $page.url === '/contact' }"
                                        tabindex="0"
                                        >Contact</Link
                                    >
                                    <Link
                                        href="/post-a-job-restricted"
                                        class="submenu-link w-dropdown-link"
                                        :class="{ 'w--current': $page.url === '/post-a-job-restricted' }"
                                        tabindex="0"
                                        >Post A Job - Restricted</Link
                                    >
                                </div>
                            </nav>
                        </div>
                    </li>
                    <li class="nav-list">
                        <div class="nav-icon-and-text-wrapper">
                            <Link :href="route('blogs')" class="nav-link" :class="{ 'w--current': $page.url === '/blogs' }">Blog</Link>
                        </div>
                    </li>
                    <!-- <li class="nav-list">
                        <Link :href="route('login')" class="login-link w-inline-block">
                            <img src="/images/user-line.svg" loading="lazy" alt="" class="image-16px" />
                            <div>Log in</div>
                        </Link>
                    </li> -->
                    <li class="list-for-button-icon">
                        <Link data-w-id="d8d360e1-f645-321f-d65f-94a46da5403d" :href="route('login')" class="nav-button w-inline-block">
                            <img src="/images/edit-line.svg" loading="lazy" alt="" height="Auto" class="image-24px" />
                            <div class="button-text-wrapper">
                                <div class="default-text">Post A Job</div>
                                <div class="hover-text">Post A Job</div>
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
import { ref } from 'vue';
const $page = usePage();
const isMenuOpen = ref<boolean>(false);
</script>

<style scoped>
.nav-link.w--current {
    color: #36c2ce;
    font-weight: bold;
}

.submenu-link.w--current {
    color: #36c2ce;
    font-weight: bold;
}
</style>

<style scoped>
@import '@css/main.css';
</style>
