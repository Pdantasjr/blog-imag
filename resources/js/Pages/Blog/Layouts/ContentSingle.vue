<template>
    <div class="w-screen h-auto">
        <div class="max-w-4xl mx-auto">
            <main>
                <slot name="title"></slot>
                <slot name="cover"></slot>
                <slot name="content"></slot>
            </main>
        </div>
    </div>
</template>

<script>
export default {
    name: "ContentSingle"
}
</script>

<style scoped>

</style>
