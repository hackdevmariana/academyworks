<div id="eventsCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($events->chunk(3) as $chunk) {{-- Agrupa en filas de 3 eventos --}}
            <div class="carousel-item @if ($loop->first) active @endif">
                <div class="d-flex justify-content-center">
                    @foreach($chunk as $event)
                        <div class="card mx-2" style="width: 18rem;">
                            <img src="{{ $event->image ?? $event->image_url }}" class="card-img-top" alt="{{ $event->title }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-text">
                                    {{ $event->start_date }} {{ $event->start_time }} - 
                                    {{ $event->end_date }} {{ $event->end_time }}
                                </p>
                                <a href="{{ url('/event/' . $event->slug) }}" class="btn btn-primary">{{ translate('read_more') }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#eventsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#eventsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
