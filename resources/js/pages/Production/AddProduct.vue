<script setup>
import draggable from "vuedraggable";
import { ref, watch } from 'vue';

const props = defineProps({
  product_variants: Array,
  class: {
    type: String,
    default: ""
  }
});

const emit = defineEmits(["hide-variants"]);

function cloneVariant(original) {
  return {
    ...original,
    id: Date.now() + Math.random(), // supaya unique
    product: original.display_name,
    customer: 'Guest'
  }
}

</script>

<template>
  <div :class="class">
    <!-- Panel -->
    <div class="h-[90vh] w-full">
      <div class="bg-white border rounded shadow-lg p-2 h-full overflow-y-auto">

        <h2 class="text-sm font-bold mb-2">Product Variants</h2>

        <!-- DRAGGABLE LIST AS SOURCE -->
        <draggable
            :list="product_variants"
            item-key="id"
            :group="{ name: 'tasks', pull: 'clone', put: false }"
            :clone="cloneVariant"
            sort="false"
        >
            <template #item="{ element }">
                <div
                class="p-2 mb-1 border rounded bg-white hover:bg-gray-50 cursor-move"
                >
                <span class="font-medium">{{ element.display_name }}</span>
                <span class="text-gray-500">
                    ({{ element.size }} {{ element.unit }})
                </span>
                </div>
            </template>
        </draggable>

      </div>
    </div>
  </div>
</template>
