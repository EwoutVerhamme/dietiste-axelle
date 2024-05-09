<template>

    <Head title="Werkwijze" />
    <Layout>
        <div class="p-4 mx-auto flex-col max-w-7xl flex gap-10">
            <div class="flex flex-col md:flex-row gap-10">
                <div class="md:w-2/3">
                    <Title title="Werkwijze" />
                    <p class="w-full">Strenge diëten of rigide regels behoren niet tot mijn aanpak. In plaats daarvan
                        streef ik naar
                        een
                        <span class="font-bold"> gewichtsneutrale aanpak</span>, waarbij jouw welzijn centraal staat.
                        <br />
                        <br />

                        Ik help jou help jou graag bij het bereiken van jouw gezondheidsdoelen, je opnieuw te laten
                        <span class="font-bold">genieten</span>
                        van
                        het leven en je <span class="font-bold">goed te laten voelen in jouw lichaam.</span> Ik geloof
                        in het
                        aanleren van een gezonde,
                        maar
                        vooral <span class="font-bold">duurzame levensstijl</span> waarbij geluk en gezondheid hand in
                        hand
                        gaan.<br /> <br />

                        Laten we samen werken aan een evenwichtige en stralende toekomst!
                    </p>
                </div>

                <div class="md:w-1/3 w-full">
                    <!-- <img src="https://placehold.co/600x550" alt=""> -->
                </div>
            </div>



            <nav aria-label="Progress">
                <ol role="list"
                    class="divide-y divide-gray-300 rounded-md border border-gray-300 md:flex md:divide-y-0">
                    <li v-for="(step, stepIdx) in steps" :key="step.name" class="relative md:flex md:flex-1">
                        <div class="p-4">
                            <p class="group flex items-center">
                                <span class="flex items-center  text-sm font-medium">
                                    <span
                                        class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-gray-300 group-hover:border-gray-400">
                                        <span class="text-gray-500 group-hover:text-gray-900">{{ step.id }}</span>
                                    </span>
                                    <span class="ml-4 font-bold text-gray-500 group-hover:text-gray-900">{{
                        step.name }}</span>
                                </span>
                            </p>
                            <p class="mt-4">{{ step.description }}</p>
                        </div>

                        <template v-if="stepIdx !== steps.length - 1">
                            <!-- Arrow separator for lg screens and up -->
                            <div class="absolute right-0 top-0 hidden h-full w-5 md:block" aria-hidden="true">
                                <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none"
                                    preserveAspectRatio="none">
                                    <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </template>
                    </li>
                </ol>
            </nav>
        </div>
    </Layout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import { Title, Layout } from "@Components";

const steps = [
    { id: '01', name: 'Intake gesprek', description: "Ontdek jouw persoonlijke route naar gezondheid met ons intakegesprek. Ik leer jou graag kennen en we stellen samen een haalbaar actieplan op.", href: '#', },
    { id: '02', name: 'Opvolgconsultatie', description: "Optimaliseer jouw gezondheid met een opvolgconsultatie. We sturen bij waar nodig, zodat je jouw doelen kunt blijven nastreven.", href: '#', },
    { id: '03', name: 'Hulp bieden zolang je er zelf nood aan hebt', description: "Je staat er niet alleen voor. Ik bied jou de nodige ondersteuning zolang je het nodig hebt, op jouw weg naar een gezonder en gelukkiger leven.", href: '#', },
]
</script>
