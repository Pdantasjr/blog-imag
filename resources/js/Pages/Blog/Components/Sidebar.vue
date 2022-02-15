<template>
    <div class="flex">
        <div class="md:flex space-x-4 justify-around items-center hover:cursor-pointer hidden">
            <a :href="link.phone">
                <Icons name="phone" class="text-primary min-w-fit"/>
            </a>
            <a :href="link.whatsApp" target="_blank">
                <Icons name="whatsapp" class="text-primary min-w-fit" />
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

    <nav class="translate-x-full flex flex-col items-center sidebar md:hidden z-0 mt-20 bg-primary text-background w-64 absolute inset-y-0 right-0 transform transition duration-150 ease-in-out">
        <Link class="w-full text-center py-4 text-background hover:font-bold hover:scale-105 hover:translate-x-2 transition ease-in-out duration-200 font-medium space-y-8 mt-8" href="#">Nossos Exames</Link>
        <Link class="w-full text-center py-4 text-background hover:font-bold hover:scale-105 hover:translate-x-2 transition ease-in-out duration-200 font-medium space-y-8" href="#">Institucional</Link>
        <Link class="w-full text-center py-4 text-background hover:font-bold hover:scale-105 hover:translate-x-2 transition ease-in-out duration-200 font-medium space-y-8" href="#">Convênios</Link>
        <Link class="w-full text-center py-4 text-background hover:font-bold hover:scale-105 hover:translate-x-2 transition ease-in-out duration-200 font-medium space-y-8" href="#">Equipe Médica</Link>
        <Link class="w-full text-center py-4 text-background hover:font-bold hover:scale-105 hover:translate-x-2 transition ease-in-out duration-200 font-medium space-y-8" href="#">Blog</Link>
    </nav>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import Icons from "@/Pages/Blog/Components/Icons";

export default {
    name: "Sidebar",
    components: {
        Icons,
        Link,
    },
    data () {
        return {
            link: {
                whatsApp: 'https://wa.me/558194630900?text=Olá,%20estou%20vindo%20do%20site,%20preciso%20de%20mais%20informações',
                phone: 'tel:8130409999'
            },
        }
    },
    methods: {
        toggle() {
            let line1 = document.querySelector('.line1')
            let line2 = document.querySelector('.line2')
            let sidebar = document.querySelector('.sidebar')

            line1.classList.toggle('rotate_line1')
            line2.classList.toggle('rotate_line2')
            sidebar.classList.toggle('translate-x-full')
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

.sidebar {
    z-index: -10;
}
</style>
