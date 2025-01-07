@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">
        {{ $language === 'es' ? 'Cursos en Español' : 'Courses in English' }}
    </h1>
    
    @if($courses->isNotEmpty())
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img 
                            src="{{ $course->image_url ?? asset('storage/' . $course->image) }}" 
                            class="card-img-top" 
                            alt="{{ $course->title }}"
                        >
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <p class="card-text">{{ $course->abstract }}</p>
                            <a href="{{ $language === 'es' ? url('/curso/' . $course->slug) : url('/course/' . $course->slug) }}" 
                               class="btn btn-primary">
                                {{ $language === 'es' ? 'Ver Curso' : 'View Course' }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>{{ $language === 'es' ? 'No hay cursos disponibles.' : 'No courses available.' }}</p>
    @endif
</div>
@endsection
