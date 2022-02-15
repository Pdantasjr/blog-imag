<template>
    <div class="flex">
        <div class="md:flex space-x-4 justify-around items-center hover:cursor-pointer hidden">
            <a :href="link.phone">
                <Icons name="phone" class="text-primary"/>
                <!--                <img :src="icons.phoneIcon" alt="Telefone">-->
            </a>

            <a :href="link.whatsApp" target="_blank">
                <Icons name="whatsapp" class="text-primary" />
                <!--                    <img :src="icons.whatsApp" alt="WhatsApp">-->
            </a>
        </div>
        <div class="flex ml-12 justify-around items-center hover:cursor-pointer">
            <Link href="/search">
                <Icons name="search" class="text-primary w-10 h-10"/>
                <!--            <img :src="icons.search" alt="Pesquisar">-->
            </Link>
        </div>
        <div class="flex ml-12 justify-around items-center hover:cursor-pointer">
            <button @click="burgerAnimate" :class="{ active: toggle }" class="flex flex-col items-center w-10 h-6 justify-around md:hidden hover:cursor-pointer">
                <div class="line1"></div>
                <div class="line2"></div>
            </button>
        </div>
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
            },
            toggle: 'teste',
        }
    },
    methods: {
        burgerAnimate() {
          this.burger = "toggle"
        },
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
.line1 {
    width: 2.1em;
    height: .4em;
    background-color: #214654;
    border-radius: 1em;
}
.line2 {
    width: 2.1em;
    height: .4em;
    background-color: #214654;
    border-radius: 1em;
}
.toggle.line1 {
    transform: rotate(-45deg) translate(0px, 6px);
}

.toggle.line2 {
    transform: rotate(45deg) translate(-1px, -6px);
}
</style>
