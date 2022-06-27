<template>
    <div class="lg:max-w-7xl w-11/12 mx-auto">
        <section-title title="Quem Faz a IMAG" id="team"></section-title>
    </div>
    <div class="lg:max-w-7xl w-11/12 mx-auto">
        <div class="flex items-center flex-wrap justify-around mx-auto my-10 max-w-screen-lg w-11/12 md:w-full">
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
                    <Link :href="route('front.member', [member.slug])" class="py-6 mt-2 bg-white shadow-lg rounded-lg border hover:border-primary/50 flex flex-col items-center justify-around transition transform hover:-translate-y-1 duration-300 ease-in-out">
                        <div  class="bg-white rounded-full">
                            <img class="w-44 rounded-full h-44 border hover:border hover:border-primary/50 hover:shadow-lg bg-center object-fit transition transform hover:scale-105 duration-300 ease-in-out" :src="this.urlDefault +'/'+ member.avatar" :alt="'Foto de '+member.name">
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <h3 class="font-black text-primary text-lg pt-2 text-center">{{ member.name }}</h3>
                            <p class="text-gray-400 text-sm font-light text-center">{{ member.office }}</p>
                            <p class="text-gray-400 text-sm font-light text-center">{{ member.crm }}</p>
                        </div>
                    </Link>
                </swiper-slide>

            </swiper>
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
    color: #057541;
}
.swiper-button-next {
    color: #057541;
}
</style>
