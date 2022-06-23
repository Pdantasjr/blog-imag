<template>
    <app-layout title="Dashboard">
        <sidebar />
        <main-content>
            <template #header>
                <header class="h-[4rem] shrink-0 w-full border-b flex items-center bg-white">
                    <div class="flex items-center w-full px-2 mx-auto sm:px-4 md:px-6 lg:px-8 max-w-7xl">
                        <button
                            class="shrink-0 flex items-center justify-center w-10 h-10 text-primary-500 rounded-full hover:bg-gray-500/5 focus:bg-primary-500/10 focus:outline-none">
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
                                                                    <svg v-if="team.id == $page.props.user.current_team_id"
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
                                            <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
                                            </button>

                                            <span v-else class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ $page.props.user.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
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

                                            <jet-dropdown-link :href="route('api-tokens.index')" v-if="$page.props.jetstream.hasApiFeatures">
                                                API Tokens
                                            </jet-dropdown-link>

                                            <div class="border-t border-gray-100"></div>

                                            <!-- Authentication -->
                                            <form @submit.prevent="logout">
                                                <button class="block w-full px-4 py-2 text-sm leading-5 text-gray-700 text-left hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition">
                                                    Sair
                                                </button>
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
                            <h1 class="text-2xl font-bold tracking-tight md:text-3xl">
                                Dashboard
                            </h1>
                        </header>
                        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8 mb-6">
                            <div class="col-span-1">
                                <div class="p-2 space-y-2 bg-white shadow rounded-xl">
                                    <div class="space-y-2">
                                        <div class="px-4 py-2 space-y-4">
                                            <div class="h-12 flex items-center space-x-4 rtl:space-x-reverse">
                                                <div v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                    <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
                                                </div>
                                                <div>
                                                    <h2 class="text-lg sm:text-xl font-bold tracking-tight">
                                                        Bem vindo, {{ $page.props.user.name }}
                                                    </h2>

                                                    <p class="text-sm">
<!--                                                        <Link href="/logout"-->
<!--                                                           class="text-gray-600 hover:text-primary-500 focus:outline-none focus:underline">-->
<!--                                                            Fazer logout-->
<!--                                                        </Link>-->
                                                    <form @submit.prevent="logout">
                                                        <button class="text-gray-600 hover:text-primary-500 focus:outline-none focus:underline">
                                                            <small class="text-sm">Sair</small>
                                                        </button>
                                                    </form>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-1">
                                <div class="p-2 space-y-2 bg-white shadow rounded-xl relative">
                                    <div class="space-y-2">
                                        <div class="px-4 py-2 space-y-4">
                                            <div class="relative h-12 flex flex-col justify-center items-center space-y-2 rtl:space-x-reverse">
                                                <div class="space-y-1">
                                                    <a href="https://solutionstec.com.br" target="_blank" rel="noopener noreferrer"
                                                       class="flex items-end space-x-2 text-gray-800 hover:text-primary-500 transition">
                                                        <svg width="250" viewBox="0 0 631 82" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <g id="new_logo 1" clip-path="url(#clip0_103_2)">
                                                                <g id="Camada 2">
                                                                    <g id="Camada 1">
                                                                        <path id="Vector"
                                                                              d="M27.45 81C12.32 81 0.5 73.45 0 59.22H18.24C18.74 64.63 22.14 67.22 26.95 67.22C31.95 67.22 35.17 64.72 35.17 60.61C35.17 47.61 0 54.61 0.17 29.61C0.2 16.33 11.12 8.92 25.85 8.92C41.18 8.92 51.5 16.53 52.2 29.92H33.67C33.37 25.41 30.16 22.71 25.55 22.6C21.44 22.5 18.34 24.6 18.34 29.02C18.34 41.24 53.11 35.73 53.11 59.28C53.11 71.14 43.89 81 27.45 81Z"
                                                                              fill="#393939"/>
                                                                        <path id="Vector_2"
                                                                              d="M84.16 81.06C67.73 81.06 55.3 70 55.3 52.3C55.3 34.6 68 23.55 84.36 23.55C100.72 23.55 113.42 34.55 113.42 52.3C113.42 70.05 100.59 81.06 84.16 81.06ZM84.16 66.23C90.27 66.23 96 61.72 96 52.3C96 42.88 90.38 38.38 84.36 38.38C78.15 38.38 72.74 42.79 72.74 52.3C72.74 61.81 78 66.23 84.16 66.23Z"
                                                                              fill="#393939"/>
                                                                        <path id="Vector_3"
                                                                              d="M117.62 6.11H134.76V80.26H117.62V6.11Z"
                                                                              fill="#393939"/>
                                                                        <path id="Vector_4"
                                                                              d="M197.48 80.26H180.35V72.65C176.94 77.46 170.93 80.86 163.41 80.86C150.49 80.86 141.77 71.94 141.77 57.01V24.35H158.77V54.71C158.77 62.32 163.08 66.53 169.5 66.53C176.11 66.53 180.32 62.32 180.32 54.71V24.35H197.45L197.48 80.26Z"
                                                                              fill="#393939"/>
                                                                        <path id="Vector_5"
                                                                              d="M207.6 38.58H200.78V24.35H207.6V10.72H224.73V24.35H236V38.58H224.73V61C224.73 64.31 226.13 65.71 229.94 65.71H236.05V80.26H227.34C215.71 80.26 207.6 75.35 207.6 60.82V38.58Z"
                                                                              fill="#393939"/>
                                                                        <path id="Vector_6"
                                                                              d="M239.06 9.32C239.06 4.11 243.16 0 249.28 0C255.4 0 259.4 4.11 259.4 9.32C259.4 14.53 255.29 18.54 249.28 18.54C243.27 18.54 239.06 14.43 239.06 9.32ZM240.66 24.32H257.79V80.26H240.66V24.32Z"
                                                                              fill="#393939"/>
                                                                        <path id="Vector_7"
                                                                              d="M290.76 81.06C274.32 81.06 261.9 70.06 261.9 52.3C261.9 34.54 274.62 23.55 291 23.55C307.38 23.55 320 34.57 320 52.3C320 70.03 307.19 81.06 290.76 81.06ZM290.76 66.23C296.87 66.23 302.58 61.72 302.58 52.3C302.58 42.88 297 38.38 291 38.38C284.78 38.38 279.37 42.79 279.37 52.3C279.37 61.81 284.55 66.23 290.76 66.23Z"
                                                                              fill="#393939"/>
                                                                        <path id="Vector_8"
                                                                              d="M362.79 49.9C362.79 42.28 358.59 38.08 352.07 38.08C345.55 38.08 341.35 42.28 341.35 49.9V80.26H324.22V24.35H341.35V31.76C344.76 27.05 350.77 23.76 358.29 23.76C371.21 23.76 379.83 32.58 379.83 47.6V80.26H362.83L362.79 49.9Z"
                                                                              fill="#393939"/>
                                                                        <path id="Vector_9"
                                                                              d="M409.58 81.06C394.65 81.06 384.63 72.75 383.83 61.92H400.77C401.17 65.83 404.67 68.44 409.38 68.44C413.79 68.44 416.1 66.44 416.1 63.93C416.1 54.93 385.64 61.42 385.64 40.93C385.64 31.41 393.75 23.6 408.38 23.6C422.81 23.6 430.83 31.6 431.93 42.6H416.1C415.59 38.79 412.69 36.28 407.88 36.28C403.88 36.28 401.67 37.89 401.67 40.59C401.67 49.51 431.93 43.2 432.23 64.04C432.23 73.75 423.61 81.06 409.58 81.06Z"
                                                                              fill="#393939"/>
                                                                        <path id="Vector_10"
                                                                              d="M434 9.92H488.41V23.65H469.8V80.26H452.66V23.65H434V9.92Z"
                                                                              fill="#393939"/>
                                                                        <path id="Vector_11"
                                                                              d="M517 81.06C500.56 81.06 488.74 70.06 488.74 52.3C488.74 34.54 500.35 23.55 517 23.55C533.33 23.55 544.85 34.37 544.85 51.4C544.847 53.0711 544.746 54.7405 544.55 56.4H505.76C506.37 63.72 510.88 67.12 516.39 67.12C521.2 67.12 523.9 64.72 525.31 61.71H543.54C540.84 72.65 530.92 81.06 517 81.06ZM505.87 46.89H527.31C527.31 40.78 522.5 37.27 516.79 37.27C511.08 37.27 506.87 40.68 505.87 46.89Z"
                                                                              fill="#393939"/>
                                                                        <path id="Vector_12"
                                                                              d="M573.6 23.55C587.6 23.55 597.55 31.26 600.45 44.55H582.21C580.81 40.64 578.01 38.14 573.3 38.14C567.18 38.18 563 43 563 52.3C563 61.6 567.2 66.43 573.32 66.43C578.03 66.43 580.73 64.13 582.23 60.02H600.47C597.57 72.95 587.65 81.02 573.62 81.02C557.18 81.02 545.56 70.02 545.56 52.26C545.56 34.5 557.16 23.55 573.6 23.55Z"
                                                                              fill="#393939"/>
                                                                        <path id="Vector_13"
                                                                              d="M619.63 80.26C625.821 80.26 630.84 75.2411 630.84 69.05C630.84 62.8589 625.821 57.84 619.63 57.84C613.439 57.84 608.42 62.8589 608.42 69.05C608.42 75.2411 613.439 80.26 619.63 80.26Z"
                                                                              fill="#FCBE0C"/>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_103_2">
                                                                    <rect width="630.83" height="81.06" fill="white"/>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <div class="grid gap-6 md:grid-cols-3">
                                    <div class="relative p-6 rounded-2xl bg-white shadow">
                                        <div class="space-y-2">
                                            <div class="text-sm font-medium text-gray-500">
                                                Montante
                                            </div>

                                            <div class="text-3xl">
                                                $68.1k
                                            </div>

                                            <div
                                                class="flex items-center space-x-1 text-sm font-medium text-success-600">
                                                <span>32k previsão</span>

                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="relative p-6 rounded-2xl bg-white shadow">
                                        <div class="space-y-2">
                                            <div class="text-sm font-medium text-gray-500">
                                                Novos clientes
                                            </div>

                                            <div class="text-3xl">
                                                134
                                            </div>

                                            <div
                                                class="flex items-center space-x-1 text-sm font-medium text-danger-600">
                                                <span>3% decrescente</span>

                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M12 13a1 1 0 100 2h5a1 1 0 001-1V9a1 1 0 10-2 0v2.586l-4.293-4.293a1 1 0 00-1.414 0L8 9.586 3.707 5.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0L11 9.414 14.586 13H12z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="relative p-6 rounded-2xl bg-white shadow">
                                        <div class="space-y-2">
                                            <div class="text-sm font-medium text-gray-500">
                                                Novos pedidos
                                            </div>

                                            <div class="text-3xl">
                                                3543
                                            </div>

                                            <div
                                                class="flex items-center space-x-1 text-sm font-medium text-success-600">
                                                <span>7% crescente</span>

                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-1">
                                <div class="p-2 space-y-2 bg-white shadow rounded-xl">
                                    <div class="space-y-2">
                                        <div class="px-4 py-2 space-y-4">
                                            <div class="flex items-center justify-between gap-8">
                                                <h2 class="text-xl font-semibold tracking-tight">
                                                    Orders per month
                                                </h2>
                                            </div>
                                            <div aria-hidden="true" class="border-t"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-1">
                                <div class="p-2 space-y-2 bg-white shadow rounded-xl">
                                    <div class="space-y-2">
                                        <div class="px-4 py-2 space-y-4">
                                            <div class="flex items-center justify-between gap-8">
                                                <h2 class="text-xl font-semibold tracking-tight">
                                                    Total consumidores
                                                </h2>
                                            </div>
                                            <div aria-hidden="true" class="border-t"></div>
                                        </div>
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

import AppLayout from "../Layouts/AppLayout"
import MainContent from '../Layouts/MainContent'
import Sidebar from "../Layouts/Sidebar"
import JetDropdown from '../Jetstream/Dropdown.vue'
import JetDropdownLink from '../Jetstream/DropdownLink.vue'
import Logotype from '../Jetstream/ApplicationLogo.vue'
import {Head, Link} from '@inertiajs/inertia-vue3';

export default defineComponent({
    components: {
        AppLayout,
        MainContent,
        Sidebar,
        JetDropdown,
        JetDropdownLink,
        Logotype,
        Link,
        Head,
    },
    data() {
        return {
            showingNavigationDropdown: true,
        }
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
