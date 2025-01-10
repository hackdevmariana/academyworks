@extends('layouts.noindex')

@section('content')
<div class="container my-5">
    <h1>{{ $speaker->name }} {{ $speaker->surname }}</h1>
    <p class="text-muted">{{ $speaker->biography }}</p>
    @if ($speaker->socialProfiles->isNotEmpty())
    <hr>
    
    <h3 class="text-secondary mb-4">{{ ucfirst(translate('social_links')) }}</h3>
    
    <ul>
        @foreach ($speaker->socialProfiles as $profile)
        <li>
            <a href="{{ $profile->url }}" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                {{ $profile->platform }}
            </a>
        </li>
        @endforeach
    </ul>

    @endif
    @if ($speaker->videos->isNotEmpty())
    <hr>
    
    <h3 class="text-secondary mb-4">{{ ucfirst(translate('videos')) }}</h3>
    
    <div class="row">
        @foreach ($speaker->videos as $video)
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $video->title }}</h5>
                    <p class="card-text text-truncate">{{ $video->description }}</p>
                    <a href="{{ $video->url }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Watch Video</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @endif
</div>
@endsection
