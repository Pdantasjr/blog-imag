<template>
    <div v-if="this.modal.isOpen">
        <div class="w-screen fixed top-0 left-0 h-full w-full z-40 bg-black/50 backdrop-blur-sm">
            <div class="bg-gray-50 relative flex my-10 mx-auto border border-gray-300 rounded-lg w-10/12 max-w-5xl h-4/6 overflow-y-hidden">

                    <!--LOADIND-->

                    <div class="relative w-full h-auto">
                        <div v-if="this.modal.loading"
                             class="flex items-center justify-center absolute inset-0 w-full h-auto bg-gray-50 rounded-lg">
                            <svg class="w-5 h-5 mr-1 text-gray-100 animate-spin fill-primary" viewBox="0 0 100 101"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill"></path>
                            </svg>
                            <span class="text-lg text-primary text-center my-6 ml-2">Carregando...</span>
                        </div>

                        <div v-if="!this.modal.loading" class="flex w-full h-full items-center justify-around">
                            <Link @click.prevent.stop="btnAgendamento" href="#" class="flex flex-col items-center justify-center w-4/12 h-80 p-4 rounded-2xl border border-gray-300 shadow-md cursor-pointer hover:scale-105 hover:shadow-lg transition transform duration-200 ease-in-out ">
                                <img class="w-44 h-auto m-4" src="../Images/pacientArea/agendamento.svg" alt="Agendamento">
                                <h3 class="text-primary text-2xl text-center font-bold">Agendamento</h3>
                            </Link>
                            <Link @click.prevent.stop="btnResultado" href="#" class="flex flex-col items-center justify-center w-4/12 h-80 p-4 rounded-2xl border border-gray-300 shadow-md cursor-pointer hover:scale-105 hover:shadow-lg transition transform duration-200 ease-in-out ">
                                <img class="w-44 h-auto m-4" src="../Images/pacientArea/entrega-do-exame.svg" alt="Resultado">
                                <h3 class="text-primary text-2xl text-center font-bold">Resultado</h3>
                            </Link>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    <div class="w-screen">
        <!--TOP-->
        <div v-if="variant == 'top'"
             class="md:hidden w-full h-auto flex flex-row justify-center items-center mx-auto bg-primary z-30 relative">
            <a  @click.prevent.stop="ctaModal"  class="flex justify-center items-center bg-primary w-3/4 h-8 rounded-full border border-white my-2 mx-2 xs:mx-4 py-1 px-1 drop-shadow-md hover:drop-shadow-lg group"
                href="#">
                <Icons name="pacient-top-w"/>
                <span class="text-white text-[.8rem] xs:text-lg font-light ml-2 ">Área do Paciente</span>
            </a>
            <a
                class="flex justify-center items-center bg-primary w-3/4 h-8 rounded-full border border-white my-2 mx-2 xs:mx-4 py-1 px-1 drop-shadow-md hover:drop-shadow-lg group"
                target="_blank" href="http://imag.najasocial.com/users/sign_in?role=4">
                <Icons name="medic-top-w"/>
                <span
                    class="text-white text-[.8rem] xs:text-lg font-light ml-2 ">Área do Médico</span>
            </a>
        </div>
        <!--BLUE-->
        <div v-if="variant == 'blue'"
             class="lg:max-w-5xl w-11/12 h-32 xs:h-44 flex flex-col xs:flex-row justify-around items-center mx-auto">
            <div class="w-full xs:w-64 flex flex-row">
                <a @click.prevent.stop="ctaModal" class="flex justify-center xs:justify-around items-center bg-primary w-full h-auto rounded-full py-2 mr-2 px-2 drop-shadow-md hover:drop-shadow-lg group transition transform hover:scale-105 xs:hover:scale-110 duration-300 ease-in-out"
                    href="#">
                    <Icons name="pacient-w"/>
                    <span class="text-white text-md xs:text-lg font-light ml-2 ">Área do Paciente</span>
                </a>
            </div>
            <div class="w-full xs:w-64 flex flex-row">
                <a class="flex justify-center xs:justify-around items-center bg-primary w-full h-auto rounded-full py-2 px-2 drop-shadow-md hover:drop-shadow-lg group transition transform hover:scale-105 xs:hover:scale-110 duration-300 ease-in-out"
                    target="_blank" href="http://imag.najasocial.com/users/sign_in?role=4">
                    <Icons name="medic-w"/>
                    <span class="text-white text-md xs:text-lg font-light ml-2 ">Área do Médico</span>
                </a>
            </div>
        </div>
        <!--FOOTER-->
        <div v-if="variant == 'footer'"
             class="lg:max-w-5xl w-11/12 h-24 flex flex-col xs:flex-row justify-around items-center mx-auto">
            <div class="w-full xs:w-64 flex flex-row">
                <a @click.prevent.stop="ctaModal" class="flex justify-center xs:justify-around items-center bg-white w-full h-auto rounded-full py-2 mr-2 px-2 drop-shadow-md hover:drop-shadow-lg group transition transform hover:scale-105 xs:hover:scale-110 duration-300 ease-in-out"
                    href="#">
                    <Icons name="pacient-b"/>
                    <span
                        class="text-primary text-md xs:text-lg font-light ml-2 ">Área do Paciente</span>
                </a>
            </div>
            <div class="w-full xs:w-64 flex flex-row">
                <a
                    class="flex justify-center xs:justify-around items-center bg-white w-full h-auto rounded-full py-2 px-2 drop-shadow-md hover:drop-shadow-lg group transition transform hover:scale-105 xs:hover:scale-110 duration-300 ease-in-out"
                    target="_blank" href="http://imag.najasocial.com/users/sign_in?role=4">
                    <Icons name="medic-b"/>
                    <span
                        class="text-primary text-md xs:text-lg font-light ml-2 ">Área do Médico</span>
                </a>
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
    },
    data () {
        return {
            modal: {
                loading: false,
                isOpen: false,
            }
        }
    },
    methods: {
        ctaModal() {
            this.modal.isOpen = true
            this.modal.loading = true
            setTimeout(() => {
                this.modal.loading = false
            }, 500)
            console.log('cta modal')
        },
        closeModal() {
            this.modal.isOpen = false
        },
        btnAgendamento () {
            return window.open(
                'https://imag.naja.app/portal/schedule',
                '_blank'
            )
        },
        btnResultado () {
            return window.open(
                'https://imag.naja.app/portal/login',
                '_blank'
            )
        },
    }
})
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 1s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
