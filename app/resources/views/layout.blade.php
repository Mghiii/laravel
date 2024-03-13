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
    <div>
        <nav>
            <ul>
                <li><a href="{{ route('home.index') }}">home</a></li>
                <li><a href="{{ route('home.about') }}">about</a></li>
                <li><a href="{{ route('home.contact') }}">contact</a></li>
                <li><a href="{{ route('home.portfolio') }}">portfolio</a></li>
            </ul>
        </nav>
        <div>
            @yield('content')
        </div>
    </div>
</body>

</html>
