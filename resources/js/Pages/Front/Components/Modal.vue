<template>
    <div class="block fixed top-0 left-0 h-full w-full overflow-y-auto z-40 bg-black/50 backdrop-blur-sm">
        <div
            class="bg-gray-50 flex flex-col items-center justify-between my-10 mx-auto border border-gray-300 rounded-lg w-10/12 max-w-7xl h-3/6">
            <div>
                <!--TITLE-->
                <div class="w-full h-auto border-b border-primary/25 shadow-lg shadow-primary/40">
                    <slot name="header" :exam="exam"></slot>
                </div>
                <!--MODAL CONTENT-->
                <div class="w-full flex-1 h-auto overflow-y-auto py-1">
                    <slot></slot>
                </div>
            </div>
            <!--FOOTER-->
            <div class="w-full h-auto border-t border-primary/25 flex justify-end">
                <slot name="footer"></slot>
            </div>
        </div>
    </div>
</template>

<script>
import {defineComponent} from 'vue'

export default defineComponent({
    name: "Modal",
    props: {
        methods: Array,
    },
    data() {
        return {
            exams: this.methods
        }
    },
    // mounted() {
    //     setTimeout(() => {
    //         this.exams = this.methods
    //     }, 100)
    // }
})
</script>
