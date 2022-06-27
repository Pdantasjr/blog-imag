<template>
    <div class="w-screen h-auto md:h-96 mx-auto relative">
        <div class="absolute w-full h-full bg-no-repeat object-cover -z-10 inset-x-0 bottom-0"
             :style="{'background-image': 'url('+ urlDefault +'/Academy/bg-academy.svg)'}"></div>
        <div class="lg:max-w-7xl h-full w-11/12 mx-auto flex flex-col md:flex-row items-center sm:justify-around">
            <div class="mt-4 flex flex-col items-center md:items-start md:-translate-y-10">
                <img src="../Images/logotype/logotipo_academy.svg" alt="logotipo IMAG Academy">
                <h1 class="text-primary text-center md:text-left my-4 text-lg md:text-2xl">Um podcast sobre inovação e tecnologia na área da saúde.</h1>
            </div>
            <div>
                <!--PLAYER-->
                <div class="animate-float w-[335px] h-[230px] my-4 flex justify-center items-center relative shadow-lg rounded-lg">
                    <div class="-z-10 absolute rounded-lg h-full inset-0 bg-white/70 bg-opacity-10 backdrop-blur-sm border-b-1 shadow-lg border-primary"></div>
                    <div class="relative w-10/12 flex flex-col h-40 items-center justify-around">
                        <!--TIMELINE-->
                        <div class="relative inset-0 w-full h-auto">
                            <div class="absolute rounded inset-0 w-full rounded-full translate-y-[2px] h-[2px] bg-gray-300"></div>
                            <div class="absolute flex items-center justify-end rounded w-5/12 h-[5px] bg-gradient-to-br from-secondary to-primary">
                                <div class="absolute animate-ping inline-flex w-2 h-2 translate-x-2 rounded-full bg-primary"></div>
                            </div>
                            <div class="w-full h-auto flex justify-between mt-1">
                                <span class="text-gray-400 font-light text-sm">1:09</span>
                                <span class="text-gray-400 font-light text-sm">2:31</span>
                            </div>
                        </div>
                        <!--PREV | PLAY | NEXT -->
                        <div class="flex items-center justify-around h-auto w-full">
                            <img
                                class="hover:cursor-pointer hover:scale-105 transition transform duration-300 ease-in-out"
                                :src="urlDefault +'/Academy/prev.svg'" alt="icone prev do player">
                            <div
                                class="w-20 h-20 rounded-full shadow-md bg-gradient-to-br from-secondary to-primary flex justify-center items-center hover:from-secondary hover:to-primary hover:cursor-pointer hover:shadow-2xl hover:scale-105 transition transform duration-300 ease-in-out">
                                <div
                                    class="translate-x-[2px] border-solid border-l-[#E3EDF1] border-l-[24px] border-y-transparent border-y-[16px] border-r-0"></div>
                            </div>
                            <img
                                class="hover:cursor-pointer hover:scale-105 transition transform duration-300 ease-in-out"
                                :src="urlDefault +'/Academy/next.svg'" alt="icone next do player">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Academy",
    props: {
        urlDefault: String
    },
}
</script>

<style scoped>

</style>
