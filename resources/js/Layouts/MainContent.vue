<template>
        <main class="w-screen space-y-6 flex-1 flex flex-col w-10/12">
            <slot name="header"></slot>
            <slot name="dashboard_content"></slot>
        </main>
</template>

<script>
import {defineComponent} from 'vue'

// import JetDropdown from "@/Jetstream/Dropdown";
// import JetDropdownLink from "@/Jetstream/DropdownLink";

export default defineComponent({
    props: {
        title: String,
    },
    // components: {
    //     JetDropdown,
    //     JetDropdownLink,
    // },
    data() {
        return {
            showingNavigationDropdown: true,
        }
    },
    methods: {
        switchToTeam(team) {
            this.$inertia.put(route('current-staff.update'), {
                'team_id': team.id
            }, {
                preserveState: false
            })
        },

        logout() {
            this.$inertia.post(route('logout'));
        },
    }
})
</script>
