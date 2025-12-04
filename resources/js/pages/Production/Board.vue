<script setup>
import draggable from 'vuedraggable'
import { router } from '@inertiajs/vue3'
import { onMounted, ref } from 'vue'
import HomeLayout from '@/layouts/HomeLayout.vue'
import AddProduct from './AddProduct.vue'
import Button from '@/components/ui/button/Button.vue'

const props = defineProps({
    columns: Array,
    start_date: String,
    product_variants: Object
});

const columns = ref(JSON.parse(JSON.stringify(props.columns)))

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

const addedToCustomer = (event, dayIndex, custIndex) => {
    const movedTask = columns.value[dayIndex].customers[custIndex].tasks[event.newIndex];
    
    // contoh payload baru:
    const payload = {
        task_id: movedTask.id,
        new_date: columns.value[dayIndex].date,
        new_customer: columns.value[dayIndex].customers[custIndex].customer,
        new_position: event.newIndex,
    };

    router.post('/production/update-multiple', { data: payload });
};

const movedAcrossDays = () => {
    const payload = columns.value.map(day => ({
        date: day.date,
        customers: day.customers.map(cust => ({
        customer: cust.customer,
        tasks: cust.tasks.map((t, index) => ({
            id: t.id,
            production_date: day.date,
            customer: cust.customer,
            position: index + 1
        }))
        }))
    }));

    router.post('/production/update-multiple', { data: payload });
};

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
    <HomeLayout>
        <div :class="boardClass" class="text-xs">
            <AddProduct :product_variants="product_variants" :class="productVariantsClass" @hide-variants="hideProductVariants"/>
            <div>
                <div class="text-right">
                    <Button variant="outline" size="sm" @click="toggleProductVariants">
                        Toggle Product Variants
                    </Button>
                </div>
                <div :class="dayColumnsClass">
                    <div 
                        v-for="(day, dayIndex) in columns" 
                        :key="day.date" 
                        class="border rounded bg-gray-50 w-full p-1"
                    >
                        <!-- Header tanggal -->
                        <div class="text-center py-1 border-b">
                        <h3 class="font-bold">{{ day.date }}</h3>
                        </div>

                        <!-- Customer groups untuk hari ini -->
                        <div v-for="(cust, custIndex) in day.customers" :key="cust.customer" class="mt-2">
                        
                        <!-- Header customer -->
                        <div class="text-sm font-semibold px-1 mb-1">
                            {{ cust.customer }}
                        </div>

                        <!-- Draggable per customer -->
                        <draggable
                            v-model="cust.tasks"
                            group="tasks"
                            item-key="id"
                            class="space-y-1"
                            @add="addedToCustomer($event, dayIndex, custIndex)"
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
        </div>
    </HomeLayout>
</template>
