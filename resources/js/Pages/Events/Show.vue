<template>
    <Head title="Home" />

    <BreezeAuthenticatedLayout>
        <section class="font-sarif">
        <div class="w-full flex flex-col items-center content-center">
            <h1 class="text-center w-full text-5xl pt-10">{{event.title}}</h1>
            <p class="text-lg gallery-desc pt-14 px-7 w-full sm:w-[90%] md:w-[70%]">
                {{event.description}}
            </p>
        </div>
        <div class="grid gap-1 grid-flow-row-dense gap-8 grid-cols-1 sm:grid-cols-3 md:grid-cols-4  container-fluid m-0  pt-16 px-12">


            <!--        <div class="col-span-1 m-0 timeline pt-5 position-relative">
                        <img src="{{asset("images/photo.jpg")}}">
                    </div>-->
            <div v-for="image in event.images" :key="image.id" class="col-span-1 pt-3" >
                <a href="/gallery/28" class="nav-link mx-md-3">
                    <div class="pt-5  zachrana zachrana-gallery">
                        <div class="container-fluid p-0 pb-3 d-flex justify-content-center">
                            <div class="p-4 pt-0 w-full">
                                <img class=" img-fluid m-0 img-gallery w-full " src="https://images.pexels.com/photos/4177708/pexels-photo-4177708.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                            </div>
                        </div>

                    </div>
                </a>
            </div>

        </div>
        </section>
        <div class="vh-100">

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
