<template>
    <Head title="Postagem no blog" />
    <Header />
    <content-single>
        <template #title>
            <h1>{{ post.title }}</h1>
        </template>
        <template #content>
            <div v-html="post.post_content"></div>
        </template>
    </content-single>
    <Footer />
</template>

<script>
import { defineComponent } from 'vue';
import Header from '@/Pages/Blog/Layouts/Header';
import ContentSingle from "@/Pages/Blog/Layouts/ContentSingle";
import Footer from "@/Pages/Blog/Layouts/Footer";
import {Head, Link} from "@inertiajs/inertia-vue3";

export default defineComponent({
    name: "Show",
    components: {
        Head,
        Link,
        Header,
        ContentSingle,
        Footer,
    },
    props: {
        post: Array,
    }
})
</script>

<style scoped>

</style>
