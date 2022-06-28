<template>
    <aside class="flex flex-col h-screen overflow-hidden shadow-2xl transition duration-300 bg-white w-2/12">
        <header class="border-b h-[4rem] shrink-0 px-6 flex items-center">
<!--            LOGOTIPO-->
            <a href="/">
                <Logotype />
            </a>
        </header>
        <nav class="flex-1 overflow-y-auto py-6">
            <ul class="space-y-6 px-6">
                <li>
                    <ul class="text-sm space-y-1 -mx-3">
                        <li>
                            <Link :href="route('dashboard')" class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                                <span>
                                    Dashboard
                                </span>
                            </Link>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="border-t -mr-6"></div>
                </li>
                <li>
                    <p class="font-bold uppercase text-gray-600 text-xs tracking-wider">Blog</p>
                    <ul class="text-sm space-y-1 -mx-3 mt-2">
                        <li>
                            <Link class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5" :href="route('post.index')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                                <span>Posts</span>
                                <span></span>
                            </Link>
                        </li>
                        <li>
                            <Link class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5" :href="route('category.index')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                                <span>Categorias</span>
                                <span></span>
                            </Link>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="border-t -mr-6"></div>
                </li>
                <li>
                    <p class="font-bold uppercase text-gray-600 text-xs tracking-wider">Exames</p>
                    <ul class="text-sm space-y-1 -mx-3 mt-2">
                        <li>
                            <Link class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5" :href="route('diagnostic.index')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span>Métodos de Diagnósticos</span>
                                <span></span>
                            </Link>
                        </li>
                        <li>
                            <Link class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5" :href="route('exams.index')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                                <span>Exames</span>
                                <span></span>
                            </Link>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="border-t -mr-6"></div>
                </li>
                <li>
                    <p class="font-bold uppercase text-gray-600 text-xs tracking-wider">Convênios</p>
                    <ul class="text-sm space-y-1 -mx-3 mt-2">
                        <li>
                            <Link class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5" :href="route('agreement.index')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                                <span>Convênios</span>
                                <span></span>
                            </Link>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="border-t -mr-6"></div>
                </li>
                <li>
                    <p class="font-bold uppercase text-gray-600 text-xs tracking-wider">Equipe</p>
                    <ul class="text-sm space-y-1 -mx-3 mt-2">
                        <li>
                            <Link class="flex items-center gap-3 px-3 py-2 rounded-lg font-medium transition hover:bg-gray-500/5 focus:bg-gray-500/5" :href="route('staff.index')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span>Equipe</span>
                                <span></span>
                            </Link>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>
        <footer class="border-t px-6 py-3 flex shrink-0 items-center gap-3">
            <button v-if="$page.props.jetstream.managesProfilePhotos"
                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url"
                     :alt="$page.props.user.name"/>
            </button>
            <div>
                <form @submit.prevent="logout">
                    <button>
                        <small class="text-sm">Sair</small>
                    </button>
                </form>
            </div>
        </footer>
    </aside>
</template>

<script>
import {defineComponent} from 'vue'
import {Head, Link} from '@inertiajs/inertia-vue3';
import Logotype from '@/Jetstream/ApplicationLogo'

export default defineComponent({
    name: 'siderbar',
    components: {
        Logotype,
        Head,
        Link,
    },
    methods: {
        switchToTeam(team) {
            this.$inertia.put(route('current-staff.update'), {
                'team_id': team.id
            }, {
                preserveState: false
            })
        },

        logout() {
            this.$inertia.post(route('logout'));
        },
    }
})
</script>
