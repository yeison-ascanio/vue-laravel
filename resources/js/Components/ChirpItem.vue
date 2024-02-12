<script setup>
import Dropdown from '@/Components/Dropdown.vue';
import DropdownButton from '@/Components/DropdownButton.vue';
import { ref } from 'vue';

const editing = ref(false)
defineProps({
    chirp: Object
})
</script>
<template>
    <div class="p-6 flex space-x-2">
        <svg class="h-6 w-6 text-gray-600 dark:text-gray-400 -scale-x-100" fill="#ffffff" height="200px" width="200px"
            version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 458 458" xml:space="preserve" stroke="#ffffff">
            <g id="SVGRepo_bgCarrier" stroke-width="1.5"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <g>
                    <g>
                        <path
                            d="M428,41.534H30c-16.569,0-30,13.431-30,30v252c0,16.568,13.432,30,30,30h132.1l43.942,52.243 c5.7,6.777,14.103,10.69,22.959,10.69c8.856,0,17.258-3.912,22.959-10.69l43.942-52.243H428c16.568,0,30-13.432,30-30v-252 C458,54.965,444.568,41.534,428,41.534z M323.916,281.534H82.854c-8.284,0-15-6.716-15-15s6.716-15,15-15h241.062 c8.284,0,15,6.716,15,15S332.2,281.534,323.916,281.534z M67.854,198.755c0-8.284,6.716-15,15-15h185.103c8.284,0,15,6.716,15,15 s-6.716,15-15,15H82.854C74.57,213.755,67.854,207.039,67.854,198.755z M375.146,145.974H82.854c-8.284,0-15-6.716-15-15 s6.716-15,15-15h292.291c8.284,0,15,6.716,15,15C390.146,139.258,383.43,145.974,375.146,145.974z">
                        </path>
                    </g>
                </g>
            </g>
        </svg>
        <div class="flex-1">
            <div class="flex justify-between items-center">
                <div>
                    <span class="text-gray-800 dark:text-gray-200">
                        {{ chirp.user.name }}
                    </span>
                    <small class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                        {{ chirp.created_at }}
                    </small>

                </div>
            </div>
            <textarea v-if="editing"> {{ chirp.message }} </textarea>
            <p v-else class="mt-4 text-lg text-gray-900 dark:text-gray-100">{{ chirp.message }}</p>
        </div>
        <Dropdown>
            <template #trigger>
                <button>
                    <svg class="h-6 w-6 text-gray-600 dark:text-gray-400 -scale-x-100" fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                        xml:space="preserve" stroke="#ffffff">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <path
                                d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z">
                            </path>
                            <path
                                d="M351.938,224C334.266,224,320,238.297,320,255.969S334.266,288,351.938,288C369.672,288,384,273.641,384,255.969 S369.672,224,351.938,224z">
                            </path>
                            <path
                                d="M255.938,224C238.266,224,224,238.297,224,255.969S238.266,288,255.938,288C273.672,288,288,273.641,288,255.969 S273.672,224,255.938,224z">
                            </path>
                            <path
                                d="M160,224c-17.688,0-32,14.297-32,31.969S142.312,288,160,288c17.656,0,32-14.359,32-32.031S177.656,224,160,224z">
                            </path>
                        </g>
                    </g>
                </svg>
            </button>
        </template>
        <template #content>
            <ul>
                <DropdownButton @click="editing = true">Edit</DropdownButton>
                <DropdownButton @click="console.log('eliminar')">Delete</DropdownButton>
            </ul>
        </template>
    </Dropdown>
</div></template>
<style scoped></style>