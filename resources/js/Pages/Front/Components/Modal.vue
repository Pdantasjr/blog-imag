<template>

    <transition name="slide-fade">
        <div v-if="this.toggle" class="block fixed top-0 left-0 h-full w-full overflow-y-auto z-40 bg-black/50 backdrop-blur-sm">
            <!--MODAL CONTENT-->
            <div class="bg-gray-50 flex flex-col items-center justify-between my-10 mx-auto border border-gray-300 rounded-lg w-10/12 max-w-7xl h-3/6">
                <!--TITLE-->
                <div class="w-full h-auto border-b border-primary/25 shadow-lg shadow-primary/40">
                    <h1 class="text-primary text-2xl font-bold my-4 text-center">{{ this.title }}</h1>
                </div>
                <!--BODY-->
                <div class="w-full flex-1 h-auto overflow-y-auto py-1">
                    <ul>
                        <li v-for="e in this.content" :key="e.id" class="px-4 w-full my-1 transition-all duration-200 ease-in-out">
                            <Link :href="this.url +'/'+e.slug" class="block flex w-full items-center justify-between h-12 border-l-2 border-primary font-light hover:shadow-lg hover:cursor-pointer hover:text-primary hover:translate-x-2 hover:font-bold p-2 transition-all duration-300 ease-in-out">
                                <span class="hover:translate-x-2 transition-all duration-200 ease-in-out">{{ e.name }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </Link>
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
import {defineComponent} from 'vue'
import {Link} from "@inertiajs/inertia-vue3";

export default defineComponent({
    name: "Modal",
    components: {
        Link,
    },
    props: {
        title: String,
        content: Array,
        modalOpen: Boolean,
        url: String,
    },
    data() {
        return {
            toggle: this.modalOpen
        }
    },
    methods: {
        closeModal() {
            return this.toggle = !this.toggle
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
