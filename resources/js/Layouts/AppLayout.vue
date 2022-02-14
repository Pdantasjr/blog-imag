<template>
    <div>
        <Head :title="title"/>
        <jet-banner/>
        <div class="bg-gray-50 min-h-screen w-full">
            <div class="flex flex-col">
                <div class="flex flex-row">
                    <slot></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {defineComponent} from 'vue'
import JetBanner from '@/Jetstream/Banner.vue'
import {Head, Link} from '@inertiajs/inertia-vue3';

export default defineComponent({
    props: {
        title: String,
    },
    components: {
        Head,
        JetBanner,
        Link,
    },
})
</script>
