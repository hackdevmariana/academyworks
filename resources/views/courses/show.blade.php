@extends('layouts.noindex')

@section('content')
<div class="container">
    <div class="card mb-4">
        <img 
            src="{{ $course->banner_url ?? asset('storage/' . $course->banner) }}" 
            class="card-img-top" 
            alt="{{ $course->title }}"
        >
        <div class="card-body">
            <h1 class="card-title">{{ $course->title }}</h1>
            <h4 class="card-subtitle text-muted mb-3">{{ $course->subtitle }}</h4>
            <p class="card-text">{{ $course->description }}</p>

            <ul class="list-group list-group-flush my-3">
                <li class="list-group-item"><strong>Duración:</strong> {{ $course->duration }}</li>
                <li class="list-group-item"><strong>Nivel:</strong> {{ $course->level }}</li>
                <li class="list-group-item"><strong>Idioma:</strong> {{ strtoupper($course->language) }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection
