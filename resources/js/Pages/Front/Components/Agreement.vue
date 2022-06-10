<template>
    <div class="w-96 h-auto">
        <div class="lg:max-w-7xl w-11/12 mx-auto">
            <section-title title="Convênios Credenciados"></section-title>
        </div>
        <div class="lg:max-w-7xl w-11/12 mx-auto">
            <div class="grid grid-cols-4 gap-4 my-6 sm:my-10">
                <div
                    class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
                <div
                    class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
                <div
                    class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
                <div
                    class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>

                <div
                    class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
                <div
                    class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
                <div
                    class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
                <div
                    class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">
                    <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'" alt="Bradesco Saúde">
                </div>
            </div>


            <div class="grid grid-cols-4 gap-4 my-6 sm:my-10">
                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

                <Transition name="slide-fade">
                    <div v-if="showMore"
                        class="w-72 h-72 flex items-center justify-center bg-gray-50 rounded-md drop-shadow-lg hover:scale-110 hover:border hover:border-gray-200 hover:drop-shadow-2xl transition transform duration-300 ease-in-out">

                        <img class="m-2" :src="urlDefault + '/Agreements/bradesco-saude.svg'"
                             alt="Bradesco Saúde">
                    </div>
                </Transition>

            </div>


            <div class="lg:max-w-7xl w-11/12 mx-auto">
                <div class="lg:max-w-5xl w-11/12 h-44 flex flex-row justify-around items-center mx-auto">
                    <div class="w-64 flex flex-row">

                        <button
                            v-if
                            @click="showMore = !showMore"
                            class="flex justify-around items-center bg-primary w-full h-auto rounded-full py-2 px-4 text-white text-lg font-light hover:font-bold border hover:border-white border-2 drop-shadow-md hover:drop-shadow-lg transition-all hover:scale-110 duration-300 ease-in-out">

                            Ver mais

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
    transform: translateX(20px);
    opacity: 0;
}

</style>
