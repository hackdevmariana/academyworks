@extends('layouts.noindex')

@section('content')
    <div class="container">
        <h1>{{ $reading->title }}</h1>
        <h3>{{ $part->title }}</h3>
        <div class="content">
            {!! nl2br(e($part->content)) !!}
        </div>

        <hr>

        <h3>{{ ucfirst(translate('other_chapters')) }}</h3>
        <ul>
            @foreach ($reading->parts as $otherPart)
                @if ($otherPart->id !== $part->id)
                    <li>
                        <a href="{{ route('readings.part.show', ['slug' => $reading->slug, 'partSlug' => $otherPart->slug]) }}">
                            {{ ucfirst(translate('chapter')) }} {{ $otherPart->part_number }}: {{ $otherPart->title }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>

        <a href="{{ route('readings.show', $reading->slug) }}">
            &larr; {{ ucfirst(translate('back_to_reading')) }}
        </a>
    </div>
@endsection
