<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .content { border: 1px solid #ccc; padding: 20px; margin-top: 20px; }
    </style>
</head>
<body>
    <header>
        <h1>Laravel Blade Exploration</h1>
        <nav>
            <a href="{{ url('/') }}">Home</a> |
            <a href="{{ url('/explore-blade') }}">Explore Blade</a>
        </nav>
    </header>

    <main class="content">
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} My Laravel App</p>
    </footer>
</body>
</html>
