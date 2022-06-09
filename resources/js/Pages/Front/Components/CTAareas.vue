<template>
    <div class="w-screen">
        <div class="lg:max-w-5xl w-11/12 h-44 flex flex-row justify-around items-center mx-auto">
            <div class="w-64 flex flex-row">
                <Link class="flex justify-around items-center bg-primary w-full h-auto rounded-full py-2 px-4 text-white text-lg font-light hover:font-bold border hover:border-white border-2 drop-shadow-md hover:drop-shadow-lg transition-all hover:scale-110 duration-300 ease-in-out" href="#">
                    <Icons name="pacient-w" />Área do Paciente</Link>
            </div>
            <div class="w-64 flex flex-row">
                <Link class="flex justify-around items-center bg-primary w-full h-auto rounded-full py-2 px-4 text-white text-lg font-light hover:font-bold border hover:border-white border-2 drop-shadow-md hover:drop-shadow-lg transition-all hover:scale-110 duration-300 ease-in-out" target="_blank" href="http://imag.najasocial.com/users/sign_in?role=4">
                    <Icons name="medic-w" />Área do Médico</Link>
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
    components: {
        Link,
        Icons,
    }
})
</script>
