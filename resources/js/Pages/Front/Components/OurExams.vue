<template>
    <div class="w-screen">
        <div class="lg:max-w-7xl w-11/12 mx-auto">
            <section-title title="Nossos Exames"></section-title>
        </div>
        <div class="w-screen bg-gradient-to-r from-primary to-secondary">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 sm:gap-4 lg:max-w-7xl w-11/12 mx-auto py-6 sm:py-10">

                <div class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="rm-w" />
                    </div>
                    <div class="m-2 flex-1">
                        <span class="text-white group-hover:font-bold transition-all duration-300 ease-in-out font-light">Ressonância Magnética</span>
                    </div>
                </div>
                <div class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="tc-w" />
                    </div>
                    <div class="m-2 flex-1">
                        <span class="text-white group-hover:font-bold transition-all duration-300 ease-in-out font-light">Tomografica Computadorizada</span>
                    </div>
                </div>
                <div class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="do-w" />
                    </div>
                    <div class="m-2 flex-1">
                        <span class="text-white group-hover:font-bold transition-all duration-300 ease-in-out font-light">Densiometria Óssea</span>
                    </div>
                </div>
                <div class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="mm-w" />
                    </div>
                    <div class="m-2 flex-1">
                        <span class="text-white group-hover:font-bold transition-all duration-300 ease-in-out font-light">Mamografia</span>
                    </div>
                </div>
                <div class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="ut-w" />
                    </div>
                    <div class="m-2 flex-1">
                        <span class="text-white group-hover:font-bold transition-all duration-300 ease-in-out font-light">Ultrassonografia</span>
                    </div>
                </div>
                <div class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="rx-w" />
                    </div>
                    <div class="m-2 flex-1">
                        <span class="text-white group-hover:font-bold transition-all duration-300 ease-in-out font-light">Raio-X</span>
                    </div>
                </div>
                <div class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="pb-w" />
                    </div>
                    <div class="m-2 flex-1">
                        <span class="text-white group-hover:font-bold transition-all duration-300 ease-in-out font-light">Punções e Biópsias</span>
                    </div>
                </div>
                <div class="group flex items-center cursor-pointer w-full h-16 sm:h-20 rounded border border-white shadow-lg hover:shadow-white/50 hover:border-2 transition transform hover:scale-105 duration-300 ease-in-out">
                    <div class="m-2 w-16 h-16 flex items-center justify-center">
                        <icons name="el-w" />
                    </div>
                    <div class="m-2 flex-1">
                        <span class="text-white group-hover:font-bold transition-all duration-300 ease-in-out font-light">Exames Laboratoriais</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>

import SectionTitle from "./SectionTitle";
import Icons from "./Icons";
export default {
    name: "OurExams",
    components: {
        SectionTitle,
        Icons,
    }
}
</script>
