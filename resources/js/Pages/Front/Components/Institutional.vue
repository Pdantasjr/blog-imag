<template>
<!--    INSTITUTIONAL-->
    <div class="w-screen mt-4 bg-neutral">
        <div class="lg:max-w-7xl w-11/12 mx-auto">
            <section-title title="Institucional"></section-title>
        </div>
<!--        ABOUT-->
<!--        <div class="lg:max-w-7xl w-11/12 mx-auto my-2">-->
<!--            <p class="text-[1.3rem] text-primary font-light text-justify leading-relaxed">A IMAG nasceu no ano de-->
<!--                <strong>2018</strong>, localizada no estratégico <strong>Vitória Park Shopping</strong>, a partir de uma-->
<!--                inquietação: interiorizar a medicina de excelência. Capitaneada pela primeira <strong>Ressonância-->
<!--                    Magnética</strong> da-->
<!--                região de <strong>Vitória de Santo Antão</strong> e cidades circunvizinhas, o cerne do empreendimento-->
<!--                foi estruturado no-->
<!--                segmento de Diagnóstico por Imagem. No ano de <strong>2021</strong>, em linha com o seu papel-->
<!--                institucional estratégico-->
<!--                de elevar significativamente o nível da assistência em saúde no interior, de uma forma ainda mais ampla,-->
<!--                novos rumos foram trilhados: estabelecimento de uma nova sede – <strong>Carpina</strong> – e um novo-->
<!--                segmento de atuação-->
<!--                - <strong>Análises Clínicas. Hoje, somos Medicina Diagnóstica.</strong></p>-->
<!--        </div>-->
<!--        IMAGES-->
        <div class="w-full h-auto flex flex-row my-4">
            <div v-for="(img, index) in imgs" :key="index" class="pic w-full" @click.prevent.stop="() => showImg(index)">
                <img class="h-96 w-auto cursor-pointer object-cover" :src="typeof img === 'string' ? img : img.src"/>
            </div>
            <vue-easy-lightbox
                :visible="visible"
                :imgs="imgs"
                :index="index"
                @hide="handleHide"
            ></vue-easy-lightbox>
        </div>
<!--        ADVANTAGES-->
        <div class="lg:max-w-7xl w-11/12 mx-auto my-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="list-b" />
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-lg">Personalização da jornada como você nunca viu.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="medical-b" />
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-lg">Centro de Medicina Diagnóstica mais completo da região.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="team-b" />
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-lg">Equipe Médica especializada nacional e internacionalmente.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="pin-b" />
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-lg">Localização privilegiada, com segurança, comodidade e conforto.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="conv-b" />
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-lg">Amplo portfólio de convênios.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="hour-b" />
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-lg">Sempre disponível para você: de domingo a domingo.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="check-b" />
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-lg">Melhores prazos de entrega dos resultados.</h3>
                </div>
                <div class="flex flex-row flex-initial items-center">
                    <div>
                        <Icons name="online-b" />
                    </div>
                    <h3 class="mx-4 flex-1 text-primary font-light text-lg">Agendamento e resultados online.</h3>
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
