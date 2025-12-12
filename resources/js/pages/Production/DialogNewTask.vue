<script setup>
import Button from '@/components/ui/button/Button.vue';
import { router } from '@inertiajs/vue3'
import { LoaderCircle } from 'lucide-vue-next';
import { ref } from 'vue';

/**
 * emit for hiding DialogNewTask
 */
const emit = defineEmits(['hide-dialog-new-task']);
function handleHideDialogNewTask() {
    emit('hide-dialog-new-task');
}

/**
 * Metode untuk menetapkan customer dan product pada tanggal terkait
 */
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

</script>

<template>
    <div class="absolute left-0 top-0 right-0 bottom-0 bg-gray-200 opacity-50 z-10" @click="handleHideDialogNewTask"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-11/12 z-20 bg-white rounded shadow drop-shadow p-4 w-5/6">
        <div class="mt-5 text-center">
            <Button type="button" class="bg-emerald-400" @click="handleAddTask">
                <LoaderCircle v-if="processing" class="size-4 animate-spin" />
                Add Production Date

            </Button>
        </div>
    </div>
</template>