<script setup>
import AppLayout from "./Components/AppLayout.vue";
import headerPanel from "./Components/headerPanel.vue";
import CardList from "./Components/CardList.vue";
import Card from "./Components/Card.vue";

const appointments = [
    {date: 'Hoje', time: '11:00', title: 'Consulta Oftalmologista', address: '35, Vila Santa Cecília, Volta Redonda'}
];
</script>

<template>
    <AppLayout>
        <headerPanel title="Agendamentos"/>

        <CardList title="Hoje">
            <Card>
                <div class="flex flex-row gap-x-7 text-gray-800">
                    <div class="flex flex-col items-center justify-center text-gray-600">
                        <p
                            class="text-1xl font-semibold uppercase"
                        >
                            Hoje
                        </p>
                        <p class="text-xs font-semibold">11:00h</p>
                    </div>
                    <div>
                        <h1 class="font-semibold text-sm pb-1 text-gray-800">Consulta Oftalmologista</h1>
                        <p class="text-xs">35, Vila Santa Cecília, Volta Redonda</p>
                    </div>
                </div>
            </Card>
        </CardList>
    </AppLayout>
</template>

<style scoped></style>
