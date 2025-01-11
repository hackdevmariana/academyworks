@extends('layouts.noindex')
<div class="container">
@section('content')
    <h1>{{ucfirst(translate('readings'))}}</h1>
    <ul>
        @foreach ($readings as $reading)
            <li>
                <a href="{{ route('readings.show', $reading->slug) }}">
                    {{ $reading->title }} 
                </a>
                {{translate('by')}} 
                <a href="{{ route('authors.show', $author->slug) }}">
                    {{ $reading->author->name }} {{ $reading->author->surname }}
                </a>

            </li>
        @endforeach
    </ul>
@endsection
</div>