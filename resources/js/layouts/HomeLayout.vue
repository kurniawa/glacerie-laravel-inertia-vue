<script setup lang="ts">
import iconGlacerie from '~/images/icons/icon-glacerie-blue.png'
import logoShopee from '~/images/icons/logo-shopee.png'
</script>

<template>
    <nav class="p-4">
        <div>
            <a href="#">
                <div class="w-3xs h-16 overflow-hidden">
                    <img :src="iconGlacerie" class="h-full w-full object-cover object-center" />
                </div>
            </a>
        </div>
        <div class="bg-rose-300 py-2">
            <div class="flex justify-evenly">
                <ul><li><a href="#"></a></li></ul>
                <ul>
                    <li><a href="https://www.freepnglogos.com/images/shopee-logo-40483.html"><img :src="logoShopee" alt="logo-shopee" class="size-7"></a></li>
                </ul>
            </div>

        </div>
    </nav>
    <main>
        <slot />
    </main>
</template>
