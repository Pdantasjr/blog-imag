<template>
    <nav class="links">
        <ul>
            <li><a href="#home" data-linkAnimate>Home</a></li>
            <li><a href="#nossos-exames" data-linkAnimate>Nossos Exames</a></li>
            <li><a href="#mvv" data-linkAnimate>Institucional</a></li>
            <li><a href="#convenios" data-linkAnimate>Convênios</a></li>
            <li><a href="#team" data-linkAnimate>Equipe Médica</a></li>
            <li><a href="{{ route('front.blog') }}" target="_blank" data-linkAnimate>Blog</a></li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: "Nav"
}
</script>

<style scoped>

</style>
