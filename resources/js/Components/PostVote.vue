<template>
    <div class="w-12 flex flex-col m-2 p-2">
        <UpVoteLink :slug="post.slug" />
        <div class="p-2 my-2 bg-blue-300 rounded-md">{{ post.votes }}</div>
        <DownVoteLink :slug="post.slug" />
    </div>
</template>

<script setup>
import UpVoteLink from "./UpVoteLink.vue";
import DownVoteLink from "./DownVoteLink.vue";

defineProps({
    post: Object,
});
</script>