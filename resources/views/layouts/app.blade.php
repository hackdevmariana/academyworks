<!DOCTYPE html>
<html lang="{{ $metaTags->lang ?? 'en' }}">
<head>
    <title>{{ $metaTags->title ?? 'Default Title' }}</title>
    @include('partials.meta', ['metaTags' => $metaTags])
    @include('partials.styles')
</head>
<body>
    <div class="page-wraper">
        {{-- @include('partials.header') --}}
        @include('partials.navbar')
        @include('partials.hero')
        @include('partials.carousel-courses')
        <main>
            @yield('content')
        </main>
        @include('partials.carousel-events')
        @include('partials.recommended-channels')
        @include('partials.carousel-quotes')
        
        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>
</html>
