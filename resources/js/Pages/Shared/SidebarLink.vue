<script setup>
import { Link } from "@inertiajs/vue3";
import Icon from "./Components/Icons/Icon.vue";

defineProps({
    icon: {
        type: String,
        default: "hearth",
    },
});
</script>

<template>
    <Link
        class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
    >
        <icon :name="icon" />
        <span class="mx-2 text-sm font-medium"><slot /></span>
    </Link>
</template>

<style scoped></style>
