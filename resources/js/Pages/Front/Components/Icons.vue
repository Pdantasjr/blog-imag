<template>
    <svg v-if="name === 'cheveron-down'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
    <img v-else-if="name === 'search'" class="w-6 h-6" src="@/Pages/Front/Images/search-icon.svg" alt="icone para busca">
    <img v-else-if="name === 'whatsapp'" class="w-6 h-6" src="@/Pages/Front/Images/whatsapp-icon.svg" alt="icone para whatsapp">
    <img v-else-if="name === 'whatsappFooter'" class="w-6 h-6" src="@/Pages/Front/Images/whatsapp-icon-footer.svg" alt="icone para whatsapp">
    <img v-else-if="name === 'phone'" class="w-6 h-6" src="@/Pages/Front/Images/phone-icon.svg" alt="icone para telefone">
    <img v-else-if="name === 'mobilePacient'" class="w-6 h-6" src="@/Pages/Front/Images/pacient-icon-white.svg" alt="icone para pacient">
    <img v-else-if="name === 'mobileMedic'" class="w-6 h-6" src="@/Pages/Front/Images/medic-icon-white.svg" alt="icone para medico">
    <img v-else-if="name === 'pin'" class="w-6 h-6" src="@/Pages/Front/Images/pin-icon.svg" alt="icone para medico">
    <img v-else-if="name === 'phoneFooter'" class="w-6 h-6" src="@/Pages/Front/Images/phone-icon-footer.svg" alt="icone para medico">
    <img v-else-if="name === 'instagramFooter'" class="w-6 h-6" src="@/Pages/Front/Images/instagram-icon-white.svg" alt="icone para medico">
    <img v-else-if="name === 'facebookFooter'" class="w-6 h-6" src="@/Pages/Front/Images/facebook-icon-white.svg" alt="icone para medico">
    <img v-else-if="name === 'linkedinFooter'" class="w-6 h-6" src="@/Pages/Front/Images/linkedin-icon-white.svg" alt="icone para medico">
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
