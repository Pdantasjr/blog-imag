<template>
    <div class="w-screen mt-24">
        <div id="ourExams" class="lg:max-w-7xl w-11/12 mx-auto">
            <section-title title="Nossos Exames" id="nossosExames"></section-title>
        </div>
        <div class="w-full bg-gradient-to-r from-primary to-secondary">
            <div v-if="methods.length"
                 class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 sm:gap-4 lg:max-w-7xl w-11/12 mx-auto py-6 sm:py-10">
                <div v-for="method in methods" :key="method.id"
                     class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out"
                     @click="diagnosticMethods(method.slug)">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <img :src="this.methodImage+'/'+method.image" :alt="method.name"
                             class="w-12 h-12 sm:w-16 sm:h-16">
                    </div>
                    <div class="m-2 flex-1">
                        <span
                            class="text-white group-hover:font-bold tracking-wide transition-all duration-300 ease-in-out font-light">{{
                                method.name
                            }}</span>
                    </div>
                </div>
            </div>
            <div v-else class="w-full h-32 flex items-center justify-center">
                <p class="text-white font-light text-center">Estamos cadastrando nossos exames. ;)</p>
            </div>
        </div>
    </div>

    <div v-if="this.modal.isOpen">
        <div class="w-screen fixed top-0 left-0 h-full w-full z-40 bg-black/50 backdrop-blur-sm">
            <div class="bg-gray-50 relative flex flex-col justify-between items-stretch my-10 mx-auto border border-gray-300 rounded-lg w-10/12 max-w-5xl h-auto overflow-y-hidden">
                <Transition name="fade" mode="out-in">
                    <!--LOADIND-->
                    <div class="relative w-full h-auto">
                        <div v-if="this.modal.loading"
                             class="flex items-center justify-center absolute inset-0 w-full h-44 bg-white rounded-lg">
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
                    </div>
                </Transition>

                <!--                MODAL 1-->
                <Transition-group name="fade" mode="out-in">
                    <!--EXAMS LIST-->
                    <div v-if="!this.modal.loading" class="w-full h-auto" v-for="m in method.method" :key="m.id">
                        <!--TITLE-->
                        <div v-if="method.isOpen"
                             class="w-full h-16 sticky top-0 z-20 bg-white border-b border-primary/25 shadow-lg shadow-primary/40">
                            <div class="flex flex-row items-center justify-between">
                                <img class="w-12 h-12 m-2 p-1 bg-primary rounded"
                                     :src="this.methodImage+'/'+m.image"
                                     :alt="m.name">
                                <h1 class="text-primary text-2xl font-bold m-4 text-center">{{ m.name }}</h1>
                                <svg @click="this.modal.isOpen = false" xmlns="http://www.w3.org/2000/svg"
                                     class="h-6 w-6 m-4 text-primary hover:cursor-pointer" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                        </div>
                        <!--MODAL CONTENT-->
                        <div v-if="method.isOpen" class="w-full overflow-y-auto h-96 py-1">
                            <ul>
                                <li v-for="exam in m.exams"
                                    class="px-4 w-full my-1 transition-all duration-200 ease-in-out">
                                    <div @click="examDatails(exam.slug)"
                                         class="flex w-full items-center justify-between h-12 border-l-2 border-primary rounded-l font-light hover:shadow-lg hover:cursor-pointer hover:text-primary hover:translate-x-2 hover:font-bold hover:bg-secondary/30 p-2 transition-all duration-100 ease-in-out">
                                        <span>{{ exam.name }}</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                             fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </Transition-group>

                <!--                MODAL 2-->
                <Transition-group name="fade" mode="out-in">
                    <!--EXAMS QUESTIONS-->
                    <div v-if="!this.modal.loading" class="w-full h-auto">
                        <!--TITLE-->
                        <div v-if="this.exam.isOpen" class="w-full h-auto border-b sticky top-0 z-20 bg-white border-primary/25 shadow-lg shadow-primary/40 flex items-center justify-between">
                            <svg @click="returnToExamsList()" xmlns="http://www.w3.org/2000/svg"
                                 class="h-8 w-8 m-4 text-primary hover:cursor-pointer" fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                            </svg>
                            <h1 class="text-primary font-light m-4">{{ exam.detail.name }}</h1>
                        </div>
                        <!--MODAL QUESTIONS CONTENT-->
                        <div v-if="this.exam.isOpen" class="w-full h-auto overflow-y-auto p-2 my-2">
                            <div class="grid grid-cols-1 h-full flex-1 md:grid-cols-3 gap-2">
                                <div
                                    @click="questionResponse('O que é / para que serve?', img.oquee, exam.detail.what_is)"
                                    class="px-4 w-full h-auto flex md:flex-col items-center rounded hover:bg-secondary/30 hover:cursor-pointer transition-all duration-200 ease-in-out">
                                    <img class="h-16 w-16 m-2" :src="img.oquee" alt="">
                                    <span
                                        class="flex-1 text-primary md:text-center my-2">O que é / para que serve?</span>
                                </div>
                                <div
                                    @click="questionResponse('Como é realizado?', img.how_it_is_done, exam.detail.how_it_is_done)"
                                    class="px-4 w-full h-auto flex md:flex-col items-center rounded hover:bg-secondary/30 hover:cursor-pointer transition-all duration-200 ease-in-out">
                                    <img class="h-16 w-16 m-2" :src="img.how_it_is_done" alt="">
                                    <span
                                        class="flex-1 text-primary md:text-center my-2">Como é realizado?</span>
                                </div>
                                <div
                                    @click="questionResponse('Duração média', img.average_duration, exam.detail.average_duration)"
                                    class="px-4 w-full h-auto flex md:flex-col items-center rounded hover:bg-secondary/30 hover:cursor-pointer transition-all duration-200 ease-in-out">
                                    <img class="h-16 w-16 m-2" :src="img.average_duration" alt="">
                                    <span class="flex-1 text-primary md:text-center my-2">Duração média:</span>
                                </div>
                                <div
                                    @click="questionResponse('Contraindicações | Restrições relativas', img.contraindications_or_relative_restrictions, exam.detail.contraindications_or_relative_restrictions)"
                                    class="px-4 w-full h-auto flex md:flex-col items-center rounded hover:bg-secondary/30 hover:cursor-pointer transition-all duration-200 ease-in-out">
                                    <img class="h-16 w-16 m-2"
                                         :src="img.contraindications_or_relative_restrictions"
                                         alt="">
                                    <span class="flex-1 text-primary md:text-center my-2">Contraindicações | Restrições relativas:</span>
                                </div>
                                <div
                                    @click="questionResponse('Orientações para a realização | Preparo', img.service_guidelines, exam.detail.service_guidelines)"
                                    class="px-4 w-full h-auto flex md:flex-col items-center rounded hover:bg-secondary/30 hover:cursor-pointer transition-all duration-200 ease-in-out">
                                    <img class="h-16 w-16 m-2" :src="img.service_guidelines" alt="">
                                    <span class="flex-1 text-primary md:text-center my-2">Orientações para a realização | Preparo</span>
                                </div>
                                <div
                                    @click="questionResponse('Prazo de entrega', img.deadline, exam.detail.deadline)"
                                    class="px-4 w-full h-auto flex md:flex-col items-center rounded hover:bg-secondary/30 hover:cursor-pointer transition-all duration-200 ease-in-out">
                                    <img class="h-16 w-16 m-2" :src="img.deadline" alt="">
                                    <span
                                        class="flex-1 text-primary md:text-center my-2">Prazo de entrega:</span>
                                </div>
                                <div
                                    @click="questionResponse('Orientações para o atendimento', img.achievement_orientation_or_preparation, exam.detail.achievement_orientation_or_preparation)"
                                    class="px-4 w-full h-auto flex md:flex-col items-center rounded hover:bg-secondary/30 hover:cursor-pointer transition-all duration-200 ease-in-out">
                                    <img class="h-16 w-16 m-2" :src="img.achievement_orientation_or_preparation"
                                         alt="">
                                    <span
                                        class="flex-1 text-primary md:text-center my-2">Orientações para o atendimento:</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </Transition-group>

                <!--                MODAL 3-->
                    <Transition-group name="fade" mode="out-in">
                    <!--QUESTIONS RESPONSE-->
                    <div class="w-full h-auto flex flex-col">
                        <div v-if="this.rps.isOpen" class="w-full h-auto border-b sticky top-0 z-20 bg-white border-primary/25 shadow-lg shadow-primary/40 flex items-center justify-between">
                            <svg @click="returnToQuestions()" xmlns="http://www.w3.org/2000/svg"
                                 class="h-8 w-8 m-4 text-primary hover:cursor-pointer" fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                            </svg>
                            <div class="flex flex-row items-center">
                                <h1 class="text-primary font-light my-4">{{ this.rps.title }}</h1>
                                <img class="w-8 h-8 m-4" :src="this.rps.icon" :alt="this.rps.title">
                            </div>
                        </div>
                        <div v-if="this.rps.isOpen" class="w-full h-96 overflow-y-auto p-2 my-2">
                            <!--TITLE-->
                            <div class="flex items-center justify-center">
                                <img class="w-14 h-14 m-4" :src="this.rps.icon" :alt="this.rps.title">
                                <h1 class="text-primary text-2xl font-bold py-2 text-center">{{
                                        this.rps.title
                                    }}</h1>
                            </div>
                            <!--DESCRIPTION-->
                            <div class="w-10/12 h-auto mx-auto">
                                <p class="text-primary font-light p-2 text-justify">{{
                                        this.rps.description
                                    }}</p>
                            </div>
                        </div>
                    </div>
                    </Transition-group>
                <!--FOOTER-->
                <div class="w-full border-t bg-white border-primary/25 flex justify-end relative bottom-0 fixed">
                    <button v-if="!this.modal.loading" @click="closeModal()"
                            class="bg-primary w-32 h-8 rounded-full z-50 m-4 text-white font-light border border-white drop-shadow-md hover:drop-shadow-lg transition transform hover:scale-105 duration-100 ease-in-out">
                        Fechar
                    </button>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import {defineComponent} from 'vue';
import {Link} from "@inertiajs/inertia-vue3";
import SectionTitle from "./SectionTitle";
import Icons from "./Icons";

export default defineComponent({
    name: "OurExams",
    props: {
        defaultUrl: String,
        methods: Object,
        methodImage: String,
    },
    components: {
        Link,
        SectionTitle,
        Icons,
    },
    data() {
        return {
            method: {
                method: [],
                isOpen: false,
            },
            exam: {
                detail: '',
                isOpen: false
            },
            modal: {
                loading: false,
                isOpen: false,
            },
            img: {
                oquee: this.methodImage + '/examsDetails/oquee.svg',
                how_it_is_done: this.methodImage + '/examsDetails/como.svg',
                average_duration: this.methodImage + '/examsDetails/duracao.svg',
                contraindications_or_relative_restrictions: this.methodImage + '/examsDetails/contraindicacoes.svg',
                service_guidelines: this.methodImage + '/examsDetails/orientacao.svg',
                deadline: this.methodImage + '/examsDetails/prazo.svg',
                achievement_orientation_or_preparation: this.methodImage + '/examsDetails/atendimento.svg',
            },
            rps: {
                title: null,
                icon: null,
                description: null,
                isOpen: false
            }
        }
    },
    methods: {
        diagnosticMethods(slug) {
            this.modal.isOpen = true
            this.method.isOpen = true
            this.modal.loading = true
            const endPoint = this.defaultUrl + "/api/methods"
            setTimeout(() => {
                axios.get(endPoint, {params: {slug: slug}})
                    .then(res => {
                        this.method.method = res.data
                        this.modal.loading = false

                    })
            }, 300)
        },
        examDatails(slug) {
            this.method.isOpen = false
            this.exam.isOpen = true
            this.modal.loading = true
            const endPoint = this.defaultUrl + "/api/exam"
            setTimeout(() => {
                axios.get(endPoint, {params: {slug: slug}})
                    .then(res => {
                        this.exam.detail = res.data
                        this.modal.loading = false
                    })
            }, 200)
        },
        questionResponse(title, icon, description) {
            this.rps.isOpen = true
            this.exam.isOpen = false
            this.modal.loading = true
            setTimeout(() => {
                this.rps.title = title
                this.rps.icon = icon
                this.rps.description = description
                this.modal.loading = false
            }, 200)
        },
        returnToQuestions() {
            this.modal.loading = true
            setTimeout(() => {
                this.rps.isOpen = false
                this.exam.isOpen = true
                this.modal.loading = false
            }, 200)
        },
        returnToExamsList() {
            this.modal.loading = true
            setTimeout(() => {
                this.rps.isOpen = false
                this.exam.isOpen = false
                this.method.isOpen = true
                this.modal.loading = false
            }, 200)
        },
        closeModal() {
            this.modal.isOpen = !this.modal.isOpen
            this.rps.isOpen = false
            this.exam.isOpen = false
            this.method.isOpen = true

            this.rps.title = null
            this.rps.icon = null
            this.rps.description = null
        }
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
