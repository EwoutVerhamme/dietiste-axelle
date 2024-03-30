<template>

    <Head title="Aanbod" />
    <Layout>
        <div class="p-4">
            <div>
                <Title title="Mijn specialisaties" />
            </div>

            <div>
                dqd
            </div>


            <div>
                <Title title="Consultaties" />
                <p>Als diëtist erkend door het RIZIV, kan je bij de meeste ziekteverzekeringen aanspraak maken op een
                    (gedeeltelijke) terugbetaling na de consultaties.</p>

                <div class="flex gap-12 flex-wrap mt-10 ">
                    <div v-for="consult in consultTypes"
                        class="bg-white p-4 shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-xl w-[25rem] flex flex-col">
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

                        <a data-umami-event="book-appointment" href="https://rosa.be/nl/hp/axelle-vercruysse/"
                            target="_blank"
                            class="border-2 rounded-lg text-center border-primary min-w-max font-bold px-6 py-2 hover:bg-primary hover:text-white transition-all">{{
                        consult.button }}</a>


                    </div>
                </div>
            </div>



        </div>
        <div>
            <div class="p-4">
                <Title title="Werkingsgebied" />
                <p>Het aangegeven werkingsgebied is slechts indicatief. </p>
            </div>


            <div class="w-screen h-96">
                <iframe
                    src="https://www.google.com/maps/d/u/0/embed?mid=1lKE9jS5zbK4LPCZswrwybLuXxYWPBzs&ehbc=2E312F&noprof=1"
                    width="100%" height="100%"></iframe>
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
        button: "Ik wil kennis maken"
    },
    {
        title: "Eerste consultatie",
        types: [{ name: 'Online', price: "€70", selected: true }, { name: 'Huisbezoek', price: "€80", selected: false }],
        subtext: "Tijdens een gratis kennismakingsgesprek van 20 minuten leren we elkaar betere kennen. We verkennen jouw hulpvraag en mijn werkwijze.",
        button: "Eerste consult boeken"
    },
    {
        title: "Opvolg consultatie (online)",
        types: [{ name: '30 min', price: "€30", selected: true }, { name: '60 min', price: "€50", selected: false }],
        subtext: "Tijdens een gratis kennismakingsgesprek van 20 minuten leren we elkaar betere kennen. We verkennen jouw hulpvraag en mijn werkwijze.",
        button: "Opvolg consultatie boeken"
    },
    {
        title: "Opvolg consultatie (huisbezoek)",
        types: [{ name: '60 min', price: "€30", selected: true }],
        subtext: "Tijdens een gratis kennismakingsgesprek van 20 minuten leren we elkaar betere kennen. We verkennen jouw hulpvraag en mijn werkwijze.",
        button: "Opvolg consultatie boeken"
    }

])
</script>