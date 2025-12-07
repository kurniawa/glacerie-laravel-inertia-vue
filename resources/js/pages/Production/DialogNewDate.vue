<script setup>
import DatePicker from '@/components/DatePicker.vue';
import Button from '@/components/ui/button/Button.vue';
import { today } from '@internationalized/date';
import axios from 'axios';
import { LoaderCircle } from 'lucide-vue-next';
import { ref } from 'vue';

const selectedDate = ref(today("asia/jakarta"));
const processing = ref(false);
function handleAddProductionDate() {
    processing.value = true;
    // Convert date object ke format YYYY-MM-DD
    const formattedDate =
        `${selectedDate.value.year}-${String(selectedDate.value.month).padStart(2, '0')}-${String(selectedDate.value.day).padStart(2, '0')}`;
    console.log(formattedDate)
    // Kirim ke backend
    axios.post('/production/add-production-date', {
        production_date: formattedDate,
    })
    .then(res => {
        console.log("Success:", res.data);
        // Bisa emit, atau close modal, dll...
    })
    .catch(err => {
        console.error("Error:", err);
    });

    processing.value = false;
}

</script>

<template>
    <div class="absolute left-0 top-0 right-0 bottom-0 bg-gray-200 opacity-50 z-10"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-11/12 z-20 bg-white rounded shadow drop-shadow p-4 w-5/6">
        <DatePicker label="Pick a date/day" v-model="selectedDate"/>
        <div class="mt-5 text-center">
            <Button type="button" class="bg-emerald-400" @click="handleAddProductionDate">
                <LoaderCircle v-if="processing" class="size-4 animate-spin" />
                Add Production Date

            </Button>
        </div>
    </div>
</template>