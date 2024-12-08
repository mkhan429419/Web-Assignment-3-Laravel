<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Triathlon PK')</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" type="image/x-icon" href="/images/icon.png" />
    @if (Route::currentRouteName() === 'home')
        @vite(['resources/css/styles.css'])
    @elseif (Route::currentRouteName() === 'about')
        @vite(['resources/css/About.css'])
    @elseif (Route::currentRouteName() === 'services')
        @vite(['resources/css/services.css'])
    @elseif (Route::currentRouteName() === 'contact')
        @vite(['resources/css/Contact.css'])
    @endif
</head>
<body>
    <!-- Header -->
    @include('layouts.navigation')
    <!-- Main Content -->
    <div class="page-container">
        @yield('content')
    </div>
    <!-- Footer -->
    @include('layouts.footer')
    @if (Route::currentRouteName() === 'home')
        @vite(['resources/js/Home.js'])
    @elseif (Route::currentRouteName() === 'services')
        @vite(['resources/js/services.js'])
    @elseif (Route::currentRouteName() === 'contact')
        @vite(['resources/js/Contact.js'])
    @endif
</body>
</html>
