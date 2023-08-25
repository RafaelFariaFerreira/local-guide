<script setup>
import AppLayout from "./Components/AppLayout.vue";
import headerPanel from "./Components/headerPanel.vue";
import CardList from "./Components/CardList.vue";
import AppointmentCard from "./Components/AppointmentCard.vue";

const appointments = [
    {
        date: "Hoje",
        time: "11:00",
        title: "Consulta Oftalmologista",
        address: "35, Vila Santa Cecília, Volta Redonda",
        href:"#",
    },
];
</script>

<template>
    <AppLayout>
        <headerPanel title="Agendamentos" />

        <CardList title="Hoje">
            <AppointmentCard
                v-for="appointment in appointments"
                :date="appointment.date"
                :time="appointment.time"
                :title="appointment.title"
                :address="appointment.address"
                :href="appointment.href"
            />
        </CardList>
    </AppLayout>
</template>

<style scoped></style>
