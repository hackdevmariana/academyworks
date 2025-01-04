@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-primary">{{ $speaker->name }} {{ $speaker->surname }}</h1>
    <p class="text-muted">{{ $speaker->biography }}</p>
    
    <hr>
    
    <h3 class="text-secondary">Social Profiles</h3>
    @if ($speaker->socialProfiles->isNotEmpty())
    <ul>
        @foreach ($speaker->socialProfiles as $profile)
        <li>
            <a href="{{ $profile->url }}" target="_blank" class="text-decoration-none">{{ $profile->platform }}</a>
        </li>
        @endforeach
    </ul>
    @else
    <p>No social profiles available.</p>
    @endif

    <hr>
    
    <h3 class="text-secondary">Videos</h3>
    @if ($speaker->videos->isNotEmpty())
    <div class="row">
        @foreach ($speaker->videos as $video)
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $video->title }}</h5>
                    <p class="card-text text-truncate">{{ $video->description }}</p>
                    <a href="{{ $video->url }}" target="_blank" class="btn btn-secondary">Watch Video</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p>No videos available.</p>
    @endif
</div>
@endsection
