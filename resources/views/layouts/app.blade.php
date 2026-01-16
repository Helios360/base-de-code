<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gifts')</title>
</head>
<header>
    <h1>Articles Site</h1>
</header>
<body>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @yield('content')
</body>
</html>