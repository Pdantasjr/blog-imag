<template>
    <div class="w-full h-auto bg-primary rounded-2xl block transition-all duration-200 ease-in-out">
        <span @click="active = !active" class="text-lg text-blue-200 font-semibold hover:cursor-pointer flex p-4" v-if="!active"> Informações</span>
        <span @click="active = !active" class="text-lg text-blue-200 font-semibold hover:cursor-pointer flex p-4" v-if="active"> Informações</span>

        <transition name="slide-fade">
            <div v-if="!active" class=" h-auto mx-6 border-t border block relative">
                <h3 class="text-blue-800 my-2 font-semibold">Descrição</h3>
                <p class="text-blue-800 my-2">asdsadas</p>
                <div class="flex justify-between my-8">
                    <div>
                        <h3 class="my-2 font-semibold">Categoria</h3>
                        <p>açslkdçlsk</p>
                    </div>
                    <div class="ml-6">
                        <h3 class="my-2 font-semibold">Prazo</h3>
                        <p>
                            asdasd
                        </p>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
import {defineComponent} from "vue";
export default defineComponent({
    name: "Acoordion",
    props: {
        description: String,
        category: String,
        deadline: String,
    },
    data () {
        return {
            active: false,
        }
    }
})
</script>

<style scoped>

.slide-fade-enter {
    opacity: 0;
}

.slide-fade-enter-active {
    transition: opacite .2s;
}

.slide-fade-to {
    opacity: 1;
}

.slide-fade-leave {
    opacity: 1;
}

.slide-fade-leave-active {
    transition: opacity .2s;
}

.slide-fade-leave-to {
    opacity: 0;
}

</style>
