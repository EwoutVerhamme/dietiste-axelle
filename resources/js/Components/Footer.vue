<template>
    <footer class="bg-accent" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="mx-auto max-w-7xl px-6 pb-4 pt-16 sm:pt-12 lg:px-8 lg:pt-12">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div>
                    <p class="font-bold text-2xl">Diëtiste Axelle </p>
                    <p class="text-sm leading-6 text-gray-300">Gewichtsneutrale benadering met jouw
                        gezondheid als prioriteit.</p>
                    <div class="flex space-x-6">
                        <a v-for="item in navigation.social" :key="item.name" :href="item.href"
                            class="text-gray-500 hover:text-gray-400">
                            <span class="sr-only">{{ item.name }}</span>
                            <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                        </a>
                    </div>
                </div>
                <div class="mt-8 grid grid-cols-3 gap-8 xl:col-span-2 xl:mt-0">
                    <div>

                        <ul role="list" class="mt-6 space-y-3">
                            <li v-for="item in navigation.solutions" :key="item.name">
                                <a :href="item.href"
                                    class="text-sm leading-6 text-gray-300 hover:text-white transition-all">{{
                            item.name }}</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <ul role="list" class="mt-6 space-y-3">
                            <li>
                                <a href="tel:+32478018703"
                                    class="text-sm leading-6 text-gray-300 hover:text-white transition-all">+32
                                    478 01
                                    87 03</a>
                            </li>
                            <li><a href="mailto:info@dietistaxelle.be"
                                    class="text-sm leading-6 text-gray-300 hover:text-white transition-all">info@dietistaxelle.be</a>
                            </li>
                            <li>
                                <p class="text-sm leading-6 text-gray-300 hover:text-white transition-all">Riziv:
                                    5-63946-12-601.</p>
                            </li>
                            <li>
                                <p class="text-sm leading-6 text-gray-300 hover:text-white transition-all">
                                    BE0795.127.113</p>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <div class="my-4">
                            <h3 class="mb-4 font-bold text-base">Kennismakingsgesprek</h3>
                            <a href="https://rosa.be/nl/booking/hp/axelle-vercruysse/availability/?site=65f20a8e957e9b028c34603f&is-new-patient=true&motive=65fddb640f2cbe72d03b66fc"
                                target="_blank"
                                class="border-2 rounded-lg border-black font-bold px-8 py-2 text-lg hover:bg-accent transition-all">Ik
                                wil kennis maken!</a>
                        </div>
                        <div>
                            <ul class="flex items-center gap-4 mt-12">
                                <li><a href="https://www.facebook.com/profile.php?id=100089505335702"
                                        target="_blank"><img class="size-8" src="/assets/img/socials/facebook.svg"
                                            alt="Facebook logo" /></a></li>
                                <li><a href="https://www.instagram.com/dietiste_axelle_?igsh=MWR0bGl1NTk1N2xlNA%3D%3D&utm_source=qr"
                                        target="_blank"><img class="size-8" src="/assets/img/socials/instagram.svg"
                                            alt="Instagram logo" /></a></li>
                                <li><a href="https://www.linkedin.com/in/axelle-vercruysse-29a06b235/"
                                        target="_blank"><img class="size-8" src="/assets/img/socials/linkedin.svg"
                                            alt="Linkedin logo" /></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <p class="mt-10 text-xs text-center leading-5 text-gray-400">&copy; 2024 Diëtiste Axelle</p>
        </div>
    </footer>
</template>
<script setup>
const navigation = {
    solutions: [
        { name: 'Home', href: '#' },
        { name: 'Werkwijze', href: '#' },
        { name: 'Diensten', href: '#' },
        { name: 'Contact', href: '#' },
        { name: 'Afspraak maken', href: '#' },
    ],

    contact: [
        { name: '+32 478 01 87 03', href: '#' },
        { name: 'info@dietistaxelle.be', href: '#' },
        { name: 'Riziv: 5-63946-12-601.', href: '#' },
        { name: 'BE0795.127.113', href: '#' },
    ],


}</script>