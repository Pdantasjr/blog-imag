<template>
    <h1 class="text-primary font-black text-2xl sm:text-5xl tracking-wider uppercase text-center my-6 sm:my-10"> {{ title }} </h1>
</template>

<script>
export default {
    name: "SectionTitle",
    props: {
        title: String,
    }
}
</script>
