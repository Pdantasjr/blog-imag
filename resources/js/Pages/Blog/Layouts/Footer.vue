<template>
    <div class="bg-primary w-screen">
        <div class="flex justify-around">
            <a class="w-2/12 justify-around flex transition ease-in-out duration-200 hover:shadow-lg text-background font-light py-2 px-4 border border-2 my-2 rounded-full" href="#">
                <Icons name="mobilePacient" class="px-4 text-primary min-w-fit" />
                Área do Paciente</a>
            <a class="w-2/12 justify-around flex transition ease-in-out duration-200 hover:shadow-lg text-background font-light py-2 px-4 border border-2 my-2 rounded-full" href="#">
                <Icons name="mobileMedic" class="px-4 text-primary min-w-fit" />
                Área do Médico</a>
        </div>
    </div>
</template>

<script>
import Icons from "@/Pages/Blog/Components/Icons";
export default {
    name: "Footer",
    components: {
        Icons,
    }
}
</script>

<style scoped>

</style>
