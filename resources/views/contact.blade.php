@extends('layouts.noindex')

@section('content')
    <div class="container">
        <h1>{{ ucfirst(translate('send_a_message'))}} </h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('messages.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="subject" class="form-label">{{ ucfirst(translate('subject')) }}</label>
                <input type="text" name="subject" class="form-control" id="subject" required>
            </div>
            @guest
                <div class="mb-3">
                    <label for="name" class="form-label">{{ ucfirst(translate('name')) }}</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{ ucfirst(translate('email')) }}</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
            @endguest
            <div class="mb-3">
                <label for="message" class="form-label">{{ ucfirst(translate('message')) }}</label>
                <textarea name="message" class="form-control" id="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="rounded-button">{{ ucfirst(translate('send')) }}</button>
        </form>
        <br>
    </div>
@endsection
