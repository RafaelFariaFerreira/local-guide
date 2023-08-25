<script setup>
defineProps({
    name: {
        type: String,
        required: true,
    },
    label: {
        type: String,
        required: true,
    },
    placeholder: {
        type: String,
        required: true,
    },
    type: {
        type: String,
        required: true,
    },
    value: {
        type: String,
        required: false,
    },
    required: {
        type: Boolean,
        required: false,
        default: false,
    },
});
</script>

<template>
    <div>
        <label :for="name" class="mb-2 block text-xs font-light text-gray-500"
            >{{ label}}</label
        >
        <input
            :type="type"
            :name="name"
            :placeholder="placeholder"
            :value="value"
            class="bg-slate-50 w-full rounded border border-slate-300 p-1 text-gray-800"
            :required="required"
        />
    </div>
</template>
