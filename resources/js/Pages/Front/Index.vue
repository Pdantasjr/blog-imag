<template>
    <div class="flex flex-col justify-center overflow-y-auto">
        <Head title="Home"/>
        <Header/>
        <Carousel />
        <SearchForm />
        <SectionTitle :title="100" />
    </div>
</template>

<script>
import {defineComponent} from 'vue'

import {Head, Link} from '@inertiajs/inertia-vue3';
import Header from "./Components/Header"
import Carousel from "./Components/Carousel";
import SearchForm from "./Components/SearchForm";
import SectionTitle from "./Components/SectionTitle";
import Footer from "./Components/Footer"

export default defineComponent({
    name: "Front",
    components: {
        Head,
        Link,
        Header,
        Carousel,
        SearchForm,
        SectionTitle,
        Footer
    }
})

</script>

<style scoped>

</style>
