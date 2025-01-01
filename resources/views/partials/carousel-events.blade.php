@php
    use App\Models\Translation;
    use Carbon\Carbon;

    // Obtener el idioma del usuario
    $locale = app()->getLocale();
    Carbon::setLocale($locale);

    // Obtener la traducción de "events"
    $eventsTitle = Translation::where('key', 'events')
                              ->where('locale', $locale)
                              ->value('value') ?? 'Events';
@endphp

<div class="container">
    <h3 class="text-center">{{ ucfirst($eventsTitle) }}</h3>
    <div id="eventsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($events->chunk(3) as $chunk) {{-- Agrupa en filas de 3 eventos --}}
                <div class="carousel-item @if ($loop->first) active @endif">
                    <div class="d-flex justify-content-center">
                        @foreach($chunk as $event)
                            @php
                                $startDate = Carbon::parse($event->start_date);
                                $endDate = Carbon::parse($event->end_date);
                                $timeToStart = $startDate->diffForHumans();
                                $monthName = $startDate->translatedFormat('F');
                            @endphp
                            <div class="card mx-2" style="width: 18rem;">
                                <img src="{{ $event->image ?? $event->image_url }}" class="card-img-top" alt="{{ $event->title }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $event->title }}</h5>
                                    <p class="card-text">
                                        {{-- Iconos con tamaño de 1rem --}}
                                        <x-polaris-pagination-end-icon style="width: 32px; height: 32px;" />
                                        @if ($locale === 'es')
                                            {{ $startDate->day }} de {{ $monthName }} de {{ $startDate->year }} a las {{ $event->start_time }} horas<br>
                                        @else
                                            {{ $startDate->day }} {{ $monthName }} {{ $startDate->year }} {{ $event->start_time }} 
                                        @endif    
                                        <br>
                                        <x-polaris-pagination-start-icon style="width: 32px; height: 32px;" />
                                        @if ($locale === 'es')
                                            {{ $endDate->day }} de {{ $monthName }} de {{ $endDate->year }} a las {{ $event->end_time }} horas
                                        @else
                                            {{ $endDate->day }} {{ $monthName }} {{ $endDate->year }} {{ $event->end_time }}
                                        @endif
                                    </p>
                                    <p class="text-muted">
                                        {{ ucfirst($timeToStart) }}
                                    <a href="{{ url('/event/' . $event->slug) }}" class="btn btn-primary">
                                        {{ Translation::where('key', 'see-event')->where('locale', $locale)->value('value') ?? 'See event' }}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        {{-- Botón para desplazarse hacia atrás --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#eventsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{ ucfirst(Translation::where('key', 'previous')->where('locale', $locale)->value('value') ?? 'Previous') }}</span>
        </button>
        {{-- Botón para desplazarse hacia adelante --}}
        <button class="carousel-control-next" type="button" data-bs-target="#eventsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{ ucfirst(Translation::where('key', 'next')->where('locale', $locale)->value('value') ?? 'Next') }}</span>
        </button>
    </div>
</div>
