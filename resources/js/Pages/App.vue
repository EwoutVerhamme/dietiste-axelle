<template>

    <Head title="Welkom" />
    <Navigation />
    <Hero />

    <div
        class="flex md:flex-row gap-4 flex-col-reverse justify-evenly mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32  lg:px-8">
        <div class="md:w-1/3 mt-4">

            <picture>
                <source srcset="/assets/img/who-am-i/who-am-i.webp" type="image/webp">
                <img src="/assets/img/who-am-i/who-am-i.png" alt="Axelle Vercruysse" style="width:auto;"
                    class="w-11/12 rounded-m object-contain">
            </picture>
        </div>
        <div class="md:w-2/3">
            <div class="my-4 max-w-max relative">
                <h2 class="text-4xl font-bold z-[990] relative">Wie ben ik?</h2>
                <hr
                    class="border-2 border-primary h-[1.2rem] z-[989] w-full absolute -bottom-[0.1rem] left-0 bg-primary" />
            </div>

            <p>In 2022 studeerde ik af als erkend diëtiste na de opleiding <span class="font-bold">Voedings- en
                    Dieetkundige</span> aan de HoGent.
                <br /><br />

                Na mijn afstuderen heb ik mijn kennis uitgebreid door een opleiding tot <span
                    class="font-bold">Intuïtief Eten Coach </span> te volgen
                bij Healthy Habits in 2023. Ook heb ik me gespecialiseerd in
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
import { Head } from '@inertiajs/vue3';
import { Hero, Navigation, Footer } from "@Components";


</script>
