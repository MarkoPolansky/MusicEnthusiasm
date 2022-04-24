<template>
    <Head title="Home" />

    <BreezeAuthenticatedLayout>
        <div class="w-full flex flex-col items-center content-center">
            <h1 class="text-center w-full text-5xl pt-10">Some Title</h1>
            <p class="text-lg gallery-desc pt-14 px-7 w-full sm:w-[90%] md:w-[70%]">ipsum dolor sit amet, consectetur adipisicing elit, sed do ,tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo

        </div>
        <div class="grid gap-1 grid-flow-row-dense gap-8 grid-cols-1 sm:grid-cols-3 md:grid-cols-4  container-fluid m-0  pt-16 px-12">

            @for ($i = 0; $i < 5; $i++)
            <!--        <div class="col-span-1 m-0 timeline pt-5 position-relative">
                        <img src="{{asset("images/photo.jpg")}}">
                    </div>-->
            <div class="col-span-1 pt-3" >
                <a href="/gallery/28" class="nav-link mx-md-3">
                    <div class="pt-5  zachrana zachrana-gallery">
                        <div class="container-fluid p-0 pb-3 d-flex justify-content-center">
                            <div class="p-4 pt-0 w-full">
                                <img class=" img-fluid m-0 img-gallery w-full " src="#">

                            </div>
                        </div>

                    </div>
                </a>
            </div>
            @endfor
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
