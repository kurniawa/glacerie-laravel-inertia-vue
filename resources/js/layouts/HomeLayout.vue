<script setup lang="ts">
import iconGlacerie from '~/images/icons/icon-glacerie-blue.png'
import logoShopee from '~/images/icons/logo-shopee.png'
import logoTikTok from '~/images/icons/logo-tiktok.png'
import logoGoFood from '~/images/icons/logo-gofood.png'
import { Link, router } from '@inertiajs/vue3'
import { onBeforeUnmount, onMounted, ref } from 'vue'

const loading = ref(false)
const showSidebar = ref(false)
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
    <nav>
        <div class="bg-rose-300">
            <div class="flex justify-evenly items-center">
                <Link :href="route('home')">
                    <div class="w-28 h-16 overflow-hidden">
                        <img :src="iconGlacerie" class="h-full w-full object-cover object-center" />
                    </div>
                </Link>
                <!-- <ul class="fles -->
                <ul class="flex items-center">
                    <li class="mr-2 text-white barlow-condensed-300">available on:</li>
                    <li><a href="https://gofood.link/a/BiQb8MJ" target="_blank"><img :src="logoGoFood" alt="logo-gofood" class="w-16 h-8 bg-white px-1"></a></li>
                    <li><a href="https://vm.tiktok.com/ZMAFgWwE4/" target="_blank"><img :src="logoTikTok" alt="logo-tiktok" class="w-9 h-7"></a></li>
                    <li><a href="https://shopee.co.id/glacerieid" target="_blank"><img :src="logoShopee" alt="logo-shopee" class="size-7"></a></li>
                </ul>
                <button type="button" @click="showSidebar = !showSidebar" class="border border-white rounded hover:cursor-pointer active::shadow-md active:shadow-blue-500/50 active:ring active:ring-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-7 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    <div class="fixed w-screen h-screen bg-slate-400 opacity-50 top-0 left-0 z-10"
        :class="{'hidden': !showSidebar}" @click="showSidebar = false"></div>
    <nav class="grid grid-cols-1 items-center fixed inset-y-0 left-0 w-64 bg-white shadow-lg transform transition-transform duration-300 ease-in-out z-50"
        :class="showSidebar ? 'translate-x-0' : '-translate-x-full'">
        <ul class="text-gray-400 font-bold text-sm">
            <li class="py-3 px-2 border-y"><Link :href="route('price-list')" class="hover:bg-slate-100 active:bg-slate-100"><span class="">Price List</span></Link></li>
        </ul>
    </nav>
    <main class="w-screen p-2 overflow-hidden">
        <slot />
    </main>
</template>
