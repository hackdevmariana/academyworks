@extends('layouts.noindex')

@section('content')
<div class="container">
    <h1>{{ ucfirst(translate('all_courses')) }}</h1>

    @if($courses->isEmpty())
        <p>{{ ucfirst(translate('no_courses_available')) }}</p>
    @else
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-4 mb-4">
                    <div class="custom-card h-100">
                        <div class="custom-image-wrapper">
                            <img src="{{ $course->image }}" class="card-img-top" alt="{{ $course->title }}">
                        </div>
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">{{ $course->title }}</h5>
                            <p class="custom-card-text">{{ $course->description }}</p>
                            <a href="{{ route('courses.show', $course->slug) }}" class="rounded-button">
                                {{ ucfirst(translate('view_course')) }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
