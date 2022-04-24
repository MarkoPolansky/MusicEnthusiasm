<template>
    <Head title="Home" />

    <BreezeAuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head,Link } from '@inertiajs/inertia-vue3';
export default {
    components:{
        Head,
        BreezeAuthenticatedLayout,
        Link
    },
    props:{
        event: Object
    },
}
</script>

<style scoped>

</style>
