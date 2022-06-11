<template>
    <!--    INSTITUTIONAL-->
    <div class="w-screen mt-4 bg-neutral">
        <div class="lg:max-w-7xl w-11/12 mx-auto">
            <section-title title="Institucional" id="institucional"></section-title>
        </div>
        <!--        ABOUT-->
                <div class="lg:max-w-7xl w-11/12 mx-auto my-2">
                    <p class="text-[1rem] sm:text-[1.3rem] text-primary font-light text-justify leading-relaxed">A IMAG nasceu no ano de
                        <strong>2018</strong>, localizada no estratégico <strong>Vitória Park Shopping</strong>, a partir de uma
                        inquietação: interiorizar a medicina de excelência. Capitaneada pela primeira <strong>Ressonância
                            Magnética</strong> da
                        região de <strong>Vitória de Santo Antão</strong> e cidades circunvizinhas, o cerne do empreendimento
                        foi estruturado no
                        segmento de Diagnóstico por Imagem. No ano de <strong>2021</strong>, em linha com o seu papel
                        institucional estratégico
                        de elevar significativamente o nível da assistência em saúde no interior, de uma forma ainda mais ampla,
                        novos rumos foram trilhados: estabelecimento de uma nova sede – <strong>Carpina</strong> – e um novo
                        segmento de atuação
                        - <strong>Análises Clínicas. Hoje, somos Medicina Diagnóstica.</strong></p>
                </div>
        <!--        IMAGES-->
                <div class="w-full h-auto flex flex-row my-4">
                    <div v-for="(img, index) in imgs" :key="index" class="pic w-full" @click.prevent.stop="() => showImg(index)">
                        <img class="h-64 sm:h-96 w-auto cursor-pointer object-cover hover:scale-105 transition transform duration-300 ease-in-out" :src="typeof img === 'string' ? img : img.src"/>
                    </div>
                    <vue-easy-lightbox
                        :visible="visible"
                        :imgs="imgs"
                        :index="index"
                        @hide="handleHide"
                    ></vue-easy-lightbox>
                </div>
        <!--        ADVANTAGES-->
        <div class="lg:max-w-7xl w-11/12 mx-auto my-6 sm:my-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="list-b"/>
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-[1rem] sm:text-lg">Personalização da jornada como você nunca
                        viu.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="medical-b"/>
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-[1rem] sm:text-lg">Centro de Medicina Diagnóstica mais completo
                        da região.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="team-b"/>
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-[1rem] sm:text-lg">Equipe Médica especializada nacional e
                        internacionalmente.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="pin-b"/>
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-[1rem] sm:text-lg">Localização privilegiada, com segurança,
                        comodidade e conforto.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="conv-b"/>
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-[1rem] sm:text-lg">Amplo portfólio de convênios.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="hour-b"/>
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-[1rem] sm:text-lg">Sempre disponível para você: de domingo a
                        domingo.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="check-b"/>
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-[1rem] sm:text-lg">Melhores prazos de entrega dos
                        resultados.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="online-b"/>
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-[1rem] sm:text-lg">Agendamento e resultados online.</h3>
                </div>
            </div>
        </div>
        <!--        MISSION VISION AND VALUES-->
        <div class="w-full h-auto py-10 bg-gradient-to-r from-primary to-secondary">
            <div class="lg:max-w-7xl w-11/12 mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class=" my-4 flex sm:flex-col lg:flex-row items-center justify-start">
                        <div class="w-40 h-28 sm:w-44 flex flex-col items-center justify-center">
                            <Icons name="target-w" />
                            <h3 class="uppercase tracking-wide text-white font-bold text-2xl">Missão</h3>
                        </div>
                        <div class="w-[2px] h-full bg-white/50 sm:hidden block"></div>
                        <div class="flex items-center w-11/12 sm:w-56 lg:w-64 h-full">
                            <p class="text-white font-light text-justify leading-tight mx-2 ">Prover uma solução em saúde com caráter integral, centrada no cuidado individualizado ao paciente, baseada na excelência de recursos humanos e robustez tecnológica.</p>
                        </div>
                        <div class="w-[2px] h-full bg-white/50 hidden lg:block"></div>
                    </div>
                    <div class=" my-4 flex sm:flex-col lg:flex-row items-center justify-start">
                        <div class="w-40 h-28 sm:w-44 flex flex-col items-center justify-center">
                            <Icons name="graph-w" />
                            <h3 class="uppercase tracking-wide text-white font-bold text-2xl">Visão</h3>
                        </div>
                        <div class="w-[2px] h-full bg-white/50 sm:hidden block"></div>
                        <div class="flex items-center w-11/12 sm:w-56 lg:w-64 h-full">
                            <p class="text-white font-light text-justify leading-tight mx-2 ">Ser uma referência locorregional no segmento da saúde, com ênfase em medicina diagnóstica e preventiva.</p>
                        </div>
                        <div class="w-[2px] h-full bg-white/50 hidden lg:block"></div>
                    </div>
                    <div class=" my-4 flex sm:flex-col lg:flex-row items-center justify-start">
                        <div class="w-40 h-28 sm:w-44 flex flex-col items-center justify-center">
                            <Icons name="star-w" />
                            <h3 class="uppercase tracking-wide text-white font-bold text-2xl">Valores</h3>
                        </div>
                        <div class="w-[2px] h-full bg-white/50 sm:hidden block"></div>
                        <div class="flex items-center w-11/12 sm:w-56 lg:w-64 h-full">
                            <p class="text-white font-light text-justify leading-tight mx-2 ">A jornada do paciente deve ser uma experiência personalista, conduzida por definições médicas assertivas, permeada por um contexto de serenidade na percepção da assistência.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import SectionTitle from "./SectionTitle"
import VueEasyLightbox from "vue-easy-lightbox"
import 'vue-easy-lightbox/dist/external-css/vue-easy-lightbox.css'
import Icons from "./Icons";

export default {
    name: "Institutional",
    props: {
        urlDefault: String,
    },
    components: {
        SectionTitle,
        VueEasyLightbox,
        Icons,
    },
    data() {
        return {
            visible: false,
            index: 0,
            imgs: [
                this.urlDefault + "/institutional/ressonancia-magnetica-min.jpg",
                this.urlDefault + "/institutional/mamografia-min.jpg",
                this.urlDefault + "/institutional/tomografia-computadorizada-min.jpg",
            ],
        }
    },
    methods: {
        showImg(index) {
            this.index = index
            this.visible = true
        },
        handleHide() {
            this.visible = false
        }
    }
}
</script>
