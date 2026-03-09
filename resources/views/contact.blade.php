@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="mb-4">Contact</h1>

            @if($contact)
                <p><strong>Email:</strong> {{ $contact->email }}</p>
                <p><strong>Phone:</strong> {{ $contact->phone }}</p>
                <p><strong>Address:</strong> {{ $contact->address }}</p>
                <p><strong>Facebook:</strong> <a href="{{ $contact->facebook }}" target="_blank">{{ $contact->facebook }}</a></p>
                <p><strong>GitHub:</strong> <a href="{{ $contact->github }}" target="_blank">{{ $contact->github }}</a></p>
            @else
                <p>No contact data found.</p>
            @endif
        </div>
    </div>
@endsection