<script setup lang="ts">
import HomeLayout from '@/layouts/HomeLayout.vue';
import titleGelatoPricelist from '~/images/site/gelato-pricelist.png'

</script>

<template>
    <HomeLayout>
        <div class="px-4 pt-2">
            <img :src="titleGelatoPricelist" alt="gelato-pricelist" class="mx-auto xl:w-3/4">
        </div>
        <div class="flex justify-center">
            <span class="sevillana-bold-italic text-shadow-blue-400 text-white text-9xl">Gelato Pricelist</span>
        </div>
        <div class="flex justify-center mt-10">
            <span class="jua-400 text-rose-400 text-5xl tracking-wider">REGULAR FLAVOR</span>
        </div>
    </HomeLayout>
</template>