<script setup>
import {reactive} from "vue";
import TheSidebar from "./Shared/TheSidebar.vue";

defineProps({
    countries: Array,
    states: Array,
    cities: Array,
});

let address = reactive({
    country: 'select a country',
    state: 'select a state',
    city: 'select a city',
});
</script>

<template>
    <section class="flex bg-gray-50 dark:bg-gray-950">
        <TheSidebar/>

        <main class="w-full grid items-center justify-center h-screen ">
            <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 h-fit">
                <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Configurações de perfil</h2>

                <form>
                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="username">Nome</label>
                            <input id="username" type="text"
                                   class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Email</label>
                            <input id="emailAddress" type="email"
                                   class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="password">Senha</label>
                            <input id="password" type="password"
                                   class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="passwordConfirmation">Confirme a
                                Senha</label>
                            <input id="passwordConfirmation" type="password"
                                   class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="Country">País</label>
                            <select id="Country"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                    v-model="address.country">
                                <option v-for="country in countries" :key="country.id" :value="country.id">
                                    {{ country.name }}
                                </option>

                            </select>
                        </div>

                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="State">Estado</label>
                            <select id="State"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                    v-model="address.state">
                                <option v-for="state in states" :key="state.id" :value="state.id">
                                    {{ state.name }}
                                </option>

                            </select>
                        </div>

                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="City">Cidade</label>
                            <select id="City"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                    v-model="address.city">
                                <option v-for="city in cities" :key="city.id" :value="city.id">
                                    {{ city.name }}
                                </option>

                            </select>
                        </div>

                    </div>


                    <div class="flex justify-end mt-6">
                        <button
                            class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                            Salvar
                        </button>
                    </div>
                </form>
            </section>
        </main>
    </section>

</template>
