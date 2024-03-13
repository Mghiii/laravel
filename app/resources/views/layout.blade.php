<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <ul class="navbar-list">
                <li class="navbar-item"><a href="{{ route('home.index') }}" class="navbar-link">home</a></li>
                <li class="navbar-item"><a href="{{ route('home.about') }}" class="navbar-link">about</a></li>
                <li class="navbar-item"><a href="{{ route('home.contact') }}" class="navbar-link">contact</a></li>
                <li class="navbar-item"><a href="{{ route('home.portfolio') }}" class="navbar-link">portfolio</a></li>
            </ul>
        </nav>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>
