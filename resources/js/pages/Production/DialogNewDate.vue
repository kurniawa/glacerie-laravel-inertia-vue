<script setup>
import DatePicker from '@/components/DatePicker.vue';
import Button from '@/components/ui/button/Button.vue';
import { today } from '@internationalized/date';
import { ref } from 'vue';

const selectedDate = ref(today("asia/jakarta"));

</script>

<template>
    <div class="absolute left-0 top-0 right-0 bottom-0 bg-gray-200 opacity-50 z-10"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-11/12 z-20 bg-white rounded shadow drop-shadow p-4 w-5/6">
        <DatePicker label="Pick a date/day" v-model="selectedDate"/>
        <div class="mt-5 text-center">
            <Button type="submit" class="bg-emerald-400">Add Production Date</Button>
        </div>
        <p>{{ selectedDate }}</p>
    </div>
</template>