<script setup>
defineProps({ title: { type: String } });
</script>

<template>
    <section class="flex flex-col gap-y-3 px-5 py-5">
        <h1 v-if="title" class="font-light text-xs uppercase pl-1 text-gray-500">{{ title }}</h1>
        <slot />
    </section>
</template>

<style scoped></style>
