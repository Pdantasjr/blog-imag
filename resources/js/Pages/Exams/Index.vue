<template>
    <app-layout title="Exames">
        <toast :toast="$page.props.flash.message"></toast>
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
                            <h1 class="text-2xl text-gray-700 font-bold tracking-tight md:text-3xl">
                                Exames
                            </h1>
                            <!--Botão-->
                            <div class="flex flex-wrap items-center gap-4 justify-start shrink-0">
                                <Link
                                    class="inline-flex items-center justify-center font-medium tracking-tight rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset bg-primary focus:bg-primary focus:ring-offset-primary-700 h-9 px-4 text-white shadow focus:ring-white"
                                    :href="route('exams.create')">
                                    <span>Novo Exame</span>
                                </Link>
                            </div>
                        </header>
                        <div v-if="exams.data.length">
                            <div class="border border-gray-300 shadow-sm bg-white rounded-xl">
                                <div class="overflow-y-auto relative">
                                    <table class="w-full text-left divide-y table-auto">
                                        <thead>
                                        <tr>
                                            <th class="px-4 py-2">
                                                <span
                                                    class="text-sm font-bold text-gray-600 flex flex-row items-center justify-center">Cód.</span>
                                            </th>
                                            <th class="px-4 py-2">
                                                <span
                                                    class="text-sm font-bold text-gray-600 flex flex-row items-center justify-center">Nome</span>
                                            </th>
                                            <th class="px-4 py-2">
                                                <span
                                                    class="text-sm font-bold text-gray-600 flex flex-row items-center justify-center">Método de diagnóstico</span>
                                            </th>
                                            <th class="px-4 py-2">
                                                <span
                                                    class="text-sm font-bold text-gray-600 flex flex-row items-center justify-center">Opções</span>
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody v-for="exam in exams.data" :key="exam.id" class="divide-y whitespace-nowrap">
                                        <tr>
                                            <td>
                                                <div class="px-4 py-3 flex items-center justify-center ">
                                                    <span class="text-gray-600">{{ exam.id }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-4 py-3 flex items-center justify-center ">
                                                    <span class="text-gray-600">{{ exam.name }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-4 py-3 flex items-center justify-center">
                                                    <img :src="this.methodImage+'/'+exam.method.image"
                                                         :alt="exam.method.name"
                                                         class="w-auto h-8 rounded p-1 mx-2 bg-primary/30">
                                                    <span class="text-gray-600">{{ exam.method.name }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-4 py-3 justify-center flex flex-row">
                                                    <Link :href="route('exams.edit', [exam.id])"
                                                          class="hover:underline focus:outline-none px-2 focus:underline text-gray-500 hover:text-yellow-300 text-sm font-medium">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                        </svg>
                                                    </Link>

                                                    <button @click="submit(exam.slug, exam.name)"
                                                            class="hover:underline focus:outline-none px-2 focus:underline text-gray-500 hover:text-red-600 text-sm font-medium">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="p-2 border-t">
                                    <nav class="flex items-center justify-between">
                                        <div class="hidden flex-1 items-center lg:grid grid-cols-1">
                                            <div class="flex items-center">
                                                <div class="pl-2 text-sm font-medium">
                                                    <Pagination class="mt-6" :links="exams.links" />
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-end">
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div v-else>
                            <p class="text-primary text-center text-ms font-light">Você ainda não cadastrou nenhum
                                exame.</p>
                            <p class="text-primary text-center text-xs font-light">Lembre-se de
                                <Link class="underline" :href="route('diagnostic.create')">cadastrar</Link>
                                um método de diagnóstico antes de tudo.
                            </p>
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
import Toast from "@/Components/Toast";
import Pagination from "@/Components/Pagination";

export default defineComponent({
    name: "Exams",
    props: {
        exams: Object,
        methodImage: String,
    },
    components: {
        AppLayout,
        Sidebar,
        MainContent,
        Head,
        Link,
        JetDropdown,
        JetDropdownLink,
        Toast,
        Pagination,
    },
    methods: {
        submit(slug, title) {
            if (confirm("Você tem certeza que deseja excluir " + title + " ?")) {
                this.$inertia.delete(route('exams.destroy', [slug]), this.form)
            }
        }
    }
})
</script>
