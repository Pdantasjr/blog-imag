<template>
    <Head :title="title " />
    <Header />
    <div class="min-w-screen lg:max-w-7xl mx-auto">
        <img class="w-full mt-[100px] h-auto bg-cover bg-center object-cover mx-auto" :src="post.post_cover" alt="Cover">
    </div>
    <div class="w-11/12 sm:max-w-7xl mx-auto">
        <h1 class="text-center font-medium text-primary text-4xl md:text-5xl my-20 sm:my16 px-4">{{ post.title }}</h1>
    </div>
    <div class="w-11/12 sm:max-w-7xl mx-auto">
            <p class="mx-4 text-gray-400 mt-10 font-light text-xs">Publicado em {{ new Intl.DateTimeFormat('pt-BR', { day: 'numeric', month: 'long', year: 'numeric'} ).format( new Date(post.created_at)) }} às {{ new Intl.DateTimeFormat('pt-BR', { hour: 'numeric', minute: 'numeric', second: 'numeric'} ).format( new Date(post.created_at)) }} por {{ post.author.name }} </p>
            <span class="mx-4 text-xs font-light text-gray-500"> Categoria: {{ post.category.name }} </span>
            <div class="mx-4 py-10">
                <div v-html="post.post_content"></div>
            </div>
    </div>
    <Footer />
</template>

<script>
import { defineComponent } from 'vue';

import {Head, Link} from "@inertiajs/inertia-vue3";
import Header from "./Components/Header";
import Footer from "./Components/Footer"

export default defineComponent({
    name: "Show",
    components: {
        Head,
        Link,
        Header,
        Footer,
    },
    props: {
        post: Object,
    },
    data () {
        return {
            title: this.post.title,
        }
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
