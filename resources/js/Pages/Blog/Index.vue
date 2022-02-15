<template>
    <Head title="Blog IMAG" />
    <Header />
    <Footer />
</template>

<script>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import Header from '@/Pages/Blog/Layouts/Header';
import Footer from "@/Pages/Blog/Layouts/Footer";

export default defineComponent({
    components: {
        Head,
        Link,
        Header,
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
