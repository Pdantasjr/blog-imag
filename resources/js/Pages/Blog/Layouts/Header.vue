<template>
    <div class="h-auto min-w-screen">
        <div class="bg-background header absolute top-0 w-full py-4 shadow-lg text-gray-100 flex justify-around items-center">
            <!--LOGO-->
            <Link :href="route('blog.index')">
                <Logotype logo_width="110" class="min-w-fit"/>
            </Link>
            <!--/LOGO-->

            <!--NAV-->
            <nav class="md:flex space-x-2 md:space-x-6 hidden">
                <Link :href="route('blog.index')" class="relative font-light text-primary py-6 links_a">Home</Link>
                <Link :href="route('blog.index')" class="relative font-light text-primary py-6 links_a">Nossos Exames</Link>
                <Link :href="route('blog.index')" class="relative font-light text-primary py-6 links_a">Institucional</Link>
                <Link :href="route('blog.index')" class="relative font-light text-primary py-6 links_a">Convênios</Link>
                <Link :href="route('blog.index')" class="relative font-light text-primary py-6 links_a">Equipe Médica</Link>
                <Link :href="route('blog.index')" class="relative font-light text-primary py-6 links_a">Blog</Link>
            </nav>
            <!--/NAV-->
            <!--RIGHT-->
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
                    <Link>
                        <Icons name="search" class="text-primary w-8 h-8 min-w-fit"/>
                    </Link>
                </div>
                <div class="flex items-center ml-12 hover:cursor-pointer md:hidden">
                    <button @click="toggle" class="flex flex-col items-center hover:cursor-pointer">
                        <span class="line1 transform origin-top-center transition duration-150"></span>
                        <span class="line2 transform origin-top-center transition duration-150"></span>
                    </button>
                </div>
            </div>
            <!--/RIGHT-->
        </div>
    </div>

    <!--SIDEBAR-->
    <div class="sidebar bg-primary text-blue-100 w-64 space-y-6 py-7 px-2 fixed inset-y-0 right-0 transform translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out md:hidden">
        <nav class="flex flex-col mt-14">
            <Link class="w-full text-center py-4 text-background hover:font-bold hover:scale-105 hover:translate-x-2 transition ease-in-out duration-200 font-medium space-y-8 mt-8" href="/">Home</Link>
            <Link class="w-full text-center py-4 text-background hover:font-bold hover:scale-105 hover:translate-x-2 transition ease-in-out duration-200 font-medium space-y-8" href="#">Nossos Exames</Link>
            <Link class="w-full text-center py-4 text-background hover:font-bold hover:scale-105 hover:translate-x-2 transition ease-in-out duration-200 font-medium space-y-8" href="#">Institucional</Link>
            <Link class="w-full text-center py-4 text-background hover:font-bold hover:scale-105 hover:translate-x-2 transition ease-in-out duration-200 font-medium space-y-8" href="#">Convênios</Link>
            <Link class="w-full text-center py-4 text-background hover:font-bold hover:scale-105 hover:translate-x-2 transition ease-in-out duration-200 font-medium space-y-8" href="#">Equipe Médica</Link>
            <Link class="w-full text-center py-4 text-background hover:font-bold hover:scale-105 hover:translate-x-2 transition ease-in-out duration-200 font-medium space-y-8" :href="route('blog.index')">Blog</Link>
        </nav>
    </div>
    <!--/SIDEBAR-->
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import Icons from "@/Pages/Blog/Components/Icons";

import Logotype from "@/Pages/Blog/Components/Logotype";
import Nav from "@/Pages/Blog/Components/Nav";
import Sidebar from "@/Pages/Blog/Components/Sidebar";

export default {
    name: "Header",
    components: {
        // Nav,
        Logotype,
        Link,
        Icons,
        // Sidebar,
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
            sidebar.classList.toggle('absolute')
        }
    },
}
</script>

<style scoped>

.links_a:before {
    content: "";
    position: absolute;
    bottom: 0;
    height: 6px;
    width: 10px;
    left: calc(100% + 20px);
    opacity: 0;
    background-color: #214654;
    z-index: 2;
    display: block;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    -webkit-transition-timing-function: cubic-bezier(0.58, 0.3, 0.005, 1);
    -o-transition-timing-function: cubic-bezier(0.58, 0.3, 0.005, 1);
    transition-timing-function: cubic-bezier(0.58, 0.3, 0.005, 1);
}

.links_a:hover:before {
    width: 100%;
    left: 0;
    opacity: 1;
}

/*BURGER*/

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
.header {
    z-index: 200;
}
</style>
