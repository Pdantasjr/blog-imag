<template>
    <div class="w-screen mt-24">
        <div class="lg:max-w-7xl w-11/12 mx-auto">
            <section-title title="Nossos Exames" id="nossosExames"></section-title>
        </div>
        <div class="w-screen bg-gradient-to-r from-primary to-secondary">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 sm:gap-4 lg:max-w-7xl w-11/12 mx-auto py-6 sm:py-10">
                <div @click="openFirstModal('grounds-maintenance-worker')"
                     class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="rm-w"/>
                    </div>
                    <div class="m-2 flex-1">
                        <span
                            class="text-white group-hover:font-bold tracking-wide transition-all duration-300 ease-in-out font-light">Ressonância Magnética</span>
                    </div>
                </div>
                <div @click="openFirstModal('mechanical-inspector')"
                     class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="tc-w"/>
                    </div>
                    <div class="m-2 flex-1">
                        <span
                            class="text-white group-hover:font-bold tracking-wide transition-all duration-300 ease-in-out font-light">Tomografica Computadorizada</span>
                    </div>
                </div>
                <div @click="openFirstModal('grounds-maintenance-worker')"
                     class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="do-w"/>
                    </div>
                    <div class="m-2 flex-1">
                        <span
                            class="text-white group-hover:font-bold tracking-wide transition-all duration-300 ease-in-out font-light">Densiometria Óssea</span>
                    </div>
                </div>
                <div @click="openFirstModal('paste-up-worker')"
                     class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="mm-w"/>
                    </div>
                    <div class="m-2 flex-1">
                        <span
                            class="text-white group-hover:font-bold tracking-wide transition-all duration-300 ease-in-out font-light">Mamografia</span>
                    </div>
                </div>
                <div @click="openFirstModal('correspondence-clerk')"
                     class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="ut-w"/>
                    </div>
                    <div class="m-2 flex-1">
                        <span
                            class="text-white group-hover:font-bold tracking-wide transition-all duration-300 ease-in-out font-light">Ultrassonografia</span>
                    </div>
                </div>
                <div @click="openFirstModal('engineering')"
                     class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="rx-w"/>
                    </div>
                    <div class="m-2 flex-1">
                        <span
                            class="text-white group-hover:font-bold tracking-wide transition-all duration-300 ease-in-out font-light">Raio-X</span>
                    </div>
                </div>
                <div @click="openFirstModal('telecommunications-line-installer')"
                     class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="pb-w"/>
                    </div>
                    <div class="m-2 flex-1">
                        <span
                            class="text-white group-hover:font-bold tracking-wide transition-all duration-300 ease-in-out font-light">Punções e Biópsias</span>
                    </div>
                </div>
                <div @click="openFirstModal('home-economics-teacher')"
                     class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="el-w"/>
                    </div>
                    <div class="m-2 flex-1">
                        <span
                            class="text-white group-hover:font-bold tracking-wide transition-all duration-300 ease-in-out font-light">Exames Laboratoriais</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<Modal v-for="exam in exams" :key="exam.id" :url="defaultUrl" :ModalOpen="this.ModalOpen" :title="exam.name" :content="exam.method" />-->
    <!--FIRST MODAL-->
    <transition name="slide-fade">
        <div v-if="this.ModalOpen"
             class="block fixed top-0 left-0 h-full w-full overflow-y-auto z-40 bg-black/50 backdrop-blur-sm">
            <!--MODAL LOADING-->
            <div v-if="this.loading"
                 class="flex items-center justify-center relative">
                <svg class="w-4 h-4 mr-1 text-gray-100 animate-spin fill-primary" viewBox="0 0 100 101" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor"></path>
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentFill"></path>
                </svg>
                <span class="text-white text-center my-6 ml-2">
                    Pesquisando...
                </span>
            </div>
            <!--MODAL CONTENT-->
            <div v-for="exam in this.exams" :key="exam.id"
                 class="bg-gray-50 flex flex-col items-center justify-between my-10 mx-auto border border-gray-300 rounded-lg w-10/12 lg:w-6/12 max-w-7xl h-3/6">
                <!--TITLE-->
                <div class="w-full h-auto border-b border-primary/25 shadow-lg shadow-primary/40">
                    <h1 class="text-primary text-2xl font-bold my-4 text-center">{{ exam.name }}</h1>
                </div>
                <!--BODY-->
                <div class="w-full flex-1 h-auto overflow-y-auto py-1">
                    <ul>
                        <li v-for="e in exam.method" :key="e.id"
                            class="px-4 w-full my-1 transition-all duration-200 ease-in-out">
                            <div class="block flex w-full items-center justify-between h-12 border-l-2 border-primary font-light hover:shadow-lg hover:cursor-pointer hover:text-primary hover:translate-x-2 hover:font-bold hover:bg-secondary/30 p-2 transition-all duration-200 ease-in-out">
                                <span>{{e.name}}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--FOOTER-->
                <div class="w-full h-auto border-t border-primary/25 flex justify-end">
                    <button @click="closeModal"
                            class="bg-primary w-32 h-8 rounded-full z-50 m-4 text-white font-light border border-white drop-shadow-md hover:drop-shadow-lg transition transform hover:scale-105 duration-100 ease-in-out">
                        Fechar
                    </button>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
import {defineComponent} from 'vue';
import {Link} from "@inertiajs/inertia-vue3";
import SectionTitle from "./SectionTitle";
import Icons from "./Icons";
import Modal from "./Modal";

export default defineComponent({
    name: "OurExams",
    props: {
        defaultUrl: String,
    },
    components: {
        Link,
        SectionTitle,
        Icons,
        Modal,
    },
    data() {
        return {
            exams: [],
            questions: [],
            loading: false,
            ModalOpen: false,
        }
    },
    methods: {
        openFirstModal(slug) {
            this.ModalOpen = true
            this.loading = true
            const endPoint = this.defaultUrl + "/api/exam"
            setTimeout(() => {
                this.loading = true
                this.ModalOpen = true
                axios.get(endPoint, {params: {slug: slug}})
                    .then(res => {
                        this.loading = false
                        this.exams = res.data
                    })
            }, 500)
        },
        closeModal() {
            this.ModalOpen = false
            this.exams = []
            this.questions = []
        }
    }
})
</script>

<style scoped>
.slide-fade-enter-active {
    transition: all 0.1s ease-out;
}

.slide-fade-leave-active {
    transition: all 0.1s ease-in;
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    opacity: 0;
}

.slide-move {
    transition: transform 1s;
}
</style>
