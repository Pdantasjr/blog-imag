<template>
    <div class="bg-primary w-screen py-3">
        <!---->
        <div class="flex justify-around items-center h-auto mx-auto flex-wrap">
            <a class="btnMobile w-1/4 py-1 sm:py-2" href="#">
                <Icons name="mobilePacient" class="w-8" />
                Área do Paciente
            </a>
            <a class="btnMobile w-1/4 py-1 sm:py-2" href="#">
                <Icons name="mobileMedic" class="w-8" />
                Área do Médico
            </a>
        </div>
        <div class="logotypeWhite">
            <LogotypeWhite />
        </div>
        <div class="flex flex-col items-center md:hidden">
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
    <!--Cinza-->
    <div class="bg-gray-500 w-screen py-3 hidden md:flex">
        <div class="flex justify-around mx-auto">
            <div class="flex flex-col">
                <h3 class="text-background uppercase">Endereço</h3>
                <address>
                    <p class="text-background font-light text-sm py-3">Vitória Park Shopping <br>
                        Avenida Henrique de Holanda, 3000 <br>
                        Lojas 1025 - 1027 / Redenção - <br>
                        Vitória de Santo Antão - PE <br>
                        CEP.: 55612-901
                    </p>
                </address>
                <p class="text-background font-light text-sm py-3">Responsável Técnico <br> Dr. Pedro Andrade <br> CRM 21.798/PE</p>
            </div>
            <div class="flex flex-col mx-2">
                <h3 class="text-background uppercase">Institucional</h3>
                <div class="flex flex-col py-3">
                    <a class="text-background font-medium text-sm" href="">Missão</a>
                    <a class="text-background font-medium text-sm" href="">Visão</a>
                    <a class="text-background font-medium text-sm" href="">Valores</a>
                    <a class="text-background font-medium text-sm" href="">Equipe Médica</a>
                    <a class="text-background font-medium text-sm" href="">Tecnologia</a>
                    <a class="text-background font-medium text-sm" href="">Convênios Credenciados</a>
                </div>
            </div>
            <div class="flex flex-col mx-2">
                <h3 class="text-background uppercase">Exames</h3>
                <div class="flex flex-col py-3">
                    <a class="text-background font-medium text-sm" href="">Ressonância Magnética</a>
                    <a class="text-background font-medium text-sm" href="">Tomografia Computadorizada</a>
                    <a class="text-background font-medium text-sm" href="">Densintometria Óssea</a>
                    <a class="text-background font-medium text-sm" href="">Mamografia</a>
                    <a class="text-background font-medium text-sm" href="">Ultrassonografia</a>
                    <a class="text-background font-medium text-sm" href="">Raio-X</a>
                    <a class="text-background font-medium text-sm" href="">Punções e Biópsias</a>
                    <a class="text-background font-medium text-sm" href="">Exames Laboratóriais</a>
                    <a class="text-background font-medium text-sm" href="">Outros Serviços</a>
                </div>
            </div>
            <div class="flex flex-col items-end">
                <h3 class="text-background uppercase">Contato</h3>
                <div class="flex flex-col items-end py-3">
                    <a class="text-background font-medium" href="tel:8130409999">(81) 3040.9999</a>
                    <a class="text-background font-medium" href="https://api.whatsapp.com/send/?phone=558194630900&text=Ol%C3%A1%2C+estou+vindo+do+site%2C+preciso+de+mais+informa%C3%A7%C3%B5es&app_absent=0">(81) 9.9463.0900</a>
                    <a class="text-background font-medium" href="mailto:atendimento@imagdiagnostico.com.br">atendimento@imagdiagnostico.com.br</a>
                </div>
                <div class="flex py-3">
                    <a href="https://www.instagram.com/imagdiagnostico" target="_blank">
                        <icons name="instagramFooter" class="w-10" />
                    </a>
                    <a href="https://www.facebook.com/imagdiagnostico" target="_blank">
                        <icons name="facebookFooter" class="w-10" />
                    </a>
                    <a href="https://www.linkedin.com/company/imag-diagnostico" target="_blank">
                        <icons name="linkedinFooter" class="w-10" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--/Cinza-->
    <!--Copy-->
    <div class="bg-gray-600 w-screen py-2 items-center flex justify-center hidden md:flex">
        <p class="text-background font-light text-xs">© 2022 IMAG - Medicina Diagnóstica - Todos os Direitos Reservados | &nbsp; </p>
        <div class="flex">
            <a class="text-background font-light text-xs underline" href=""> Política de privacidade </a> <p class="text-background font-light text-xs"> &nbsp;  Desenvolvido por  &nbsp; </p> <a class="text-background font-light text-xs underline" href="https://www.solutionstec.com.br" target="_blank">SolutionsTec</a>
        </div>
    </div>
    <!--/Copy-->
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
