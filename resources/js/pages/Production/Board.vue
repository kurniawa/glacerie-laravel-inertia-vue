<script setup>
import Button from '@/components/ui/button/Button.vue';
import MainLayout from '@/layouts/MainLayout.vue';
import { Plus } from 'lucide-vue-next';
import { ref } from 'vue';
import DialogNewDate from './DialogNewDate.vue';
import DatePicker from '@/components/DatePicker.vue';
import { usePage } from '@inertiajs/vue3';

const props = defineProps({
    //
});

const activeTab = ref('active');
const activeClass = ref('bg-sky-400 text-white font-bold');
function switchTab(tab) {
    activeTab.value = tab;
}

// show and hide DialogNewDate
const showDialogNewDate = ref(false);

function toggleDialogNewDate() {
    showDialogNewDate.value = !showDialogNewDate.value;
}

/**
 * Flash Messages
 */
const page = usePage();
const flashSuccess = page.props.flash?.success;
</script>

<template>
    <MainLayout>
        <div class="flex justify-between">
            <div class="flex gap-1">
                <button @click="switchTab('active')" class="rounded-xl shadow drop-shadow px-3 py-1" :class="activeTab === 'active' ? activeClass : ''">active</button>
                <button @click="switchTab('finished')" class="rounded-xl shadow drop-shadow px-3 py-1" :class="activeTab === 'finished' ? activeClass : ''">finished</button>
                <button @click="switchTab('all')" class="rounded-xl shadow drop-shadow px-3 py-1" :class="activeTab === 'all' ? activeClass : ''">all</button>
            </div>
            <button type="button" @click="toggleDialogNewDate">
                <component :is="Plus" class="size-5 bg-emerald-400 text-white rounded hover:cursor-pointer" />
            </button>
        </div>
        <!-- flash messages -->
         <!-- <div v-if="flashSuccess" class="p-3 bg-green-100 text-green-900 rounded mb-4">
            {{ flashSuccess }}
        </div> -->
        <DialogNewDate v-if="showDialogNewDate" @hide-dialog-new-date="toggleDialogNewDate"/>
        <!-- <DatePicker /> -->
    </MainLayout>
</template>