<script setup>
import Navigation from "./Navigation.vue";
import searchBox from "../../Shared/TheSearchBox.vue";
import categoriesBar from "../../Shared/TheCategoriesBar.vue";

</script>

<template>
    <div class="flex min-h-screen flex-col overflow-auto bg-white">
        <div class="flex flex-col">
            <navigation />
            <searchBox />
            <categoriesBar />

            <slot></slot>
        </div>
    </div>
</template>

<style scoped></style>
