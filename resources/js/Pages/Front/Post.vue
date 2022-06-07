<template>
    <Head :title="title " />
    <Header />
    <content-single>
        <template #title>
            <h1 class="text-center font-medium text-primary text-4xl md:text-5xl mt-40 md:mt-60 mb-24 md:my-24 px-4">{{ post.title }}</h1>
        </template>
        <template #cover>
            <img class="w-full h-10/12 bg-cover bg-center rounded shadow-2xl mx-auto" :src="post.post_cover" alt="Cover">
        </template>
        <template #content>
            <p class="mx-4 text-gray-400 mt-10 mb-2 font-light text-xs">Publicado em {{ new Intl.DateTimeFormat('pt-BR', { day: 'numeric', month: 'long', year: 'numeric'} ).format( new Date(post.created_at)) }} às {{ new Intl.DateTimeFormat('pt-BR', { hour: 'numeric', minute: 'numeric', second: 'numeric'} ).format( new Date(post.created_at)) }} por {{ post.author.name }} </p>
            <span class="mx-4 text-xs font-light text-gray-500 mb-2"> Categoria: {{ post.category.name }} </span>
            <div class="mx-4 py-10">
                <span v-html="post.post_content"></span>
            </div>
        </template>
    </content-single>
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
    }
})
</script>
