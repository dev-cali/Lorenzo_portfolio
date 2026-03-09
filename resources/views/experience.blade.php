@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Experience / Education</h1>

    @foreach($experiences as $experience)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h4>{{ $experience->role }}</h4>
                <h6 class="text-muted">{{ $experience->company_or_school }}</h6>
                <p>{{ $experience->description }}</p>
                <p class="mb-0"><strong>Type:</strong> {{ $experience->type }}</p>
            </div>
        </div>
    @endforeach
@endsection