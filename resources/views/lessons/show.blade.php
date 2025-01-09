@extends('layouts.noindex')

@section('content')
    <div class="container">
        <h1>Lesson: {{ $lesson->title }}</h1>
        
        @if ($lesson->video_url)
            <div class="video-wrapper">
                <iframe 
                    src="{{ $lesson->embed_url }}" 
                    title="Video player"
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                </iframe>

            </div>
        @endif

        <p>{{ $lesson->content }}</p>
    </div>

    <style>
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%; /* Aspect ratio 16:9 */
            height: 0;
            overflow: hidden;
            max-width: 100%;
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection
