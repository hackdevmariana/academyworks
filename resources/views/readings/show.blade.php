@extends('layouts.noindex')

@section('content')
<div class="container my-5">
    <h1>{{ $reading->title }}</h1>
    <h2 class="text-secondary">{{ $reading->subtitle }}</h2>
    <p class="text-muted">{{ $reading->description }}</p>
    <p>{{ ucfirst(translate('author')) }}: <strong><a href="{{ route('authors.show', $reading->author->slug) }}"> {{ $reading->author->name }} {{ $reading->author->surname }}</a></strong></p>
    <hr>
    <div>
        <h3>{{ ucfirst(translate('chapters')) }}</h3>
        @foreach ($reading->parts as $part)
            <div class="mb-4">
                <h4>{{ $part->part_number }}. 
                    <a href="{{ route('readings.part.show', ['slug' => $reading->slug, 'partSlug' => $part->slug]) }}">{{ $part->title }}</a>
                </h4>
            </div>
        @endforeach

    </div>
</div>
@endsection
