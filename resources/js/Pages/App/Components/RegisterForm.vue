<script setup>
import formInput from "./form/formInput.vue";
</script>

<template>
    <div class="p-5">
        <h1 class="mb-4 text-center text-md font-light  text-gray-500">
            Crie uma conta para acessar.
        </h1>
        <form action="">
            <div class="grid grid-cols-1 gap-4">
                <formInput
                    name="name"
                    label="Nome"
                    placeholder="Seu Nome"
                    type="text"
                />
                <formInput
                    name="email"
                    label="Email"
                    placeholder="email@mail.com"
                    type="email"
                />
                <formInput
                    name="phone"
                    label="Telefone"
                    placeholder="(00) 00 00000-0000"
                    type="text"
                />
                <formInput
                    name="password"
                    label="Senha"
                    placeholder="Senha"
                    type="password"
                />
                <formInput
                    name="confirmPassword"
                    label="Confirme a senha"
                    placeholder="Confirme a senha"
                    type="password"
                />

                <div class="flex flex-col gap-4 justify-center items-center mt-4">
                    <button
                        type="submit"
                        class="w-full rounded-md bg-slate-800 px-5 py-2 text-white hover:bg-slate-700"
                    >
                        Criar Conta
                    </button>
                    <a href="" class="text-slate-500 cursor-pointer hover:text-slate-800">Já tem uma conta?</a>
                </div>
            </div>
        </form>
    </div>
</template>

<style scoped></style>
