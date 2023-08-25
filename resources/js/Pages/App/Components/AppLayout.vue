<script setup>
import Navigation from "./Navigation.vue";
import MockupSmartphone from "./mockups/mockupSmartphone.vue";
</script>

<template>
    <mockupSmartphone>
        <!--app-->
        <div class="flex h-full flex-col overflow-hidden">
            <div class="grow overflow-scroll">
                <div class="h-fit min-h-full bg-white">
                    <slot></slot>
                </div>
            </div>
            <navigation />
        </div>
    </mockupSmartphone>
</template>

<style scoped></style>
