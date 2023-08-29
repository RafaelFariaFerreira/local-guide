<script setup>
import AppLayout from "./Components/AppLayout.vue";
import headerPanel from "./Components/headerPanel.vue";
import carousel from "./Components/Carousel.vue";
import RegisterForm from "./Components/RegisterForm.vue";

const slides = [
    "<img class='h-52 w-full rounded-lg bg-cover bg-center object-cover object-center' src='https://images.unsplash.com/photo-1595991209266-711c557ac7c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80' alt=''/>",
];
</script>

<template>
    <AppLayout>
        <headerPanel title="Perfil" />
        <section class="flex flex-1 flex-col gap-y-3 px-5 py-5">
            <!--<LoginForm/>-->
            <RegisterForm/>

<!--            <carousel :slides="slides" />-->
        </section>
    </AppLayout>
</template>
;

<style scoped></style>
;
