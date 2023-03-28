<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to hackerank</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    @vite(['resources/js/app.js'])
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>
<body class="antialiased">
<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HACKERANK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('events') ? 'active' : '' }}" href="/events">EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('languages') ? 'active' : '' }}" href="/languages">LANGUAGES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('locations') ? 'active' : '' }}" href="/locations">LOCATIONS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div>@yield('content')</div>
<div>
    @section('advertisement')
        <p>
            score some hacker swag in our store
        </p>
    @show
</div>

<footer class="bg-black text-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2><span>HACKERANK</span></h2>
                <ul class="list-unstyled">
                    <li><a href="#">Nairobi,Kenya</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Column 2</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Column 3</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <p>&copy; 2023 Hackerank. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>
