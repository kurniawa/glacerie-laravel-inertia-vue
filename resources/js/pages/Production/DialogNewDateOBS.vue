<script setup>
import {
    DialogClose,
    DialogContent,
    DialogDescription,
    DialogOverlay,
    DialogPortal,
    DialogRoot,
    DialogTitle,
    DialogTrigger,
    } from 'reka-ui'
import { LoaderCircle, Plus } from 'lucide-vue-next';
import Button from '@/components/ui/button/Button.vue';
import { ref } from 'vue';
import DatePicker from '@/components/DatePicker.vue';
const processing = ref(false);

function handleAddDate() {
    processing.value = true;
    setTimeout(() => {
        processing.value = false;
    }, 1000);
}

</script>

<template>
    <DialogRoot>
        <DialogTrigger class="shadow drop-shadow bg-emerald-400 rounded">
            <component :is="Plus" class="size-5 text-white"/>
        </DialogTrigger>
        <DialogPortal>
            <DialogOverlay class="bg-gray-200 opacity-50 data-[state=open]:animate-overlayShow fixed inset-0 z-30" />
            <DialogContent
            class="data-[state=open]:animate-contentShow fixed top-[50%] left-[50%] max-h-[85vh] w-[90vw] max-w-[450px] translate-x-[-50%] translate-y-[-50%] rounded-[6px] bg-white p-[25px] shadow-[hsl(206_22%_7%_/_35%)_0px_10px_38px_-10px,_hsl(206_22%_7%_/_20%)_0px_10px_20px_-15px] focus:outline-none z-[100]"
            >
                <DialogTitle class="text-mauve12 m-0 text-[17px] font-semibold"></DialogTitle>
                <DialogDescription class="text-mauve11 mt-[10px] mb-5 text-sm leading-normal">
                    <DatePicker />
                </DialogDescription>

                <div class="mt-[25px] flex gap-4 justify-end">
                    <!-- <DialogClose as-child>
                    <button
                        class="bg-green4 text-green11 hover:bg-green5 focus:shadow-green7 inline-flex h-[35px] items-center justify-center rounded-[4px] px-[15px] font-semibold leading-none focus:shadow-[0_0_0_2px] focus:outline-none"
                    >
                        Close
                    </button>
                    </DialogClose> -->
                    <Button type="submit" class="bg-emerald-400 text-white font-bold" :tabindex="4" :disabled="processing" @click="handleAddDate">
                        <LoaderCircle v-if="processing" class="w-4 h-4 animate-spin" />
                        Add Date
                    </Button>
                </div>
            </DialogContent>
        </DialogPortal>
    </DialogRoot>
</template>