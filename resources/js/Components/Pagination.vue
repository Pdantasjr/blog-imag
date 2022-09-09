<template>Toast
    <div v-if="links.length > 3">
        <div class="flex flex-wrap -mb-1">
            <template v-for="(link, key) in links">
                <div v-if="link.url === null" :key="key" class="mb-1 mr-1 px-4 py-3 text-gray-400 text-sm leading-4 border rounded-lg" v-html="link.label" />
                <Link v-else :key="`link-${key}`" class="mb-1 mr-1 px-4 py-3 focus:text-primary text-sm leading-4 hover:bg-white border focus:border-primary rounded-lg shadow-sm" :class="{ 'bg-primary text-white': link.active }" :href="link.url" v-html="link.label" />
            </template>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Pagintation Component",
    components: {
        Link,
    },
    props: {
        links: Array,
    },
}
</script>
