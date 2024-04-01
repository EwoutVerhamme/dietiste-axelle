<template>
    <div class="flex flex-col h-screen min-h-screen">
        <Navigation />
        <div class="grow">
            <slot></slot>
        </div>
        <Footer />
    </div>

</template>
<script setup>
import { Navigation, Footer } from "@Components";
</script>