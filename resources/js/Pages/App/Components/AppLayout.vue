<script setup>
import Navigation from "./Navigation.vue";

</script>

<template>
    <div class="flex min-h-screen flex-col overflow-auto bg-white">
        <div class="flex flex-col">
            <navigation />


            <slot></slot>
        </div>
    </div>
</template>

<style scoped></style>
