<script setup>

</script>

<template>
    <div class="p-8">
        <h1
            class="mb-8 text-center text-sm font-light uppercase text-gray-500"
        >
            Login
        </h1>
        <form action="">
            <div class="mb-5 flex flex-col">
                <label
                    for="email"
                    class="pb-1 text-xs font-light text-gray-500"
                >Username</label
                >
                <input
                    type="email"
                    name="email"
                    placeholder="username"
                    class="rounded border border-gray-400 p-1 text-gray-800"
                    required
                />
            </div>

            <div class="mb-8 flex flex-col">
                <label
                    for="password"
                    class="pb-1 text-xs font-light text-gray-500"
                >Password</label
                >
                <input
                    type="password"
                    name="password"
                    placeholder="username"
                    class="text-gray-800d rounded border border-gray-400 p-1"
                    required
                />
            </div>
            <button
                type="submit"
                class="w-full rounded-md bg-slate-800 px-5 py-2 text-white hover:bg-slate-700"
            >
                Login
            </button>
        </form>
    </div>
</template>

<style scoped>

</style>
