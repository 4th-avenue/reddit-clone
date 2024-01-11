<template>
    <div class="mt-4 max-w-4xl flex bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="mr-3">
            <PostVote :post="post" />
        </div>
        <div>
            <div class="flex m-2 p-2">
                <span class="font-semibold mr-3">r/{{ community }}</span>
                <div class="flex">Posted by
                    <span class="font-semibold ml-1">{{ post.username }}</span>
                </div>
            </div>
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ post.title }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ post.description }}</p>
            <div class="flex m-2 p-2">
                <p class="mr-4 p-2">Comment(2)</p>
                <Link :href="route('frontend.communities.posts.show', [community, post.slug])" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                </Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import PostVote from "./PostVote.vue";

defineProps({
    post: Object,
    community: String,
});
</script>