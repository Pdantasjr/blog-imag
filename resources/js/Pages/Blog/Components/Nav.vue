<template>
    <nav>
        <ul class="md:flex space-x-4 hidden z-20">
            <li><a class="relative font-light text-primary py-10 links_a" href="#" data-linkAnimate>Home</a></li>
            <li><a class="relative font-light text-primary py-10 links_a" href="#" data-linkAnimate>Nossos Exames</a></li>
            <li><a class="relative font-light text-primary py-10 links_a" href="#" data-linkAnimate>Institucional</a></li>
            <li><a class="relative font-light text-primary py-10 links_a" href="#" data-linkAnimate>Convênios</a></li>
            <li><a class="relative font-light text-primary py-10 links_a" href="#" data-linkAnimate>Equipe Médica</a></li>
            <li><a class="relative font-light text-primary py-10 links_a" href="#" data-linkAnimate>Blog</a></li>
        </ul>
    </nav>
</template>

<script>

import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Nav",
    components: {
        Link,
    }
}
</script>

<style scoped>

.links_a:before {
    content: "";
    position: absolute;
    bottom: 0;
    height: 6px;
    width: 10px;
    left: calc(100% + 20px);
    opacity: 0;
    background-color: #214654;
    z-index: 2;
    display: block;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    -webkit-transition-timing-function: cubic-bezier(0.58, 0.3, 0.005, 1);
    -o-transition-timing-function: cubic-bezier(0.58, 0.3, 0.005, 1);
    transition-timing-function: cubic-bezier(0.58, 0.3, 0.005, 1);
}
.links_a:hover:before {
    width: 100%;
    left: 0;
    opacity: 1;
}

</style>
