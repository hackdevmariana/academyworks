@php
    use App\Models\Translation;
    use App\Models\RecommendedChannel;

    // Obtener el idioma del usuario
    $locale = app()->getLocale();

    // Obtener el encabezado traducido
    $header = Translation::where('key', 'recommended-channels')
                         ->where('locale', $locale)
                         ->value('value') ?? 'Recommended Channels';

    // Obtener los canales recomendados activos para el idioma
    $channels = RecommendedChannel::where('is_active', 1)
                                   ->where('language', $locale)
                                   ->inRandomOrder()
                                   ->limit(5)
                                   ->get();
@endphp

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="recommended-channels text-center">
        <h2 class="mb-4">{{ ucfirst($header) }}</h2>
        <div class="row justify-content-center">
            @if ($channels->count() > 0)
                {{-- Columna izquierda: Primer canal destacado --}}
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <div>
                        <a href="{{ $channels[0]->url }}" target="_blank">
                            <img src="{{ $channels[0]->logo }}" alt="{{ $channels[0]->text }}" class="img-fluid rounded-circle" style="max-width: 200px;">
                        </a>
                        
                    </div>
                </div>
                {{-- Columna derecha: Matriz 2x2 con los otros cuatro canales --}}
                <div class="col-12 col-md-6">
                    <div class="row g-3">
                        @foreach ($channels->slice(1) as $channel)
                            <div class="col-6 d-flex justify-content-center">
                                <a href="{{ $channel->url }}" target="_blank">
                                    <img src="{{ $channel->logo }}" alt="{{ $channel->text }}" class="img-fluid rounded-circle" style="max-width: 100px;">
                                </a>
                                
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <p class="text-center">No channels available.</p>
            @endif
        </div>
    </div>
</div>
