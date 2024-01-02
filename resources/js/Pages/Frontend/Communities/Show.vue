<template>
    <guest-layout>
        <div class="flex justify-end m-2 p-2">
            <Link v-if="$page.props.auth.auth_check" href="" class="px-4 py-2 rounded-md bg-indigo-500">Create Post</Link>
        </div>
        <h1>Community {{ community.name }} show page</h1>
    </guest-layout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    community: Object(),
});
</script>