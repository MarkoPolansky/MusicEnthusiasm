<template>
    <Head title="Home" />

    <BreezeAuthenticatedLayout>

        <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

                <!-- component -->
                <!-- component -->
                <div class="py-10 container mx-auto">
                    <div class="w-full p-8 rounded-xl border-2 border-gray-300 sticky bg-white">
                        <!-- component -->
                        <div class="relative ">
                            <form class="flex flex-col justify-center" @submit.prevent="tagSearch" action="">
                                <input type="search" name="serch" placeholder="Search" class="bg-white h-10 px-5 pr-10 rounded-full border-gray-300 text-sm focus:outline-none">

                                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                      <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                    </svg>
                                </button>

                                <div class="flex flex-wrap  items-center gap-2 justify-start mt-4  ">

                                    <div v-for="tag in tags" :key="tag.id"
                                         @click="selectTag(tag.id)"
                                         :class="[                tag.id == 1 ? 'border-red-500 text-red-500 hover:bg-red-500 hover:text-white': '',
                                                                  tag.id == 2 ? 'border-green-500 text-green-500 hover:bg-green-500 hover:text-white': '',
                                                                  tag.id == 3 ? 'border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white ': '',
                                                                  tag.id == 4 ? 'border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-white': '',
                                                                  tag.id == 5 ? 'border-purple-500 text-purple-500 hover:bg-purple-500 hover:text-white': '',
                                                                  tag.id == 6 ? 'border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white': '',
                                                                  tag.id == 7 ? 'border-pink-500 text-pink-500 hover:bg-pink-500 hover:text-white': '',
                                                                  tag.id == 8 ? 'border-red-200 text-red-200 hover:bg-red-200 hover:text-white': '',

                                                                  ]"
                                         class="rounded-full cursor-pointer p-2 text-xs border-2 bg-white  ">

                                        {{ tag.name }}

                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                    <!-- component -->
                    <div class="relative">
                <div class="flex flex-row  items-start justify-center  ">
                    <section class="timeline-section w-full mt-5 position-relative  px-5">
                        <div class="progress-bar"></div>

                        <Link :href="route('event.show',event.id)"
                            v-for="event in filteredEvents" :key="event.id" class="flex flex-col sm:flex-row container-fluid m-0 timeline pt-12 position-relative">
                                <div class="div-img w-full col-12 col-sm-6 col-md-6 col-lg-6 justify-end d-flex sm:px-12 px-4">
                                    <img class="timeline-img " :src="event.images[0] ? event.images[0].image : '#'" />
                                </div>
                            <div class="col col-12 w-full col-sm-6 col-md-6 col-lg-6 sm:px-12 px-6 align-items-center d-flex">

                                <div class="flex-1 ml-4 z-10 font-medium">

                                    <div class="order-1 space-y-2 bg-white rounded-lg shadow-only transition-ease w-full px-6 py-4">
                                        <p class=" p-0 ">{{ event.happened_at }}</p>
                                        <h3 class="mb-3 font-bold  text-2xl">{{event.title}}</h3>
                                        <p class="pb-4 text-sm text-gray-900"> {{shortDescription(event.description)}}</p>
                                        <hr />
                                        <div class="flex flex-wrap  items-center gap-2 justify-start mt-4  ">

                                            <div v-for="tag in event.tags" :key="tag.id"
                                                 @click="tagSearch(tag.id)"
                                                 :class="[tag.id == 1 ? 'border-red-500 text-red-500 hover:bg-red-500 ': '',
                                                                  tag.id == 2 ? 'border-green-500 text-green-500 hover:bg-green-500 ': '',
                                                                  tag.id == 3 ? 'border-blue-500 text-blue-500 hover:bg-blue-500 ': '',
                                                                  tag.id == 4 ? 'border-yellow-500 text-yellow-500 hover:bg-yellow-500 ': '',
                                                                  tag.id == 5 ? 'border-purple-500 text-purple-500 hover:bg-purple-500 ': '',
                                                                  tag.id == 6 ? 'border-orange-500 text-orange-500 hover:bg-orange-500 ': '',
                                                                  tag.id == 7 ? 'border-pink-500 text-pink-500 hover:bg-pink-500 ': '',
                                                                  tag.id == 8 ? 'border-red-200 text-red-200 hover:bg-red-200 ': '',]"
                                                 class="rounded-full cursor-pointer p-2 text-xs border-2 text-white hover:text-white bg-white  ">

                                                {{ tag.name }}

                                            </div>
                                        </div>                                    </div>
                                </div>

<!--                                    <div class="text position-relative pt-12 sm:pt-0">-->
<!--                                           -->
<!--                                            <h3 class="title">{{event.title}}</h3>-->
<!--                                            <p class="description">-->
<!--                                                {{shortDescription(event.description)}}-->
<!--                                            </p>-->
<!--                                            <a href="#" class="open-qr text-dark" >Zobraziť Qr code</a>-->
<!--                                        </div>-->
                            </div>

                        </Link>





                    </section>

                </div>
                </div>
            </div>
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
        events: Object,
        tags: Object,
    },
    data() {
        return {
            selectedTags: []
        }
    },
    computed:{
        filteredEvents(){
            if (this.selectedTags.length == 0) return this.events
            let events = []
            this.events.forEach((e)=>{
                e.tags.forEach((t)=>{
                    if (this.selectedTags.includes(t.id)){
                        events.push(e)
                        return
                    }
                })
            })
            return events
        }
    },

    methods:{
        shortDescription(description){
            if (description.length > 75)
            return description.substring(0,75) + '...'
            else
                return description
        },
        selectTag(tagId){
            if (this.selectedTags.includes(tagId)){
                this.selectedTags.pop(tagId)

            }

            else{
                this.selectedTags.push(tagId)

            }

        },
        scrollAnimation() {
            let revealContainers = document.querySelectorAll(".timeline");

            revealContainers.forEach((container) => {
                let image = container.querySelector("img");
                let title = container.querySelector(".title");
                let texty = container.querySelector(".text");
                let year = container.querySelector(".year");
                let tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: container,
                        toggleActions: "play none none none",
                        start:"100% bottom",
                        markers:false
                    }
                });

                tl.set(container, { autoAlpha: 1 });
                tl.from(container, 1.5, {
                    xPercent: -200,
                    ease: Power2.out
                });
                tl.from(image, 1.5, {
                    xPercent: 200,
                    scale: 1.3,
                    delay: -1.5,
                    ease: Power2.out
                });

            });



            let tl1 = gsap.timeline({
                scrollTrigger: {
                    trigger: ".timeline-section",
                    //toggleActions: "play none none none",
                    start:"start 40%",
                    end:"bottom 40%"
                    ,
                    markers:false,
                    scrub: 1
                }
            });
            tl1.fromTo(".progress-bar",{
                height:"0",
                ease: Power0.easeNone
            },{
                height:"100%",
                ease: Power0.easeNone
            })

        },

    },
    mounted() {
        this.scrollAnimation();
    }
}
</script>

<style scoped>

</style>
