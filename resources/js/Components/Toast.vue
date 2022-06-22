<template>
    <transition name="slide-fade">
        <div v-if="toast && visible" class="absolute flex max-w-xs w-full mt-4 mr-4 top-6 right-0 bg-white border border-gray-300 rounded-lg shadow-2xl p-4 z-20">
            <div class="mr-2">
                <svg class="w-6 text-green-600 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="flex-1 text-gray-800">
                {{ toast.message }}
            </div>
            <div class="ml-2">
                <button @click="visible = false" class="align-top text-gray-500 hover:text-gray-700 focus:outline-none focus:text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </transition>
</template>

<script>
export default {
    name: "Toast",
    props: {
        toast: Object,
    },
    data() {
        return {
            visible: false,
        }
    },
    watch: {
        toast: {
            handler() {
                this.visible = true
                setTimeout(() => this.visible = false, 5000)
            },
            deep: true,
            immediate: true,
        }
    }
}
</script>

<style scoped>
.slide-fade-enter-active {
    transition: all .3s ease;
    opacity: 0;
}
.slide-fade-leave-active {
    transition: all .4s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    opacity: 1;
}
.slide-fade-enter, .slide-fade-leave-to{
    transform: translateX(150px);
    opacity: 0;
}
</style>
