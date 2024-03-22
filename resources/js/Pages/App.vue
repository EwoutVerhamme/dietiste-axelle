<template>
    <Navigation />
    <Hero />

    <div class="flex justify-evenly mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32  lg:px-8">
        <div class="w-1/3"> <img src="/assets/img/who-am-i.png" alt="Wie ben ik"
                class="w-11/12 rounded-md shadow-2xl h-full object-contain" />
        </div>
        <div class="w-2/3">
            <div class="my-4 max-w-max relative">
                <h2 class="text-4xl font-bold z-[990] relative">Wie ben ik?</h2>
                <hr
                    class="border-2 border-accent h-[1.2rem] z-[989] w-full absolute -bottom-[0.1rem] left-0 bg-accent" />
            </div>

            <p>Ik heb mijn opleidingen in de gezondheidssector voltooid met een focus op voeding en dieet. In 2019 begon
                ik aan de opleiding
                <span class="font-bold">Voedings- en Dieetkunde</span> aan de HoGent, waar ik in 2022 afstudeerde.
                <br /><br />

                Na mijn afstuderen heb ik mijn kennis uitgebreid door een opleiding tot <span
                    class="font-bold">Intuïtief Eten Coach </span> te volgen
                bijHealthy Habits in 2023. Ook heb ik me gespecialiseerd in
                Kinderdiëtetiek aan
                de <span class="font-bold">Han University</span> in
                datzelfde jaar.<br /><br />

                Momenteel ben ik bezig met een opleiding <span class="font-bold">Toegepaste
                    Gezondheidswetenschappen</span> aan
                Howest Brugge, waar
                ik
                naar verwachting in 2024 zal afstuderen.
            </p>
        </div>
    </div>

    <Footer />
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Navigation from '@/Components/Navigation.vue';
import Hero from '@/Components/Hero.vue';
import Footer from '@/Components/Footer.vue';

</script>
