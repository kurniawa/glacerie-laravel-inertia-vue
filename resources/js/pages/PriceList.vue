<script setup lang="ts">
import HomeLayout from '@/layouts/HomeLayout.vue';
// import titleGelatoPricelist from '~/images/site/gelato-pricelist.png'
import gelatoGiandujaRounded from '/resources/images/site/gelato-gianduja-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoMintStraciatellaRounded from '/resources/images/site/gelato-mint_straciatella-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoMangoSorbetRounded from '/resources/images/site/gelato-mango_sorbet-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoFiordilatteStraciatellaRounded from '/resources/images/site/gelato-fiordilatte_straciatella-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoVanillaBiscoffRounded from '/resources/images/site/gelato-vanilla_biscoff-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoYuzuRounded from '/resources/images/site/gelato-yuzu-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoCoffeeCookiesAndCreamRounded from '/resources/images/site/gelato-coffee_cookies_and_cream-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoPistachioRounded from '/resources/images/site/gelato-pistachio-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoMatchaRounded from '/resources/images/site/gelato-matcha-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoUbeRounded from '/resources/images/site/gelato-ube-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoHojichaRounded from '/resources/images/site/gelato-hojicha-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoExtraDarkChocolateSorbetRounded from '/resources/images/site/gelato-extra_dark_chocolate_sorbet-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoStrawberrySorbetRounded from '/resources/images/site/gelato-strawberry_sorbet-rounded.png' // gambar hanya bisa diakses dari folder resources
import gelatoPeachSorbetRounded from '/resources/images/site/gelato-peach_sorbet-rounded.png' // gambar hanya bisa diakses dari folder resources

</script>

<template>
    <HomeLayout>
        <!-- <div class="px-4 pt-2">
            <img :src="titleGelatoPricelist" alt="gelato-pricelist" class="mx-auto xl:w-3/4">
        </div> -->
        <div class="bg-white shadow drop-shadow rounded p-2">
            <div class="flex justify-center mt-3">
                <span class="sevillana-bold-italic text-[#63abe5] text-5xl">Gelato Pricelist</span>
            </div>
            <div class="flex justify-center mt-5 items-center gap-4">
                <div class="flex gap-4">
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                </div>
                <span class="jua-600 text-rose-300 text-2xl tracking-widest text-center">REGULAR<br>FLAVOR</span>
                <div class="flex gap-4">
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                </div>
            </div>
            <!-- Regular Flavor -->
            <div class="grid grid-cols-3 gap-x-1 gap-y-8 justify-items-center mt-5 auto-cols-max">
                <div class="col-span-1">
                    <div class="w-28 relative">
                        <div class="flex justify-center">
                            <img :src="gelatoGiandujaRounded" alt="" class="drop-shadow-lg size-16" />
                        </div>
                        <!-- <div class="text-center mt-3 open-sans-400">Gianduja<br><span>(Chocolate Hazelnut)</span></div>
                        <div class="text-center mt-3 roboto-slab-400">Gianduja<br><span>(Chocolate Hazelnut)</span></div>
                        <div class="text-center mt-3 barlow-condensed-regular">Gianduja<br><span>(Chocolate Hazelnut)</span></div>
                        <div class="text-center mt-3 sevillana-regular">Gianduja<br><span>(Chocolate Hazelnut)</span></div> -->
                        <div class="text-center mt-3 jua-400 text-orange-900">Gianduja<br><span class="text-xs">(Chocolate Hazelnut)</span></div>
                        <div class="text-red-700 absolute bottom-14 right-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="w-28 relative">
                        <div class="flex justify-center">
                            <img :src="gelatoMintStraciatellaRounded" alt="" class="drop-shadow-lg size-16" />
                        </div>
                        <div class="text-center mt-3 jua-400 text-orange-900">Mint<br><span>Straciatella</span></div>
                        <div class="text-red-700 absolute bottom-14 right-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="w-28 relative">
                        <div class="flex justify-center">
                            <img :src="gelatoMangoSorbetRounded" alt="" class="drop-shadow-lg size-16" />
                        </div>
                        <div class="text-center mt-3 jua-400 text-orange-900">Mango<br><span>Sorbet</span></div>
                        <div class="text-white absolute bottom-13 left-0 font-bold rounded-full bg-green-600 text-xs size-10 flex items-center justify-center jua-400">Vegan</div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="flex justify-center">
                        <img :src="gelatoFiordilatteStraciatellaRounded" alt="" class="drop-shadow-lg size-16" />
                    </div>
                    <div class="text-center mt-3 jua-400 text-orange-900">Fiordilatte<br><span>Straciatella</span></div>
                </div>
                <div class="col-span-1">
                    <div class="flex justify-center">
                        <img :src="gelatoVanillaBiscoffRounded" alt="" class="drop-shadow-lg size-16" />
                    </div>
                    <div class="text-center mt-3 jua-400 text-orange-900">Vanilla<br><span>Biscoff</span></div>
                </div>
                <!-- <div class="col-span-1">
                    <div class="w-28 relative">
                        <div class="flex justify-center">
                            <img :src="gelatoYuzuRounded" alt="" class="drop-shadow-lg size-16" />
                        </div>
                        <div class="text-center mt-3 jua-400 text-orange-900">Yuzu</div>
                        <svg class="absolute -top-3 left-0 w-28 h-28" viewBox="0 0 112 112">
                            <defs>
                                <path id="curveSmall" d="M 30,50 A 40,40 0 0,1 82,30" fill="none" />
                            </defs>
                            <text fill="purple" font-size="12" font-weight="bold" text-anchor="middle">
                                <textPath href="#curveSmall" startOffset="50%">
                                Seasonal
                                </textPath>
                            </text>
                        </svg>
                    </div>
                </div> -->
                <div class="col-span-1">
                    <div class="w-28 relative">
                        <!-- Gambar -->
                        <div class="flex justify-center">
                        <img :src="gelatoYuzuRounded" alt="" class="drop-shadow-lg size-16" />
                        </div>

                        <!-- Nama -->
                        <div class="text-center mt-3 jua-400 text-orange-900">Yuzu</div>

                        <!-- SVG untuk text melengkung -->
                        <svg class="absolute -top-8 -left-2 w-28 h-28" viewBox="0 0 112 112">
                            <defs>
                                <!-- Arc kecil di kiri atas (jam 10–11) -->
                                <path id="curveSmall" d="M 25,55 A 40,40 0 0,1 65,25" fill="none" />
                            </defs>
                            <text fill="purple" font-size="12" font-weight="100" text-anchor="middle">
                                <textPath href="#curveSmall" startOffset="50%">Seasonal</textPath>
                            </text>
                        </svg>
                    </div>
                </div>

                <div class="col-span-full flex justify-center">
                    <div>
                        <div class="flex justify-center">
                            <img :src="gelatoCoffeeCookiesAndCreamRounded" alt="" class="drop-shadow-lg size-16" />
                        </div>
                        <div class="text-center mt-3 jua-400 text-orange-900">Coffee<br><span class="text-xs">Cookies & Cream</span></div>
                    </div>
                </div>
            </div>
            <div class="flex mt-5">
                <div class="flex items-center gap-5 jua-400 text-white bg-sky-300 rounded-r-full pl-5 pr-8 py-2">
                    <span>PRICE</span>
                    <div>
                        <div>IDR 43K (cup size 4 oz)</div>
                        <div>IDR 105K (jar size 300 ml)</div>
                    </div>
                </div>
            </div>
            <!-- End: Regular Flavor -->
            <!-- PREMIUM FLAVOR -->
             <div class="flex justify-center mt-5 items-center gap-4">
                <div class="flex gap-4">
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                </div>
                <span class="jua-600 text-rose-300 text-2xl tracking-widest text-center">PREMIUM<br>FLAVOR</span>
                <div class="flex gap-4">
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                    <div class="size-3 rounded-full bg-[#63abe5]"></div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-x-1 gap-y-8 justify-items-center mt-5 auto-cols-max">
                <div class="col-span-1">
                    <div class="w-28 relative">
                        <div class="flex justify-center">
                            <img :src="gelatoPistachioRounded" alt="" class="drop-shadow-lg size-16" />
                        </div>
                        <div class="text-center mt-3 jua-400 text-orange-900">Pistachio</div>
                        <div class="text-red-700 absolute bottom-8 right-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="w-28">
                        <div class="flex justify-center">
                            <img :src="gelatoMatchaRounded" alt="" class="drop-shadow-lg size-16" />
                        </div>
                        <div class="text-center mt-3 jua-400 text-orange-900">Matcha</div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="w-28 relative">
                        <div class="flex justify-center">
                            <img :src="gelatoUbeRounded" alt="" class="drop-shadow-lg size-16" />
                        </div>
                        <div class="text-center mt-3 jua-400 text-orange-900">Ube</div>
                        <svg class="absolute -top-8 -left-2 w-28 h-28" viewBox="0 0 112 112">
                            <defs>
                                <path id="curveSmall" d="M 25,55 A 40,40 0 0,1 65,25" fill="none" />
                            </defs>
                            <text fill="purple" font-size="12" font-weight="100" text-anchor="middle">
                                <textPath href="#curveSmall" startOffset="50%">Seasonal</textPath>
                            </text>
                        </svg>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="w-28 relative">
                        <div class="flex justify-center">
                            <img :src="gelatoHojichaRounded" alt="" class="drop-shadow-lg size-16" />
                        </div>
                        <div class="text-center mt-3 jua-400 text-orange-900">Hojicha</div>
                        <svg class="absolute -top-8 -left-2 w-28 h-28" viewBox="0 0 112 112">
                            <defs>
                                <path id="curveSmall" d="M 25,55 A 40,40 0 0,1 65,25" fill="none" />
                            </defs>
                            <text fill="purple" font-size="12" font-weight="100" text-anchor="middle">
                                <textPath href="#curveSmall" startOffset="50%">Seasonal</textPath>
                            </text>
                        </svg>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="w-28 relative">
                        <div class="flex justify-center">
                            <img :src="gelatoExtraDarkChocolateSorbetRounded" alt="" class="drop-shadow-lg size-16" />
                        </div>
                        <div class="text-center mt-3 jua-400 text-orange-900">Extra Dark<br><span class="text-xs">Chcolate Sorbet</span></div>
                        <svg class="absolute -top-8 -left-2 w-28 h-28" viewBox="0 0 112 112">
                            <defs>
                                <path id="curveSmall" d="M 25,55 A 40,40 0 0,1 65,25" fill="none" />
                            </defs>
                            <text fill="purple" font-size="12" font-weight="100" text-anchor="middle">
                                <textPath href="#curveSmall" startOffset="50%">Seasonal</textPath>
                            </text>
                        </svg>
                        <div class="text-white absolute bottom-13 left-0 font-bold rounded-full bg-green-600 text-xs size-10 flex items-center justify-center jua-400">Vegan</div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="w-28 relative">
                        <div class="flex justify-center">
                            <img :src="gelatoStrawberrySorbetRounded" alt="" class="drop-shadow-lg size-16" />
                        </div>
                        <div class="text-center mt-3 jua-400 text-orange-900">Strawberry<br><span>Sorbet</span></div>
                        <div class="text-white absolute bottom-13 left-0 font-bold rounded-full bg-green-600 text-xs size-10 flex items-center justify-center jua-400">Vegan</div>
                    </div>
                </div>
                <div class="col-span-full flex justify-center">
                    <div class="w-28 relative">
                        <div class="flex justify-center">
                            <img :src="gelatoPeachSorbetRounded" alt="" class="drop-shadow-lg size-16" />
                        </div>
                        <div class="text-center mt-3 jua-400 text-orange-900">Peach<br><span>Sorbet</span></div>
                        <svg class="absolute -top-8 -left-2 w-28 h-28" viewBox="0 0 112 112">
                            <defs>
                                <path id="curveSmall" d="M 25,55 A 40,40 0 0,1 65,25" fill="none" />
                            </defs>
                            <text fill="purple" font-size="12" font-weight="100" text-anchor="middle">
                                <textPath href="#curveSmall" startOffset="50%">Seasonal</textPath>
                            </text>
                        </svg>
                        <div class="text-white absolute bottom-13 left-0 font-bold rounded-full bg-green-600 text-xs size-10 flex items-center justify-center jua-400">Vegan</div>
                    </div>
                </div>
            </div>
            <div class="flex mt-5">
                <div class="flex items-center gap-5 jua-400 text-white bg-sky-300 rounded-r-full pl-5 pr-8 py-2">
                    <span>PRICE</span>
                    <div>
                        <div>IDR 53K (cup size 4 oz)</div>
                        <div>IDR 109K (jar size 300 ml)</div>
                    </div>
                </div>
            </div>
            <!-- END: PREMIUM FLAVOR -->
        </div>
    </HomeLayout>
</template>


