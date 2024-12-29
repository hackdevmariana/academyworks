<div class="bg-warning p-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="text-dark">{{ ucfirst(translate('quotes')) }}</h2>
            <div>
                <button class="btn btn-outline-dark" id="prevQuote">&larr;</button>
                <button class="btn btn-outline-dark" id="nextQuote">&rarr;</button>
            </div>
        </div>
        <div id="quotesCarousel" class="d-flex overflow-hidden">
            @foreach($quotes as $quote)
            <div class="quote-card text-center flex-shrink-0 mx-3" style="width: 300px;">
                @php
                    $image = $quote->author->image 
                        ? asset('storage/' . $quote->author->image) // Ruta para imagen local
                        : ($quote->author->url ?? 'path/to/default/image.jpg'); // Ruta para imagen externa o por defecto
                @endphp
                <img src="{{ $image }}" alt="{{ $quote->author->name }}" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
                <p class="fs-5">{{ $quote->quote }}</p>
                <small>
                    <a href="/author/{{ $quote->author->slug }}" class="text-dark text-decoration-none">
                        {{ $quote->author->name }} {{ $quote->author->surname }}
                    </a>
                </small>
            </div>
            @endforeach
        </div>
    </div>
</div>
