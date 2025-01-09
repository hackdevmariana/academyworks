@extends('layouts.noindex')

@section('content')
    <div class="container">
        <h1>Send a Message</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('messages.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" id="subject" required>
            </div>
            @guest
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
            @endguest
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" class="form-control" id="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
@endsection
