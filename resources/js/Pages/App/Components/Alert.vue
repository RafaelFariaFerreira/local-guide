<script setup>
defineProps({
    type: {
        type: String,
        default: "success",
        required: false,
    },
});
</script>

<template>
    <div
        class="mb-4 flex items-center rounded-lg border p-4"
        :class="[
            type === 'success' && 'border-green-300 bg-green-50 text-green-800',
            type === 'error' && 'border-red-300 bg-red-50 text-red-800',
            type === 'warning' && 'border-yellow-300 bg-yellow-50 text-yellow-800',
            type === 'info' && 'border-blue-300 bg-blue-50 text-blue-800',
        ]"
        role="alert"
    >
        <div class="mr-3">
            <svg
                class="h-6 w-6"
                :class="[
                    type === 'success' && 'text-green-400',
                    type === 'error' && 'text-red-400',
                    type === 'warning' && 'text-yellow-400',
                    type === 'info' && 'text-blue-400',
                ]"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
            >
                <path
                    :class="[
                        type === 'success' && 'text-green-400',
                        type === 'error' && 'text-red-400',
                        type === 'warning' && 'text-yellow-400',
                        type === 'info' && 'text-blue-400',
                    ]"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M5 13l4 4L19 7"
                ></path>
            </svg>
        </div>
        <slot></slot>
    </div>
</template>
