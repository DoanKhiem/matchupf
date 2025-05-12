<script setup lang="ts">
import AppLogoIcon from '@/components/AppLogoIcon.vue';
</script>

<template>
    <div class="flex aspect-square size-8 items-center justify-center rounded-md  text-sidebar-primary-foreground">
        <!-- <AppLogoIcon class="size-5 fill-current text-white dark:text-black" /> -->
        <img src="/images/logo-no-text.png" loading="lazy" width="70" alt="" class="site-logo " />
    </div>
    <div class="ml-1 grid flex-1 text-left text-sm">
        <span class="truncate font-semibold leading-none text-[#f7931e]">Matchupfast</span>
    </div>
</template>
