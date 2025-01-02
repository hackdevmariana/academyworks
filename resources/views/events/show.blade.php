@extends('layouts.noindex')

@section('content')

<div class="col-md-12 text-center position-relative">
    @if ($event->banner || $event->banner_url)
    <div class="event-banner-wrapper">
        <img 
            src="{{ $event->banner ? asset('storage/' . $event->banner) : $event->banner_url }}" 
            alt="{{ $event->title }} banner" 
            class="img-fluid">
        <div class="overlay"></div>
        <div class="event-text">
            <h1>{{ $event->title }}</h1>
            <h3 class="subtitle">{{ $event->subtitle }}</h3>
        </div>
    </div>
    
    @endif

</div>

    <div class="container mt-5">
        

        <div class="row mt-4">
            <div class="col-md-8 image-event">
                <img src="{{ $event->image_url }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div class="col-md-4">
                @php
                    $monthTranslations = [
                        'January' => 'enero',
                        'February' => 'febrero',
                        'March' => 'marzo',
                        'April' => 'abril',
                        'May' => 'mayo',
                        'June' => 'junio',
                        'July' => 'julio',
                        'August' => 'agosto',
                        'September' => 'septiembre',
                        'October' => 'octubre',
                        'November' => 'noviembre',
                        'December' => 'diciembre',
                    ];

                    $locale = session('locale', 'en'); // Determina el idioma de la sesión
                    \Carbon\Carbon::setLocale($locale);

                    $startDate = \Carbon\Carbon::parse($event->start_date);
                    $endDate = \Carbon\Carbon::parse($event->end_date);

                    

                    if ($locale === 'es') {

                        $day = $startDate->format('d');
                        $month = $startDate->format('F');
                        $year = $startDate->format('Y');
                        $formattedStartDate = $day . " de " . $month . " de " . $year;

                        $day = $endDate->format('d');
                        $month = $endDate->format('F');
                        $year = $endDate->format('Y');
                        $formattedEndDate = $day . " de " . $month . " de " . $year;

                        $formattedStartDate = str_replace(
                            array_keys($monthTranslations),
                            array_values($monthTranslations),
                            $formattedStartDate
                        );
                        $formattedEndDate = str_replace(
                            array_keys($monthTranslations),
                            array_values($monthTranslations),
                            $formattedEndDate
                        );
                    } else {
                        $formattedStartDate = $startDate->format('F d, Y');
                        $formattedEndDate = $endDate->format('F d, Y');
                    }
                @endphp



            <div class="event-data">
                <h3>{{ ucfirst($startDate->locale($locale)->diffForHumans()) }}</h3>

                @if ($event->start_date === $event->end_date)
                    <p><i class="bi bi-calendar"></i>&nbsp;&nbsp;{{ $formattedStartDate }}</p>
                    <p><i class="bi bi-clock"></i>&nbsp;&nbsp;{{ $event->start_time }} - {{ $event->end_time }}</p>
                @else
                    <p><i class="bi bi-calendar"></i>&nbsp;&nbsp;{{ $formattedStartDate }}</p>
                    <p><i class="bi bi-clock"></i>&nbsp;&nbsp;{{ $event->start_time }}</p>
                    <p><i class="bi bi-calendar-event-fill"></i>&nbsp;&nbsp;{{ $formattedEndDate }}</p>
                    <p><i class="bi bi-clock-fill"></i>&nbsp;&nbsp;{{ $event->end_time }}</p>
                @endif
            </div>

                <br>
                @if ($place)
                    <div class="event-data">
                        <h3>{{ $place->name }}</h3>
                        @if ($place->address)
                            <p><i class="bi bi-geo-alt-fill"></i> &nbsp;&nbsp;{{ $place->address }}, {{ $place->city }}, {{ $place->country }}</p>
                        @endif
                        @if ($place->website)
                            <p><i class="bi bi-globe"></i> &nbsp;&nbsp;<a href="{{ $place->website }}" target="_blank">{{ $place->website }}</a></p>
                        @endif
                        @if ($place->phone)
                            <p><i class="bi bi-telephone"></i> &nbsp;&nbsp;{{ $place->phone }}</p>
                        @endif
                        @if ($place->email)
                            <p><i class="bi bi-envelope"></i> &nbsp;&nbsp;<a href="mailto:{{ $place->email }}">{{ $place->email }}</a></p>
                        @endif
                    </div>
                @endif
                


                

                
                
            </div>
        </div>
        <div class="container">
            <p class="abstract">{{ $event->abstract }}</p>
            <p>{!! $event->description !!}</p>
        </div>
    </div>


    <style>
        .event-banner-wrapper {
            position: relative;
            width: 100%;
        }

        .event-banner-wrapper img {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(253, 230, 4, 0.5);
            z-index: 1;
        }

        .event-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            color: #131313;
            text-align: center;
            padding: 1rem 2rem;
        }

        .event-data{
            background-color: #fde604;
            color: #131313;
            border-radius: 5px;
            padding: 2rem;
        }
        .image-event{
            border-radius: 5px;
        }

        .abstract{
            font-style: italic;
        }
    </style>
@endsection
