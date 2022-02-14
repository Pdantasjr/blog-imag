<template>
    <app-layout title="Paciente">
        <sidebar/>
        <main-content>
            <template #header>
                <header class="h-[4rem] shrink-0 w-full border-b flex items-center bg-white">
                    <div class="flex items-center w-full px-2 mx-auto sm:px-4 md:px-6 lg:px-8 max-w-7xl">
                        <button
                            class="shrink-0 flex items-center justify-center w-10 h-10 text-primary-500 rounded-full hover:bg-gray-500/5 focus:bg-yellow-500/10 focus:outline-none">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        <div class="flex-1 flex items-center justify-between">
                            <div>
                                <div class="relative">
                                    <div>
                                        <div class="relative group max-w-md">
                                        <span
                                            class="absolute inset-y-0 left-0 flex items-center justify-center w-10 h-10 text-gray-500 pointer-events-none group-focus-within:text-primary-500">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24"
                                                 stroke="currentColor" aria-hidden="true">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                        </span>

                                            <input id="globalSearchQueryInput" placeholder="Search" type="search"
                                                   autocomplete="off"
                                                   class="block w-full h-10 pl-10 lg:text-lg bg-gray-400/10 placeholder-gray-500 border-transparent transition duration-75 rounded-lg focus:bg-white focus:placeholder-gray-400 focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <!--Teams Dropdown-->
                                <div class="ml-3 relative">
                                    <jet-dropdown align="right" width="60" v-if="$page.props.jetstream.hasTeamFeatures">
                                        <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                                {{ $page.props.user.current_team.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                            </button>
                                        </span>
                                        </template>

                                        <template #content>
                                            <div class="w-60">
                                                <!-- Team Management -->
                                                <template v-if="$page.props.jetstream.hasTeamFeatures">
                                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                                        Manage Team
                                                    </div>

                                                    <!-- Team Settings -->
                                                    <jet-dropdown-link
                                                        :href="route('teams.show', $page.props.user.current_team)">
                                                        Team Settings
                                                    </jet-dropdown-link>

                                                    <jet-dropdown-link :href="route('teams.create')"
                                                                       v-if="$page.props.jetstream.canCreateTeams">
                                                        Create New Team
                                                    </jet-dropdown-link>

                                                    <div class="border-t border-gray-100"></div>

                                                    <!-- Team Switcher -->
                                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                                        Switch Teams
                                                    </div>

                                                    <template v-for="team in $page.props.user.all_teams" :key="team.id">
                                                        <form @submit.prevent="switchToTeam(team)">
                                                            <jet-dropdown-link as="button">
                                                                <div class="flex items-center">
                                                                    <svg
                                                                        v-if="team.id == $page.props.user.current_team_id"
                                                                        class="mr-2 h-5 w-5 text-green-400" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" stroke="currentColor"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                    </svg>
                                                                    <div>{{ team.name }}</div>
                                                                </div>
                                                            </jet-dropdown-link>
                                                        </form>
                                                    </template>
                                                </template>
                                            </div>
                                        </template>
                                    </jet-dropdown>
                                </div>
                                <!-- Settings Dropdown -->
                                <div class="ml-3 relative">
                                    <jet-dropdown align="right" width="48">
                                        <template #trigger>
                                            <button v-if="$page.props.jetstream.managesProfilePhotos"
                                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover"
                                                     :src="$page.props.user.profile_photo_url"
                                                     :alt="$page.props.user.name"/>
                                            </button>

                                            <span v-else class="inline-flex rounded-md">
                                            <button type="button"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ $page.props.user.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                            </button>
                                        </span>
                                        </template>

                                        <template #content>
                                            <!-- Account Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                Manage Account
                                            </div>

                                            <jet-dropdown-link :href="route('profile.show')">
                                                Profile
                                            </jet-dropdown-link>

                                            <jet-dropdown-link :href="route('api-tokens.index')"
                                                               v-if="$page.props.jetstream.hasApiFeatures">
                                                API Tokens
                                            </jet-dropdown-link>

                                            <div class="border-t border-gray-100"></div>

                                            <!-- Authentication -->
                                            <form @submit.prevent="logout">
                                                <jet-dropdown-link as="button">
                                                    Log Out
                                                </jet-dropdown-link>
                                            </form>
                                        </template>
                                    </jet-dropdown>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </template>
            <template #dashboard_content>
                <div class="flex-1 w-full px-4 mx-auto md:px-6 lg:px-8 max-w-7xl">
                    <div class="space-y-6">
                        <header class="space-y-2 items-start justify-between sm:flex sm:space-y-0 sm:space-x-4 sm:py-4">
                            <h1 class="text-2xl font-bold tracking-tight md:text-3xl text-gray-900">
                                <samll class="text-gray-700">Post:</samll> <small class="text-gray-400 mt-10">/{{ post.slug }}</small>
                            </h1>
                            <!--Botão-->
                            <div class="flex flex-wrap items-center gap-4 justify-start shrink-0">
                                <Link
                                    class="inline-flex items-center justify-center font-medium tracking-tight rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset bg-yellow-400 hover:bg-yellow-500 focus:bg-yellow-700 focus:ring-offset-primary-700 h-9 px-4 text-white shadow focus:ring-white"
                                    :href="route('post.edit',[post.id])">
                                    <span>Editar</span>
                                </Link>
                            </div>
                        </header>
                        <div>
                            <div class="border border-gray-300 shadow-sm bg-white rounded-xl">
                                <div class="overflow-y-auto relative">
                                    <div class="m-5">
                                        <img class="mb-3 w-screen h-10/12 bg-cover bg-center rounded shadow-lg mx-auto"
                                             :src="post.post_cover" alt="product designer">
                                        <h1 class="text-6xl mt-10 text-center text-gray-700"> {{ post.title }}</h1>
                                        <h3 class="text-3xl mt-10 text-center text-gray-500"> {{ post.subtitle }} </h3>
                                        <p class="text-gray-400 mt-10">Publicado em {{ new Intl.DateTimeFormat('pt-BR', { day: 'numeric', month: 'long', year: 'numeric'} ).format( new Date(post.created_at)) }} às {{ new Intl.DateTimeFormat('pt-BR', { hour: 'numeric', minute: 'numeric', second: 'numeric'} ).format( new Date(post.created_at)) }} por <i>{{ post.author.name }}</i></p>
                                        <div class="p-4 mt-4" v-html="post.post_content"></div>
                                        <h1 class="text-md text-gray-500 mb-4"> Categoria: <span class="text-lg text-gray-600"> {{ post.category.name }} </span></h1>
                                        <h5 class="text-sm text-gray-400 mb-6"> Slug: {{ post.slug }} </h5>
                                        <Link
                                            class="inline-flex items-center justify-center font-medium tracking-tight rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset bg-yellow-400 hover:bg-yellow-500 focus:bg-yellow-700 focus:ring-offset-primary-700 h-9 px-4 text-white shadow focus:ring-white"
                                            :href="route('post.index',[post.id])">
                                            <span>Voltar</span>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </main-content>
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'

import AppLayout from '@/Layouts/AppLayout.vue';
import {Head, Link} from '@inertiajs/inertia-vue3';
import Sidebar from "@/Layouts/Sidebar";
import MainContent from "@/Layouts/MainContent";
import JetDropdown from "@/Jetstream/Dropdown";
import JetDropdownLink from "@/Jetstream/DropdownLink";

export default defineComponent({
    name: "Post Show",
    components: {
        AppLayout,
        Sidebar,
        MainContent,
        Head,
        Link,
        JetDropdown,
        JetDropdownLink,
    },
    props: {
        post: Object,
    },
    data() {
        return {
            form: this.$inertia.form({
                title: this.post.title,
                slug: this.post.slug,
                subtitle: this.post.subtitle,
                post_content: this.post.post_content,
                author: this.post.author,
                category: this.post.category,
                post_cover: this.post.post_cover,
            }),
        }
    }
})
</script>
