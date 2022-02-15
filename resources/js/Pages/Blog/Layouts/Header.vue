<template>
    <header>
        <div class="bg-background shadow-md">
            <div class="w-screen sm:max-w-7xl mx-auto">
                <div class="flex justify-between items-center p-4">
                    <Logotype logo_width="110" class="min-w-fit"/>
                    <Nav />
                    <Sidebar />
                </div>
            </div>
        </div>
    </header>
</template>

<script>
import Logotype from "@/Pages/Blog/Components/Logotype";
import Nav from "@/Pages/Blog/Components/Nav";
import Sidebar from "@/Pages/Blog/Components/Sidebar";

export default {
    name: "Header",
    components: {
        Nav,
        Logotype,
        Sidebar,
    },
}
</script>

<style scoped>

</style>
