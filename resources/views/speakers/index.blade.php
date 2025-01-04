@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="mb-4 text-primary">Speakers</h1>
    <div class="row">
        @foreach ($speakers as $speaker)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $speaker->name }} {{ $speaker->surname }}</h5>
                    <p class="card-text text-truncate">{{ $speaker->biography }}</p>
                    <a href="{{ route('speakers.show', $speaker->id) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
