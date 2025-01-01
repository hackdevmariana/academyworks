@extends('layouts.noindex')

@section('content')
    @include('partials.meta', ['metaTags' => $metaTags])
    @include('partials.navbar')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{ $event->title }}</h1>
                <p class="subtitle">{{ $event->subtitle }}</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <img src="{{ $event->image_url }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div class="col-md-6">
                <h3>Details</h3>
                <p><strong>Place:</strong> {{ $event->place }}</p>
                <p><strong>Start Date:</strong> {{ \Carbon\Carbon::parse($event->start_date)->translatedFormat('F d, Y') }}</p>
                <p><strong>End Date:</strong> {{ \Carbon\Carbon::parse($event->end_date)->translatedFormat('F d, Y') }}</p>
                <p>
                    <strong>Time Remaining:</strong> 
                    {{ \Carbon\Carbon::parse($event->start_date)->locale(app()->getLocale())->diffForHumans() }}
                </p>
                <p>{{ $event->description }}</p>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
