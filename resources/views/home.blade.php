@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            @if($profile)
                <h1>{{ $profile->name }}</h1>
                <h4 class="text-muted">{{ $profile->title }}</h4>
                <p class="mt-3">{{ $profile->bio }}</p>
            @else
                <h1>No profile data found.</h1>
            @endif
        </div>
    </div>
@endsection