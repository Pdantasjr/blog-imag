<template>
    <div class="flex flex-col justify-center overflow-y-auto">
        <Head title="Home"/>
        <Header/>
        <Carousel />
    </div>
</template>

<script>
import {defineComponent} from 'vue'

import {Head, Link} from '@inertiajs/inertia-vue3';
import Header from "./Components/Header"
import Carousel from "./Components/Carousel";
import Footer from "./Components/Footer"

export default defineComponent({
    name: "Front",
    components: {
        Head,
        Link,
        Header,
        Carousel,
        Footer
    }
})

</script>

<style scoped>

</style>
