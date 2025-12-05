<script setup>
import draggable from 'vuedraggable'
import { router } from '@inertiajs/vue3'
import { ref } from 'vue'
import MainLayout from '@/layouts/MainLayout.vue'
import AddProduct from './AddProduct.vue'
import Button from '@/components/ui/button/Button.vue'

const props = defineProps({
    days: Array,       // data 7 hari dengan tasks di dalamnya
    start_date: String,
    product_variants: Object
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

const addedToDay = (evt, dayIndex) => {
  const variant = evt.item.__draggable_context.element;

  const newTask = {
    id: variant.id, // karena belum tersimpan
    product: `${variant.display_name}(${variant.size} ${variant.unit})`,
    // quantity: variant.size,
    production_date: columns.value[dayIndex].date,
    product_variant_id: variant.id
  };

  // Replace the placeholder
  columns.value[dayIndex].tasks.splice(evt.newIndex, 1, newTask);
};

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

// Product Variants
const productVariantsClass = ref('hidden');
const boardClass = ref('');
const dayColumnsClass = ref('grid grid-cols-3 gap-1');
function toggleProductVariants() {
    productVariantsClass.value = productVariantsClass.value === 'hidden' ? '' : 'hidden';
    if (productVariantsClass.value === 'hidden') {
        boardClass.value = '';
        dayColumnsClass.value = 'grid grid-cols-3 gap-1';
    } else {
        boardClass.value = 'grid grid-cols-2 gap-1';
        dayColumnsClass.value = 'grid grid-cols-1 gap-1';
    }
}
function hideProductVariants() {
    productVariantsClass.value = 'hidden';
}
</script>

<template>
    <MainLayout>
        <div :class="boardClass" class="text-xs">
            <AddProduct :product_variants="product_variants" :class="productVariantsClass" @hide-variants="hideProductVariants"/>
            <div>
              <div class="text-right">
                  <Button variant="outline" size="sm" @click="toggleProductVariants">
                      Toggle Product Variants
                  </Button>
              </div>
              <div :class="dayColumnsClass">
                  <div v-for="(day, index) in columns" :key="day.date" class="border rounded bg-gray-50 w-full min-h-36">
                      <div class="text-center py-1 border-b">
                          <h3 class="font-bold">{{ day.date }}</h3>
                      </div>
              
                      <draggable
                        v-model="day.tasks"
                        group="tasks"
                        item-key="id"
                        class=""
                        @add="addedToDay($event, index)"
                        @end="movedAcrossDays"
                      >
                      <template #item="{element}">
                          <div class="p-2 bg-white border rounded shadow-sm">
                          {{ element.product }}
                          </div>
                      </template>
                      </draggable>
                  </div>
              </div>
            </div>
        </div>
    </MainLayout>
</template>
