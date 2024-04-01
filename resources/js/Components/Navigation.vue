<template>
    <Disclosure as="nav" class="bg-white shadow md:hidden" v-slot="{ open }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 justify-between">
                <div class="flex">
                    <div class="-ml-2 mr-2 flex items-center md:hidden">
                        <!-- Mobile menu button -->
                        <DisclosureButton
                            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="absolute -inset-0.5" />
                            <span class="sr-only">Open main menu</span>
                            <Bars3Icon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
                            <XMarkIcon v-else class="block h-6 w-6" aria-hidden="true" />
                        </DisclosureButton>
                    </div>

                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <Link v-for="tab in tabs" :key="tab.name" :href="tab.href"
                            :class="[route().current(tab.current) ? 'border-b-primary border-b-[3px] font-semibold' : 'border-b-white border-b-[3px] hover:border-b-primary', 'px-1 text-base font-medium transition-all']"
                            :aria-current="route().current() ? 'page' : undefined">{{ tab.name }}</Link>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a data-umami-event="book-appointment" href="https://rosa.be/nl/hp/axelle-vercruysse/"
                            target="_blank"
                            class="border-2 rounded-lg border-primary min-w-max font-bold px-6 py-2 hover:bg-primary hover:text-white transition-all">Afspraak
                            maken</a>
                    </div>

                </div>
            </div>
        </div>

        <DisclosurePanel class="md:hidden">
            <div class="space-y-1 pb-3 pt-2">
                <Link v-for="tab in tabs" :key="tab.name" :href="tab.href"
                    :class="[route().current(tab.current) ? 'border-l-primary border-l-4 font-semibold' : 'border-b-white border-b-[3px] hover:border-b-primary', 'block py-2 pl-3 pr-4 text-base font-medium text-indigo-700 sm:pl-5 sm:pr-6']"
                    :aria-current="route().current() ? 'page' : undefined">{{ tab.name }}</Link>
            </div>

        </DisclosurePanel>
    </Disclosure>




    <div class="items-center justify-between px-4 sticky top-0 left-0 z-[999] bg-white py-3 shadow-md hidden md:flex">
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
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { Bars3Icon, BellIcon, XMarkIcon } from '@heroicons/vue/24/outline'
import { PlusIcon } from '@heroicons/vue/20/solid'


const tabs = [
    { name: 'Home', href: route('home'), current: 'home' },
    { name: 'Werkwijze', href: route('werkwijze'), current: 'werkwijze' },
    { name: 'Aanbod', href: route('aanbod'), current: 'aanbod' },
    // { name: 'Contact', href: route('contact'), current: 'contact' },
]
</script>
