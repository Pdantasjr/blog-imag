<template>
    <div class="hidden sm:block sm:h-auto w-screen mx-auto">
        <swiper
            :slidesPerView="1"
            :loopFillGroupWithBlank="true"
            :grabCursor="true"
            :pagination="{
                clickable: true,
                dynamicBullets: true,
            }"
            :autoplay="{
              delay: 4000,
              disableOnInteraction: false,
            }"
            :navigation="true"
            :modules="modules"
        >
            <swiper-slide>
                <div class="static">
                    <h5 class="absolute top-[30%] left-56 tracking-wide leading-tight text-white uppercase text-5xl font-bold">Todos os cuidados<br> à
                        saúde em um só lugar.<br>
                        <strong class="bg-primary/75 w-auto bg-blend-multiply rounded">Imag e Só.</strong>
                    </h5>
                    <img class="hidden sm:block h-[35rem] w-screen sm:auto object-cover"
                         src="../Images/banners/01-min.jpg" alt="Banner Imag - Medicina Diagnótica">
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="static">
                    <h5 class="absolute top-[30%] left-56 tracking-wide leading-tight text-white uppercase text-5xl font-bold">Todos os cuidados<br> à
                        saúde em um só lugar.<br>
                        <strong class="bg-primary/75 w-auto bg-blend-multiply rounded">Imag e Só.</strong>
                    </h5>
                    <img class="hidden sm:block h-[35rem] w-screen sm:auto object-cover"
                         src="../Images/banners/02-min.jpg" alt="Banner Imag - Medicina Diagnótica">
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="static">
                    <h5 class="absolute top-[30%] left-56 tracking-wide leading-tight text-white uppercase text-5xl font-bold">Todos os cuidados<br> à
                        saúde em um só lugar.<br>
                        <strong class="bg-primary/75 w-auto bg-blend-multiply rounded">Imag e Só.</strong>
                    </h5>
                    <img class="hidden sm:block h-[35rem] w-screen sm:auto object-cover"
                         src="../Images/banners/03-min.jpg" alt="Banner Imag - Medicina Diagnótica">
                </div>
            </swiper-slide>

        </swiper>
    </div>
</template>

<script>
import {Autoplay, Navigation, A11y, Pagination} from 'swiper'
import {Swiper, SwiperSlide} from 'swiper/vue'
import 'swiper/css'
import 'swiper/css/navigation'

export default {
    name: "Carousel",
    components: {
        Swiper,
        SwiperSlide
    },
    data() {
        return {
            modules: [Autoplay, Navigation, A11y, Pagination],
        }
    }
}
</script>

<style scoped>
html {
    scroll-behavior: smooth;
}
</style>
