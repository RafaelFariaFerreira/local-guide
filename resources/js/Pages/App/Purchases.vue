<script setup>
import AppLayout from "./Components/AppLayout.vue";
import headerPanel from "./Components/headerPanel.vue";
import CardList from "./Components/CardList.vue";
import Card from "./Components/Card.vue";
</script>

<template>
    <AppLayout>
            <headerPanel title="Pedidos" />

            <CardList title="À Caminho">
                <Card>
                    <div class="flex flex-row justify-start items-center gap-x-3 text-gray-800">
                        <div>
                            <img
                                src="https://images.unsplash.com/photo-1583932644465-85803c7ed8ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80"
                                class="h-12 w-12 rounded-full bg-cover bg-center object-cover object-center"
                                alt=""
                            />
                        </div>
                        <div class="flex flex-col
                        flex-1 gap-y-1">
                            <h1 class="font-semibold text-sm">Pedido #514</h1>
                            <div class="flex flex-row items-center gap-x-5 flex-wrap">
                                <div><p class="text-sm font-semibold ">Status: <span class="text-xs pt-0.5 pb-1 px-2 bg-emerald-400 rounded-full text-white ml-1">Saiu para entrega</span></p></div>
                                <div><p class="text-sm font-semibold">Chega em: <span class="text-xs font-normal">5min</span></p></div>
                            </div>

                        </div>
                    </div>
                </Card>
            </CardList>

            <CardList title="Entregue">
                <Card>
                    <div class="flex flex-row justify-start items-center gap-x-3 text-gray-800">
                        <div>
                            <img
                                src="https://images.unsplash.com/photo-1583932644465-85803c7ed8ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80"
                                class="h-12 w-12 rounded-full bg-cover bg-center object-cover object-center"
                                alt=""
                            />
                        </div>
                        <div >
                            <h1 class="font-semibold text-sm">Pedido #514</h1>
                            <p class="text-sm ">Status: <span class="text-xs pt-0.5 pb-1 px-2 bg-gray-400 rounded-full text-white ml-1">Entregue</span></p>
                        </div>
                    </div>
                </Card>
            </CardList>
    </AppLayout>
</template>

<style scoped></style>
