<template>
    <Head title="Blog IMAG" />
    <Header />
    <Content />
    <Footer />
</template>

<script>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import Header from '@/Pages/Blog/Layouts/Header';
import Content from "@/Pages/Blog/Layouts/Content";
import Footer from "@/Pages/Blog/Layouts/Footer";

export default defineComponent({
    components: {
        Head,
        Link,
        Header,
        Content,
        Footer,
    },

    props: {
        canLogin: Boolean,
        canRegister: Boolean,
    }
})
</script>

<style scoped>

</style>
