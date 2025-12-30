<script setup>
import Button from '@/components/ui/button/Button.vue';
import AutoComplete from '@/components/ui/input/AutoComplete.vue';
import { router } from '@inertiajs/vue3'
import { LoaderCircle } from 'lucide-vue-next';
import { computed, ref } from 'vue';

const props = defineProps({
    dateString: String,
    customers: Array,
    productVariants: Array,
});

const dateString = props.dateString ? props.dateString : new Date().toISOString().split('T')[0];

const dateObject = computed(() => new Date(dateString));
const dateOptions = {
    weekday: 'long',
    day: '2-digit',
    month: '2-digit',
    year: 'numeric',
};

// format dateObject ke string dengan keterangan hari dalam bahasa Indonesia
const formattedDate = computed(() => {
    return dateObject.value.toLocaleDateString('id-ID', dateOptions);
});

/**
 * emit for hiding DialogNewTask
 */
const emit = defineEmits(['hide-dialog-new-task']);
function handleHideDialogNewTask() {
    emit('hide-dialog-new-task');
}

const newTaskData = ref([
    { date: formattedDate.value },
]);

/**
 * Metode untuk menetapkan customer dan product pada tanggal terkait
 */

const form = ref({
    dateString: dateString,
    customer_name: '',
    customer_id: null,
    product: '',
    product_variant_id: null,
});

const processing = ref(false);
function handleAddTask() {
    processing.value = true;
    router.post('/production/add-production-task', {
        production_date: formattedDate,
    })
    setTimeout(() => {
        processing.value = false;
    }, 1000);
}

/**
 * AutoComplete customers
 */
const data = {
    table: 'customers',
    column: 'name',
    parent: null,
    parentValue: null,
};
</script>

<template>
    <div class="absolute left-0 top-0 right-0 bottom-0 bg-gray-200 opacity-50 z-10" @click="handleHideDialogNewTask"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-11/12 z-20 bg-white rounded shadow drop-shadow p-4 w-5/6">
        <div class="text-center">
            <div class="flex gap-1 items-center">
                <span class="">Plan untuk:</span>
                <h2 class="border border-slate-400 rounded-xl px-2 py-1 text-sm font-bold">{{ formattedDate }}</h2>
            </div>
            <AutoComplete
                v-model="form.customer_name"
                v-model:selected="selectedSuggestions[0].slug"
                @change="clearSuggestions"
                :data="data"
                placeholder="Customer Name"
            />
            <Button type="button" class="bg-orange-400" @click="handleAddTask">
                <LoaderCircle v-if="processing" class="size-4 animate-spin" />
                Add Task
            </Button>
        </div>
    </div>
</template>