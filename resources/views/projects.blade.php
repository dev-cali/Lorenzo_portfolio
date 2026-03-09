@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Projects</h1>

    @foreach($projects as $project)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h4>{{ $project->project_name }}</h4>
                <p>{{ $project->description }}</p>
                <p><strong>Technologies:</strong> {{ $project->technologies }}</p>

                @if($project->github_link)
                    <a href="{{ $project->github_link }}" target="_blank" class="btn btn-dark btn-sm">View Project</a>
                @endif
            </div>
        </div>
    @endforeach
@endsection