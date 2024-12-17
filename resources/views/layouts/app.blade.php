<!DOCTYPE html>
<html lang="{{ $metaTags->lang ?? 'en' }}">
<head>
    <title>{{ $metaTags->title ?? 'Default Title' }}</title>
    @include('partials.meta', ['metaTags' => $metaTags])
    @include('partials.styles')
</head>
<body>
    <div class="page-wraper">
        <x-language-switcher />
        @include('partials.header')
        
        <main>
            @yield('content')
        </main>
        
        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>
</html>
