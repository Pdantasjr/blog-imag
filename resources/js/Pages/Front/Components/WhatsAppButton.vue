<template>
    <button class="bg-primary z-30 w-14 h-14 rounded-full p-3 fixed bottom-6 right-4 shadow-md hover:shadow-lg hover:cursor-pointer transition transform hover:scale-105 duration-200 ease-in-out">
        <a @click.prevent="WhatsAppLink" target="_blank">
            <img src="../Images/whatsapp-icon-footer.svg" alt="WhatsApp">
        </a>
    </button>
</template>

<script>
export default {
    name: "Botão do WhatsApp",
    methods: {
        WhatsAppLink () {
            return window.open(
                'https://wa.me/5581994630900?text=Olá,%20estou%20vindo%20do%20site,%20preciso%20de%20mais%20informações.',
                '_blank'
            )
        }
    }
}
</script>

<style>

</style>
