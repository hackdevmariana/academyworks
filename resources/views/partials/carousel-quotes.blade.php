<div class="bg-warning p-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="text-dark">{{ ucfirst(translate('quotes')) }}</h2>
            <div>
                <button class="btn btn-outline-dark" id="prevQuote" aria-label="Previous Quote">&larr;</button>
                <button class="btn btn-outline-dark" id="nextQuote" aria-label="Next Quote">&rarr;</button>
            </div>
        </div>

        @if($quotes->isNotEmpty())
            <div id="quotesCarousel" class="d-flex position-relative">
                @foreach($quotes as $index => $quote)
                    <div 
                        class="quote-card bg-light shadow-sm rounded d-flex align-items-center p-3 mb-3 mx-2 flex-shrink-0" 
                        style="width: 400px;" 
                        data-index="{{ $index }}"
                    >
                        @php
                            $image = $quote->author->image 
                                ? asset('storage/' . $quote->author->image) 
                                : ($quote->author->url ?? 'path/to/default/image.jpg'); 
                        @endphp
                        <img 
                            src="{{ $image }}" 
                            alt="{{ $quote->author->name }}" 
                            class="rounded-circle me-3 flex-shrink-0" 
                            style="width: 80px; height: 80px; object-fit: cover;"
                        >
                        <div>
                            <p class="fs-5 mb-1 text-dark">"{{ $quote->quote }}"</p>
                            <small class="text-muted">
                                — 
                                <a 
                                    href="/author/{{ $quote->author->slug }}" 
                                    class="text-decoration-none text-dark fw-semibold"
                                >
                                    {{ $quote->author->name }} {{ $quote->author->surname }}
                                </a>
                            </small>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-dark">No quotes available at the moment.</p>
        @endif
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.getElementById('quotesCarousel');
        const cards = document.querySelectorAll('.quote-card');
        const prevBtn = document.getElementById('prevQuote');
        const nextBtn = document.getElementById('nextQuote');
        
        let currentIndex = 0;

        function updateCarousel() {
            const offset = -currentIndex * (cards[0].offsetWidth + 16); // Ajustar al ancho real de las tarjetas
            carousel.style.transform = `translateX(${offset}px)`;
        }

        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentIndex < cards.length - 1) {
                currentIndex++;
                updateCarousel();
            }
        });
    });
</script>

<style>
    #quotesCarousel {
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
        white-space: nowrap;
    }

    .quote-card {
        display: flex;
        align-items: center;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .quote-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    .quote-card img {
        border: 2px solid #eee;
    }
</style>
