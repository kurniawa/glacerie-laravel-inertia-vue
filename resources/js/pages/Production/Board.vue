<script setup>
import Button from '@/components/ui/button/Button.vue';
import MainLayout from '@/layouts/MainLayout.vue';
import { Plus } from 'lucide-vue-next';
import { computed, ref } from 'vue';
import DialogNewDate from './DialogNewDate.vue';
import DatePicker from '@/components/DatePicker.vue';
import { usePage } from '@inertiajs/vue3';

const props = defineProps({
    tasks: Array,
    product_variants: Array
});

console.log(props.tasks); 

// ------------------------------------------
// 1. Group by production_date
// ------------------------------------------

const dailyTasksByDate = computed(() => {
  return props.tasks.reduce((acc, item) => {
    const date = item.production_date;
    if (!acc[date]) acc[date] = [];
    acc[date].push(item);
    return acc;
  }, {});
});

// ------------------------------------------
// 2. Group by CUSTOMER inside each date
//     + total_quantity
// ------------------------------------------

const dailyTasksCustomer = computed(() => {
  return Object.fromEntries(
    Object.entries(dailyTasksByDate.value).map(([date, items]) => {
      const grouped = items.reduce((acc, item) => {
        const cust = item.customer;

        if (!acc[cust]) {
          acc[cust] = {
            total_quantity: 0,
            orders: []
          };
        }

        acc[cust].orders.push(item);
        acc[cust].total_quantity += item.quantity ?? 0;

        return acc;
      }, {});

      return [date, grouped];
    })
  );
});

// ------------------------------------------
// 3. Group by PRODUCT inside each date
//     + total_quantity
// ------------------------------------------

const dailyTasksProduct = computed(() => {
  return Object.fromEntries(
    Object.entries(dailyTasksByDate.value).map(([date, items]) => {
      const grouped = items.reduce((acc, item) => {
        const prod = item.product;

        if (!acc[prod]) {
          acc[prod] = {
            total_quantity: 0,
            orders: []
          };
        }

        acc[prod].orders.push(item);
        acc[prod].total_quantity += item.quantity ?? 0;

        return acc;
      }, {});

      return [date, grouped];
    })
  );
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
        <DialogNewDate v-if="showDialogNewDate" @hide-dialog-new-date="toggleDialogNewDate"/>

        <!-- contoh penggunaan -->
        <div class="flex flex-col-1 gap-1">
            <div v-for="(byDate, date) in dailyTasksProduct" :key="date" class="border rounded bg-white w-full shadow drop-shadow">
                <div class="border-b text-center py-1">
                    <h2>{{ date }}</h2>
                </div>
                <div class="p-2">
                    <div v-for="(product, productName) in byDate" :key="productName">
                        <strong>{{ productName }}</strong>
                        <span>({{ product.total_quantity }})</span>
            
                        <!-- product.orders berisi daftar customer yang pesan -->
                        <ul>
                            <li v-for="order in product.orders" :key="order.id">
                            {{ order.customer }} - qty {{ order.quantity }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>