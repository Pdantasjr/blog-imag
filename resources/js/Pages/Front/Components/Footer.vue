<template>
    <div class="bg-primary w-screen py-3">
        <CTAareas :variant="'footer'"/>
        <!--LOGOTIPO-->
        <div class="w-40 h-auto my-4 mx-auto">
            <LogotypeWhite/>
        </div>
        <!--MOBILE-->
        <div class="flex flex-col items-center md:hidden">
            <h3 class="text-white font-medium tracking-wide flex items-center flex-row">
                <Icons name="pin" class="w-7"/>
                Vitória Park Shopping
            </h3>
            <div class="flex items-center">
                <Link class="flex m-2 text-white font-light" href="tel:8130409999">
                    <Icons name="whatsappFooter" class="w-5 mx-2"/>
                    (81) 3040.9999
                </Link>
                <Link class="flex m-2 text-white font-light"
                      href="https://api.whatsapp.com/send/?phone=558194630900&text=Ol%C3%A1%2C+estou+vindo+do+site%2C+preciso+de+mais+informa%C3%A7%C3%B5es&app_absent=0">
                    <Icons name="phoneFooter" class="w-5 mx-2"/>
                    (81) 9.9463.0900
                </Link>
            </div>
            <div class="flex items-center">
                <Link href="https://www.instagram.com/imagdiagnostico" target="_blank">
                    <Icons name="instagramFooter" class="w-8 m-2"/>
                </Link>
                <Link href="https://www.facebook.com/imagdiagnostico" target="_blank">
                    <Icons name="facebookFooter" class="w-8 m-2"/>
                </Link>
                <Link href="https://www.linkedin.com/company/imag-diagnostico" target="_blank">
                    <Icons name="linkedinFooter" class="w-8 m-2"/>
                </Link>
            </div>
        </div>
    </div>
    <!--DESKTOP-->
    <div class="bg-stone-400 w-screen py-3 hidden md:flex">
        <div class="lg:max-w-7xl w-11/12 flex justify-around mx-auto">
            <!--ENDEREÇO-->
            <div class="flex flex-col">
                <h3 class="text-stone-500 uppercase">Endereço</h3>
                <address>
                    <p class="text-stone-100 font-light leading-tight text-sm py-3">Vitória Park Shopping <br>
                        Avenida Henrique de Holanda, 3000 <br>
                        Lojas 1025 - 1027 / Redenção - <br>
                        Vitória de Santo Antão - PE <br>
                        CEP.: 55612-901
                    </p>
                </address>
                <p class="text-stone-100 font-light text-sm py-3">Responsável Técnico <br> Dr. Pedro Andrade <br> CRM
                    21.798/PE</p>
            </div>
            <!--INSTITUCIONAL-->
            <div class="flex flex-col mx-2">
                <h3 class="text-stone-500 uppercase">Institucional</h3>
                <div class="flex flex-col py-3">
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Missão</Link>
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Visão</Link>
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Valores</Link>
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Equipe Médica</Link>
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Tecnologia</Link>
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Convênios Credenciados</Link>
                </div>
            </div>
            <!--EXAMES-->
            <div class="flex flex-col mx-2">
                <h3 class="text-stone-500 uppercase">Exames</h3>
                <div class="flex flex-col py-3">
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Ressonância Magnética</Link>
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Tomografia Computadorizada</Link>
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Densintometria Óssea</Link>
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Mamografia</Link>
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Ultrassonografia</Link>
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Raio-X</Link>
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Punções e Biópsias</Link>
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Exames Laboratóriais</Link>
                    <Link class="text-stone-100 font-light text-sm hover:underline" href="">Outros Serviços</Link>
                </div>
            </div>
            <!--CONTATO-->
            <div class="flex flex-col items-end">
                <h3 class="text-stone-500 uppercase">Contato</h3>
                <div class="flex flex-col items-end py-3">
                    <Link class="text-stone-100 font-medium hover:underline" href="tel:8130409999">(81) 3040.9999</Link>
                    <Link class="text-stone-100 font-medium hover:underline"
                          href="https://api.whatsapp.com/send/?phone=558194630900&text=Ol%C3%A1%2C+estou+vindo+do+site%2C+preciso+de+mais+informa%C3%A7%C3%B5es&app_absent=0">
                        (81) 9.9463.0900
                    </Link>
                    <Link class="text-stone-100 font-medium hover:underline" href="mailto:atendimento@imagdiagnostico.com.br">
                        atendimento@imagdiagnostico.com.br
                    </Link>
                </div>
                <div class="flex py-3">
                    <Link href="https://www.instagram.com/imagdiagnostico" target="_blank">
                        <icons name="instagramFooter" class="w-10"/>
                    </Link>
                    <Link href="https://www.facebook.com/imagdiagnostico" target="_blank">
                        <icons name="facebookFooter" class="w-10"/>
                    </Link>
                    <Link href="https://www.linkedin.com/company/imag-diagnostico" target="_blank">
                        <icons name="linkedinFooter" class="w-10"/>
                    </Link>
                </div>
            </div>
        </div>
    </div>
    <!--COPY-->
    <div class="bg-stone-500 w-screen py-2 items-center flex justify-center hidden md:flex">
        <p class="text-stone-300 font-light text-xs">© 2022 IMAG - Medicina Diagnóstica - Todos os Direitos Reservados
            | &nbsp; </p>
        <div class="flex">
            <Link class="text-stone-300 font-light text-xs hover:underline" href=""> Política de privacidade</Link>
            <p class="text-stone-300 font-light text-xs"> &nbsp; Desenvolvido por &nbsp; </p>
            <Link class="text-stone-300 font-light text-xs hover:underline" href="https://www.solutionstec.com.br"
                  target="_blank">SolutionsTec
            </Link>
        </div>
    </div>
</template>

<script>
import CTAareas from "./CTAareas";
import {Link} from "@inertiajs/inertia-vue3";
import Icons from "./Icons";
import LogotypeWhite from "./LogotypeWhite";

export default {
    name: "Footer",
    components: {
        Link,
        CTAareas,
        LogotypeWhite,
        Icons,
    }
}
</script>

<style scoped>

</style>
