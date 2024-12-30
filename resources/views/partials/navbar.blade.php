<div class="container">
    <!-- Fila 1 -->
    <div class="row justify-content-between align-items-center py-2">
        <!-- Izquierda -->
        <div class="col-auto">
            @php
                $contact = \App\Models\Contact::where('slug', 'contact')->first();
            @endphp
            @if ($contact)
                @if ($contact->url)
                    <a href="{{ $contact->url }}" class="text-decoration-none">{{ ucfirst(translate('contact')) ?? $contact->email }}</a>
                @elseif ($contact->email)
                    <a href="mailto:{{ $contact->email }}" class="text-decoration-none">{{ ucfirst(translate('contact')) ?? $contact->email }}</a>
                @endif
            @endif
        </div>
        <!-- Derecha -->
        <div class="col-auto d-flex align-items-center text-decoration-none">
            <x-language-switcher class="me-3" />
            <a href="{{ route('login') }}" class="me-2 ps-5 text-decoration-none">{{ ucfirst(translate('login')) }}</a>
            <a href="{{ route('register') }}" class="ps-2 text-decoration-none">{{ ucfirst(translate('register')) }}</a>
        </div>
    </div>

    <!-- Fila 2 -->
    <div class="row justify-content-between align-items-center py-3">
        <!-- Izquierda -->
        <div class="col-auto d-flex align-items-center">
            @if ($logo)
                <a href="{{ url('/') }}">
                    <img src="{{ $logo->url ?? $logo->image }}" alt="{{ $logo->name }}" style="max-height: 50px;">
                </a>
            @endif
        
            @if ($menu)
            <nav class="ms-3">
                <ul class="nav">
                    @foreach ($menu->items as $item)
                        <li class="nav-item {{ $item->children->isNotEmpty() ? 'dropdown' : '' }}">
                            <a 
                                class="nav-link {{ $item->children->isNotEmpty() ? 'dropdown-toggle' : '' }}" 
                                href="{{ $item->url ?? '#' }}"
                                {{ $item->children->isNotEmpty() ? 'data-bs-toggle=dropdown aria-expanded=false' : '' }}>
                                {{ translate($item->title) }}
                            </a>
                            @if ($item->children->isNotEmpty())
                                <ul class="dropdown-menu">
                                    @foreach ($item->children as $child)
                                        <li>
                                            <a class="dropdown-item" href="{{ $child->url }}">
                                                {{ translate($child->title) }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </nav>
            
            @endif
        </div>
        
        <!-- Derecha -->
        <div class="col-auto">
            @php
                $socialProfiles = \App\Models\SocialProfile::where('owner_slug', 'me')->get();
            @endphp
            <div class="d-flex">
                @foreach ($socialProfiles as $profile)
                    @php
                        $icons = [
                            'twitter' => 'bi bi-twitter-x',
                            'x' => 'bi bi-twitter-x',
                            'instagram' => 'bi bi-instagram',
                            'linkedin' => 'bi bi-linkedin',
                            'youtube' => 'bi bi-youtube',
                        ];
                        $colors = [
                            'twitter' => '#131313', // Azul de Twitter
                            'x' => '#131313',       // Azul para X (Twitter)
                            'instagram' => '#E1306C', // Rosa de Instagram
                            'linkedin' => '#0077B5', // Azul de LinkedIn
                            'youtube' => '#FF0000',  // Rojo de YouTube
                        ];
                        $iconClass = $icons[$profile->socialnetwork] ?? 'bi bi-globe';
                        $color = $colors[$profile->socialnetwork] ?? 'black';
                    @endphp
                    <a href="{{ $profile->url }}" target="_blank" class="me-2 text-decoration-none" title="{{ $profile->text }}">
                        <i class="{{ $iconClass }}" style="font-size: 1.5rem; color: {{ $color }};"></i>
                    </a>
                @endforeach
            </div>
            

            
        </div>
    </div>
</div>
<!-- CSS personalizado -->
<style>
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }
    .dropdown-menu {
        margin-top: 0; /* Opcional: Ajusta el margen */
    }
</style>
