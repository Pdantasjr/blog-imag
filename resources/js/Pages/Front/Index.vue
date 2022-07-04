<template>
    <div class="flex flex-col justify-center overflow-y-hidden">
        <CTAareas :variant="'top'" />
<!--        <Header/>-->
<!--        <Carousel />-->
        <SearchForm :defaultUrl="this.defaultUrl" />
        <OurExams :methodImage="this.methodImage" :methods="this.methods" :defaultUrl="this.defaultUrl" />
<!--        <CTAareas :variant="'blue'" />-->
<!--        <Institutional :urlDefault="this.urlDefault" />-->
<!--        <Academy :urlDefault="this.urlDefault" />-->
<!--        <Agreement :urlDefault="this.urlDefault" :agreements="this.agreements" />-->
<!--        <Locations :urlDefault="this.urlDefault" />-->
<!--        <Staff :urlDefault="this.urlDefault" :staff="this.staff" />-->
<!--        <BackToTop />-->
<!--        <Footer />-->
    </div>
</template>

<script>
import {defineComponent} from 'vue'

import {Link} from '@inertiajs/inertia-vue3';
import Header from "./Components/Header"
import Carousel from "./Components/Carousel";
import SearchForm from "./Components/SearchForm";
import OurExams from "./Components/OurExams";
import CTAareas from "./Components/CTAareas";
import Institutional from "./Components/Institutional"
import Academy from "./Components/Academy";
import Locations from "./Components/Locations";
import Agreement from "./Components/Agreement";
import Staff from "./Components/Staff";
import BackToTop from "./Components/BackToTop";
import Footer from "./Components/Footer"

export default defineComponent({
    name: "Front",
    props: {
        urlDefault: String,
        defaultUrl: String,
        methods: Object,
        staff: Object,
        agreements: Object,
        methodImage: String,
    },
    components: {
        Link,
        Header,
        Carousel,
        SearchForm,
        OurExams,
        CTAareas,
        Institutional,
        Academy,
        Agreement,
        Locations,
        Staff,
        BackToTop,
        Footer
    }
})
</script>
