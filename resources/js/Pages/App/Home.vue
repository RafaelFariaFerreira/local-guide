<script setup>
import AppLayout from "./Components/AppLayout.vue";
import placeCard from "./Components/PlaceCard.vue";

const places = [
    {
        name: "Bar Light Bistrô",
        picture:
            "https://images.unsplash.com/photo-1543007630-9710e4a00a20?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80",
        address: "547, Aterrado, Volta Redonda - RJ",
        distance: 3,
        rating: 4.75,
    },

    {
        name: "Boutique da Ana",
        picture:
            "https://images.unsplash.com/photo-1595991209266-711c557ac7c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80",
        address: "21, Vila Santa Cecília, Volta Redonda - RJ",
        distance: 3.75,
        rating: 3.87,
    },
    {
        name: "Quitanda do Zé",
        picture:
            "https://images.unsplash.com/photo-1583932644465-85803c7ed8ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80",
        address: "59, Vila Rica, Volta Redonda - RJ",
        distance: 10,
        rating: 4.3,
    },
    {
        name: "Barbearia do André",
        picture:
            "https://images.unsplash.com/photo-1536520002442-39764a41e987?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80",
        address: "31, Amaral Peixoto, Volta Redonda - RJ",
        distance: 8,
        rating: 5,
    },
    {
        name: "Japa Pow Sushi Bar",
        picture:
            "https://images.unsplash.com/photo-1502364271109-0a9a75a2a9df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80",
        address: "258, Laranjal, Volta Redonda - RJ",
        distance: 3.75,
        rating: 3.87,
    },
];
</script>

<template>
    <AppLayout>
        <section
            class="flex max-h-full flex-col overflow-auto pb-20 md:flex-row"
        >
            <placeCard
                v-for="place in places"
                :name="place.name"
                :picture="place.picture"
                :address="place.address"
                :distance="place.distance"
                :rating="place.rating"
            />
        </section>
    </AppLayout>
</template>

<style></style>
