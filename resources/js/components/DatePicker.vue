<script setup>
import { Calendar, ChevronLeft, ChevronRight } from 'lucide-vue-next';
import {
  DatePickerArrow,
  DatePickerCalendar,
  DatePickerCell,
  DatePickerCellTrigger,
  DatePickerContent,
  DatePickerField,
  DatePickerGrid,
  DatePickerGridBody,
  DatePickerGridHead,
  DatePickerGridRow,
  DatePickerHeadCell,
  DatePickerHeader,
  DatePickerHeading,
  DatePickerInput,
  DatePickerNext,
  DatePickerPrev,
  DatePickerRoot,
  DatePickerTrigger,
  Label,
} from 'reka-ui'

const props = defineProps({
    label: String,
    modelValue: {
        type: Object,
        default: null
    }
})

const emit = defineEmits(['update:modelValue'])

</script>

<template>
  <div class="flex flex-col gap-2">
    <Label class="text-xs text-stone-700 dark:text-white" for="production-day">
        {{ label }}
    </Label>
    <!-- <DatePickerRoot id="production-day" :is-date-unavailable="date => date.day === 19" locale="id" -->
    <DatePickerRoot id="production-day" locale="id"
        :model-value="modelValue" @update:model-value="emit('update:modelValue', $event)">
        <DatePickerField
            v-slot="{ segments }"
            class="w-36 flex select-none bg-white items-center rounded-lg shadow-sm text-center justify-between text-green-700 border p-1 data-[invalid]:border-red-500"
        >
            <div class="flex items-center">
            <template
                v-for="item in segments"
                :key="item.part"
            >
                <DatePickerInput
                v-if="item.part === 'literal'"
                :part="item.part"
                >
                {{ item.value }}
                </DatePickerInput>
                <DatePickerInput
                v-else
                :part="item.part"
                class="rounded p-0.5 focus:outline-none focus:shadow-[0_0_0_2px] focus:shadow-black data-[placeholder]:text-green-600"
                >
                {{ item.value }}
                </DatePickerInput>
            </template>
            </div>

            <DatePickerTrigger class="focus:shadow-[0_0_0_2px] rounded p-1 focus:shadow-black">
                <component :is="Calendar" class="size-4"/>
            </DatePickerTrigger>
        </DatePickerField>

        <DatePickerContent
            :side-offset="4"
            class="z-50 rounded-xl bg-white border shadow-sm will-change-[transform,opacity] data-[state=open]:data-[side=top]:animate-slideDownAndFade data-[state=open]:data-[side=right]:animate-slideLeftAndFade data-[state=open]:data-[side=bottom]:animate-slideUpAndFade data-[state=open]:data-[side=left]:animate-slideRightAndFade"
        >
            <DatePickerArrow class="fill-white stroke-gray-300" />
            <DatePickerCalendar
            v-slot="{ weekDays, grid }"
            class="p-4"
            >
            <DatePickerHeader class="flex items-center justify-between">
                <DatePickerPrev
                class="inline-flex items-center cursor-pointer text-black justify-center rounded-md bg-transparent w-7 h-7 hover:bg-stone-50 active:scale-98 active:transition-all focus:shadow-[0_0_0_2px] focus:shadow-black"
                >
                <component :is="ChevronLeft" class="size-4" />
                </DatePickerPrev>

                <DatePickerHeading class="text-black font-medium" />
                <DatePickerNext
                class="inline-flex items-center cursor-pointer text-black justify-center rounded-md bg-transparent w-7 h-7 hover:bg-stone-50 active:scale-98 active:transition-all focus:shadow-[0_0_0_2px] focus:shadow-black"
                >
                <component :is="ChevronRight" class="size-4" />
                </DatePickerNext>
            </DatePickerHeader>
            <div
                class="flex flex-col space-y-4 pt-4 sm:flex-row sm:space-x-4 sm:space-y-0"
            >
                <DatePickerGrid
                v-for="month in grid"
                :key="month.value.toString()"
                class="w-full border-collapse select-none space-y-1"
                >
                <DatePickerGridHead>
                    <DatePickerGridRow class="mb-1 flex w-full justify-between">
                    <DatePickerHeadCell
                        v-for="day in weekDays"
                        :key="day"
                        class="w-8 rounded-md text-xs text-green-500"
                    >
                        {{ day }}
                    </DatePickerHeadCell>
                    </DatePickerGridRow>
                </DatePickerGridHead>
                <DatePickerGridBody>
                    <DatePickerGridRow
                    v-for="(weekDates, index) in month.rows"
                    :key="`weekDate-${index}`"
                    class="flex w-full"
                    >
                    <DatePickerCell
                        v-for="weekDate in weekDates"
                        :key="weekDate.toString()"
                        :date="weekDate"
                    >
                        <DatePickerCellTrigger
                        :day="weekDate"
                        :month="month.value"
                        class="relative flex items-center justify-center whitespace-nowrap rounded-[9px] border border-transparent bg-transparent text-xs font-normal text-black w-8 h-8 outline-none focus:shadow-[0_0_0_2px] focus:shadow-black hover:border-black data-[selected]:bg-black data-[selected]:font-medium data-[outside-view]:text-black/30 data-[selected]:text-white data-[unavailable]:pointer-events-none data-[unavailable]:text-black/30 data-[unavailable]:line-through before:absolute before:top-[5px] before:hidden before:rounded-full before:w-1 before:h-1 before:bg-white data-[today]:before:block data-[today]:before:bg-green-600 data-[selected]:before:bg-white"
                        />
                    </DatePickerCell>
                    </DatePickerGridRow>
                </DatePickerGridBody>
                </DatePickerGrid>
            </div>
            </DatePickerCalendar>
        </DatePickerContent>
    </DatePickerRoot>
  </div>
</template>