<template>
    <div class="flex flex-col justify-center overflow-y-hidden">
        <Head title="Home"/>
        <Header/>
        <Carousel />
        <SearchForm />
        <OurExams />
    </div>
</template>

<script>
import {defineComponent} from 'vue'

import {Head, Link} from '@inertiajs/inertia-vue3';
import Header from "./Components/Header"
import Carousel from "./Components/Carousel";
import SearchForm from "./Components/SearchForm";
import OurExams from "./Components/OurExams";
import Footer from "./Components/Footer"

export default defineComponent({
    name: "Front",
    components: {
        Head,
        Link,
        Header,
        Carousel,
        SearchForm,
        OurExams,
        Footer
    }
})

</script>

<style scoped>

</style>
