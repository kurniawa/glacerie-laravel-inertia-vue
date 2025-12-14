<script setup>
import { ref, computed } from 'vue';
import Input from './Input.vue';

const emits = defineEmits([
    'update:modelValue',   // tampil di input (name)
    'update:selected',     // slug / id (hidden value)
    'search',
    'focus',
    'blur',
    'change',
]);

const props = defineProps({
    modelValue: {
        type: String,
        default: '',
    },
    selected: {              // slug value invisible
        type: [String, Object, Number],
        default: null,
    },
    suggestions: {
        type: Array,
        default: () => [],   // [{ name, slug }]
    },
    delay: {
        type: Number,
        default: 200,
    },
});

const open = ref(false);
const highlighted = ref(-1);
let timer = null;

const showSuggestions = computed(() =>
    open.value && props.suggestions.length > 0
);

async function fetchSuggestions(table, column, parent, parentValue, text) {
    if (!text) {
        suggestions.value = [];
        return;
    }
    let res;
    if (parent) {
        res = await axios.get(`/api/autocomplete?table=${table}&column=${column}&text=${text}&parent=${parent}&parent_slug=${parentValue}`, {
            params: { q: text }
        });
    } else {
        res = await axios.get(`/api/autocomplete?table=${table}&column=${column}&text=${text}`, {
            params: { q: text }
        });
    }
    // console.log(res.data);
    suggestions.value = res.data;
}

function handleInput(e) {
    const value = e.target.value;

    emits('update:modelValue', value);     // update text
    emits('update:selected', null);        // clear slug

    open.value = true;

    clearTimeout(timer);
    timer = setTimeout(() => {
        emits('search', value);
    }, props.delay);
}

function select(item) {
    emits('update:modelValue', item.name);
    emits('update:selected', item.slug);

    emits('change', item);
    open.value = false;
    highlighted.value = -1;
}

function handleKeydown(e) {
    if (!open.value) open.value = true;

    switch (e.key) {
        case 'ArrowDown':
            e.preventDefault();
            if (highlighted.value < props.suggestions.length - 1)
                highlighted.value++;
            break;

        case 'ArrowUp':
            e.preventDefault();
            if (highlighted.value > 0)
                highlighted.value--;
            break;

        case 'Enter':
            if (highlighted.value >= 0)
                select(props.suggestions[highlighted.value]);
            break;

        case 'Escape':
            open.value = false;
            highlighted.value = -1;
            break;
    }
}

function handleBlur(e) {
    emits('blur', e);

    setTimeout(() => {
        open.value = false;
        highlighted.value = -1;
    }, 150);
}
</script>



<template>
    <div class="relative w-full">
        <Input
            v-bind="$attrs"
            :modelValue="modelValue"
            @input="handleInput"
            @keydown="handleKeydown"
            @focus="open = true"
            @blur="handleBlur"
        />

        <div
            v-if="showSuggestions"
            class="absolute left-0 right-0 mt-1 rounded-xl border bg-white shadow"
        >
            <div
                v-for="(item, index) in suggestions"
                :key="item.slug"
                class="px-3 py-2 cursor-pointer"
                :class="{
                    'bg-blue-500 text-white': index === highlighted,
                    'hover:bg-gray-200': index !== highlighted
                }"
                @mousedown.prevent="select(item)"
                @mouseover="highlighted = index"
            >
                {{ item.name }}
            </div>
        </div>
    </div>
</template>