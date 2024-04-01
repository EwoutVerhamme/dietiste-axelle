<template>

    <Head title="Aanbod" />
    <Layout>
        <div>
            <div class="p-4 max-w-7xl mx-auto">
                <Title title="Mijn specialisaties" />
                <ul>
                    <li>Gezonde voeding</li>
                    <li> Gezonde levensstijl</li>
                    <li> Emotie eten</li>
                    <li> Allergieën en intoleranties</li>
                    <li>Prikkelbare darmen (FODMAP)</li>
                    <li> Intuïtief eten</li>
                </ul>

            </div>

            <div class="w-full bg-primary flex justify-between my-4 px-4 py-4">
                <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-6 md:gap-20 items-center">
                    <div class="md:w-2/3 py-10">
                        <h2 class="font-bold my-4 text-4xl">Traject verpakkingen leren lezen</h2>
                        <p>Wil je meer te weten komen over hoe je de informatie op verpakkingen kan interpreteren?
                            <br />
                            <br />

                            Samen zoomen we tijdens 4 sessies in op de verpakkingen die je kan terug vinden in de
                            supermarkten.
                            Je krijgt er praktische handvaten mee en leert door marktinghypes heen te kijken. Alsof dit
                            alles
                            nog niet genoeg is voorzie ik tijdens de sessies ook heerlijke proevertjes om zo nieuwe
                            smaken
                            te
                            leren kennen. <br /> <br />
                            Heb je een favoriete winkel? Laat deze me dan zeker op voorhand weten! Dan kan ik nog
                            gerichter
                            met
                            je aan de slag gaan.
                        </p>
                    </div>

                    <div class="md:w-1/3">
                        <!-- <img src="https://placehold.co/600x550" alt=""> -->
                    </div>
                </div>
            </div>


            <div class="mt-8 p-4 max-w-7xl mx-auto">
                <Title title="Consultaties" />
                <p>Als diëtist erkend door het RIZIV, kan je bij de meeste ziekteverzekeringen aanspraak maken <br /> op
                    een
                    (gedeeltelijke) terugbetaling na de consultaties.</p>

                <div class="flex gap-8 flex-wrap mt-10">
                    <div v-for="consult in consultTypes"
                        class="bg-white p-4 shadow-[0_0px_20px_rgb(0,0,0,0.2)] rounded-xl w-[23rem] flex flex-col">
                        <p class="text-center font-bold text-xl">{{ consult.title }}</p>
                        <div
                            :class="[consult.types ? 'visible' : 'invisible', 'flex my-4 items-center gap-4 justify-center']">
                            <div :class="[consultType.selected ? 'bg-primary text-white' : '', 'border-2 border-primary px-4 py-1 rounded-xl font-bold cursor-pointer transition-all hover:bg-primary hover:text-white']"
                                @click="consult.types.forEach(element => {
                        element.selected = false
                    }), consultType.selected = true" v-for="consultType in consult.types">
                                <p>{{ consultType.name }}</p>
                            </div>
                        </div>

                        <div class="flex justify-center w-full my-4">
                            <Title :title="consult.price ?? (consult.types.find(item => item.selected)?.price)" />
                        </div>

                        <p class="text-center my-4">{{ consult.subtext }}</p>

                        <a :data-umami-event="consult.umamiTag" href="https://rosa.be/nl/hp/axelle-vercruysse/"
                            target="_blank"
                            class="border-2 rounded-lg text-center border-primary min-w-max font-bold px-6 py-2 hover:bg-primary hover:text-white transition-all">{{
                        consult.button }}</a>


                    </div>
                </div>
            </div>



        </div>
        <div class="mt-8">
            <div class="p-4 max-w-7xl mx-auto">
                <Title title="Werkingsgebied" />
                <p class="my-4">Het aangegeven werkingsgebied is slechts indicatief. <a class="underline font-bold"
                        href="mailto:info@dietisteaxelle.be">Mail me</a> gerust indien je
                    verder
                    woont!</p>
                <div class="h-[30rem] mb-20">
                    <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=1lKE9jS5zbK4LPCZswrwybLuXxYWPBzs&ehbc=2E312F&noprof=1"
                        width="100%" height="100%"></iframe>
                </div>
            </div>



        </div>
    </Layout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import { Title, Layout } from "@Components";
import { reactive } from 'vue';


const consultTypes = reactive([
    {
        title: "Kennismakingsgepsrek",
        types: [{ name: '20 min', price: "Gratis", selected: true }],
        subtext: "Tijdens een gratis kennismakingsgesprek van 20 minuten leren we elkaar betere kennen. We verkennen jouw hulpvraag en mijn werkwijze.",
        button: "Ik wil kennis maken",
        umamiTag: "book-appointment-first-interview"
    },
    {
        title: "Eerste consultatie",
        types: [{ name: 'Online', price: "€70", selected: true }, { name: 'Huisbezoek', price: "€80", selected: false }],
        subtext: "In een eerste gesprek van anderhalf uur leren we elkaar beter kennen. In dit eerste gesprek luister ik graag naar jouw vragen, verwachtingen en behoeften.",
        button: "Eerste consult boeken",
        umamiTag: "book-appointment-first-consult"
    },
    {
        title: "Opvolg consultatie (online)",
        types: [{ name: '30 min', price: "€30", selected: true }, { name: '60 min', price: "€55", selected: false }],
        subtext: "Vanaf het tweede gesprek onderzoeken we samen welke moeilijkheden je de afgelopen weken ondervonden hebt en hoe je hier op de toekomst beter op kan reageren.",
        button: "Opvolg consultatie boeken",
        umamiTag: "book-appointment-follow-up-consult-online"
    },
    {
        title: "Opvolg consultatie (huisbezoek)",
        types: [{ name: '60 min', price: "€65", selected: true }],
        subtext: "Vanaf het tweede gesprek onderzoeken we samen welke moeilijkheden je de afgelopen weken ondervonden hebt en hoe je hier op de toekomst beter op kan reageren.",
        button: "Opvolg consultatie boeken",
        umamiTag: "book-appointment-follow-up-consult-home"
    }

])
</script>