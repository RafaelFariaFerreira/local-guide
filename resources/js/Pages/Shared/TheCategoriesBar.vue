<script setup>
import {Link} from "@inertiajs/vue3";


const categories = [
    { name: "Restaurantes", icon: "storefront", href: "/search" },
    { name: "Bares", icon: "storefront", href: "/search" },
    { name: "Super Mercados", icon: "storefront", href: "/search" },
    { name: "Barbearias", icon: "storefront", href: "/search" },
    { name: "Salões de Beleza", icon: "storefront", href: "/search" },
];
</script>

<template>
    <div
        class="scrollbar-hidden mt-4 flex flex-row justify-start gap-x-8 overflow-x-auto overflow-y-hidden border-b border-gray-200 px-5"
    >
        <Link
            v-for="category in categories"
            class="cursor-pointer flex flex-col items-center gap-y-1 pb-2 text-gray-500 hover:border-b-2 hover:border-black hover:pb-0 hover:text-black"
            style="text-wrap: nowrap"
            :href="category.href"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mx-auto h-7 w-7"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12" y2="16"></line>
            </svg>

            <p
                class="block text-xs font-bold"
                style="font-size: 10px"
            >
                {{ category.name }}
            </p>
        </link>
    </div>
</template>

<style scoped>

</style>
