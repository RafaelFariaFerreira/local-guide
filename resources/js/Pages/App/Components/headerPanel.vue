<script setup>
defineProps({
    title: String,
    icon: {
        type: String,
        default: "calendar",
    },
});
</script>

<template>
    <header
        class="flex-start flex flex-row items-center justify-start gap-x-3 border-b border-gray-200 px-5 py-5"
    >
        <Icon />
        <h1 class="text-md flex-grow text-center font-bold text-gray-800 pr-9">
            {{ title }}
        </h1>
    </header>
</template>

<style scoped></style>
