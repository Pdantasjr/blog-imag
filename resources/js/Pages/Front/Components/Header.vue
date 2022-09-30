<template>
    <div class="flex items-center bg-white md:border-b md:shadow-lg z-30 relative sm:mb-0 w-screen mx-auto">
            <div class="absolute h-[103px] inset-0 bg-white bg-opacity-30 backdrop-blur-xl border-b-1 shadow-lg border-primary"></div>
            <div class="header absolute top-0 w-full py-2 sm:py-0 text-gray-100 flex flex-row justify-around items-center">
                <div class="w-full max-w-7xl flex flex-row justify-around items-center">
                    <!--LOGO-->
                    <Link :href="route('front.index')">
                        <img
                            src='../Images/logotype/logotipo-imag-medicina-diagnóstica.svg'
                            alt="Logotipo IMAG Medicia Diagnóstica"
                            class="w-32 my-2 h-auto"
                        />
                    </Link>
                    <!--NAV-->
                    <nav class="md:flex space-x-2 md:space-x-4 hidden">
                        <Link :href="route('front.index')" class="relative font-light hover:font-bold text-center flex justify-center items-center lg:w-[115px] sm:h-[103px] whitespace-nowrap text-primary transition-all duration-300 ease-in-out links_a">Home</Link>
                        <Link :href="route('front.ourExams')" class="relative font-light hover:font-bold text-center flex justify-center items-center lg:w-[115px] sm:h-[103px] whitespace-nowrap text-primary transition-all duration-300 ease-in-out links_a">Nossos Exames</Link>
                        <Link :href="route('front.institutional')" class="relative font-light hover:font-bold text-center flex justify-center items-center lg:w-[115px] sm:h-[103px] whitespace-nowrap text-primary transition-all duration-300 ease-in-out links_a">Institucional</Link>
                        <Link :href="route('front.agreements')" class="relative font-light hover:font-bold text-center flex justify-center items-center lg:w-[115px] sm:h-[103px] whitespace-nowrap text-primary transition-all duration-300 ease-in-out links_a">Convênios</Link>
                        <Link :href="route('front.staff')" class="relative font-light hover:font-bold text-center flex justify-center items-center lg:w-[115px] sm:h-[103px] whitespace-nowrap text-primary transition-all duration-300 ease-in-out links_a">Equipe Médica</Link>
                        <Link :href="route('front.blog')" class="relative font-light hover:font-bold text-center flex justify-center items-center lg:w-[115px] sm:h-[103px] whitespace-nowrap text-primary transition-all duration-300 ease-in-out links_a">Blog</Link>
                    </nav>
                    <!--/NAV-->
                    <!--RIGHT-->
                    <div class="flex">
                        <div class="md:flex space-x-4 justify-around items-center hover:cursor-pointer hidden">
                            <Link :href="link.phone">
                                <Icons name="phone" class="text-primary min-w-fit"/>
                            </Link>
                            <Link href="#" @click="WhatsAppLink" target="_blank">
                                <Icons name="whatsapp" class="text-primary min-w-fit" />
                            </Link>
                        </div>
<!--                        <div class="flex ml-12 justify-around items-center hover:cursor-pointer">-->
<!--                            <Link>-->
<!--                                <Icons name="search" class="text-primary w-8 h-8 min-w-fit"/>-->
<!--                            </Link>-->
<!--                        </div>-->
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

    </div>
    <!--SIDEBAR-->
    <div class="z-20 sidebar bg-primary text-blue-100 w-64 overflow-y-auto space-y-6 py-7 px-2 fixed inset-y-0 right-0 transform translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out md:hidden">
        <nav class="flex flex-col mt-14">
            <Link class="w-auto text-center py-4 text-white font-light rounded hover:border-b-2 hover:border-white hover:font-bold hover:-translate-y-2 hover:shadow-lg hover:bg-white/25 transition ease-in-out duration-300 space-y-8 mt-24" :href="route('front.index')">Home</Link>
            <Link class="w-auto text-center py-4 text-white font-light rounded hover:border-b-2 hover:border-white hover:font-bold hover:-translate-y-2 hover:shadow-lg hover:bg-white/25 transition ease-in-out duration-300 space-y-8" :href="route('front.ourExams')">Nossos Exames</Link>
            <Link class="w-auto text-center py-4 text-white font-light rounded hover:border-b-2 hover:border-white hover:font-bold hover:-translate-y-2 hover:shadow-lg hover:bg-white/25 transition ease-in-out duration-300 space-y-8" :href="route('front.institutional')" >Institucional</Link>
            <Link class="w-auto text-center py-4 text-white font-light rounded hover:border-b-2 hover:border-white hover:font-bold hover:-translate-y-2 hover:shadow-lg hover:bg-white/25 transition ease-in-out duration-300 space-y-8" :href="route('front.agreements')">Convênios</Link>
            <Link class="w-auto text-center py-4 text-white font-light rounded hover:border-b-2 hover:border-white hover:font-bold hover:-translate-y-2 hover:shadow-lg hover:bg-white/25 transition ease-in-out duration-300 space-y-8" :href="route('front.staff')">Equipe Médica</Link>
            <Link class="w-auto text-center py-4 text-white font-light rounded hover:border-b-2 hover:border-white hover:font-bold hover:-translate-y-2 hover:shadow-lg hover:bg-white/25 transition ease-in-out duration-300 space-y-8" :href="route('front.blog')">Blog</Link>
        </nav>
    </div>
    <!--/SIDEBAR-->
</template>

<script>
import {Head, Link} from "@inertiajs/inertia-vue3";
import Icons from "./Icons";
import CTAareas from "./CTAareas";

export default {
    name: "Header",
    components: {
        Head,
        Link,
        Icons,
        CTAareas,
    },
    data () {
        return {
            link: {
                phone: 'tel:8130409999'
            },
            WhatsAppLink () {
                return window.open(
                    'https://wa.me/558194630900?text=Olá,%20estou%20vindo%20do%20site,%20preciso%20de%20mais%20informações',
                    '_blank'
                )
            }
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
