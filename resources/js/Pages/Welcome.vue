<script setup>
import { reactive, watch } from "vue";
import { useForm } from "@inertiajs/vue3";
import TheSidebar from "./Shared/TheSidebar.vue";

let props = defineProps({
    countries: Array,
    states: Array,
    cities: Array,
});

let list = reactive({
    countries: props.countries,
    states: props.states,
    cities: props.cities,
});

let form = useForm({
    name: "",
    email: "",
    password: "",
    confirmPassword: "",
    country: "",
    state: "",
    city: "",
});

watch(
    () => form.country,
    (countryId) => {
        getStates();
    },
);

watch(
    () => form.state,
    (countryId) => {
        getCities();
    },
);

let getStates = () => {
    form.state = "";
    form.city = "";
    list.states = [];
    list.cities = [];
    form.post("/", {
        only: ["states"],
        onSuccess: (page) => {
            list.states = page.props.states;
            list.cities = page.props.cities;
        },
    });
};

let getCities = () => {
    form.city = "";
    list.cities = [];
    form.post("/", {
        only: ["cities"],
        onSuccess: (page) => {
            list.cities = page.props.cities;
        },
    });
};
</script>

<template>
    <section class="flex bg-gray-50 dark:bg-gray-950">
        <TheSidebar />
        <main
            class="grid w-full grid-cols-3 items-center justify-center gap-10 p-10"
        >
            <section
                class="col-span-2 mx-auto max-w-4xl rounded-md bg-white p-6 shadow-md dark:bg-gray-800"
            >
                <h2
                    class="text-lg font-semibold capitalize text-gray-700 dark:text-white"
                >
                    Configurações de perfil
                </h2>

                <form>
                    <div class="w- mt-4 grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label
                                class="text-gray-700 dark:text-gray-200"
                                for="username"
                                >Nome</label
                            >
                            <input
                                id="username"
                                type="text"
                                v-model="form.name"
                                class="mt-2 block w-full rounded-md border border-gray-200 bg-white px-4 py-2 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:focus:border-blue-300"
                            />
                        </div>

                        <div>
                            <label
                                class="text-gray-700 dark:text-gray-200"
                                for="emailAddress"
                                >Email</label
                            >
                            <input
                                id="emailAddress"
                                type="email"
                                v-model="form.email"
                                class="mt-2 block w-full rounded-md border border-gray-200 bg-white px-4 py-2 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:focus:border-blue-300"
                            />
                        </div>

                        <div>
                            <label
                                class="text-gray-700 dark:text-gray-200"
                                for="password"
                                >Senha</label
                            >
                            <input
                                id="password"
                                type="password"
                                v-model="form.password"
                                class="mt-2 block w-full rounded-md border border-gray-200 bg-white px-4 py-2 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:focus:border-blue-300"
                            />
                        </div>

                        <div>
                            <label
                                class="text-gray-700 dark:text-gray-200"
                                for="passwordConfirmation"
                                >Confirme a Senha</label
                            >
                            <input
                                id="passwordConfirmation"
                                type="password"
                                v-model="form.confirmPassword"
                                class="mt-2 block w-full rounded-md border border-gray-200 bg-white px-4 py-2 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:focus:border-blue-300"
                            />
                        </div>

                        <div>
                            <label
                                class="text-gray-700 dark:text-gray-200"
                                for="Country"
                                >País</label
                            >
                            <select
                                id="Country"
                                class="mt-2 block w-full rounded-md border border-gray-200 bg-white px-4 py-2 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:focus:border-blue-300"
                                v-model="form.country"
                            >
                                <option value="" disabled selected>
                                    Selecione um país
                                </option>

                                <option
                                    v-for="country in list.countries"
                                    :key="country.id"
                                    :value="country.id"
                                >
                                    {{ country.name }}
                                </option>
                            </select>
                        </div>

                        <div>
                            <label
                                class="text-gray-700 dark:text-gray-200"
                                for="State"
                                >Estado</label
                            >
                            <select
                                id="State"
                                :disabled="list.states.length < 1"
                                class="mt-2 block w-full rounded-md border border-gray-200 bg-white px-4 py-2 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:focus:border-blue-300"
                                :class="{
                                    'cursor-not-allowed bg-gray-50 opacity-50 dark:bg-gray-600':
                                        list.states.length < 1,
                                }"
                                v-model="form.state"
                            >
                                <option value="" disabled selected>
                                    Selecione um estado
                                </option>
                                <option
                                    v-for="state in states"
                                    :key="state.id"
                                    :value="state.id"
                                >
                                    {{ state.name }}
                                </option>
                            </select>
                        </div>

                        <div>
                            <label
                                class="text-gray-700 dark:text-gray-200"
                                for="City"
                                >Cidade</label
                            >
                            <select
                                id="City"
                                :disabled="list.cities.length < 1"
                                class="mt-2 block w-full rounded-md border border-gray-200 bg-white px-4 py-2 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:focus:border-blue-300"
                                :class="{
                                    'cursor-not-allowed bg-gray-50 opacity-50 dark:bg-gray-600':
                                        list.states.length < 1,
                                }"
                                v-model="form.city"
                            >
                                <option value="" disabled selected>
                                    Selecione uma cidade
                                </option>
                                <option
                                    v-for="city in list.cities"
                                    :key="city.id"
                                    :value="city.id"
                                >
                                    {{ city.name }}
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button
                            class="transform rounded-md bg-gray-700 px-8 py-2.5 leading-5 text-white transition-colors duration-300 hover:bg-gray-600 focus:bg-gray-600 focus:outline-none"
                        >
                            Salvar
                        </button>
                    </div>
                </form>
            </section>
            <div>
                <pre class="text-xs text-white">
                        {{ form }}
                </pre>
            </div>
        </main>
    </section>
</template>
