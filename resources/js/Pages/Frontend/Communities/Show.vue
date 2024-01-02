<template>
    <guest-layout>
        <h1>Community {{ community.name }} show page</h1>
    </guest-layout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
    community: Object(),
});
</script>