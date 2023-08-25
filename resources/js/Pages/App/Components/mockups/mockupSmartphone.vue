<script setup></script>

<template>
    <div class="flex h-screen w-screen items-center justify-center">
        <div
            class="relative mx-auto h-[828px] w-[388px] rounded-[2.5rem] border-[14px] border-gray-800 bg-gray-800 shadow-xl dark:border-gray-800"
        >
            <div
                class="absolute left-1/2 top-0 h-[18px] w-[148px] -translate-x-1/2 rounded-b-[1rem] bg-gray-800 z-50"
            ></div>
            <div
                class="absolute -left-[17px] top-[124px] h-[46px] w-[3px] rounded-l-lg bg-gray-800"
            ></div>
            <div
                class="absolute -left-[17px] top-[178px] h-[46px] w-[3px] rounded-l-lg bg-gray-800"
            ></div>
            <div
                class="absolute -right-[17px] top-[142px] h-[64px] w-[3px] rounded-r-lg bg-gray-800"
            ></div>
            <div
                class="relative h-[800px] w-[360px] overflow-hidden rounded-[2rem] bg-white dark:bg-gray-800"
            >
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
