<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('partials.meta')
@include('partials.styles')
</head>
<body>
@include('partials.navbar')

@include('partials.hero')
<div class="container mt-4">
@yield('content')
</div>
@include('partials.carousel-courses')
@include('partials.carousel-events')
@include('partials.recommended-channels')
@include('partials.carousel-quotes')

@include('partials.footer')
@include('partials.scripts')
</body>
</html>