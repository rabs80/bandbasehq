<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'BandBaseHQ') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-background text-grayscale-text font-roboto">

    <main class="min-h-screen py-10 px-4">
        {{ $slot }}
    </main>

</body>
</html>
