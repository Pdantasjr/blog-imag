<template>
    <div class="icons">
        <div class="contact-menu">
            <a :href="link.phone">
                <img :src="icons.phoneIcon" alt="Telefone">
            </a>
            <a href="#">
                <a :href="link.whatsApp"
                   target="_blank">
                    <img :src="icons.whatsApp" alt="WhatsApp">
                </a>
            </a>
        </div>
        <Link class="group flex items-center py-3" href="/search">
            <Icons name="search" class="mr-2 w-4 h-4 text-red-500" />
<!--            <img :src="icons.search" alt="Pesquisar">-->
        </Link>
        <button class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
        </button>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import Icons from "@/Pages/Blog/Components/Icons";

export default {
    name: "ReaderButtons",
    components: {
        Link,
        Icons,
    },
    data () {
        return {
            icons: {
                phone: '',
                whatsApp: '',
                search: '',
            },
            link: {
                whatsApp: 'https://wa.me/558194630900?text=Olá,%20estou%20vindo%20do%20site,%20preciso%20de%20mais%20informações',
                phone: 'tel:8130409999'
            }
        }
    },
    methods: {
        isUrl(...urls) {
            let currentUrl = this.$page.url.substr(1)
            if (urls[0] === '') {
                return currentUrl === ''
            }
            return urls.filter((url) => currentUrl.startsWith(url)).length
        },
    },
}
</script>

<style scoped>

</style>
