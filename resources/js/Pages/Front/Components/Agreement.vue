<template>
    <div class="w-screen h-auto">
        <div id="agreements" class="lg:max-w-7xl w-11/12 mx-auto">
            <section-title title="Convênios Credenciados" id="agreements"></section-title>
        </div>
        <div class="w-full h-auto relative">
            <div class="absolute w-auto h-full bg-repeat-x object-cover -z-10 inset-x-0 bottom-0"
                 :style="{'background-image': 'url('+ urlDefault +'/Agreements/default/bg-agreements.svg)'}"></div>
            <div v-if="agreements.length" class="lg:max-w-7xl w-11/12 mx-auto">
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 my-6 sm:my-10">
                    <div v-for="(agreement, i) in agreements" :key="agreement.id">
                        <div v-if="i < 8">
                            <div class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-white bg-opacity-50 backdrop-blur-[2px] rounded-md drop-shadow-lg hover:scale-105 border border-gray-200 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-200 ease-in-out">
                                <img class="p-4 w-auto h-full" :src="urlDefault +'/'+ agreement.brand" :alt="agreement.name">
                            </div>
                        </div>
                        <!--VER MAIS-->
                        <Transition name="slide-fade">
                            <div v-show="showMore">
                                <div v-show="i > 7">
                                    <div class="w-full h-44 sm:h-52 lg:h-60 flex items-center justify-center bg-white bg-opacity-50 backdrop-blur-[2px] rounded-md drop-shadow-lg hover:scale-105 border border-gray-200 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-200 ease-in-out">
                                        <img class="p-4 w-auto h-full" :src="urlDefault +'/'+ agreement.brand" :alt="agreement.name">
                                    </div>
                                </div>
                            </div>
                        </Transition>
                    </div>
                </div>
                <!--BUTTONS-->
                <div class="lg:max-w-7xl w-11/12 mx-auto">
                    <div class="lg:max-w-5xl w-11/12 flex flex-row justify-around items-center mx-auto">
                        <div class="w-64 mb-6 flex flex-row items-center justify-center">
                            <button
                                v-if="!showMore"
                                @click="showMore = !showMore"
                                class="flex justify-around items-center bg-primary w-44 h-auto rounded-full py-2 px-4 text-white text-lg font-light hover:font-bold border hover:border-white border-2 drop-shadow-md hover:drop-shadow-lg transition-all hover:scale-110 duration-300 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                </svg>
                                <span class="mx-2">Ver mais</span>
                            </button>
                            <button
                                v-if="showMore"
                                @click="showMore = !showMore"
                                class="flex justify-around items-center bg-primary w-44 h-auto rounded-full py-2 px-4 text-white text-lg font-light hover:font-bold border hover:border-white border-2 drop-shadow-md hover:drop-shadow-lg transition-all hover:scale-110 duration-300 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
                                </svg>
                                <span class="mx-2">Ver Menos</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div v-else>
                <p class="text-gray-600 p-4 text-center border border-gray-300">Ainda estamos cadastrando nossos convênios.</p>
            </div>
        </div>
    </div>
</template>

<script>

import SectionTitle from "./SectionTitle";

export default {
    name: "Agreement",
    props: {
        agreements: Object,
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
