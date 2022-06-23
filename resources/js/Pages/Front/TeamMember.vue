<template>
    <div class="flex flex-col justify-center overflow-y-hidden">
        <CTAareas variant="top" />
    </div>
</template>

<script>
import {defineComponent} from 'vue'

import {Link} from '@inertiajs/inertia-vue3';
import CTAareas from "./Components/CTAareas";
import Header from "./Components/Header"
import BackToTop from "./Components/BackToTop";
import Footer from "./Components/Footer"

export default defineComponent({
    name: "TeamMember",
    props: {
        member: Object
    },
    components: {
        Link,
        CTAareas,
        Header,
        BackToTop,
        Footer,
    },
})
</script>

<style scoped>

</style>
