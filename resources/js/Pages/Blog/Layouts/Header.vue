<template>
    <header>
        <div class="container">
            <Logotype logo_width="200"/>
            <Nav />
            <ReaderButtons />
        </div>
    </header>
</template>

<script>

import Logotype from "@/Pages/Blog/Components/Logotype";
import Nav from "@/Pages/Blog/Components/Nav";
import ReaderButtons from "@/Pages/Blog/Components/ReaderButtons";

export default {
    name: "Header",
    components: {
        Logotype,
        Nav,
        ReaderButtons,
    },
}
</script>

<style scoped>

</style>
