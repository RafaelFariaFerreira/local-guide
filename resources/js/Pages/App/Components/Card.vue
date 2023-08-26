<script setup>
defineProps({
    href: {
        type: String,
        required: false,
        default: "#",
    },
});
</script>

<template>
    <Link :href="href">
        <article
            class="block rounded-md border border-gray-200 bg-white p-6 shadow hover:bg-gray-100"
        >
            <slot />
        </article>
    </Link>
</template>

<style scoped></style>
