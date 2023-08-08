import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import{Link} from "@inertiajs/vue3";
import Icon from "./Pages/Shared/Components/Icons/Icon.vue";


createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .mixin({ components: { Link, Icon } })
            .use(plugin)
            .mount(el)
    },
})


