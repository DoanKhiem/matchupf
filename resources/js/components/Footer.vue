<script setup lang="ts">
import { useI18n } from 'vue-i18n';

const { t } = useI18n();
</script>

<template>
    <footer id="footer" class="footer-section">
        <div class="container">
            <div id="cta" class="cta-banner">
                <div class="w-layout-grid cta-grid">
                    <div
                        id="w-node-1"
                        class="cta-contents">
                        <div class="_24px-title-secondary">{{ t('footer.cta.subtitle') }}</div>
                        <h2 class="cta-heading">{{ t('footer.cta.title') }}</h2>
                        <div class="margin-40px">
                            <p style="color: #F13400;">
                                {{ t('footer.cta.description') }}
                            </p>
                        </div>
                        <a href="/contact" class="primary-button w-inline-block">
                            <div class="button-text-wrapper">
                                <div class="default-text">{{ t('footer.cta.button') }}</div>
                                <div class="hover-text">{{ t('footer.cta.button') }}</div>
                            </div>
                            <div class="icon-18px">chevron_right</div>
                        </a>
                    </div>
                    <img
                        src="/images/vd2d1.png"
                        loading="lazy"
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 81vw, (max-width: 1279px) 450px, 600px"
                        alt=""
                        class="cta-image"
                        />
                </div>
            </div>
        </div>
        <div class="footer with-margin">
            <div class="container">
                <div class="footer-wrapper">
                    <div class="footer-columns">
                        <div id="w-node-2" class="footer-block _1st-block">
                            <div class="border-white border rounded-md p-2">
                                <img src="/images/logo.png" loading="lazy" width="70" alt="" class="site-logo " />
                            </div>
                            <div class="footer-info-block">
                                <p class="footer-paragraph">{{ t('footer.contact.address') }}</p>
                            </div>
                            <div class="w-layout-vflex _11px-gap">
                                <div class="w-layout-hflex left-center-12px-gap">
                                    <img src="/images/customer-service-line.svg" loading="lazy" alt="" class="image-24px" />
                                    <div class="_20px-title-neutral-100">{{ t('footer.contact.phone') }}</div>
                                </div>
                                <div class="w-layout-hflex left-center-12px-gap">
                                    <img src="/images/mail-send-line.svg" loading="lazy" alt="" class="image-24px" />
                                    <div class="_20px-title-neutral-100">{{ t('footer.contact.email') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-block">
                            <div class="footer-title-24px-white">{{ t('footer.links.title') }}</div>
                            <div class="footer-list">
                                <a href="/" aria-current="page" class="footer-link w--current">{{ t('footer.links.home') }}</a>
                                <a href="/about" class="footer-link">{{ t('footer.links.about') }}</a>
                                <a href="/contact" class="footer-link">{{ t('footer.links.contact') }}</a>
                                <!-- <a href="/pricing" class="footer-link">Pricing</a>
                                <a href="/blog" class="footer-link">Blog</a>
                                <a href="/blog-2" class="footer-link">Blog-2</a> -->
                            </div>
                        </div>
                        <!-- <div id="w-node-3" class="footer-block">
                            <div class="footer-title-24px-white">Pages</div>
                            <div class="footer-list">
                                <a href="/faq" class="footer-link">FAQ</a><a href="/contact" class="footer-link">Contact us</a
                                ><a href="/#404" class="footer-link">404 Page</a><a href="/utility/license" class="footer-link">License</a
                                ><a href="/utility/change-log" class="footer-link">Changelog</a>
                            </div>
                        </div> -->
                        <div id="w-node-4" class="footer-block newsletter-footer-block">
                            <div class="footer-title-24px-white">{{ t('footer.newsletter.title') }}</div>
                            <div class="newsletter-form w-form">
                                <form
                                    id="email-form"
                                    name="email-form"
                                    data-name="Email Form"
                                    method="get"
                                    class="newsletter-form-block"
                                    data-wf-page-id="6645e06843781558142958ae"
                                    data-wf-element-id="f3d2bd98-c442-9223-dca0-662629658eaa"
                                    aria-label="Email Form"
                                >
                                    <input
                                        class="newsletter-input w-input"
                                        maxlength="256"
                                        name="Newsletter-Email-2"
                                        data-name="Newsletter Email 2"
                                        :placeholder="t('footer.newsletter.placeholder')"
                                        type="email"
                                        id="Newsletter-Email-2"
                                        required
                                    /><input type="submit" data-wait="Please wait..." class="newsletter-submit-button w-button" value="" />
                                </form>
                                <div class="success-message w-form-done" tabindex="-1" role="region" aria-label="Email Form success">
                                    <div>{{ t('footer.newsletter.success') }}</div>
                                </div>
                                <div class="error-message w-form-fail" tabindex="-1" role="region" aria-label="Email Form failure">
                                    <div>{{ t('footer.newsletter.error') }}</div>
                                </div>
                            </div>
                            <div>
                                <div class="_20px-title-white">{{ t('footer.social.title') }}</div>
                                <div class="margin-top-14px">
                                    <div class="footer-social-icon-contianer">
                                        <a href="https://www.facebook.com/profile.php?id=61575035703640" target="_blank" class="social-icon-transparent"></a>
                                        <!-- <a href="https://twitter.com/ThemeNcode" target="_blank" class="social-icon-transparent twitter"></a>
                                        <a href="https://pinterest.com/ThemeNcode" target="_blank" class="social-icon-transparent pinterest"></a> -->
                                        <a
                                            href="https://www.linkedin.com/company/matchupfast"
                                            target="_blank"
                                            class="social-icon-transparent linkedin"
                                            ></a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-copyright">
                        <div class="footer-copyright-text">{{ t('footer.copyright') }}</div>
                        <!-- <div class="copyrights-divider white">|</div>
                        <a href="https://webflow.com/templates/designers/themencode" target="_blank" class="footer-copyright-text with-hover"
                            >Designed by ThemeNcode LLC</a
                        >
                        <div class="copyrights-divider white">|</div>
                        <a href="https://webflow.com/" target="_blank" class="footer-copyright-text with-hover">Powered By Webflow</a> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
@import '@css/main.css';
</style>
