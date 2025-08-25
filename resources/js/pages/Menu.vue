<script setup lang="ts">
import HomeLayout from '@/layouts/HomeLayout.vue';
import titleGelatoPricelist from '~/images/site/gelato-pricelist.png'

</script>

<template>
    <HomeLayout>
        <div class="px-4 pt-2">
            <img :src="titleGelatoPricelist" alt="gelato-pricelist" class="mx-auto xl:w-3/4">
        </div>
    </HomeLayout>
</template>