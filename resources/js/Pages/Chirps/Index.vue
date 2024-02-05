<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, Link } from '@inertiajs/vue3';
defineProps(["title", "subtitle"])
</script>

<template>
    <Head title="Chirps" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard
                {{ title }}
            </h2>
            
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form>
                            <textarea placeholder="what's on your mind?"
                            class="bg-gray-800 text-white p-2 block w-full rounded-md border-gray-300 p-2 border-2 border-gray-500 focus:border-emerald-500 outline-color:emerald-500 placeholder-gray-500">
                            </textarea>
                            <PrimaryButton>Chirp</PrimaryButton>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
