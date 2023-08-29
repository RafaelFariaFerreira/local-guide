<script setup>
import "vue3-carousel/dist/carousel.css";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";
</script>

<template>
    <carousel :items-to-show="1">

        <slide v-for="slide in slides" :key="slide">
            <slot s></slot>
        </slide>

        <template #addons>
            <navigation/>
            <pagination/>
        </template>
    </carousel>
</template>
