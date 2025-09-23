<script setup lang="ts">
import HomeLayout from '@/layouts/HomeLayout.vue';
import pastryLapisHalfPrune from '/resources/images/site/pastry-lapis-half-prune-1.jpg' // gambar hanya bisa diakses dari folder resources
import pastryLapisWholePrune from '/resources/images/site/pastry-lapis-whole-prune-1.jpg'
import pastryLapisBitesOri from '/resources/images/site/pastry-lapis-bites-ori.jpg'
import pastryQuicheSalmon from '/resources/images/site/pastry-quiche-salmon-2.jpg'
import pastryMadeleine from '/resources/images/site/pastry-madeleine-1.jpg'
import pastrySoes from '/resources/images/site/pastry-soes-1.jpg'
import pastryCookiesChocoChip from '/resources/images/site/pastry-cookies-choco-chip-1.jpg'

</script>

<template>
    <HomeLayout>
        <!-- <div class="px-4 pt-2">
            <img :src="titleGelatoPricelist" alt="gelato-pricelist" class="mx-auto xl:w-3/4">
        </div> -->
        <div class="bg-white shadow drop-shadow rounded p-2">
            <div class="flex justify-center mt-3">
                <h1 class="sevillana-bold-italic text-[#63abe5] text-5xl">Pastry Pricelist</h1>
            </div>

            <div class="mt-5 grid grid-cols-1 gap-4">
                <div class="relative">
                    <div class="flex gap-2">
                        <h2 class="jua-400 text-rose-300 text-xl">Lapis Legit Whole</h2>
                        <span class="barlow-condensed-300 text-rose-300">(20x20 cm)</span>
                    </div>
                    <table class="w-full barlow-condensed-300 text-gray-600">
                        <tbody>
                            <tr><td>Original</td><td class="text-right">640 K</td></tr>
                            <tr><td>Prunes</td><td class="text-right">695 K</td></tr>
                        </tbody>
                    </table>
                    <div class="absolute top-2/3 left-3/4 -translate-x-1/2 -translate-y-1/2 size-16 -z-10 rounded-full overflow-hidden">
                        <img :src="pastryLapisWholePrune" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="relative">
                    <div class="flex gap-2">
                        <h2 class="jua-400 text-rose-300 text-xl">Lapis Legit Half</h2>
                        <span class="barlow-condensed-300 text-rose-300">(10x20 cm)</span>
                    </div>
                    <table class="w-full barlow-condensed-300 text-gray-600">
                        <tbody>
                            <tr><td>Original</td><td class="text-right">125 K</td></tr>
                            <tr><td>Prunes</td><td class="text-right">145 K</td></tr>
                        </tbody>
                    </table>
                    <div class="absolute top-2/3 left-3/4 -translate-x-1/2 -translate-y-1/2 size-16 -z-10 rounded-full overflow-hidden">
                        <img :src="pastryLapisHalfPrune" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="relative">
                    <div class="flex gap-2">
                        <h2 class="jua-400 text-rose-300 text-xl">Lapis Legit Bites</h2>
                        <span class="barlow-condensed-300 text-rose-300">(10 pcs)</span>
                    </div>
                    <table class="w-full barlow-condensed-300 text-gray-600">
                        <tbody>
                            <tr><td>Original</td><td class="text-right">125 K</td></tr>
                            <tr><td>Prunes</td><td class="text-right">145 K</td></tr>
                        </tbody>
                    </table>
                    <div class="absolute top-2/3 left-3/4 -translate-x-1/2 -translate-y-1/2 size-16 -z-10 rounded-full overflow-hidden">
                        <img :src="pastryLapisBitesOri" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="relative">
                    <div class="flex gap-2">
                        <h2 class="jua-400 text-rose-300 text-xl">Mini Quiche</h2>
                        <span class="barlow-condensed-300 text-rose-300">(9 pcs)</span>
                    </div>
                    <table class="w-full barlow-condensed-300 text-gray-600">
                        <tbody>
                            <tr><td>Smoked beef & spinach</td><td class="text-right">145 K</td></tr>
                            <tr><td>Salmon & spinach</td><td class="text-right">160 K</td></tr>
                            <tr><td>Mixed</td><td class="text-right">160 K</td></tr>
                        </tbody>
                    </table>
                    <div class="absolute top-2/3 left-3/4 -translate-x-1/2 -translate-y-1/2 size-16 -z-10 rounded-full overflow-hidden shadow drop-shadow">
                        <img :src="pastryQuicheSalmon" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="relative">
                    <div class="flex justify-between">
                        <div class="flex gap-2">
                            <h2 class="jua-400 text-rose-300 text-xl">Madeleines</h2>
                            <span class="barlow-condensed-300 text-rose-300">(10 pcs)</span>
                        </div>
                        <span class="barlow-condensed-300 text-gray-600">95 K</span>
                    </div>
                    <div class="absolute top-2/3 left-1/2 -translate-x-1/2 -translate-y-1/2 size-16 -z-10 rounded-full overflow-hidden shadow drop-shadow">
                        <img :src="pastryMadeleine" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="relative">
                    <div class="flex justify-between">
                        <div class="flex gap-2">
                            <h2 class="jua-400 text-rose-300 text-xl">Classic Kue Soes</h2>
                            <span class="barlow-condensed-300 text-rose-300">(9 pcs with vla)</span>
                        </div>
                        <span class="barlow-condensed-300 text-gray-600">110 K</span>
                    </div>
                    <div class="absolute top-2/3 left-3/4 -translate-x-1/2 -translate-y-1/2 size-16 -z-10 rounded-full overflow-hidden shadow drop-shadow">
                        <img :src="pastrySoes" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="relative">
                    <h2 class="jua-400 text-rose-300 text-xl">Choco Chip Cookies</h2>
                    <table class="w-full barlow-condensed-300 text-gray-600">
                        <tbody>
                            <tr><td>4 pcs</td><td class="text-right">68 K</td></tr>
                            <tr><td>6 pcs</td><td class="text-right">90 K</td></tr>
                        </tbody>
                    </table>
                    <div class="absolute top-2/3 left-1/2 -translate-x-1/2 -translate-y-1/2 size-16 -z-10 rounded-full overflow-hidden shadow drop-shadow">
                        <img :src="pastryCookiesChocoChip" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
                <div>
                    <div class="flex gap-2">
                        <h2 class="jua-400 text-rose-300 text-xl">Premium Bolu Jadul</h2>
                        <span class="barlow-condensed-300 text-rose-300">(10x20 cm)</span>
                    </div>
                    <table class="w-full barlow-condensed-300 text-gray-600">
                        <tbody>
                            <tr><td>Original</td><td class="text-right">145 K</td></tr>
                            <tr><td>Pandan</td><td class="text-right">160 K</td></tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="flex gap-2">
                        <h2 class="jua-400 text-rose-300 text-xl">Raspberry Choco Almond Brownies</h2>
                        <span class="barlow-condensed-300 text-rose-300">(10x20 cm)</span>
                    </div>
                    <table class="w-full barlow-condensed-300 text-gray-600">
                        <tbody>
                            <tr><td>Original</td><td class="text-right">145 K</td></tr>
                            <tr><td>Pandan</td><td class="text-right">160 K</td></tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="flex gap-2">
                        <h2 class="jua-400 text-rose-300 text-xl">Premium Marble Cake</h2>
                        <span class="barlow-condensed-300 text-rose-300">(10x20 cm)</span>
                    </div>
                    <table class="w-full barlow-condensed-300 text-gray-600">
                        <tbody>
                            <tr><td>Original</td><td class="text-right">145 K</td></tr>
                            <tr><td>Pandan</td><td class="text-right">160 K</td></tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="flex justify-between">
                        <div class="flex gap-2">
                            <h2 class="jua-400 text-rose-300 text-xl">Nutella / Biscoff Puff</h2>
                            <span class="barlow-condensed-300 text-rose-300">(9 pcs)</span>
                        </div>
                        <span class="barlow-condensed-300 text-gray-600">90 K</span>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between">
                        <div class="flex gap-2">
                            <h2 class="jua-400 text-rose-300 text-xl">Banana Choco Cake</h2>
                        </div>
                        <span class="barlow-condensed-300 text-gray-600">175 K</span>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between">
                        <div class="flex gap-2">
                            <h2 class="jua-400 text-rose-300 text-xl">Bolu Tape Keju</h2>
                        </div>
                        <span class="barlow-condensed-300 text-gray-600">140 K</span>
                    </div>
                </div>
            </div>
        </div>
    </HomeLayout>
</template>


