<script setup lang="ts">
import iconGlacerie from '~/images/icons/icon-glacerie-blue.png'
import logoShopee from '~/images/icons/logo-shopee.png'
import logoTikTok from '~/images/icons/logo-tiktok.png'
import logoGoFood from '~/images/icons/logo-gofood.png'
import { Link, router } from '@inertiajs/vue3'
import { onBeforeUnmount, onMounted, ref } from 'vue'

const loading = ref(false)

let removeStartListener:any = null
let removeFinishListener:any = null

onMounted(() => {
  removeStartListener = router.on('start', () => {
    loading.value = true
  })
  removeFinishListener = router.on('finish', () => {
    loading.value = false
  })
})

onBeforeUnmount(() => {
  if (removeStartListener) removeStartListener()
  if (removeFinishListener) removeFinishListener()
})
</script>

<template>
    <div v-if="loading" class="absolute w-screen h-screen bg-slate-50/70 z-50">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <span class="loader"></span>
        </div>
    </div>
    <nav class="px-4 pt-4">
        <div class="flex justify-evenly">
            <Link :href="route('home')">
                <div class="w-3xs h-16 overflow-hidden">
                    <img :src="iconGlacerie" class="h-full w-full object-cover object-center" />
                </div>
            </Link>
            <div>Test</div>
        </div>
        <div class="bg-rose-300 py-2">
            <div class="flex justify-evenly">
                <ul class="flex items-center gap-2 text-white">
                    <li>|</li>
                    <li><Link :href="route('price-list')"><span class="barlow-condensed-regular font-semibold">Price List</span></Link></li>
                    <li>|</li>
                    <!-- <li><Link :href="route('menu')"><span class="roboto-slab-300">Price List</span></Link></li> -->
                    <!-- <li><Link :href="route('menu')"><span class="open-sans-300">Price List</span></Link></li> -->
                </ul>
                <ul class="flex items-center">
                    <li class="mr-2 text-white barlow-condensed-300">available on:</li>
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
