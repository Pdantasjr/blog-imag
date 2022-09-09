<template>
    <Head :title="member.name"/>
    <CTAareas variant="top"/>
    <Header/>
    <div class="w-screen h-[200px] mt-24 bg-no-repeat object-cover -z-10 inset-x-0 bottom-0"
         :style="{'background-image': 'url('+ url +'/Staff/default/staff_cover_default.svg)'}"></div>

        <div class="sm:max-w-7xl w-11/12 mx-auto">
            <Link :href="route('front.index')" class="flex flex-row items-center justify-start mt-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span class="text-gray-400 text-sm mx-2">Voltar</span>
            </Link>
            <div class="flex my-10 justify-center">
                <div class="flex flex-col sm:flex-row justify-center">
                    <div class="flex justify-center my-4">
                        <div class="w-48 h-48 md:w-80 rounded md:h-80 hover:border hover:shadow-lg bg-cover bg-top transition-all transform hover:-translate-y-2 duration-200 ease-in-out" :style="{'background-image':'url('+url +'/'+ member.avatar+')'}" ></div>
                    </div>
                    <div class="flex flex-col justify-center sm:justify-between mx-auto">
                        <div class="flex flex-col my-4">
                            <h1 class="text-primary text-center sm:text-left text-4xl sm:ml-4">{{ member.name }}</h1>
                            <h3 class="text-gray-500 text-lg text-center sm:text-left font-light sm:ml-4">{{ member.office }}</h3>
                            <span class="text-gray-400 text-sm text-center sm:text-left font-light sm:ml-4">CRM: {{ member.crm }}</span>
                        </div>
                        <div>
                            <h1 class="text-primary text-2xl text-center sm:text-left sm:ml-4">Horário de atendimento</h1>
                            <h3 class="text-gray-500 text-lg font-light text-center sm:text-left sm:ml-4">{{ member.serviceTime }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex my-6">
                <span v-html="member.about"></span>
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
    name: "TeamMember",
    props: {
        member: Object,
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
