<script setup>
import draggable from 'vuedraggable'
import { router } from '@inertiajs/vue3'
import { ref } from 'vue'
import HomeLayout from '@/layouts/HomeLayout.vue'

const props = defineProps({
  days: Array,       // data 7 hari dengan tasks di dalamnya
  start_date: String
})

// make the days reactive
const columns = ref(JSON.parse(JSON.stringify(props.days)))

const saveChanges = (dayIndex) => {
  const day = columns.value[dayIndex]

  router.post('/production/update', {
    date: day.date,
    tasks: day.tasks.map((task, index) => ({
      id: task.id,
      position: index + 1,
    }))
  }, {
    preserveScroll: true,
    preserveState: true,
  })
}

const movedAcrossDays = () => {
  // Kirim semua kolom ke backend
  const payload = columns.value.map((day, i) => ({
    date: day.date,
    tasks: day.tasks.map((t, idx) => ({
      id: t.id,
      position: idx + 1,
      production_date: day.date
    }))
  }))

  router.post('/production/update-multiple', { data: payload })
}

</script>

<template>
    <HomeLayout>
        <div class="grid grid-cols-3 gap-1 overflow-hidden text-xs">
            <div v-for="(day, index) in columns" :key="day.date" class="border rounded bg-gray-50 w-full min-h-36">
                <div class="text-center py-1 border-b">
                    <h3 class="font-bold">{{ day.date }}</h3>
                </div>
        
                <draggable
                v-model="day.tasks"
                group="tasks"
                @end="movedAcrossDays"
                item-key="id"
                class="space-y-2"
                >
                <template #item="{element}">
                    <div class="p-2 bg-white border rounded shadow-sm">
                    {{ element.product }} ({{ element.quantity }})
                    </div>
                </template>
                </draggable>
            </div>
        </div>
    </HomeLayout>
</template>
