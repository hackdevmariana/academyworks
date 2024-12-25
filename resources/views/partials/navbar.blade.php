<div class="container">
    <!-- Fila 1 -->
    <div class="row justify-content-between align-items-center py-2">
        <!-- Izquierda -->
        <div class="col-auto">
            @php
                $contact = \App\Models\Contact::where('slug', 'contact-information')->first();
            @endphp
            @if ($contact)
                @if ($contact->url)
                    <a href="{{ $contact->url }}">{{ $contact->text ?? $contact->email }}</a>
                @elseif ($contact->email)
                    <a href="mailto:{{ $contact->email }}">{{ $contact->text ?? $contact->email }}</a>
                @endif
            @endif
        </div>
        <!-- Derecha -->
        <div class="col-auto">
            <x-language-switcher />
            <a href="{{ route('login') }}">{{ ucfirst(translate('login')) }}</a> |
            <a href="{{ route('register') }}">{{ ucfirst(translate('register')) }}</a>
        </div>
    </div>

    <!-- Fila 2 -->
    <div class="row justify-content-between align-items-center py-3">
        <!-- Izquierda -->
        <div class="col-auto d-flex align-items-center">
            @php
                $logo = \App\Models\Logo::where('slug', 'principal-logo')->first();
                $menu = \App\Models\Menu::where('slug', 'main-menu')->with('items.children')->first();
            @endphp
            @if ($logo)
                <a href="{{ $logo->url ?? '#' }}">
                    <img src="{{ $logo->image }}" alt="{{ $logo->name }}" style="max-height: 50px;">
                </a>
            @endif
            @if ($menu)
                <nav class="ms-3">
                    <ul class="navbar-nav">
                        @foreach ($menu->items as $item)
                            <li class="nav-item {{ $item->children->isNotEmpty() ? 'dropdown' : '' }}">
                                <a 
                                    class="nav-link {{ $item->children->isNotEmpty() ? 'dropdown-toggle' : '' }}" 
                                    href="{{ $item->url }}" 
                                    {{ $item->children->isNotEmpty() ? 'data-bs-toggle=dropdown' : '' }}>
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
                $socialProfiles = \App\Models\SocialProfile::all();
            @endphp
            @foreach ($socialProfiles as $profile)
                @php
                    $icons = [
                        'twitter' => 'fab fa-twitter',
                        'instagram' => 'fab fa-instagram',
                        'linkedin' => 'fab fa-linkedin',
                        'youtube' => 'fab fa-youtube',
                    ];
                    $iconClass = $icons[$profile->socialnetwork] ?? 'fas fa-globe';
                @endphp
                <a href="{{ $profile->url }}" target="_blank" class="me-2">
                    <i class="{{ $iconClass }}"></i> {{ translate($profile->text) }}
                </a>
            @endforeach
        </div>
    </div>
</div>
