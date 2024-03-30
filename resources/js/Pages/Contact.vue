<template>

    <Head title="Contact" />
    <Layout>
        <div class="p-4 max-w-7xl mx-auto">

            <div class="relative isolate bg-white pb-24">
                <div class="mx-auto ">
                    <Title title="Contact" />
                    <p class="mt-2 text-lg leading-8 text-gray-600">Contacteer me gerust bij vragen!</p>
                    <div class="mt-16 flex flex-col gap-16 sm:gap-y-20 lg:flex-row">
                        <form action="#" method="POST" class="lg:flex-auto">
                            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                <div>
                                    <label for="first-name"
                                        class="block text-sm font-semibold leading-6 text-gray-900">Naam</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-2 ring-inset ring-primary/70 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6" />
                                    </div>
                                </div>
                                <div>
                                    <label for="budget"
                                        class="block text-sm font-semibold leading-6 text-gray-900">E-mailadres</label>
                                    <div class="mt-2.5">
                                        <input id="budget" name="budget" type="email"
                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-2 ring-inset ring-primary/70 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary  sm:text-sm sm:leading-6" />
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Je
                                        bericht</label>
                                    <div class="mt-2.5">
                                        <textarea id="message" name="message" rows="4"
                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-2 ring-inset ring-primary/70 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary  sm:text-sm sm:leading-6" />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10">
                                <button type="submit"
                                    class="block rounded-lg border-primary border-2 hover:bg-primary hover:text-white  px-4 py-2 text-center  font-semibold shadow-sm transition-all">Bericht
                                    versturen</button>
                            </div>
                        </form>
                        <div class="lg:mt-6 lg:w-80 lg:flex-none">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import { Title, Layout } from "@Components";
</script>