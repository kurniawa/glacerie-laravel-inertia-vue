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
    <footer>
        <div class="bg-rose-100 flex justify-evenly items-center p-2 jua-300">
            <a href="https://www.instagram.com/glacerie.id/" target="_blank" class="flex gap-1 items-center bg-rose-200 shadow drop-shadow rounded pr-2 py-1">
                <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="size-7">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M20.445 5h-8.891A6.559 6.559 0 0 0 5 11.554v8.891A6.559 6.559 0 0 0 11.554 27h8.891a6.56 6.56 0 0 0 6.554-6.555v-8.891A6.557 6.557 0 0 0 20.445 5zm4.342 15.445a4.343 4.343 0 0 1-4.342 4.342h-8.891a4.341 4.341 0 0 1-4.341-4.342v-8.891a4.34 4.34 0 0 1 4.341-4.341h8.891a4.342 4.342 0 0 1 4.341 4.341l.001 8.891z"></path>
                        <path d="M16 10.312c-3.138 0-5.688 2.551-5.688 5.688s2.551 5.688 5.688 5.688 5.688-2.551 5.688-5.688-2.55-5.688-5.688-5.688zm0 9.163a3.475 3.475 0 1 1-.001-6.95 3.475 3.475 0 0 1 .001 6.95zM21.7 8.991a1.363 1.363 0 1 1-1.364 1.364c0-.752.51-1.364 1.364-1.364z"></path>
                    </g>
                </svg>
                <span>Glacerie.id</span>
            </a>
            <a href="https://wa.me/6282123537979" target="_blank" class="flex gap-1 items-center bg-rose-200 shadow drop-shadow rounded px-2 py-1">
                <svg fill="#000000" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" class="size-6">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>whatsapp</title>
                        <path d="M26.576 5.363c-2.69-2.69-6.406-4.354-10.511-4.354-8.209 0-14.865 6.655-14.865 14.865 0 2.732 0.737 5.291 2.022 7.491l-0.038-0.070-2.109 7.702 7.879-2.067c2.051 1.139 4.498 1.809 7.102 1.809h0.006c8.209-0.003 14.862-6.659 14.862-14.868 0-4.103-1.662-7.817-4.349-10.507l0 0zM16.062 28.228h-0.005c-0 0-0.001 0-0.001 0-2.319 0-4.489-0.64-6.342-1.753l0.056 0.031-0.451-0.267-4.675 1.227 1.247-4.559-0.294-0.467c-1.185-1.862-1.889-4.131-1.889-6.565 0-6.822 5.531-12.353 12.353-12.353s12.353 5.531 12.353 12.353c0 6.822-5.53 12.353-12.353 12.353h-0zM22.838 18.977c-0.371-0.186-2.197-1.083-2.537-1.208-0.341-0.124-0.589-0.185-0.837 0.187-0.246 0.371-0.958 1.207-1.175 1.455-0.216 0.249-0.434 0.279-0.805 0.094-1.15-0.466-2.138-1.087-2.997-1.852l0.010 0.009c-0.799-0.74-1.484-1.587-2.037-2.521l-0.028-0.052c-0.216-0.371-0.023-0.572 0.162-0.757 0.167-0.166 0.372-0.434 0.557-0.65 0.146-0.179 0.271-0.384 0.366-0.604l0.006-0.017c0.043-0.087 0.068-0.188 0.068-0.296 0-0.131-0.037-0.253-0.101-0.357l0.002 0.003c-0.094-0.186-0.836-2.014-1.145-2.758-0.302-0.724-0.609-0.625-0.836-0.637-0.216-0.010-0.464-0.012-0.712-0.012-0.395 0.010-0.746 0.188-0.988 0.463l-0.001 0.002c-0.802 0.761-1.3 1.834-1.3 3.023 0 0.026 0 0.053 0.001 0.079l-0-0.004c0.131 1.467 0.681 2.784 1.527 3.857l-0.012-0.015c1.604 2.379 3.742 4.282 6.251 5.564l0.094 0.043c0.548 0.248 1.25 0.513 1.968 0.74l0.149 0.041c0.442 0.14 0.951 0.221 1.479 0.221 0.303 0 0.601-0.027 0.889-0.078l-0.031 0.004c1.069-0.223 1.956-0.868 2.497-1.749l0.009-0.017c0.165-0.366 0.261-0.793 0.261-1.242 0-0.185-0.016-0.366-0.047-0.542l0.003 0.019c-0.092-0.155-0.34-0.247-0.712-0.434z"></path>
                    </g>
                </svg>
                <span>0821 2353 7979</span>
            </a>
        </div>
        <div class="bg-rose-300 text-white text-center p-2 barlow-condensed-300">
            &copy; 2024 Glacerie. All rights reserved.
        </div>
    </footer>
</template>
