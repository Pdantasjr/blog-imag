<template>
    <Head :title="exam.name"/>
    <CTAareas variant="top"/>
    <Header/>
    <div class="w-screen h-[200px] mt-24 bg-no-repeat object-cover -z-10 inset-x-0 bottom-0"
         :style="{'background-image': 'url('+ url +'/Staff/bg-member.svg)'}"></div>
    <div class="w-full h-auto">
        <div class="sm:max-w-7xl w-11/12 mx-auto">
            <Link :href="route('front.index')" class="flex flex-row items-center justify-start mt-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span class="text-gray-400 text-sm mx-2">Voltar</span>
            </Link>
            <h1 class="text-primary text-4xl text-center w-full">{{ exam.name }}</h1>

            <div class="flex flex-col justify-between p-10 ">
                <div class="w-full h-auto border border-primary rounded-lg flex ">
                    <div class="w-56 h-auto border border-red-600">
                        <img class="w-32 h-32" :src="url+'/examsDetails/oquee.svg'" alt="O que é / para que serve">
                        <h3 class="text-primary text-center">O que é / para que serve?</h3>
                    </div>
                    <div>
                        <p class="text-primary font-light text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci, aspernatur ex explicabo maiores molestiae nam nemo nisi odio optio possimus qui quia, quo reprehenderit rerum soluta suscipit ut voluptatibus?</p>
                    </div>
                </div>
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
