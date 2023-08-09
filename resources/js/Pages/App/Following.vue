<script setup>
import AppLayout from "./Components/AppLayout.vue";
import headerPanel from "./Components/headerPanel.vue";
import Card from "./Components/Card.vue";
import CardList from "./Components/CardList.vue";

const following = [
    {
        name: "Bar Light Bistrô",
        description: "Lorem ipsum dollor sit ammet.",
        image: "https://images.unsplash.com/photo-1543007630-9710e4a00a20?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80",
        href: "",
    },
    {
        name: "Boutique da Ana",
        description: "Lorem ipsum dollor sit ammet.",
        image: "https://images.unsplash.com/photo-1595991209266-711c557ac7c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80",
        href: "",
    },
    {
        name: "Quitanda do Zé",
        description: "Lorem ipsum dollor sit ammet.",
        image: "https://images.unsplash.com/photo-1583932644465-85803c7ed8ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80",
        href: "",
    },
    {
        name: "Barbearia do André",
        description: "Lorem ipsum dollor sit ammet.",
        image: "https://images.unsplash.com/photo-1536520002442-39764a41e987?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80",
        href: "",
    },
];
</script>

<template>
    <AppLayout>
        <headerPanel title="Seguindo"/>
        <cardList title="Restaurantes">
            <Card v-for="place in following">
                <div class="flex flex-row gap-x-3">
                        <img
                            :src="place.image"
                            class="h-12 w-12 rounded-full bg-cover bg-center object-cover object-center"
                            alt=""
                        />
                    <div class="flex flex-col justify-center text-gray-700">
                        <div class="flex flex-row items-center justify-between">
                            <h1 class="text-sm font-semibold">
                                {{ place.name }}
                            </h1>
                        </div>
                        <p class="text-xs">{{ place.description }}</p>
                    </div>
                </div>
            </Card>
        </cardList>
    </AppLayout>
</template>

<style scoped></style>
