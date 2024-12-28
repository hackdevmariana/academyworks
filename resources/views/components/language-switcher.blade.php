@php
    $currentLocale = session('locale', config('app.locale')); // Idioma actual
    $languages = [
        'en' => [
            'name' => 'English',
            'flag' => 'https://flagcdn.com/w40/us.png',
        ],
        'es' => [
            'name' => 'Español',
            'flag' => 'https://flagcdn.com/w40/es.png',
        ],
    ];
@endphp

<div class="dropdown">
    <a class="dropdown-toggle" href="#" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ $languages[$currentLocale]['flag'] }}" alt="{{ $languages[$currentLocale]['name'] }}" class="me-2" style="width: 20px; height: 15px;">
        {{ $languages[$currentLocale]['name'] }}
    </a>
    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
        @foreach ($languages as $locale => $language)
            @if ($locale !== $currentLocale) {{-- No mostrar el idioma actual en la lista --}}
                <li>
                    <a class="dropdown-item" href="{{ route('changeLanguage', $locale) }}" style="text-decoration: none;">
                        <img src="{{ $language['flag'] }}" alt="{{ $language['name'] }}" class="me-2" style="width: 20px; height: 15px;">
                        {{ $language['name'] }}
                    </a>
                    
                </li>
            @endif
        @endforeach
    </ul>
</div>
