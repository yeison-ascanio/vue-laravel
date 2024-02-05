<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import axios from 'axios';
import InputError from '@/Components/InputError.vue';

defineProps(["title", "subtitle"])

const message = ref('')
const errors = ref('')
const processing = ref(false)

function submit() {
    processing.value = true
    axios.post(route('chirps.store'), { message: message.value })
        .then((res) => {
            console.log(res.data);
            message.value = ""
            errors.value = {}
        })
        .catch((err) => {
            if (err.response.status === 422) {
                errors.value = err.response.data.errors
                return
            }
            console.log(err.response.data.message);
        }).finally(() => (processing.value = false))
} 
</script>

<template>
    <Head title="Chirps" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard
                Chirps
            </h2>

        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form @submit.prevent="submit">
                            <textarea placeholder="what's on your mind?" v-model="message"
                                class="bg-gray-800 text-white p-2 block w-full rounded-md border-gray-300 p-2 border-2 border-gray-500 focus:border-emerald-500 outline-color:emerald-500 placeholder-gray-500">
                            </textarea>
                            <InputError :message="errors.message && errors.message[0]" />
                            <PrimaryButton :disable="processing" class="mt-2">
                                {{ processing ? "Enviando..." : "Chirps" }}
                            </PrimaryButton>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
