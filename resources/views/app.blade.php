<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>
        {{ env('APP_NAME') }}
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="/favicon-48x48.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @routes
    @viteReactRefresh
    @vite('resources/js/app.jsx')


</head>

<body>
    <div id="app" data-page='@json($page)'></div>
</body>


</html>
