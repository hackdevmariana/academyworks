@extends('layouts.noindex')

@section('content')
    <div class="container">
        <h1>Modules for Course: {{ $course->title }}</h1>
        <ul>
            @foreach ($modules as $module)
                <li>
                    <a href="{{ route('module.show', ['slug' => $course->slug, 'module' => $module->slug]) }}">
                        {{ $module->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
