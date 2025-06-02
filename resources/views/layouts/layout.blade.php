<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BandBaseHQ</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-colours-grayscale-950 text-grayscale-text-body font-inter">
    <x-global.header />

    <main class="min-h-screen">
        @yield('content')
    </main>


    <x-global.footer />

</body>
</html>
