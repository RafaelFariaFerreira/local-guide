<script setup>
import Card from "./Card.vue";

defineProps({
    image: {
        type: String,
        required: true,
    },
    name: {
        type: String,
        required: true,
    },
    description: {
        type: String,
        required: true,
    },
    href: {
        type: String,
        required: false,
        default: "#",
    },
});
</script>

<template>
    <Card :href="href">
        <div class="flex flex-row gap-x-3">
            <img
                :src="image"
                class="h-12 w-12 rounded-full bg-cover bg-center object-cover object-center"
                alt=""
            />
            <div class="flex flex-col justify-center text-gray-700">
                <div class="flex flex-row items-center justify-between">
                    <h1 class="text-sm font-semibold">
                        {{ name }}
                    </h1>
                </div>
                <p class="text-xs">{{ description }}</p>
            </div>
        </div>
    </Card>
</template>
