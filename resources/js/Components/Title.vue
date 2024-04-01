<template>
    <div class="my-4 max-w-max relative">
        <h2 class="text-4xl font-bold z-[990] relative">{{ title }}</h2>
        <hr class="border-2 border-primary h-[1.2rem] z-[989] w-full absolute -bottom-[0.1rem] left-0 bg-primary" />
    </div>
</template>
<script setup>
defineProps(['title']);
</script>