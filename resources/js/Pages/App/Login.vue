<script setup>
import LoginForm from "./Components/LoginForm.vue";
import AppLayout from "./Components/AppLayout.vue";
import headerPanel from "./Components/headerPanel.vue";
</script>

<template>
    <AppLayout>
        <headerPanel title="Login" />
        <LoginForm />
    </AppLayout>
</template>

<style scoped></style>
