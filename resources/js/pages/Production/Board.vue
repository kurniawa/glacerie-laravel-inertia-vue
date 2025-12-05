<script setup>
import Button from '@/components/ui/button/Button.vue';
import MainLayout from '@/layouts/MainLayout.vue';
import { Plus } from 'lucide-vue-next';
import { ref } from 'vue';
import DialogNewDate from './DialogNewDate.vue';
import DatePicker from '@/components/DatePicker.vue';

const props = defineProps({
    //
});

const activeTab = ref('active');
const activeClass = ref('bg-sky-400 text-white font-bold');
function switchTab(tab) {
    activeTab.value = tab;
}

</script>

<template>
    <MainLayout>
        <div class="flex justify-between">
            <div class="flex gap-1">
                <button @click="switchTab('active')" class="rounded-xl shadow drop-shadow px-3 py-1" :class="activeTab === 'active' ? activeClass : ''">active</button>
                <button @click="switchTab('finished')" class="rounded-xl shadow drop-shadow px-3 py-1" :class="activeTab === 'finished' ? activeClass : ''">finished</button>
                <button @click="switchTab('all')" class="rounded-xl shadow drop-shadow px-3 py-1" :class="activeTab === 'all' ? activeClass : ''">all</button>
            </div>
            <DialogNewDate />
        </div>
        <!-- <DatePicker /> -->
    </MainLayout>
</template>