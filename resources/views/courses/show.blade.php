@extends('layouts.noindex')

@section('content')

<div class="col-md-12 text-center position-relative">
    @if ($course->banner || $course->banner_url)
        <div class="event-banner-wrapper">
            <div class="overlay"></div>
            <div class="event-text">
                <h1>{{ $course->title }}</h1>
                <h3 class="subtitle">{{ $course->subtitle }}</h3>
            </div>
        </div>
    @endif
</div>

<div class="container mt-5">
    <h3 class="modules-title">{{ ucfirst(translate('modules')) }}</h3>
    <div class="accordion" id="modulesAccordion">
        @foreach ($course->modules as $module)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $module->id }}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $module->id }}" aria-expanded="false" aria-controls="collapse-{{ $module->id }}">
                        {{ $module->order }}. 
                        <a href="{{ route('courses.modules.show', ['slug' => $course->slug, 'module' => $module->slug]) }}">
                            {{ $module->title }}
                        </a>
                    </button>
                </h2>
                <div id="collapse-{{ $module->id }}" class="accordion-collapse collapse" aria-labelledby="heading-{{ $module->id }}" data-bs-parent="#modulesAccordion">
                    <div class="accordion-body">
                        <p>{{ $module->description }}</p>
                        <h5>{{ ucfirst(translate('lessons'))}}</h5>
                        <ul>
                            @foreach ($module->lessons as $lesson)
                                <li>
                                    {{ $lesson->order }}. 
                                    <a href="{{ route('courses.modules.lessons.show', ['slug' => $course->slug, 'module' => $module->slug, 'lesson' => $lesson->slug]) }}">
                                        <strong>{{ $lesson->title }}</strong>
                                    </a>
                                    @if ($lesson->video_url)
                                        <br><a href="{{ $lesson->video_url }}" target="_blank">{{ ucfirst(translate('watch_video')) }}</a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Botón de inscripción --}}
    <div class="text-center mt-4">
        @auth
            <form action="{{ route('courses.enroll', $course->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">
                    {{ ucfirst(translate('enroll_in_course')) }}
                </button>
            </form>
        @else
            <a href="{{ route('register') }}" class="btn btn-primary">
                {{ ucfirst(translate('register_to_enroll')) }}
            </a>
        @endauth
    </div>
</div>


<style>
    .event-banner-wrapper {
        position: relative;
        width: 100%;
        height: 300px; /* Reduce la altura */
        background: url('{{ $course->banner ? asset('storage/' . $course->banner) : $course->banner_url }}') no-repeat center center / cover;
        background-attachment: fixed; /* Parallax effect */
    }

    .event-banner-wrapper img {
        display: none; /* Ocultamos el elemento img ya que usamos background */
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .event-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        text-align: center;
    }


    .modules-title {
        margin-bottom: 20px;
    }

    .accordion-item {
        margin-bottom: 10px;
    }

    .accordion-item .accordion-collapse.show {
        background-color: #fff9e6;
    }

    .accordion-button:not(.collapsed) {
        background-color: #fef4a9; /* Fondo amarillento pálido */
        color: #333; /* Cambia el color del texto si lo necesitas */
        font-weight: bold; /* Opcional: Para enfatizar el título activo */
        border-color: #f7e3a1; /* Opcional: Color del borde */
    }
    
    .accordion-button:not(.collapsed):focus {
        box-shadow: 0 0 0 0.2rem rgba(247, 227, 161, 0.5); /* Un tono amarillo pálido */
        outline: none; /* Opcional, elimina el borde por si hay otro por defecto */
    }


</style>

@endsection
