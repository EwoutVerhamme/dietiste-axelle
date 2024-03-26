<template>
    <div class="flex items-center justify-between px-4 sticky top-0 left-0 z-[999] bg-white py-4 shadow-md">
        <p class="font-bold text-2xl">Diëtiste Axelle </p>
        <nav class="-mb-px flex items-center space-x-8" aria-label="Tabs">
            <Link v-for="tab in tabs" :key="tab.name" :href="tab.href"
                :class="[route().current(tab.href) ? 'border-red-500 text-indigo-600' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700', 'whitespace-nowrap  py-4 px-1 text-base font-medium']"
                :aria-current="route().current() ? 'page' : undefined">{{ tab.name }}</Link>
            <a data-umami-event="book-appointment" href="https://rosa.be/nl/hp/axelle-vercruysse/" target="_blank"
                class="border-2 rounded-lg border-accent min-w-max font-bold px-6 py-2 hover:bg-accent hover:text-white transition-all">Afspraak
                maken</a>
        </nav>
    </div>


</template>

<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';


const tabs = [
    // { name: 'Home', href: route('home') },
    // { name: 'Werkwijze', href: route('werkwijze') },
    // { name: 'Diensten', href: route('diensten') },
    // { name: 'Contact', href: route('contact') },
]
</script>
