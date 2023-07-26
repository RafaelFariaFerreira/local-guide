<script setup>
defineProps({
    title: String,
});
</script>

<template>
    <div class="space-y-3 ">
        <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">{{ title }}</label>
        <slot/>
    </div>
</template>
