<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestion des Tâches')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
