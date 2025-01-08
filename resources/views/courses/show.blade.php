@extends('layouts.noindex')

@section('content')

<div class="col-md-12 text-center position-relative">
    @if ($course->banner || $course->banner_url)
        <div class="event-banner-wrapper">
            <img 
                src="{{ $course->banner ? asset('storage/' . $course->banner) : $course->banner_url }}" 
                alt="{{ $course->title }} banner" 
                class="img-fluid">
            <div class="overlay"></div>
            <div class="event-text">
                <h1>{{ $course->title }}</h1>
                <h3 class="subtitle">{{ $course->subtitle }}</h3>
            </div>
        </div>
    @endif
</div>

<div class="container mt-5">
    <div class="row mt-4">
        <div class="col-md-8 image-course">
            <img src="{{ $course->image_url }}" class="img-fluid" alt="{{ $course->title }}">
        </div>
        <div class="col-md-4">
            <h3 class="abstract-title">Abstract</h3>
            <p class="abstract">{{ $course->abstract }}</p>
            <h3 class="details-title">Details</h3>
            <p><strong>Duration:</strong> {{ $course->duration }}</p>
            <p><strong>Level:</strong> {{ ucfirst($course->level) }}</p>
            <p><strong>Language:</strong> {{ strtoupper($course->language) }}</p>
        </div>
    </div>

    <div class="container mt-5">
        <h3 class="modules-title">Course Modules</h3>
        <div class="accordion" id="modulesAccordion">
            @foreach ($course->modules as $module)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-{{ $module->id }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $module->id }}" aria-expanded="false" aria-controls="collapse-{{ $module->id }}">
                            {{ $module->order }}. {{ $module->title }}
                        </button>
                    </h2>
                    <div id="collapse-{{ $module->id }}" class="accordion-collapse collapse" aria-labelledby="heading-{{ $module->id }}" data-bs-parent="#modulesAccordion">
                        <div class="accordion-body">
                            <p>{{ $module->description }}</p>
                            <h5>Lessons</h5>
                            <ul>
                                @foreach ($module->lessons as $lesson)
                                    <li>
                                        {{ $lesson->order }}. <strong>{{ $lesson->title }}</strong>
                                        @if ($lesson->video_url)
                                            <br><a href="{{ $lesson->video_url }}" target="_blank">Watch Video</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
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
        background: rgba(0, 0, 0, 0.5);
    }

    .event-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        text-align: center;
    }

    .modules-title {
        margin-bottom: 20px;
    }

    .accordion-item {
        margin-bottom: 10px;
    }
</style>

@endsection
