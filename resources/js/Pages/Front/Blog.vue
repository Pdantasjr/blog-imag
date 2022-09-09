<template>
    <Head title="Blog"/>
    <CTAareas :variant="'top'" />
    <Header/>
    <div v-if="posts.length">
        <div class="p-4 my-10 sm:my-24 max-w-5xl grid gap-4 md:gap-6 sm:grid-cols-2 lg:grid-cols-3 mx-auto">
        <div class="h-auto col-span-2 lg:col-span-1 self-center py-4 lg:py-0">
            <h1 class="text-center lg:text-left text-primary text-4xl md:text-5xl sm:text-6xl mb-3 uppercase font-extrabold">
                Nosso Blog</h1>
            <p class="text-primary lg:text-left text-center text-lg sm:text-2xl font-light">Informação com qualidade, direto
                de nosso time para você.</p>
        </div>
            <div class="h-auto col-span-2 sm:col-span-2 rounded-lg bg-white shadow-md border border-gray-100 hover:cursor-pointer hover:shadow-2xl transition duration-200">
                <Link :href="route('front.post', [lastPost.slug])">
                    <div class="max-h-fit w-full">
                        <img class="object-cover rounded-t-lg bg-center" :src="url+'/'+lastPost.post_cover"
                             alt="Cover do post">
                    </div>
                    <div class="flex flex-col p-2">
                        <h2 class="text-primary font-bold text-lg py-2">{{ lastPost.title }}</h2>
                        <h3 class="text-secondary py-2 text-sm font-light">{{ lastPost.subtitle }}</h3>
                        <span class="text-gray-400 text-xs font-light">Postado em {{
                                new Intl.DateTimeFormat('pt-BR', {
                                    day: 'numeric',
                                    month: 'numeric',
                                    year: 'numeric'
                                }).format(new Date(lastPost.created_at))
                            }} às {{
                                new Intl.DateTimeFormat('pt-BR', {
                                    hour: 'numeric',
                                    minute: 'numeric',
                                    second: 'numeric'
                                }).format(new Date(lastPost.created_at))
                            }} por {{ lastPost.post_author.name }}</span>
                    </div>
                </Link>
            </div>
            <div v-for="post in posts" :key="post.id"
                 class="h-auto col-span-2 sm:col-span-1 rounded-lg bg-white shadow-md border border-gray-100 hover:cursor-pointer hover:shadow-2xl transition duration-200">

                <Link :href="route('front.post', [post.slug])">

                    <div class="max-h-fit w-full rounded-lg">
                        <img class="rounded-t-lg bg-cover bg-center" :src="url+'/'+post.post_cover" alt="Cover do post">
                    </div>
                    <div class="flex flex-col p-2">
                        <h2 class="text-primary font-bold text-lg py-2">{{ post.title }}</h2>
                        <h3 class="text-secondary py-2 text-sm font-light">{{ post.subtitle }}</h3>
                        <span class="text-gray-400 text-xs font-light">Postado em {{
                                new Intl.DateTimeFormat('pt-BR', {
                                    day: 'numeric',
                                    month: 'numeric',
                                    year: 'numeric'
                                }).format(new Date(post.created_at))
                            }} às {{
                                new Intl.DateTimeFormat('pt-BR', {
                                    hour: 'numeric',
                                    minute: 'numeric',
                                    second: 'numeric'
                                }).format(new Date(post.created_at))
                            }} por {{ post.post_author.name }}</span>
                    </div>
                </Link>
            </div>
        </div>
    </div>
    <div v-else>
        <p class="text-primary text-center text-ms my-10 font-light">Ainda estamos produzindo o melhor conteúdo relacionado à saúde.</p>
    </div>
    <Footer/>
</template>

<script>
import {defineComponent} from 'vue'

import {Head, Link} from '@inertiajs/inertia-vue3';
import CTAareas from "./Components/CTAareas";
import Header from "./Components/Header";
import Footer from "./Components/Footer";

export default defineComponent({
    components: {
        Head,
        Link,
        CTAareas,
        Header,
        Footer,
    },
    props: {
        posts: Object,
        url: String,
        lastPost: Object,
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
