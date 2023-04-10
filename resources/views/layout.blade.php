<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a class="ask" href="{{ route('home') }}">Demandes</a></li>
                <li><a class="form" href="{{ route('contact') }}">Formulaire</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <ul>
            <li><a href="#">footer1</a></li>
            <li><a href="#">footer2</a></li>
        </ul>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    <div class="space"></div>
</body>
</html>
