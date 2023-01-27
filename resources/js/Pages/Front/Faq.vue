<template>
    <Head title="Faq"></Head>
    <CTAareas :variant="'top'" />
    <Header/>
    <div class="mt-36">
        <div class="p-4 my-36 max-w-5xl mx-auto">
                <h1 class="text-center lg:text-left text-primary text-4xl md:text-5xl sm:text-6xl mb-3 uppercase font-extrabold">
                    Perguntas frequentes</h1>
        </div>
        <div class="bg-primary mb-44">

            <div v-for="question in questions" :key="question.id" class=" max-w-5xl mx-auto">
                <Acoordion :question="question.question" :answer="question.answer" />
            </div>

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
    props: {
        questions: Object,
    },
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
