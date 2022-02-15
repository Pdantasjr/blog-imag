<template>
    <svg v-if="name === 'cheveron-down'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
    <img v-else-if="name === 'search'" class="w-6 h-6" src="@/Pages/Blog/Images/search-icon.svg" alt="icone para busca">
    <img v-else-if="name === 'whatsapp'" class="w-6 h-6" src="@/Pages/Blog/Images/whatsapp-icon.svg" alt="icone para whatsapp">
    <img v-else-if="name === 'phone'" class="w-6 h-6" src="@/Pages/Blog/Images/phone-icon.svg" alt="icone para telefone">
    <span v-else></span>
</template>


<script>
export default {
    name: "Icons",
    props: {
        name: String,
    }
}
</script>
