<script setup lang="ts">
import HomeLayout from '@/layouts/HomeLayout.vue';
// import titleGelatoPricelist from '~/images/site/gelato-pricelist.png'
import gelatoGiandujaRounded from '/resources/images/site/gelato-gianduja-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoMintStraciatellaRounded from '/resources/images/site/gelato-mint_straciatella-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoMangoSorbetRounded from '/resources/images/site/gelato-mango_sorbet-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoFiordilatteStraciatellaRounded from '/resources/images/site/gelato-fiordilatte_straciatella-rounded.png' // gambar hanya bisa diakses dari folder resources

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
            <div class="flex gap-1 justify-center mt-5 auto-cols-max">
                <div class="w-48 relative">
                    <div class="flex justify-center">
                        <img :src="gelatoGiandujaRounded" alt="" class="drop-shadow-lg size-28" />
                    </div>
                    <!-- <div class="text-center mt-3 open-sans-400">Gianduja<br><span>(Chocolate Hazelnut)</span></div>
                    <div class="text-center mt-3 roboto-slab-400">Gianduja<br><span>(Chocolate Hazelnut)</span></div>
                    <div class="text-center mt-3 barlow-condensed-regular">Gianduja<br><span>(Chocolate Hazelnut)</span></div>
                    <div class="text-center mt-3 sevillana-regular">Gianduja<br><span>(Chocolate Hazelnut)</span></div> -->
                    <div class="text-center mt-3 jua-400 text-xl text-orange-900">Gianduja<br><span>(Chocolate Hazelnut)</span></div>
                    <div class="text-red-700 absolute bottom-16 right-7">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                            <path d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z" />
                        </svg>
                    </div>
                </div>
                <div class="w-48">
                    <div class="flex justify-center">
                        <img :src="gelatoMintStraciatellaRounded" alt="" class="drop-shadow-lg size-28" />
                    </div>
                    <div class="text-center mt-3 jua-400 text-xl text-orange-900">Mint<br><span>Straciatella</span></div>
                </div>
                <div class="w-48">
                    <div class="flex justify-center">
                        <img :src="gelatoMangoSorbetRounded" alt="" class="drop-shadow-lg size-28" />
                    </div>
                    <div class="text-center mt-3 jua-400 text-xl text-orange-900">Mango<br><span>Sorbet</span></div>
                </div>
                <div class="w-48">
                    <div class="flex justify-center">
                        <img :src="gelatoFiordilatteStraciatellaRounded" alt="" class="drop-shadow-lg size-28" />
                    </div>
                    <div class="text-center mt-3 jua-400 text-xl text-orange-900">Fiordilatte<br><span>Straciatella</span></div>
                </div>
            </div>
        </div>
    </HomeLayout>
</template>