<template>
    <div class="w-screen">
        <!--TOP-->
        <div v-if="variant == 'top'"
             class="md:hidden w-full h-auto flex flex-row justify-center items-center mx-auto bg-primary z-30 relative">
            <Link
                class="flex justify-center items-center bg-primary w-3/4 h-8 rounded-full border border-white my-2 mx-2 xs:mx-4 py-1 px-1 drop-shadow-md hover:drop-shadow-lg group"
                href="#">
                <Icons name="pacient-top-w"/>
                <span
                    class="text-white text-[.8rem] xs:text-lg font-light ml-2 ">Área do Paciente</span>
            </Link>
            <Link
                class="flex justify-center items-center bg-primary w-3/4 h-8 rounded-full border border-white my-2 mx-2 xs:mx-4 py-1 px-1 drop-shadow-md hover:drop-shadow-lg group"
                target="_blank" href="http://imag.najasocial.com/users/sign_in?role=4">
                <Icons name="medic-top-w"/>
                <span
                    class="text-white text-[.8rem] xs:text-lg font-light ml-2 ">Área do Médico</span>
            </Link>
        </div>
        <!--BLUE-->
        <div v-if="variant == 'blue'"
             class="lg:max-w-5xl w-11/12 h-32 xs:h-44 flex flex-col xs:flex-row justify-around items-center mx-auto">
            <div class="w-full xs:w-64 flex flex-row">
                <Link
                    class="flex justify-center xs:justify-around items-center bg-primary w-full h-auto rounded-full py-2 mr-2 px-2 drop-shadow-md hover:drop-shadow-lg group transition transform hover:scale-105 xs:hover:scale-110 duration-300 ease-in-out"
                    href="#">
                    <Icons name="pacient-w"/>
                    <span
                        class="text-white text-md xs:text-lg font-light ml-2 ">Área do Paciente</span>
                </Link>
            </div>
            <div class="w-full xs:w-64 flex flex-row">
                <Link
                    class="flex justify-center xs:justify-around items-center bg-primary w-full h-auto rounded-full py-2 px-2 drop-shadow-md hover:drop-shadow-lg group transition transform hover:scale-105 xs:hover:scale-110 duration-300 ease-in-out"
                    target="_blank" href="http://imag.najasocial.com/users/sign_in?role=4">
                    <Icons name="medic-w"/>
                    <span
                        class="text-white text-md xs:text-lg font-light ml-2 ">Área do Médico</span>
                </Link>
            </div>
        </div>
        <!--FOOTER-->
        <div v-if="variant == 'footer'"
             class="lg:max-w-5xl w-11/12 h-24 flex flex-col xs:flex-row justify-around items-center mx-auto">
            <div class="w-full xs:w-64 flex flex-row">
                <Link
                    class="flex justify-center xs:justify-around items-center bg-white w-full h-auto rounded-full py-2 mr-2 px-2 drop-shadow-md hover:drop-shadow-lg group transition transform hover:scale-105 xs:hover:scale-110 duration-300 ease-in-out"
                    href="#">
                    <Icons name="pacient-b"/>
                    <span
                        class="text-primary text-md xs:text-lg font-light ml-2 ">Área do Paciente</span>
                </Link>
            </div>
            <div class="w-full xs:w-64 flex flex-row">
                <Link
                    class="flex justify-center xs:justify-around items-center bg-white w-full h-auto rounded-full py-2 px-2 drop-shadow-md hover:drop-shadow-lg group transition transform hover:scale-105 xs:hover:scale-110 duration-300 ease-in-out"
                    target="_blank" href="http://imag.najasocial.com/users/sign_in?role=4">
                    <Icons name="medic-b"/>
                    <span
                        class="text-primary text-md xs:text-lg font-light ml-2 ">Área do Médico</span>
                </Link>
            </div>
        </div>
    </div>
</template>

<script>
import {defineComponent} from 'vue'
import {Link} from "@inertiajs/inertia-vue3";
import Icons from "./Icons";

export default defineComponent({
    name: "CTAareas",
    props: {
        variant: String,
    },
    components: {
        Link,
        Icons,
    }
})
</script>
