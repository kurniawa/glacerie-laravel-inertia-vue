<script setup lang="ts">
import iconGlacerie from '~/images/icons/icon-glacerie-blue.png'
import logoShopee from '~/images/icons/logo-shopee.png'
import logoTikTok from '~/images/icons/logo-tiktok.png'
import logoGoFood from '~/images/icons/logo-gofood.png'
</script>

<template>
    <nav class="px-4 pt-4">
        <div class="flex justify-evenly">
            <a :href="route('home')">
                <div class="w-3xs h-16 overflow-hidden">
                    <img :src="iconGlacerie" class="h-full w-full object-cover object-center" />
                </div>
            </a>
            <div>Test</div>
        </div>
        <div class="bg-rose-300 py-2">
            <div class="flex justify-evenly">
                <ul class="flex items-center gap-2 text-white font-bold">
                    <li><a :href="route('menu')">Menu</a></li>
                    <li>|</li>
                </ul>
                <ul class="flex items-center">
                    <li><a href="https://gofood.link/a/BiQb8MJ" target="_blank"><img :src="logoGoFood" alt="logo-gofood" class="w-16 h-8 bg-white px-1"></a></li>
                    <li><a href="https://vm.tiktok.com/ZMAFgWwE4/" target="_blank"><img :src="logoTikTok" alt="logo-tiktok" class="w-9 h-7"></a></li>
                    <li><a href="https://shopee.co.id/glacerieid" target="_blank"><img :src="logoShopee" alt="logo-shopee" class="size-7"></a></li>
                </ul>
            </div>

        </div>
    </nav>
    <main>
        <slot />
    </main>
</template>
