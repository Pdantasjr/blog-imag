<template>
    <header>
        <div class="bg-background shadow-sm">
            <div class="w-screen sm:max-w-7xl mx-auto">
                <div class="flex justify-between items-center p-4">
                    <Logotype logo_width="120"/>
                    <Nav />
                    <ReaderButtons />
                </div>
            </div>
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
        Nav,
        ReaderButtons,
        Logotype,
    },
}
</script>

<style scoped>

</style>
