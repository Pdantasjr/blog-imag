<template>
    <div class="w-full h-auto bg-primary">
        <span @click="active = !active" class="w-full justify-between items-center text-white text-sm md:text-lg font-normal hover:cursor-pointer flex p-4 md:p-6" :class="{ 'border-b': active }"> 
            {{ question }}
            <Icons v-show="active" name="chevron-up-w" />
            <Icons v-show="!active" name="chevron-down-w" />
        </span>
    </div>
    <div v-if="!active" class="px-6 w-full h-auto bg-primary" :class="{ 'border-b': !active }">
        <span v-html="answer"></span>
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
