<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />


</head>
<body>

<ul>
    <li><a href="/">Accueil</a></li>
    <li><a href="/project">Projects</a></li>
    <li><a href="/Recipe">Recettes</a></li>
</ul>

    {{$slot}}
</body>
</html>
