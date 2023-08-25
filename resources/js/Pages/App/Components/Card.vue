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
            class="rounded-md border border-gray-200 p-3 shadow hover:bg-sky-50"
        >
            <slot />
        </article>
    </Link>
</template>

<style scoped></style>
