<template>
    <div class="relative w-screen h-16 -mt-32 z-10">
        <form class="flex justify-center">
            <div class="w-11/12 sm:w-2/3 flex flex-col items-center justify-center">
                <input v-model="form.searchInput"
                       @input="searchExams()"
                       class="appearance-none border border-white bg-primary sm:bg-primary/90 border-4 rounded-full w-full h-14 sm:h-16 py2 sm:py-4 px-3 text-white text-center text-lg font-light leading-tight focus:outline-none focus:ring-0 focus:border-white focus:bg-primary focus:border-2 transition-all focus:scale-105 duration-200 ease-in-out"
                       type="search"
                       placeholder="Pesquise seu exame"
                >
                <Transition>
                    <div v-if="loading" class="flex items-center justify-center w-72 bg-primary rounded absolute top-2 sm:top-4 z-20">
                        <svg class="w-4 h-4 mr-1 text-gray-100 animate-spin fill-primary" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"></path>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"></path>
                        </svg>
                        <span class="text-[10pt] text-center text-white my-2 ml-2">
                                Pesquisando...
                        </span>
                    </div>
                </Transition>
                <Transition>
                    <ul v-if="form.searchInput.length"
                        class="w-11/12 px-2 rounded-md bg-white relative shadow-md h-auto max-h-[300px] overflow-y-auto transition-all duration-200 ease-in-out mb-2">

                        <li v-for="exa in exams" :key="exa.id" class="py-1 text-gray-800">
                            <Link v-if="exa.slug" :href="route('front.exam', [exa.slug])"
                                  class="block shadow-sm border-l-2 border-primary bg-gray-200 shadow-sm p-2 hover:cursor-pointer hover:font-bold hover:text-white rounded transition-all duration-200 ease-in-out">
                                <span class="text-primary">
                                    {{ exa.name }}
                                </span>
                            </Link>
                        </li>

                    </ul>
                </Transition>
            </div>
        </form>
    </div>
</template>
<script>
import {Link} from "@inertiajs/inertia-vue3";
import InfiniteList from 'vue3-infinite-list';

export default {
    name: "SearchForm",
    props: {
        defaultUrl: String,
        data: Array,
    },
    components: {
        Link,
        InfiniteList,
    },
    data() {
        return {
            exams: [],
            form: {
                searchInput: '',
            },
            loading: false,
        }
    },
    methods: {
        searchExams() {
            const endPoint = this.defaultUrl + "/api/exams"
            this.loading = true
            setTimeout(() => {
                this.loading = false
                if (this.form.searchInput.length) {
                    axios.get(endPoint, {params: {term: this.form.searchInput}})
                        .then(res => {
                            this.loading = false
                            this.exams = res.data
                        })
                } else {
                    this.exams = this.form.searchInput
                }
            }, 1000)
        },
    }
}
</script>
<style scoped>
html {
    scroll-behavior: smooth;
}
.v-enter-active,
.v-leave-active {
    transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
</style>
