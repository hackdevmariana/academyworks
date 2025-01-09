@extends('layouts.noindex')

@section('content')
    <div class="container">
        <h1>Lessons for Module: {{ $module->title }}</h1>
        <ul>
            @foreach ($lessons as $lesson)
                <li>
                    <a href="{{ route('lesson.show', ['slug' => $course->slug, 'module' => $module->slug, 'lesson' => $lesson->slug]) }}">
                        {{ $lesson->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
