<template>
    <div class="w-12 flex flex-col h-full p-2 bg-gray-200 text-center rounded-l-lg">
        <UpVoteLink :slug="post.slug" :class="{'text-gray-400': !(post.postVotes[0] && post.postVotes[0].vote == 1), 'text-blue-600': post.postVotes[0] && post.postVotes[0].vote == 1}" />
        <div class="p-2 my-2 font-bold" :class="{'text-blue-600': post.postVotes[0] && post.postVotes[0].vote == 1, 'text-red-600': post.postVotes[0] && post.postVotes[0].vote == -1}">{{ post.votes }}</div>
        <DownVoteLink :slug="post.slug" :class="{'text-gray-400': !(post.postVotes[0] && post.postVotes[0].vote == -1), 'text-red-600': post.postVotes[0] && post.postVotes[0].vote == -1}" />
    </div>
</template>

<script setup>
import UpVoteLink from "./UpVoteLink.vue";
import DownVoteLink from "./DownVoteLink.vue";

defineProps({
    post: Object,
});
</script>