<script setup>
defineProps({
    title: String,
});
</script>

<template>
    <header
        class="flex-start flex flex-row items-center justify-start gap-x-3 border-b border-gray-200 p-5"
    >
        <Link href="/">
            <Icon name="back" />
        </Link>
        <h1
            class="flex-grow pr-9 text-center font-bold text-gray-800"
        >
            {{ title }}
        </h1>
    </header>
</template>

<style scoped></style>
