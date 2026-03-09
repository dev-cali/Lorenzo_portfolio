@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Skills</h1>

    <div class="row">
        @foreach($skills as $skill)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>{{ $skill->skill_name }}</h5>
                        <p class="mb-0">{{ $skill->proficiency }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection