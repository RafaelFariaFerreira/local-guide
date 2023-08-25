<script setup>
import Card from "./Card.vue";
defineProps({
    date: {
        type: String,
        required: true,
    },
    time: {
        type: String,
        required: true,
    },
    title: {
        type: String,
        required: true,
    },
    address: {
        type: String,
        required: true,
    },
    href: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Card :href="href">
        <div class="flex flex-row gap-x-7 text-gray-800">
            <div
                class="flex flex-col items-center justify-center text-gray-600"
            >
                <p class="text-1xl font-semibold uppercase">{{ date }}</p>
                <p class="text-xs font-semibold">{{ time }}</p>
            </div>
            <div>
                <h1 class="pb-1 text-sm font-semibold text-gray-800">
                    {{ title }}
                </h1>
                <p class="text-xs">{{ address}}</p>
            </div>
        </div>
    </Card>
</template>

<style scoped></style>
