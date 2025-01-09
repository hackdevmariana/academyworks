@extends('layouts.noindex')

@section('content')
    <div class="container">
        <h1>Module: {{ $module->title }}</h1>
        <p>{{ $module->description }}</p>

        <h3>Lessons</h3>
        @if ($module->lessons->isNotEmpty())
            <ul>
                @foreach ($module->lessons as $lesson)
                    <li>
                        <a href="{{ route('lesson.show', ['slug' => $course->slug, 'module' => $module->slug, 'lesson' => $lesson->slug]) }}">
                            {{ $lesson->order }}. {{ $lesson->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No lessons available for this module.</p>
        @endif
    </div>
@endsection
