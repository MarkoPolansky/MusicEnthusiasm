<template>
    <Head title="Home" />

<BreezeAuthenticatedLayout>
<div class="w-1/3 mx-auto  pt-24">
    <form  @submit.prevent="submit">

        <div>
            <BreezeLabel for="title" value="Title" />
            <BreezeInput id="title" type="text" class="mt-1 block w-full" v-model="form.title" required autofocus autocomplete="title" />
        </div>

        <div class="mt-4">
            <BreezeLabel for="description" value="Description" />
            <BreezeInput id="description" type="text" class="mt-1 block w-full" v-model="form.description" required autocomplete="description" />
        </div>

        <div class="mt-4">
            <BreezeLabel for="happened_at" value="Happened At" />
            <BreezeInput id="happened_at" type="date" class="mt-1 block w-full" v-model="form.happened_at" required autocomplete="happened_at" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Create
            </BreezeButton>
        </div>
    </form>
</div>
</BreezeAuthenticatedLayout>

</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head,Link } from '@inertiajs/inertia-vue3';
import BreezeButton from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
export default {
    components:{
        Head,
        BreezeAuthenticatedLayout,
        Link,
        BreezeButton,
        BreezeGuestLayout,
        BreezeInput,
        BreezeLabel,
        BreezeValidationErrors
    },
    props:{
        event: Object
    },
    data() {
        return {
            form: this.$inertia.form({
                    title: '',
                    description: '',
                    happened_at:''
            }

            )
        }
    },

    methods: {
        submit() {
        this.form.post('/event')
        }
    },
}
</script>

<style scoped>

</style>
