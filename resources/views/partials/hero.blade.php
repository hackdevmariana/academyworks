<div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($heroes as $index => $hero)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <div class="hero-slide" style="background-image: url('{{ $hero->image ?? $hero->url }}');">
                    <div class="overlay"></div>
                    <div class="content">
                        <h2>{{ $hero->text }}</h2>
                        <h3>{{ $hero->subtext }}</h3>
                        <div class="buttons">
                            @if ($hero->button_link_1 && $hero->button_text_1)
                                <a href="{{ $hero->button_link_1 }}" class="btn btn-primary">{{ $hero->button_text_1 }}</a>
                            @endif
                            @if ($hero->button_link_2 && $hero->button_text_2)
                                <a href="{{ $hero->button_link_2 }}" class="btn btn-secondary">{{ $hero->button_text_2 }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
