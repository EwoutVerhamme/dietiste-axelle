<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Diëtiste Axelle Vercruysse biedt professionele begeleiding op maat voor een gezond en evenwichtig voedingspatroon. Wij bieden zowel online consulten als consulten ter plaatse aan.">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

<script defer src="https://umami.ewoutverhamme.be/script.js" data-website-id="07fe02bc-99d6-4ebf-a9ec-a6cdb535a972">
</script>

</html>