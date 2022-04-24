<template>
    <Head title="Home" />

    <BreezeAuthenticatedLayout>

        <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

                <!-- component -->
                <!-- component -->
                <div class="py-10 container mx-auto px-5">
                    <!-- component -->
                    <div class="relative">
                        <div class="border-r-4 border-black absolute h-full top-0" style="left: 9px" ></div>
                <div class="flex flex-row gap-x-4  items-start  ">
                    <ul class="list-none m-0 p-0 w-full">
                        <li v-for="event in events" :key="event.id" class="mb-5">
                            <Link :href="route('event.show',event.id)" >
                                    <div class="flex group  justify-end items-center  ">
                                        <div class="bg-gray-800 group-hover:bg-red-700 z-10 rounded-full border-4 border-black  h-5 w-5">
                                            <div class="bg-white h-1 w-6 items-center  ml-4 mt-1"></div>
                                        </div>
                                        <div class="flex-1 ml-4 z-10 font-medium">
                                            <div class="order-1 space-y-2 bg-white rounded-lg shadow-only transition-ease lg:w-full px-6 py-4">
                                                <h3 class="mb-3 font-bold text-2xl">{{ event.title }}</h3>
                                                <p class="pb-4 text-sm text-gray-900"> {{ shortDescription(event.description)}} ( {{event.happened_at}} )</p>
                                                <hr />

                                                <div class="flex flex-wrap  items-center gap-x-2 justify-start mt-4 gap-y-2 md:gap-y-0  ">
                                                    <div v-for="tag in event.tags" :key="tag"
                                                         :class="[tag.id == 1 ? 'border-red-500 text-red-500 hover:bg-red-500 ': '',
                                                                  tag.id == 2 ? 'border-green-500 text-green-500 hover:bg-green-500 ': '',
                                                                  tag.id == 3 ? 'border-blue-500 text-blue-500 hover:bg-blue-500 ': '',
                                                                  tag.id == 4 ? 'border-yellow-500 text-yellow-500 hover:bg-yellow-500 ': '',
                                                                  tag.id == 5 ? 'border-purple-500 text-purple-500 hover:bg-purple-500 ': '',
                                                                  tag.id == 6 ? 'border-orange-500 text-orange-500 hover:bg-orange-500 ': '',
                                                                  tag.id == 7 ? 'border-pink-500 text-pink-500 hover:bg-pink-500 ': '',
                                                                  tag.id == 8 ? 'border-red-200 text-red-200 hover:bg-red-200 ': '',]"
                                                         class="rounded-full p-2 text-xs border-2 text-white hover:text-white bg-white  ">

                                                        {{ tag.name }}

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            </Link>
                        </li>
                    </ul>
                    <div class="w-2/5 p-8 rounded-xl sticky bg-white">
                        <!-- component -->
                        <div class="relative ">
                            <form @submit.prevent="tagSearch" action="">
                                <input type="search" name="serch" placeholder="Search" class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">

                                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                      <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                    </svg>
                                </button>
                                <label class="mt-4" for="tag">Tags #</label>

                                <div class="flex flex-wrap  items-center gap-2 justify-start mt-4  ">

                                    <div v-for="tag in tags" :key="tag.id"
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
                                </div>

                            </form>

                        </div>
                    </div>
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
            form: this.$inertia.form({
                tags:''
            }),
        }
    },
    methods:{
        shortDescription(description){
            if (description.length > 75)
            return description.substring(0,75) + '...'
            else
                return description
        },
        tagSearch(tagId){
            this.form.tags += ',' + tagId
            this.form.get('/',{
                preserveScroll: true,
            })
        }

    },
    mounted() {
        if ("tags" in this.$route.query) {
            this.form.tags = this.$route.query.tags
        }
    }
}
</script>

<style scoped>

</style>
