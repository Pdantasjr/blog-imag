<template>
    <div id="staff" class="lg:max-w-7xl w-full mx-auto">
        <section-title title="Quem Faz a IMAG" id="team"></section-title>
    </div>
    <div class="lg:max-w-7xl w-full mx-auto">
        <div v-if="staff.length" class="flex items-center flex-wrap justify-around mx-auto my-10 w-10/12">
            <swiper
                :slidesPerView="3"
                :loopFillGroupWithBlank="true"
                :spaceBetween="20"
                :grabCursor="true"
                :pagination="{
                            clickable: true,
                        }"
                :autoplay="{
                            delay: 4000,
                            disableOnInteraction: false,
                        }"
                :navigation="true"
                :modules="modules"
                :breakpoints="{
                            '@0.00': {
                                slidesPerView: 1,
                                spaceBetween: 10,
                            },
                            '@0.75': {
                                slidesPerView: 2,
                                spaceBetween: 20,
                            },
                            '@1.00': {
                                slidesPerView: 3,
                                spaceBetween: 10,
                            },
                            '@1.50': {
                                slidesPerView: 4,
                                spaceBetween: 50,
                            },
                        }"
            >

                <swiper-slide v-for="member in this.staff">
                    <Link :href="route('front.member', [member.slug])" class="w-auto py-6 mt-2 bg-white shadow-lg rounded-lg border hover:border-primary/50 flex flex-col items-center justify-around transition transform hover:-translate-y-1 duration-300 ease-in-out">
                        <div class="rounded-full">
                            <div class="w-44 rounded-full h-44 hover:border hover:shadow-lg bg-cover bg-top transition-all transform hover:-translate-y-2 duration-200 ease-in-out" :style="{'background-image':'url('+this.urlDefault +'/'+ member.avatar+')'}" ></div>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <h1 class="font-black text-primary text-lg pt-2 text-center">{{ member.name }}</h1>
                            <p class="text-gray-600 text-sm font-light text-center">{{ member.office }}</p>
                            <p class="text-gray-600 text-sm font-light text-center">CRM: {{ member.crm }}</p>
                        </div>
                    </Link>
                </swiper-slide>
            </swiper>
        </div>
        <div v-else>
            <p class="text-primary/50 p-4 text-center border border-primary rounded">Logo você conhecerá nosso, time. Estamos cadastrando.</p>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import SectionTitle from "./SectionTitle";

// import Swiper core and required modules
import {Navigation, A11y, Pagination, Autoplay} from 'swiper'

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue'

// Import Swiper styles
import 'swiper/css'
import 'swiper/css/navigation'

export default {
    name: "Staff",
    props: {
        staff: Object,
        urlDefault: String,
    },
    components: {
        Link,
        SectionTitle,
        Swiper,
        SwiperSlide,
    },
    data () {
        return {
            modules: [Autoplay, Navigation, A11y, Pagination],
        };
    }
}
</script>

<style scoped>
.swiper-button-prev {
    color: #214654;
}
.swiper-button-next {
    color: #214654;
}
</style>
