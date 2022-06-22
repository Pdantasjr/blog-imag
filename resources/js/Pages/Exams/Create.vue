<template>
    <app-layout title="Novo exame">
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
                                Novo Exame
                            </h1>
                        </header>
                        <form class="space-y-12" @submit.prevent="submit()">
                            <div class="grid gap-6 grid-cols-1">
                                <div v-if="methods.length"  class="col-span-full">
                                    <div class="p-6 bg-white shadow rounded-xl">
                                        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2">
                                            <!--MÉTODO DO EXAME-->
                                            <div class="col-span-2">
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2">
                                                        <label class="inline-flex items-center space-x-3" for="method">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Selecione um método de diagnóstico:
                                                                <sup class="font-medium text-danger-700">*</sup>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            <select v-model="form.diagnostics_id"
                                                                    class="block w-full h-10 transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 border-gray-300">
                                                                <option class="bg-gray-300"  v-for="method in methods" :key="method.id" :value="method.id">{{ method.name }}</option>
                                                            </select>
                                                            <div v-if="errors.method" v-text="errors.method" class="text-xs text-red-500 mt-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/MÉTODO DO EXAME-->
                                        </div>
                                    </div>
                                </div>
                                <div v-else>
                                    <p class="text-primary text-center text-ms font-light">Você precisa cadastrar um método de diagnósitco.</p>
                                    <p class="text-primary text-center text-xs font-light">Clique
                                        <Link class="underline" :href="route('diagnostic.create')">aqui</Link>
                                        para realizar o cadastro
                                    </p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1">
                                <div class="col-span-full">
                                    <div class="grid grid-cols-1">
                                        <div class="col-span-1 ">
                                            <transition name="slide-fade">
                                                <div v-if="form.diagnostics_id"
                                                     class="p-6 bg-white shadow rounded-xl">
                                                    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2">
                                                        <!--NOME-->
                                                        <div class="col-span-2 ">
                                                            <div class="space-y-2">
                                                                <div
                                                                    class="flex items-center justify-between space-x-2">
                                                                    <label class="inline-flex items-center space-x-3"
                                                                           for="name">
                                                                        <span
                                                                            class="text-sm font-medium leading-4 text-gray-700">
                                                                            Nome
                                                                            <sup
                                                                                class="font-medium text-danger-700">*</sup>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="flex items-center space-x-1 group">
                                                                    <div class="flex-1">
                                                                        <input type="text" id="name" name="name"
                                                                               v-model="form.name"
                                                                               class="block w-full h-10 transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 border-gray-300">
                                                                        <div v-if="errors.name" v-text="errors.name"
                                                                             class="text-xs text-red-500 mt-1"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/NOME-->
                                                        <!--SINONIMO-->
                                                        <div class="col-span-2 ">
                                                            <div class="space-y-2">
                                                                <div
                                                                    class="flex items-center justify-between space-x-2">
                                                                    <label class="inline-flex items-center space-x-3"
                                                                           for="synonym">
                                                                        <span
                                                                            class="text-sm font-medium leading-4 text-gray-700">
                                                                            Sinônimo
                                                                            <sup
                                                                                class="font-medium text-danger-700">*</sup>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="flex items-center space-x-1 group">
                                                                    <div class="flex-1">
                                                                        <input type="text" id="synonym" name="synonym"
                                                                               v-model="form.synonym"
                                                                               class="block w-full h-10 transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 border-gray-300">
                                                                        <div v-if="errors.synonym"
                                                                             v-text="errors.synonym"
                                                                             class="text-xs text-red-500 mt-1"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/SINONIMO-->
                                                        <!--O QUE É-->
                                                        <div class="col-span-2 ">
                                                            <div class="space-y-2">
                                                                <div
                                                                    class="flex items-center justify-between space-x-2">
                                                                    <label class="inline-flex items-center space-x-3"
                                                                           for="what_is">
                                                                        <span
                                                                            class="text-sm font-medium leading-4 text-gray-700">
                                                                            O que é/para que serve:
                                                                            <sup
                                                                                class="font-medium text-danger-700">*</sup>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="flex items-center space-x-1 group">
                                                                    <div class="flex-1">
                                                                        <input type="text" id="what_is" name="what_is"
                                                                               v-model="form.what_is"
                                                                               class="block w-full h-10 transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 border-gray-300">
                                                                        <div v-if="errors.what_is"
                                                                             v-text="errors.what_is"
                                                                             class="text-xs text-red-500 mt-1"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/O QUE É-->
                                                        <!--COMO É REALIZADO-->
                                                        <div class="col-span-2 ">
                                                            <div class="space-y-2">
                                                                <div
                                                                    class="flex items-center justify-between space-x-2">
                                                                    <label class="inline-flex items-center space-x-3"
                                                                           for="how_it_is_done">
                                                                        <span
                                                                            class="text-sm font-medium leading-4 text-gray-700">
                                                                            Como é realizado:
                                                                            <sup
                                                                                class="font-medium text-danger-700">*</sup>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="flex items-center space-x-1 group">
                                                                    <div class="flex-1">
                                                                        <input type="text" id="how_it_is_done"
                                                                               name="how_it_is_done"
                                                                               v-model="form.how_it_is_done"
                                                                               class="block w-full h-10 transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 border-gray-300">
                                                                        <div v-if="errors.how_it_is_done"
                                                                             v-text="errors.how_it_is_done"
                                                                             class="text-xs text-red-500 mt-1"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/COMO É REALIZADO-->
                                                        <!--DURAÇÃO MÉDIA-->
                                                        <div class="col-span-2 ">
                                                            <div class="space-y-2">
                                                                <div
                                                                    class="flex items-center justify-between space-x-2">
                                                                    <label class="inline-flex items-center space-x-3"
                                                                           for="average_duration">
                                                                        <span
                                                                            class="text-sm font-medium leading-4 text-gray-700">
                                                                            Duração média:
                                                                            <sup
                                                                                class="font-medium text-danger-700">*</sup>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="flex items-center space-x-1 group">
                                                                    <div class="flex-1">
                                                                        <input type="text" id="average_duration"
                                                                               name="average_duration"
                                                                               v-model="form.average_duration"
                                                                               class="block w-full h-10 transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 border-gray-300">
                                                                        <div v-if="errors.average_duration"
                                                                             v-text="errors.average_duration"
                                                                             class="text-xs text-red-500 mt-1"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/DURAÇÃO MÉDIA-->
                                                        <!--CONTRA-INDICAÇÕES OU RESTRIÇÕES RELATIVAS-->
                                                        <div class="col-span-2 ">
                                                            <div class="space-y-2">
                                                                <div
                                                                    class="flex items-center justify-between space-x-2">
                                                                    <label class="inline-flex items-center space-x-3"
                                                                           for="contraindications_or_relative_restrictions">
                                                                        <span
                                                                            class="text-sm font-medium leading-4 text-gray-700">
                                                                            Contra-indicações ou restrições relativas:
                                                                            <sup
                                                                                class="font-medium text-danger-700">*</sup>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="flex items-center space-x-1 group">
                                                                    <div class="flex-1">
                                                                        <input type="text"
                                                                               id="contraindications_or_relative_restrictions"
                                                                               name="contraindications_or_relative_restrictions"
                                                                               v-model="form.contraindications_or_relative_restrictions"
                                                                               class="block w-full h-10 transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 border-gray-300">
                                                                        <div
                                                                            v-if="errors.contraindications_or_relative_restrictions"
                                                                            v-text="errors.contraindications_or_relative_restrictions"
                                                                            class="text-xs text-red-500 mt-1"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/CONTRA-INDICAÇÕES OU RESTRIÇÕES RELATIVAS-->
                                                        <!--ORIENTAÇÕES PARA A REALIZAÇÃO-->
                                                        <div class="col-span-2 ">
                                                            <div class="space-y-2">
                                                                <div
                                                                    class="flex items-center justify-between space-x-2">
                                                                    <label class="inline-flex items-center space-x-3"
                                                                           for="service_guidelines">
                                                                        <span
                                                                            class="text-sm font-medium leading-4 text-gray-700">
                                                                            Orientações para a realização | prepraro:
                                                                            <sup
                                                                                class="font-medium text-danger-700">*</sup>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="flex items-center space-x-1 group">
                                                                    <div class="flex-1">
                                                                        <input type="text" id="service_guidelines"
                                                                               name="service_guidelines"
                                                                               v-model="form.service_guidelines"
                                                                               class="block w-full h-10 transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 border-gray-300">
                                                                        <div v-if="errors.service_guidelines"
                                                                             v-text="errors.service_guidelines"
                                                                             class="text-xs text-red-500 mt-1"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ORIENTAÇÕES PARA A REALIZAÇÃO-->
                                                        <!--ORIENTAÇÕES PARA O ATENDIMENTO-->
                                                        <div class="col-span-2 ">
                                                            <div class="space-y-2">
                                                                <div
                                                                    class="flex items-center justify-between space-x-2">
                                                                    <label class="inline-flex items-center space-x-3"
                                                                           for="achievement_orientation_or_preparation">
                                                                        <span
                                                                            class="text-sm font-medium leading-4 text-gray-700">
                                                                            Orientações para o atendimento:
                                                                            <sup
                                                                                class="font-medium text-danger-700">*</sup>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="flex items-center space-x-1 group">
                                                                    <div class="flex-1">
                                                                        <input type="text"
                                                                               id="achievement_orientation_or_preparation"
                                                                               name="achievement_orientation_or_preparation"
                                                                               v-model="form.achievement_orientation_or_preparation"
                                                                               class="block w-full h-10 transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 border-gray-300">
                                                                        <div
                                                                            v-if="errors.achievement_orientation_or_preparation"
                                                                            v-text="errors.achievement_orientation_or_preparation"
                                                                            class="text-xs text-red-500 mt-1"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ORIENTAÇÕES PARA O ATENDIMENTO-->
                                                        <!--PRAZO PARA A ENTREGA-->
                                                        <div class="col-span-2 ">
                                                            <div class="space-y-2">
                                                                <div
                                                                    class="flex items-center justify-between space-x-2">
                                                                    <label class="inline-flex items-center space-x-3"
                                                                           for="deadline">
                                                                        <span
                                                                            class="text-sm font-medium leading-4 text-gray-700">
                                                                            Prazo de entrega:
                                                                            <sup
                                                                                class="font-medium text-danger-700">*</sup>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="flex items-center space-x-1 group">
                                                                    <div class="flex-1">
                                                                        <input type="text" id="deadline" name="deadline"
                                                                               v-model="form.deadline"
                                                                               class="block w-full h-10 transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 border-gray-300">
                                                                        <div v-if="errors.deadline"
                                                                             v-text="errors.deadline"
                                                                             class="text-xs text-red-500 mt-1"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/PRAZO PARA A ENTREGA-->
                                                        <!--BOTÕES-->
                                                        <div class="col-span-2 ">
                                                            <div
                                                                class="flex flex-wrap items-center gap-4 justify-start">
                                                                <Link :href="route('exams.index')"
                                                                      class="inline-flex items-center justify-center font-medium tracking-tight rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset bg-gray-400 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 h-9 px-4 text-white shadow focus:ring-white">
                                                                    <span>Voltar</span>
                                                                </Link>
                                                                <button type="submit"
                                                                        :disabled="form.processing"
                                                                        class="inline-flex items-center justify-center font-medium tracking-tight rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset bg-primary hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 h-9 px-4 text-white shadow focus:ring-white">
                                                                    <span>Cadastrar</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </transition>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </template>
        </main-content>
    </app-layout>
</template>

<script>
import {defineComponent, reactive} from 'vue'

import AppLayout from '@/Layouts/AppLayout.vue';
import {Head, Link} from '@inertiajs/inertia-vue3';
import Sidebar from "@/Layouts/Sidebar";
import MainContent from "@/Layouts/MainContent";
import JetDropdown from "@/Jetstream/Dropdown";
import JetDropdownLink from "@/Jetstream/DropdownLink";
import JetNavLink from "@/Jetstream/NavLink";

import Editor from '@tinymce/tinymce-vue';


export default defineComponent({
    name: "Exam Create",
    props: {
        errors: Object,
        methods: Object,
    },
    components: {
        AppLayout,
        Sidebar,
        MainContent,
        Head,
        Link,
        JetDropdown,
        JetDropdownLink,
        JetNavLink,
        Editor,

    },
    data() {
        return {
            form: this.$inertia.form({
                diagnostics_id: null,
                name: '',
                synonym: '',
                what_is: '',
                how_it_is_done: '',
                average_duration: '',
                contraindications_or_relative_restrictions: '',
                service_guidelines: '',
                achievement_orientation_or_preparation: '',
                deadline: '',
            }),
        }
    },
    methods: {
        submit() {
            this.$inertia.post(route('exams.store'), this.form, {
                forceFormData: true
            });
        }
    },
})
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
    transform: translateY(-40px);
    opacity: 0;
}

.slide-move {
    transition: transform 1s;
}

</style>
