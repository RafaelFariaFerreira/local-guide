<script setup>
const navLinks = [
    { name: "Explorar", icon: "search", href: "/" },
    { name: "Agendamentos", icon: "calendar", href: "/agendamentos" },
    { name: "Seguindo", icon: "hearth", href: "/seguindo" },
    { name: "Pedidos", icon: "shopping-bag", href: "/compras" },
];
</script>

<template>
    <aside
        class="absolute bottom-0 left-0 z-50 w-full max-w-full border-t border-gray-200 bg-white"
    >
        <nav>
            <ul class="flex flex-row items-center justify-between pt-2 pb-4">
                <li v-for="Link in navLinks" class="w-1/5">
                    <Link
                        :href="Link.href"
                        title="Link.name"
                        class="group flex flex-col items-center justify-center gap-y-1.5 text-gray-400 hover:text-slate-700"
                    >
                        <Icon
                            :name="Link.icon"
                            class="h-5 w-5"
                            stroke-width="2"
                        />
                        <span
                            class="text-xs font-regular group-hover:text-gray-800 group-hover:font-semibold"
                            style="font-size: 10px"
                            >{{ Link.name }}</span
                        >
                    </Link>
                </li>
                <li class="w-1/5">
                    <Link
                        href="/perfil"
                        title="User"
                        class="group flex flex-col items-center justify-center gap-y-1.5 text-gray-400 hover:text-red-500"
                    >
                        <div
                            class="flex h-6 w-6 items-end justify-center overflow-hidden rounded-full border border-gray-400 group-hover:border-slate-700"
                        >
                            <img
                                src="https://lh3.googleusercontent.com/ogw/AGvuzYbSFLaizgc84soBMDlYb7a6YeK-o1MgVOEq01QXSA=s32-c-mo"
                                class="h-6 w-6"
                                alt=""
                            />
                        </div>
                        <span
                            class="text-xs font-regular group-hover:text-gray-800 group-hover:font-semibold"
                            style="font-size: 10px"
                            >Perfil</span
                        >
                    </Link>
                </li>
            </ul>
        </nav>
    </aside>
</template>
