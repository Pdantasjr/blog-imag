<template>
    <div class="w-screen h-auto">
        <div class="lg:max-w-7xl w-11/12 mx-auto">
            <section-title title="Convênios Credenciados" id="agreements"></section-title>
        </div>
        <div class="lg:max-w-7xl w-11/12 mx-auto">
            <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 my-6 sm:my-10">
                <div
                    class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
                <div
                    class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
                <div
                    class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
                <div
                    class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>

                <div
                    class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
                <div
                    class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
                <div
                    class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
                <div
                    class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
            </div>

            <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 my-6 sm:my-10">
                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>
            </div>

            <div class="lg:max-w-7xl w-11/12 mx-auto">
                <div class="lg:max-w-5xl w-11/12 flex flex-row justify-around items-center mx-auto">
                    <div class="w-64 mb-6 flex flex-row items-center justify-center">

                        <button
                            v-if="!showMore"
                            @click="showMore = !showMore"
                            class="flex justify-around items-center bg-primary w-44 h-auto rounded-full py-2 px-4 text-white text-lg font-light hover:font-bold border hover:border-white border-2 drop-shadow-md hover:drop-shadow-lg transition-all hover:scale-110 duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                            <span class="mx-2">Ver mais</span>
                        </button>

                        <button
                            v-if="showMore"
                            @click="showMore = !showMore"
                            class="flex justify-around items-center bg-primary w-44 h-auto rounded-full py-2 px-4 text-white text-lg font-light hover:font-bold border hover:border-white border-2 drop-shadow-md hover:drop-shadow-lg transition-all hover:scale-110 duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                            </svg>
                            <span class="mx-2">Ver Menos</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>

import SectionTitle from "./SectionTitle";

export default {
    name: "Agreement",
    props: {
        urlDefault: String,
    },
    components: {
        SectionTitle
    },
    data() {
        return {
            showMore: false,
        }
    },
    watch: {
        showMore() {
            if (!this.showMore) {
                document.getElementById('agreements').scrollIntoView()
            }
        }
    }
}
</script>

<style scoped>
.slide-fade-enter-active {
    transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
    transition: all 0.3s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    transform: translateX(60px);
    opacity: 0;
}
.slide-move {
    transition: transform 1s;
}

</style>
