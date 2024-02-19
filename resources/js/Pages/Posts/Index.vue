<template>

    <AppLayout> 
        <Container>
         <ul class="divide-y">
             <li v-for="post in posts.data" :key="post.id" class="">
                 <Link :href="route('posts.show', post.id)" class="block group px-2 py-4">
                 <span class="font-bold text-lg group-hover:text-indigo-500"> {{ post.title }}</span> 
                 <span class="block pt-1 text-sm text-gray-600">about {{ formattedDate(post) }} ago by {{ post.user.name }}</span>
                </Link>
             </li>
         </ul>

         <Pagination :meta="posts.meta" />
        </Container>
</AppLayout>

</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'; // Adjust the path as necessary
import Container from '@/Components/Container.vue';
import Pagination from '@/Components/Pagination.vue';
import {Link} from "@inertiajs/vue3";
import {computed} from "vue";
import {formatDistance, parseISO} from "date-fns";
import { relativeDate } from '@/Utilities/date.js';

// Define the props with their types
const props = defineProps({
    posts: Array
});

const formattedDate = (post) =>  relativeDate(post.created_at); 
</script>

<style>

</style>
