<template>
    <guest-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">r/{{ community.name }}</h2>
            <div class="flex justify-end m-2 p-2">
                <Link v-if="$page.props.auth.auth_check" :href="route('communities.posts.create', community.slug)" class="px-4 py-2 rounded-md font-semibold text-xs text-white uppercase bg-indigo-500 hover:bg-indigo-300">Create Post</Link>
            </div>
        </template>

        <section class="m-2 p-2">
            <PostCard v-for="post in posts.data" :post="post" :community="community.name" :key="post.id" />
        </section>
    </guest-layout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Link } from "@inertiajs/vue3";
import PostCard from "@/Components/PostCard.vue";

defineProps({
    community: Object,
    posts: Object,
});
</script>