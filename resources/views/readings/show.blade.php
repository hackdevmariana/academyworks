@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-primary">{{ $reading->title }}</h1>
    <h2 class="text-secondary">{{ $reading->subtitle }}</h2>
    <p class="text-muted">{{ $reading->description }}</p>
    <p>Author: <strong>{{ $reading->author->name }}</strong></p>
    <hr>
    <div>
        <h3>Parts</h3>
        @foreach ($reading->parts as $part)
            <div class="mb-4">
                <h4>{{ $part->part_number }}. {{ $part->title }}</h4>
                <p>{{ $part->content }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
