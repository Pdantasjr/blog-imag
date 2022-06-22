<template>
    <div class="flex flex-col justify-center overflow-y-hidden">
        <Head title="Home"/>
        <CTAareas :variant="'top'" />
        <Header/>
        <Carousel />
        <SearchForm :defaultUrl="this.defaultUrl" />
        <OurExams :methodImage="this.methodImage" :methods="this.methods" :defaultUrl="this.defaultUrl" />
        <CTAareas :variant="'blue'" />
        <Institutional :urlDefault="this.urlDefault" />
        <Agreement :urlDefault="this.urlDefault" />
        <Team :urlDefault="this.urlDefault" />
        <BackToTop />
        <Footer />
    </div>
</template>

<script>
import {defineComponent} from 'vue'

import {Head, Link} from '@inertiajs/inertia-vue3';
import Header from "./Components/Header"
import Carousel from "./Components/Carousel";
import SearchForm from "./Components/SearchForm";
import OurExams from "./Components/OurExams";
import CTAareas from "./Components/CTAareas";
import Institutional from "./Components/Institutional"
import Agreement from "./Components/Agreement";
import Team from "./Components/Team";
import BackToTop from "./Components/BackToTop";
import Footer from "./Components/Footer"

export default defineComponent({
    name: "Front",
    props: {
        urlDefault: String,
        defaultUrl: String,
        methods: Object,
        methodImage: String,
    },
    components: {
        Head,
        Link,
        Header,
        Carousel,
        SearchForm,
        OurExams,
        CTAareas,
        Institutional,
        Agreement,
        Team,
        BackToTop,
        Footer
    }
})

</script>

<style scoped>

</style>
