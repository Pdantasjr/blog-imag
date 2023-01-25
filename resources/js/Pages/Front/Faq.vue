<template>
    <Head title="Faq"></Head>
    <CTAareas :variant="'top'" />
    <Header/>
    <div class="mt-24">
        <div class="p-4 my-24 max-w-5xl grid gap-4 md:gap-6 sm:grid-cols-2 lg:grid-cols-3 mx-auto">

            <div class="h-auto col-span-2 lg:col-span-1 self-center py-4 lg:py-0">
                <h1 class="text-center lg:text-left text-primary text-4xl md:text-5xl sm:text-6xl mb-3 uppercase font-extrabold">
                    Ficou com alguma dúvida?</h1>
            </div>
            <div class="h-auto col-span-2 sm:col-span-2 rounded-lg bg-white shadow-md border border-gray-100 hover:cursor-pointer hover:shadow-2xl transition duration-200">
                banner
            </div>
        </div>

        <div class="p-4 my-24 max-w-5xl mx-auto">
            <Acoordion :category="'categotia'" :description="'descrição'" :deadline="'tempo restante'" />
            <Acoordion :category="'categotia'" :description="'descrição'" :deadline="'tempo restante'" />
            <Acoordion :category="'categotia'" :description="'descrição'" :deadline="'tempo restante'" />
            <Acoordion :category="'categotia'" :description="'descrição'" :deadline="'tempo restante'" />
        </div>


    </div>
    <Footer/>
</template>

<script>
import {Head, Link} from "@inertiajs/inertia-vue3";
import CTAareas from "@/Pages/Front/Components/CTAareas.vue";
import Acoordion from "@/Pages/Front/Components/Acoordion.vue";
import Header from "@/Pages/Front/Components/Header.vue";
import Footer from "@/Pages/Front/Components/Footer.vue";
import {defineComponent} from "vue";

export default defineComponent({
    components: {
        Head,
        Link,
        CTAareas,
        Acoordion,
        Header,
        Footer,
    },
    name: "Faq"
})
</script>

<style scoped>

</style>
