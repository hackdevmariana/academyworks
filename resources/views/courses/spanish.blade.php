@extends('layouts.noindex')

@section('content')
<div class="container">
    <h1 class="my-4">
        {{ $language === 'es' ? 'Cursos disponibles' : 'Available courses' }}
    </h1>
    
    @if($courses->isNotEmpty())
        <div class="row justify-content-center">
            @foreach($courses as $course)
                <div class="col-md-4 mb-4 d-flex carouselCourses">
                    <div class="course-card">
                        <div style="position: relative; width: 100%; padding-top: 56.25%; overflow: hidden;">
                            <img 
                                src="{{ $course->image_url ?? asset('storage/' . $course->image) }}" 
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" 
                                alt="{{ $course->title }}"
                            >
                        </div>
                        <div class="course-card-text">
                        <h5 style="color: black; margin-top: 1rem;">{{ $course->title }}</h5>
                        <p>{{ $course->abstract }}</p>
                        <a href="{{ $language === 'es' ? url('/course/' . $course->slug) : url('/course/' . $course->slug) }}" 
                           class="btn btn-primary">
                            {{ $language === 'es' ? 'Ver curso' : 'View course' }}
                        </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center">
            {{ $language === 'es' ? 'No hay cursos disponibles.' : 'No courses available.' }}
        </p>
    @endif
</div>
@endsection
