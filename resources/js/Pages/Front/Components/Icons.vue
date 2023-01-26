<template>
    <svg v-if="name === 'cheveron-down'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
    <img v-else-if="name === 'search'" class="w-6 h-6" src="../Images/ComponentIcons/search-icon.svg" alt="ícone para busca">
    <img v-else-if="name === 'whatsapp'" class="w-6 h-6" src="../Images/ComponentIcons/whatsapp-icon.svg" alt="ícone para whatsapp">
    <img v-else-if="name === 'whatsappFooter'" class="h-6 h-6" src="../Images/ComponentIcons/whatsapp-icon-footer.svg" alt="ícone para whatsapp">
    <img v-else-if="name === 'phone'" class="w-6 h-6" src="../Images/ComponentIcons/phone-icon.svg" alt="ícone para telefone">
    <img v-else-if="name === 'pacient-w'" class="w-6 h-6" src="../Images/ComponentIcons/pacient-icon-white.svg" alt="ícone para pacient">
    <img v-else-if="name === 'pacient-top-w'" class="w-4 h-4 xs:w-6 xs:h-6" src="../Images/ComponentIcons/pacient-icon-white.svg" alt="ícone para pacient">
    <img v-else-if="name === 'pacient-b'" class="w-6 h-6" src="../Images/ComponentIcons/pacient-icon-blue.svg" alt="ícone para pacient">
    <img v-else-if="name === 'medic-w'" class="w-6 h-6" src="../Images/ComponentIcons/medic-icon-white.svg" alt="ícone para medico">
    <img v-else-if="name === 'medic-top-w'" class="w-4 h-4 xs:w-6 xs:h-6" src="../Images/ComponentIcons/medic-icon-white.svg" alt="ícone para medico">
    <img v-else-if="name === 'medic-b'" class="w-6 h-6" src="../Images/ComponentIcons/medic-icon-blue.svg" alt="ícone para medico">
    <img v-else-if="name === 'pin'" class="w-6 h-6" src="../Images/ComponentIcons/pin-icon.svg" alt="ícone para medico">
    <img v-else-if="name === 'phoneFooter'" class="w-6 h-6" src="../Images/ComponentIcons/phone-icon-footer.svg" alt="ícone para medico">
    <img v-else-if="name === 'instagramFooter'" class="w-6 h-6" src="../Images/ComponentIcons/instagram-icon-white.svg" alt="ícone para medico">
    <img v-else-if="name === 'facebookFooter'" class="w-6 h-6" src="../Images/ComponentIcons/facebook-icon-white.svg" alt="ícone para medico">
    <img v-else-if="name === 'linkedinFooter'" class="w-6 h-6" src="../Images/ComponentIcons/linkedin-icon-white.svg" alt="ícone para medico">
    <img v-else-if="name === 'rm-w'" class="w-12 h-12 sm:w-16 sm:h-16" src="../Images/ComponentIcons/rm.svg" alt="ícone para Ressonância Magnética">
    <img v-else-if="name === 'tc-w'" class="w-12 h-12 sm:w-16 sm:h-16" src="../Images/ComponentIcons/tc.svg" alt="ícone para Tomografia Computadorizada">
    <img v-else-if="name === 'do-w'" class="w-12 h-12 sm:w-16 sm:h-16" src="../Images/ComponentIcons/do.svg" alt="ícone para Densiometria Óssea">
    <img v-else-if="name === 'mm-w'" class="w-12 h-12 sm:w-16 sm:h-16" src="../Images/ComponentIcons/mm.svg" alt="ícone para Mamografia">
    <img v-else-if="name === 'ut-w'" class="w-12 h-12 sm:w-16 sm:h-16" src="../Images/ComponentIcons/ut.svg" alt="ícone para Ultrassonografia">
    <img v-else-if="name === 'rx-w'" class="w-12 h-12 sm:w-16 sm:h-16" src="../Images/ComponentIcons/rx.svg" alt="ícone para Raio-X">
    <img v-else-if="name === 'pb-w'" class="w-12 h-12 sm:w-16 sm:h-16" src="../Images/ComponentIcons/pb.svg" alt="ícone para Punções e Biópsias">
    <img v-else-if="name === 'el-w'" class="w-12 h-12 sm:w-16 sm:h-16" src="../Images/ComponentIcons/el.svg" alt="ícone para Exames Laboratoriais">
    <img v-else-if="name === 'list-b'" class="w-12 h-12" src="../Images/ComponentIcons/list_checked.svg" alt="ícone para vantagens de escolher IMAG">
    <img v-else-if="name === 'Staff-b'" class="w-12 h-12" src="../Images/ComponentIcons/team.svg" alt="ícone para vantagens de escolher IMAG">
    <img v-else-if="name === 'conv-b'" class="w-12 h-12" src="../Images/ComponentIcons/convenio.svg" alt="ícone para vantagens de escolher IMAG">
    <img v-else-if="name === 'check-b'" class="w-12 h-12" src="../Images/ComponentIcons/check.svg" alt="ícone para vantagens de escolher IMAG">
    <img v-else-if="name === 'medical-b'" class="w-12 h-12" src="../Images/ComponentIcons/medical_center.svg" alt="ícone para vantagens de escolher IMAG">
    <img v-else-if="name === 'pin-b'" class="w-12 h-12" src="../Images/ComponentIcons/pin.svg" alt="ícone para vantagens de escolher IMAG">
    <img v-else-if="name === 'hour-b'" class="w-12 h-12" src="../Images/ComponentIcons/horario.svg" alt="ícone para vantagens de escolher IMAG">
    <img v-else-if="name === 'online-b'" class="w-12 h-12" src="../Images/ComponentIcons/online.svg" alt="ícone para vantagens de escolher IMAG">
    <img v-else-if="name === 'target-w'" class="w-12 h-12" src="../Images/ComponentIcons/target_icon.svg" alt="ícone para Missão Visão e Valores">
    <img v-else-if="name === 'graph-w'" class="w-12 h-12" src="../Images/ComponentIcons/graph_icon.svg" alt="ícone para Missão Visão e Valores">
    <img v-else-if="name === 'star-w'" class="w-12 h-12" src="../Images/ComponentIcons/star_icon.svg" alt="ícone para Missão Visão e Valores">
    <img v-else-if="name === 'chevron-up-w'" class="w-6 h-6" src="../Images/ComponentIcons/chevron-up.svg" alt="ícone seta para cima">
    <img v-else-if="name === 'chevron-down-w'" class="w-6 h-6" src="../Images/ComponentIcons/chevron-down.svg" alt="ícone seta para baixo">
    <img v-else-if="name === 'faq-w'" class="w-6 h-6" src="../Images/ComponentIcons/faq.svg" alt="ícone faq">
    <span v-else></span> 
</template>


<script>
export default {
    name: "Icons",
    props: {
        name: String,
    },
}
</script>
