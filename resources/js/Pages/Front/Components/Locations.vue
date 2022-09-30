<template>
    <div class="w-screen h-auto mx-auto relative">
<!--        <div class="absolute w-full h-full bg-no-repeat object-cover -z-10 inset-x-0 bottom-0"-->
<!--             :style="{'background-image': 'url('+ urlDefault +'/Locations/background_location.svg)'}"></div>-->
        <div class="lg:max-w-7xl h-auto w-11/12 mx-auto flex flex-col lg:flex-row items-center sm:justify-around">
            <div class="flex items-center flex-col flex-1">
                <img src="../Images/Locations/location_pin.png" class="hidden lg:block m-4 w-40" alt="Ícone representando as localizações das unidades de atendimento">
                <h1 class="text-primary font-black text-2xl sm:text-5xl tracking-wider uppercase text-center my-6 sm:my-10">Unidades de atendimento.</h1>
            </div>
            <div class="flex flex-col justify-center items-center">
                <div class="flex bg-gray-100 rounded-lg w-full sm:w-10/12 h-auto my-2 sm:-translate-x-10 shadow-md">
                    <img class="w-32 h-32 rounded-lg object-cover bg-center" src="../Images/Locations/location-cover.jpg" alt="Imagem representando a unidade de atendimento">
                    <div class="flex-1 flex flex-col m-2">
                            <address class="not-italic font-bold text-primary text-lg font-normal">Vitória Park Shopping</address>
                            <p class="text-[8pt] text-gray-400">Avenida Henrique de Holanda, 3000
                                Lojas 1025 - 1027 / Redenção -
                                Vitória de Santo Antão - PE
                                CEP.: 55612-901</p>
                        <div class="flex justify-end w-full">
                            <Link class="flex justify-around items-center bg-gradient-to-br from-secondary to-primary w-28 sm:w-32 h-auto rounded-full my-2 xs:mx-4 p-1" target="_blank" href="https://www.google.com/maps/place/Vitoria+Park+Shopping/@-8.116014,-35.270796,14z/data=!4m5!3m4!1s0x0:0x8d383df62c98babd!8m2!3d-8.1160142!4d-35.2707964?hl=pt-BR">
                                <span class="text-white text-[8pt] sm:text-sm">Como chegar</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </Link>
                        </div>
                    </div>
                </div>
                <div class="flex bg-gray-100 rounded-lg w-full sm:w-10/12 h-auto my-2 sm:translate-x-10 shadow-md">
                    <img class="w-32 h-32 rounded-lg object-cover bg-center" src="../Images/Locations/location-cover.jpg" alt="Imagem representando a unidade de atendimento">
                    <div class="flex-1 flex flex-col m-2">
                        <address class="not-italic font-bold text-primary text-lg font-normal">Shopping Carpina</address>
                        <p class="text-[8pt] text-gray-400">Avenida Henrique de Holanda, 3000
                            Lojas 1025 - 1027 / Redenção -
                            Vitória de Santo Antão - PE
                            CEP.: 55612-901</p>
                        <div class="flex justify-end w-full">
                            <Link class="flex justify-around items-center bg-gradient-to-br from-secondary to-primary w-28 sm:w-32 h-auto rounded-full my-2 xs:mx-4 p-1" target="_blank" href="https://www.google.com/maps/place/IMAG/@-7.8356876,-35.2260186,15z/data=!4m5!3m4!1s0x0:0x622adc7aa10055bd!8m2!3d-7.8356876!4d-35.2260186">
                                <span class="text-white text-[8pt] sm:text-sm">Como chegar</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Locations",
    props: { urlDefault: String },
    components: {
        Link
    }
}
</script>

<style scoped>

</style>
