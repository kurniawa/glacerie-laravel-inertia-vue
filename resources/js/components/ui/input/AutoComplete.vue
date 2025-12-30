<script setup>
import { ref, computed } from 'vue';
import Input from './Input.vue';
import { clear } from 'node:console';

const emits = defineEmits([
    'update:modelValue',   // tampil di input (name)
    'update:selected',     // slug / id (hidden value)
    'focus',
    'blur',
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
    delay: {
        type: Number,
        default: 200,
    },
    data: {
        type: Object,
        default: () => ({
            table: '',
            column: '',
            parent: null,
            parentValue: null,
        }),
    },
});

const suggestions = ref([]);

const open = ref(false);
const highlighted = ref(-1);
let timer = null;

const showSuggestions = computed(() =>
    open.value && props.suggestions.length > 0
);

async function fetchSuggestions(text) {
    if (!text) {
        suggestions.value = [];
        return;
    }
    let res;
    if (data.parent) {
        res = await axios.get(`/api/autocomplete?table=${data.table}&column=${data.column}&text=${text}&parent=${data.parent}&parent_slug=${data.parentValue}`, {
            params: { q: text }
        });
    } else {
        res = await axios.get(`/api/autocomplete?table=${data.table}&column=${data.column}&text=${text}`, {
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
        fetchSuggestions(value);
    }, props.delay);
}

function clearSuggestions() {
    suggestions.value = [];
}

function select(item) {
    emits('update:modelValue', item.name);
    emits('update:selected', item.slug);

    clearSuggestions();
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