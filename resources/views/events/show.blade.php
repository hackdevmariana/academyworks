@extends('layouts.noindex')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                @if ($event->banner || $event->banner_url)
                    <img 
                        src="{{ $event->banner ? asset('storage/' . $event->banner) : $event->banner_url }}" 
                        alt="{{ $event->title }} banner" 
                        class="img-fluid mb-4">
                @endif
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

@endsection
