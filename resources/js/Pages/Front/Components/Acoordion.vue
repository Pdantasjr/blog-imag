<template>
    <div class="w-full h-auto bg-primary">
        <span @click="active = !active" class="w-full justify-between items-center text-white font-normal hover:cursor-pointer flex p-6" :class="{ 'border-b': active }"> 
            {{ question }}
            <Icons v-show="active" name="chevron-up-w" />
            <Icons v-show="!active" name="chevron-down-w" />
        </span>
    </div>
    <div v-if="!active" class="w-full h-auto bg-primary" :class="{ 'border-b': !active }">
        <p class="text-white font-light text-sm px-6 pb-4" >{{ answer }}</p>
    </div>
</template>

<script>
import {defineComponent} from "vue";
import Icons from "./Icons";

export default defineComponent({
    name: "Acoordion",
    props: {
        question: String,
        answer: String,
    },
    components: {
        Icons,
    },
    data () {
        return {
            active: true,
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
