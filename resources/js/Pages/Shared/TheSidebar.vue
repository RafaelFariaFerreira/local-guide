<script setup>

import SidebarSection from "./SidebarSection.vue";
import SidebarLink from "./SidebarLink.vue";
import {Link} from "@inertiajs/vue3";

</script>

<template>
    <aside
        class="flex flex-col w-64 h-screen px-5 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
        <Link href="#">
            <h1 class="text-white text-bold text-2xl font-bold text-gray-600 dark:text-gray-200">Guia Local</h1>
        </Link>
        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav class="-mx-3 space-y-6 ">
                <SidebarSection title="pessoal">
                    <SidebarLink href="/" title="Seguindo" icon="hearth">Seguindo</SidebarLink>
                    <SidebarLink href="/" title="Agendamentos" icon="calendar">Agendamentos</SidebarLink>
                    <SidebarLink href="/" title="Pedidos" icon="shopping-cart">Pedidos</SidebarLink>
                </SidebarSection>

                <SidebarSection title="Business">
                    <SidebarLink href="/" title="Empresa 1" icon="storefront">Empresa 1</SidebarLink>
                    <SidebarLink href="/" title="Empresa 2" icon="storefront">Empresa 2</SidebarLink>
                </SidebarSection>


                <SidebarSection title="Configurações">
                    <SidebarLink href="/dashboard" title="Conta" icon="user">Conta</SidebarLink>
                    <SidebarLink href="/" title="Conta" icon="credit-card">Pagamento</SidebarLink>
                </SidebarSection>
            </nav>
        </div>
    </aside>
</template>

<style scoped>

</style>
