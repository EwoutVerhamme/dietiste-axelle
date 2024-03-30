<template>
    <div class="flex items-center justify-between px-4 sticky top-0 left-0 z-[999] bg-white py-3 shadow-md">
        <p class="font-bold text-2xl">Diëtiste Axelle </p>
        <nav class="-mb-px flex items-center space-x-8" aria-label="Tabs">
            <Link v-for="tab in tabs" :key="tab.name" :href="tab.href"
                :class="[route().current(tab.current) ? 'border-b-primary border-b-[3px] font-semibold' : 'border-b-white border-b-[3px] hover:border-b-primary', 'px-1 text-base font-medium transition-all']"
                :aria-current="route().current() ? 'page' : undefined">{{ tab.name }}</Link>
            <a data-umami-event="book-appointment" href="https://rosa.be/nl/hp/axelle-vercruysse/" target="_blank"
                class="border-2 rounded-lg border-primary min-w-max font-bold px-6 py-2 hover:bg-primary hover:text-white transition-all">Afspraak
                maken</a>
        </nav>
    </div>


</template>

<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';


const tabs = [
    { name: 'Home', href: route('home'), current: 'home' },
    { name: 'Werkwijze', href: route('werkwijze'), current: 'werkwijze' },
    { name: 'Aanbod', href: route('aanbod'), current: 'aanbod' },
    { name: 'Contact', href: route('contact'), current: 'contact' },
]
</script>
