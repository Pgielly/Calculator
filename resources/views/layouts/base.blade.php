<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Calcutarice</title>
    <link rel="stylesheet" href="@yield('css')">
    <script src="./js/script.js" defer></script>
</head>
<body>
    <header>
        <h1>Ma super Calcultatrice !</h1>
        <p>"Le monde jaillit des calculs de Dieu." - Leibniz</p>
    </header>
    <main class="container flex">
        @yield('content')
    </main>
    <footer>

    </footer>
</body>
</html>