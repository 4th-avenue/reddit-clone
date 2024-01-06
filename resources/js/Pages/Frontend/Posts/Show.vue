<template>
    <guest-layout>
        <section class="flex flex-col md:flex-row m-2 p-2">
            <div class="w-full md:w-8/12">
                <div class="m-2 p-2 bg-white">
                    <h2 class="font-semibold text-2xl text-black">
                        <Link :href="route('frontend.communities.show', community.slug)">
                            r/{{ community.name }}
                        </Link>
                    </h2>
                </div>
                <div class="m-2 p-2 bg-white text-sm text-slate-400">Posted by 
                    <span class="text-slate-700">{{ post.data.username }}</span>
                    <h1 class="font-semibold text-3xl text-black">{{ post.data.title }}</h1>
                    <p class="text-slate-700">{{ post.data.description }}</p>
                    <a :href="post.data.url" class="font-semibold text-blue-500 text-sm hover:text-blue-300">{{ post.data.url }}</a>
                </div>
            </div>
            <div class="w-full md:w-4/12 p-4">
                <div class="m-2 p-2 bg-slate-500 text-white">
                    <h2>Latests Communities</h2>
                </div>
            </div>
        </section>
    </guest-layout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Link } from "@inertiajs/vue3";
import PostCard from "@/Components/PostCard.vue";
import Pagination from "@/Components/Pagination.vue";

defineProps({
    community: Object,
    post: Object,
});
</script>