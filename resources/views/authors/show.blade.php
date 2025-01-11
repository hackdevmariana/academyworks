@extends('layouts.noindex')

@section('content')
    <div class="container">
        <h1>{{ $author->name }} {{ $author->surname }}</h1>
        <p>{{ $author->biography }}</p>

        <h2>{{ ucfirst(translate('books')) }}</h2>
        <ul>
            @foreach ($author->books as $book)
                <li>{{ $book->title }}</li>
            @endforeach
        </ul>

        <h2>{{ ucfirst(translate('readings')) }}</h2>
        <ul>
            @foreach ($author->readings as $reading)
                <li>
                    <a href="{{ route('readings.show', $reading->slug) }}">
                        {{ $reading->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
