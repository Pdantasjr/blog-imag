<template>
    <div class="flex">
        <div class="md:flex space-x-4 justify-around items-center hover:cursor-pointer hidden">
            <a :href="link.phone">
                <Icons name="phone" class="text-primary"/>
            </a>

            <a :href="link.whatsApp" target="_blank">
                <Icons name="whatsapp" class="text-primary" />
            </a>
        </div>
        <div class="flex ml-12 justify-around items-center hover:cursor-pointer">
            <Link href="/search">
                <Icons name="search" class="text-primary w-8 h-8 min-w-fit"/>
            </Link>
        </div>
        <div class="flex items-center ml-12 hover:cursor-pointer">
            <button @click="toggle" class="flex flex-col items-center md:hidden hover:cursor-pointer">
                <span class="line1 transform origin-top-center transition duration-150"></span>
                <span class="line2 transform origin-top-center transition duration-150"></span>
            </button>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import Icons from "@/Pages/Front/Components/Icons";

export default {
    name: "ReaderButtons",
    components: {
        Link,
        Icons,
    },
    data () {
        return {
            link: {
                whatsApp: 'https://wa.me/558194630900?text=Olá,%20estou%20vindo%20do%20site,%20preciso%20de%20mais%20informações',
                phone: 'tel:8130409999'
            },
            isBurgerActive: false,
        }
    },
    methods: {
        toggle() {
          let line1 = document.querySelector('.line1')
          let line2 = document.querySelector('.line2')
            line1.classList.toggle('rotate_line1')
            line2.classList.toggle('rotate_line2')
        }
    },
}
</script>

<style scoped>
.line1 {
    width: 40px;
    height: 5px;
    background-color: #214654;
    margin: 4px 0;
    border-radius: 1em;
}
.line2 {
    width: 40px;
    height: 5px;
    background-color: #214654;
    margin: 4px 0;
    border-radius: 1em;
}
.rotate_line1 {
    transform: rotate(-45deg) translate(-2px, 6px);
}

.rotate_line2 {
    transform: rotate(45deg) translate(-2px, -6px);
}
</style>
