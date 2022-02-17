<template>
    <Head title="Blog IMAG" />
    <Header />
    <content>
        <template #content>
            <div class="h-auto col-span-2 lg:col-span-1 self-center py-4 lg:py-0 overflow-hidden">
                <h1 class="text-center lg:text-left text-primary text-4xl md:text-5xl sm:text-6xl mb-3 uppercase font-extrabold">Nosso Blog</h1>
                <p class="text-neutral lg:text-left text-center text-lg sm:text-2xl font-light">Informação com qualidade, direto de nosso time para você.</p>
            </div>

            <div  class="h-auto col-span-2 sm:col-span-2 rounded-lg bg-gray-50 shadow-sm border border-gray-200 hover:cursor-pointer hover:shadow-lg transition duration-200">
                <Link :href="route('blog.show', [lastPost.slug])">
                    <div class="max-h-fit w-full">
                        <img class="object-cover rounded-t-lg bg-center" :src="url+'/'+lastPost.post_cover" alt="Cover do post">
                    </div>
                    <div class="flex flex-col p-2">
                        <h2 class="text-primary font-bold text-lg py-2">{{ lastPost.title }}</h2>
                        <h3 class="text-neutral py-2 text-sm font-light">{{ lastPost.subtitle }}</h3>
                        <span class="text-neutral text-xs font-light">Postado em {{ new Intl.DateTimeFormat('pt-BR', { day: 'numeric', month: 'numeric', year: 'numeric'} ).format( new Date(lastPost.created_at)) }} às {{ new Intl.DateTimeFormat('pt-BR', { hour: 'numeric', minute: 'numeric', second: 'numeric'} ).format( new Date(lastPost.created_at)) }} por {{ lastPost.post_author.name }}</span>
                    </div>
                </Link>
            </div>

            <div v-for="post in posts" :key="post.id" class="h-80 col-span-2 sm:col-span-1 rounded-lg bg-gray-50 shadow-sm border border-gray-200 hover:cursor-pointer hover:shadow-lg transition duration-200">
                <Link :href="route('blog.show', [post.slug])" >
                    <div class="max-h-fit w-full rounded-lg">
                        <img class="rounded-t-lg bg-cover bg-center" :src="url+'/'+post.post_cover" alt="Cover do post">
                    </div>
                    <div class="flex flex-col p-2">
                        <h2 class="text-primary font-bold text-lg py-2">{{ post.title }}</h2>
                        <h3 class="text-neutral py-2 text-sm font-light">{{ post.subtitle }}</h3>
                        <span class="text-neutral text-xs font-light">Postado em {{ new Intl.DateTimeFormat('pt-BR', { day: 'numeric', month: 'numeric', year: 'numeric'} ).format( new Date(post.created_at)) }} às {{ new Intl.DateTimeFormat('pt-BR', { hour: 'numeric', minute: 'numeric', second: 'numeric'} ).format( new Date(post.created_at)) }} por {{ post.post_author.name }}</span>
                    </div>
                </Link>
            </div>
        </template>
    </content>
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
        posts: Object,
        url: String,
        lastPost: Object,
    }
})
</script>

<style scoped>

</style>
