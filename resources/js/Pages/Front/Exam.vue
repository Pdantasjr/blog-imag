<template>
    <Head :title="exam.name"/>
    <CTAareas variant="top"/>
    <Header/>
    <div class="w-screen h-[200px] mt-24 object-cover bg-center -z-10 inset-x-0 bottom-0"
         :style="{'background-image': 'url('+ url +'/examsDetails/bg_exam_detail.svg)'}"></div>
    <div class="w-full h-auto">
        <div class="sm:max-w-7xl w-11/12 mx-auto">
            <Link :href="route('front.index')" class="flex flex-row items-center justify-start mt-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span class="text-gray-400 text-sm mx-2">Voltar</span>
            </Link>
            <h1 class="text-primary text-4xl text-center w-full mt-6">{{ exam.name }}</h1>
        </div>
    </div>
    <div class="flex flex-col w-full sm:max-w-5xl p-10 mx-auto">

        <div class="w-full h-auto border border-primary/30 rounded-lg flex flex-col shadow-md my-4">
            <div class="w-full p-2 flex justify-center items-center h-auto bg-secondary/20 rounded-lg  border-b-2 border-primary/30">
                <img class="w-8 h-8" :src="url+'/examsDetails/oquee.svg'" alt="O que é / para que serve">
                <h3 class="text-primary text-center m-2">O que é / para que serve?</h3>
            </div>
            <div class="flex items-center">
                <p class="text-primary text-justify font-light text-sm m-2 py-4">{{ exam.what_is }}</p>
            </div>
        </div>

        <div class="w-full h-auto border border-primary/30 rounded-lg flex flex-col shadow-md my-4">
            <div class="w-full p-2 flex justify-center items-center h-auto bg-secondary/20 rounded-lg  border-b-2 border-primary/30">
                <img class="w-8 h-8" :src="url+'/examsDetails/como.svg'" alt="O que é / para que serve">
                <h3 class="text-primary text-center m-2">Como é realizado?</h3>
            </div>
            <div class="flex items-center">
                <p class="text-primary text-justify font-light text-sm m-2 py-4">{{ exam.how_it_is_done }}</p>
            </div>
        </div>

        <div class="w-full h-auto border border-primary/30 rounded-lg flex flex-col shadow-md my-4">
            <div class="w-full p-2 flex justify-center items-center h-auto bg-secondary/20 rounded-lg  border-b-2 border-primary/30">
                <img class="w-8 h-8" :src="url+'/examsDetails/duracao.svg'" alt="O que é / para que serve">
                <h3 class="text-primary text-center m-2">Duração média?</h3>
            </div>
            <div class="flex items-center">
                <p class="text-primary text-justify font-light text-sm m-2 py-4">{{ exam.average_duration }}</p>
            </div>
        </div>

        <div class="w-full h-auto border border-primary/30 rounded-lg flex flex-col shadow-md my-4">
            <div class="w-full p-2 flex justify-center items-center h-auto bg-secondary/20 rounded-lg  border-b-2 border-primary/30">
                <img class="w-8 h-8" :src="url+'/examsDetails/contraindicacoes.svg'" alt="O que é / para que serve">
                <h3 class="text-primary text-center m-2">Contraindicações | Restrições relativas:</h3>
            </div>
            <div class="flex items-center">
                <p class="text-primary text-justify font-light text-sm m-2 py-4">{{ exam.contraindications_or_relative_restrictions }}</p>
            </div>
        </div>

        <div class="w-full h-auto border border-primary/30 rounded-lg flex flex-col shadow-md my-4">
            <div class="w-full p-2 flex justify-center items-center h-auto bg-secondary/20 rounded-lg  border-b-2 border-primary/30">
                <img class="w-8 h-8" :src="url+'/examsDetails/orientacao.svg'" alt="O que é / para que serve">
                <h3 class="text-primary text-center m-2">Orientações para a realização | Preparo:</h3>
            </div>
            <div class="flex items-center">
                <p class="text-primary text-justify font-light text-sm m-2 py-4">{{ exam.service_guidelines }}</p>
            </div>
        </div>

        <div class="w-full h-auto border border-primary/30 rounded-lg flex flex-col shadow-md my-4">
            <div class="w-full p-2 flex justify-center items-center h-auto bg-secondary/20 rounded-lg  border-b-2 border-primary/30">
                <img class="w-8 h-8" :src="url+'/examsDetails/prazo.svg'" alt="O que é / para que serve">
                <h3 class="text-primary text-center m-2">Prazo de entrega?</h3>
            </div>
            <div class="flex items-center">
                <p class="text-primary text-justify font-light text-sm m-2 py-4">{{ exam.deadline }}</p>
            </div>
        </div>

        <div class="w-full h-auto border border-primary/30 rounded-lg flex flex-col shadow-md my-4">
            <div class="w-full p-2 flex justify-center items-center h-auto bg-secondary/20 rounded-lg  border-b-2 border-primary/30">
                <img class="w-8 h-8" :src="url+'/examsDetails/atendimento.svg'" alt="O que é / para que serve">
                <h3 class="text-primary text-center m-2">Orientações para o atendimento:</h3>
            </div>
            <div class="flex items-center">
                <p class="text-primary text-justify font-light text-sm m-2 py-4">{{ exam.achievement_orientation_or_preparation }}</p>
            </div>
        </div>

    </div>
    <BackToTop/>
    <Footer/>
</template>

<script>
import {defineComponent} from 'vue'

import {Link, Head} from '@inertiajs/inertia-vue3';
import CTAareas from "./Components/CTAareas";
import Header from "./Components/Header"
import BackToTop from "./Components/BackToTop";
import Footer from "./Components/Footer"

export default defineComponent({
    name: "Exam",
    props: {
        exam: Object,
        url: String,
    },
    components: {
        Link,
        Head,
        CTAareas,
        Header,
        BackToTop,
        Footer,
    },
    methods: {
        backToTheTop: function () {
            return window.scrollTo(0, 0)
        },
    },
    mounted: function () {
        this.$nextTick(function () {
            this.backToTheTop()
        })
    },
})
</script>
