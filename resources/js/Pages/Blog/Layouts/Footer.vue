<template>
    <div class="bg-primary w-screen py-3">
        <div class="flex justify-around items-center h-auto mx-auto flex-wrap md:hidden">
            <a class="btnMobile" href="#">
                <Icons name="mobilePacient" class="w-8" />
                Área do Paciente
            </a>
            <a class="btnMobile" href="#">
                <Icons name="mobileMedic" class="w-8" />
                Área do Médico
            </a>
        </div>
        <div class="logotypeWhite">
            <LogotypeWhite />
        </div>
        <div class="flex flex-col items-center">
            <h3 class="text-background font-medium tracking-wide flex items-center flex-row">
                <Icons name="pin" class="w-6 h-4" />
                Vitória Park Shopping
            </h3>
            <div class="flex items-center">
                <a class="flex m-2 text-background font-light" href="tel:8130409999">
                    <Icons name="whatsappFooter" class="w-4 mx-2" />
                    (81) 3040.9999
                </a>
                <a class="flex m-2 text-background font-light" href="https://api.whatsapp.com/send/?phone=558194630900&text=Ol%C3%A1%2C+estou+vindo+do+site%2C+preciso+de+mais+informa%C3%A7%C3%B5es&app_absent=0">
                    <Icons name="phoneFooter" class="w-4 mx-2" />
                    (81) 9.9463.0900
                </a>
            </div>
            <div class="flex items-center">
                <a href="https://www.instagram.com/imagdiagnostico" target="_blank">
                    <Icons name="instagramFooter" class="w-6 mx-2 p-1" />
                </a>
                <a href="https://www.facebook.com/imagdiagnostico" target="_blank">
                    <Icons name="facebookFooter" class="w-6 mx-2 p-1" />
                </a>
                <a href="https://www.linkedin.com/company/imag-diagnostico" target="_blank">
                    <Icons name="linkedinFooter" class="w-6 mx-2 p-1" />
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import Icons from "@/Pages/Blog/Components/Icons";
import LogotypeWhite from "@/Pages/Blog/Components/LogotypeWhite";
export default {
    name: "Footer",
    components: {
        LogotypeWhite,
        Icons,
    }
}
</script>

<style scoped>
.btnMobile {
    font-size: 14pt;
    font-weight: 300;
    color: #ffffff;
    border-radius: 2rem;
    border: 2px solid #ffffff;
    background-color: var(--primary);
    padding: 4px;
    margin: 4px auto;
    min-width: 10em;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
}
.logotypeWhite {
    max-width: 9em;
    width: 100%;
    height: auto;
    margin: 1em auto;
    padding: 0;
}
</style>
