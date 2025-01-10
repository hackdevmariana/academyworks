@extends('layouts.noindex')

@section('content')
<div class="container my-5">
    <h1 class="mb-4">{{ ucfirst(translate('speakers')) }}</h1>
    <div class="row">
        @foreach ($speakers as $speaker)
        <div class="col-md-4 mb-4">
            <div class="custom-card shadow-sm">
                <img src="{{ $speaker->photo_url }}" class="card-img-top" alt="{{ $speaker->name }}">
                <div class="custom-card-body">
                    <h5 class="custom-card-title text-dark">{{ $speaker->name }} {{ $speaker->surname }}</h5>
                    <p class="custom-card-text text-dark text-truncate">{{ $speaker->biography }}</p>
                    <div class="rounded-button-container">
                        <a href="{{ route('speakers.show', $speaker->slug) }}" class="rounded-button">{{ ucfirst(translate('view_details')) }}</a>
                    </div>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>
</div>
@endsection
