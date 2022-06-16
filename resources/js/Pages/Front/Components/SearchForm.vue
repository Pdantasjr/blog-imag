<template>
    <div class="relative w-screen h-16 -mt-32 z-10">
        <form class="flex justify-center">
            <div class="w-11/12 sm:w-2/3 flex flex-col items-center justify-center">
                <input v-model="form.searchInput"
                       @input="searchExams()"
                       class="appearance-none border border-white bg-primary sm:bg-primary/90 border-4 rounded-full w-full h-14 sm:h-16 py2 sm:py-4 px-3 text-white text-center text-lg font-light leading-tight focus:outline-none focus:ring-0 focus:border-white focus:bg-primary focus:border-2 transition-all focus:scale-105 duration-200 ease-in-out"
                       type="text"
                       placeholder="Pesquise seu exame"
                >
                <div v-if="loading"
                     class="flex items-center justify-center bg-white w-11/12 h-auto max-h-72 rounded-lg mt-2 drop-shadow-xl border border-primary">
                    <svg class="w-4 h-4 mr-1 text-gray-100 animate-spin fill-primary" viewBox="0 0 100 101" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor"></path>
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentFill"></path>
                    </svg>
                    <span class="text-primary font-light text-center my-6 ml-2">
                    Pesquisando...
                </span>
                </div>
                <ul v-if="this.form.searchInput.length > 1" id="listResult"
                    class="flex flex-col items-center bg-white w-11/12 h-auto max-h-72 py-2 rounded-lg mt-2 drop-shadow-xl border-2 border-primary overflow-y-auto transition-all duration-200 ease-in-out">
                    <InfiniteList :data="exams" :width="'100%'" :height="500" :itemSize="80" v-slot="{ item, index }">
                        <li class="px-4 py-2 text-gray-800 w-full transition-all duration-200 ease-in-out">
                            <Link :href="item.slug"
                                  class="block shadow-sm w-full h-auto border-l-2 border-primary bg-gray-300 hover:bg-neutral hover:cursor-pointer hover:font-extrabold hover:text-primary hover:drop-shadow-md p-2 rounded transition transform hover:-translate-y-2 duration-200 ease-in-out">
                                {{ item.name }} <br>
                                <span class="text-sm text-gray-400 font-light">Método do exame: {{
                                        item.methods[0].name
                                    }}</span>
                            </Link>
                        </li>
                    </InfiniteList>
                    <button v-if="this.exams.next_page_url != null" @click.prevent="viewMore(exams.next_page_url)"
                            class="w-10/12 shadow-sm bg-gray-300 hover:cursor-pointer font-light hover:text-white hover:bg-secondary hover:drop-shadow-md py-1 rounded transition-all duration-200 ease-in-out">
                        Ver mais
                    </button>
                </ul>
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
            const endPoint = this.defaultUrl + "/api/exames"
            this.loading = true
            setTimeout(() => {
                this.loading = false
                if (this.form.searchInput.length >= 1) {
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
        viewMore(n) {
            console.log('ver mais', n)
            this.loading = true
            setTimeout(() => {
                axios.get(n)
                    .then(res => {
                        const divResult = document.getElementById('listResult')

                        this.loading = false
                        this.exams = res.data
                        divResult.scrollTop = 0
                    })
            }, 500)
        }
    }
}
</script>
<style scoped>
html {
    scroll-behavior: smooth;
}
</style>
