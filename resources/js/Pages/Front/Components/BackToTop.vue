<template>
<div class="w-screen h-auto">
    <div class="flex">
        <button @click="scrollToTop" class="mx-auto bg-primary/10 px-2 py-1 border border-primary/25 my-2 rounded text-white flex items-center justify-center group hover:bg-secondary hover:bg-white hover:text-primary transition duration-200 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary/25 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>
            <span class="text-sm text-primary/25 ml-2 group-hover:text-gray-100">voltar ao topo</span>
        </button>
    </div>
</div>
</template>

<script>
export default {
    name: "BackToTop",
    methods: {
        scrollToTop () {
            return window.scrollTo(0,0)
        }
    }
}
</script>

<style scoped>

</style>
