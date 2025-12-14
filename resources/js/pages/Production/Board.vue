<script setup>
import Button from '@/components/ui/button/Button.vue';
import MainLayout from '@/layouts/MainLayout.vue';
import { Plus } from 'lucide-vue-next';
import { computed, ref } from 'vue';
import DialogNewDate from './DialogNewDate.vue';
import DatePicker from '@/components/DatePicker.vue';
import { usePage } from '@inertiajs/vue3';
import DialogNewTask from './DialogNewTask.vue';

const props = defineProps({
    production_plans: Array,
    product_variants: Array,
    customers: Array,
});

// console.log(props.production_plans); 

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
 * Dialog New Task
 */
const showDialogNewTask = ref(false);

function toggleDialogNewTask(dateStr) {
    dateString.value = dateStr;
    showDialogNewTask.value = !showDialogNewTask.value;
}
const dateString=ref('');

</script>

<style scoped>
</style>

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
        <DialogNewTask v-if="showDialogNewTask" :date-string="dateString" :customers="customers" :product-variants="product_variants" @hide-dialog-new-task="toggleDialogNewTask" />

        <!-- contoh penggunaan -->
        <div class="flex flex-col gap-1">
            <div v-for="plan in production_plans" :key="plan.date" class="border rounded bg-white w-full shadow drop-shadow">
                <div class="border-b grid grid-cols-3 p-1 justify-between items-center">
                    <span></span>
                    <h2 class="text-center">{{ plan.formatted_date }}</h2>
                    <div class="text-end">
                      <button class="bg-orange-200 rounded-xl px-2 py-1 hover:cursor-pointer" @click="toggleDialogNewTask(plan.date)">add task</button>
                    </div>
                </div>
                <div class="p-2">
                    <table class="border-collapse">
                      <tbody>
                        <template v-for="(productPlan, index) in plan.product_summary" :key="index">
                          <tr :class="['border-b-4 border-slate-100', index % 2 === 0 ? 'bg-sky-200' : 'bg-rose-200']">
                            <th :rowspan="productPlan.customers.length"
                                class="px-3 py-2 text-left border-r-4 border-slate-100">
                              {{ productPlan.product }} -> {{ productPlan.total_quantity }}
                            </th>
                            <td class="pl-3 pr-1 py-2">{{ productPlan.customers[0].name }}</td>
                            <td>:</td>
                            <td class="pl-1 pr-3 py-2">{{ productPlan.customers[0].order_quantity }}</td>
                          </tr>

                          <tr v-for="(customer, idx) in productPlan.customers.slice(1)"
                              :key="idx"
                              :class="['border-b-4 border-slate-100', index % 2 === 0 ? 'bg-sky-200' : 'bg-rose-200']">
                            <td class="pl-3 pr-1 py-2">{{ customer.name }}</td>
                            <td>:</td>
                            <td class="pl-1 pr-3 py-2">{{ customer.order_quantity }}</td>
                          </tr>

                        </template>
                      </tbody>
                    </table>
                    <!-- <div v-for="productPlan in plan.product_summary" :key="productPlan.product">
                      <div class="flex gap-1 border-b items-center">
                        <div class="border-r p-2 text-center">
                          <strong>{{ productPlan.product }}</strong>
                          <div><strong>Total:</strong> {{ productPlan.total_quantity }}</div>
                        </div>
                        <div class="grid grid-cols-3 gap-1">
                          <template v-for="customer in productPlan.customers" :key="customer.name">
                            <div>{{ customer.name }}</div>
                            <div>:</div>
                            <div>{{ customer.order_quantity }}</div>
                          </template>
                        </div>
                      </div>
                    </div> -->
                </div>
            </div>
        </div>
    </MainLayout>
</template>