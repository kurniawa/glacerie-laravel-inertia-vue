<script setup lang="ts">
import HomeLayout from '@/layouts/HomeLayout.vue';
import titleGelatoPricelist from '~/images/site/gelato-pricelist.png'

</script>

<template>
    <HomeLayout>
        <!-- <div class="px-4 pt-2">
            <img :src="titleGelatoPricelist" alt="gelato-pricelist" class="mx-auto xl:w-3/4">
        </div> -->
        <div class="mx-4 bg-white shadow drop-shadow rounded p-2">
            <div class="flex justify-center mt-3">
                <span class="sevillana-bold-italic text-[#63abe5] text-9xl">Gelato Pricelist</span>
            </div>
            <div class="flex justify-center mt-10 items-center gap-8">
                <div class="flex gap-7">
                    <div class="size-6 rounded-full bg-[#63abe5]"></div>
                    <div class="size-6 rounded-full bg-[#63abe5]"></div>
                    <div class="size-6 rounded-full bg-[#63abe5]"></div>
                    <div class="size-6 rounded-full bg-[#63abe5]"></div>
                    <div class="size-6 rounded-full bg-[#63abe5]"></div>
                    <div class="size-6 rounded-full bg-[#63abe5]"></div>
                </div>
                <span class="jua-600 text-rose-300 text-5xl tracking-widest text-center">REGULAR FLAVOR</span>
                <div class="flex gap-7">
                    <div class="size-6 rounded-full bg-[#63abe5]"></div>
                    <div class="size-6 rounded-full bg-[#63abe5]"></div>
                    <div class="size-6 rounded-full bg-[#63abe5]"></div>
                    <div class="size-6 rounded-full bg-[#63abe5]"></div>
                    <div class="size-6 rounded-full bg-[#63abe5]"></div>
                    <div class="size-6 rounded-full bg-[#63abe5]"></div>
                </div>
            </div>
        </div>
    </HomeLayout>
</template>