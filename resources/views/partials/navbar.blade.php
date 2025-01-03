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
                                {{ ucfirst(translate($item->title)) }}
                            </a>
                            @if ($item->children->isNotEmpty())
                                <ul class="dropdown-menu">
                                    @foreach ($item->children as $child)
                                        <li>
                                            <a class="dropdown-item" href="{{ $child->url }}">
                                                {{ ucfirst(translate($child->title)) }}
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
                $socialProfiles = \App\Models\SocialProfile::forOwner('me');

            @endphp
            <div class="d-flex social-profiles">
                @if ($mySocialProfiles->isNotEmpty())

                        @foreach ($mySocialProfiles as $profile)
                                <a href="{{ $profile->url }}" target="_blank" title="{{ $profile->text }}" 
                                style="color: {{ $profile->color }};">
                                    <i class="{{ $profile->icon }}" style="font-size: 30px"></i> 
                                </a>

                        @endforeach
                @endif

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
