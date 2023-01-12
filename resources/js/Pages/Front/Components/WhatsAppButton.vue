<template>
<!--    <button class="flex justify-center items-center bg-[#31b344] z-30 w-auto h-14 rounded-full p-3 fixed bottom-6 right-4 shadow-md hover:shadow-lg hover:cursor-pointer transition transform hover:scale-105 duration-200 ease-in-out">-->
<!--        <Transition appear name="slide-fade">-->
<!--            <p class="font-medium text-[1rem] text-white p-2">Fale no WhatsApp</p>-->
<!--        </Transition>-->
<!--            <a @click.prevent="WhatsAppLink" target="_blank">-->
<!--            <img src="../Images/whatsapp-icon-footer.svg" alt="WhatsApp" class="h-auto w-8">-->
<!--        </a>-->
<!--    </button>-->
    <Transition appear name="slide-fade">
    <button class="flex justify-center items-center bg-[#31b344] z-30 w-auto h-14 rounded-full p-3 fixed bottom-6 right-4 shadow-md hover:shadow-lg hover:cursor-pointer transition transform hover:scale-105 duration-200 ease-in-out">

            <p class="font-medium text-[1rem] text-white p-2">Fale no WhatsApp</p>

        <a @click.prevent="WhatsAppLink" target="_blank">
            <img src="../Images/whatsapp-icon-footer.svg" alt="WhatsApp" class="h-auto w-8">
        </a>
    </button>
    </Transition>
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
        },
    }
}
</script>


<style>
.slide-fade-enter-active {
    transition: all .3s ease-out;
}

.slide-fade-leave-active {
    transition: all .3s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    transform: translateX(50px);
    /*opacity: 0;*/
}
</style>
