<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BandBaseHQ</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-surface-default">
    <x-public.global.header />

    <main class="min-h-screen">
        <section class="max-w-screen-xl mx-auto px-6">
            @yield('content')
        </section>
    </main>

    <x-public.global.footer />
</body>
</html>
