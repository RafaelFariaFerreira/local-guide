<script setup>
import { ref } from "vue";

let visible = ref(false);
let search = ref("");
let input = ref(null);

function showInput() {
    visible.value = true;
    setTimeout(() => {
        input.value.focus();
    }, 100);
}

function hideInput() {
    visible.value = false;
}

function verify() {
    if (search.value === "") {
        hideInput();
    }
}

window.onscroll = function () {
    input.value.blur();
};
</script>

<template>
    <div
        class="mx-5 mt-5 flex flex-row items-center justify-between rounded-full border border-gray-200 bg-white p-1 shadow-md"
    >
        <div class="rounded-full p-2 text-black">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </div>

        <div class="flex flex-grow flex-col items-center">
            <div @click="showInput" v-show="!visible">
                <p class="text-xs font-bold text-gray-800">O que deseja?</p>
                <p class="text-xs text-gray-800" style="font-size: 10px">
                    Busque por locais perto de você
                </p>
            </div>
            <div class="w-full px-1">
                <form method="get" action="/">
                    <input
                        name="search"
                        v-show="visible"
                        @blur="verify"
                        ref="input"
                        v-model="search"
                        type="text"
                        class="w-full p-1 text-xs font-bold text-gray-800 focus:outline-none"
                        placeholder="O que deseja?"
                    />
                </form>
            </div>
        </div>

        <div class="rounded-full border border-gray-200 p-2 text-black">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path d="M20 7h-9"></path>
                <path d="M14 17H5"></path>
                <circle cx="17" cy="17" r="3"></circle>
                <circle cx="7" cy="7" r="3"></circle>
            </svg>
        </div>
    </div>
</template>

<style scoped></style>
