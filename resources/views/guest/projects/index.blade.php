@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($projects as $project)
        <div class="card text-center mt-5">
            <div class="card-header">
                Type : <span class="fw-bold">{{ $project->type->name }}</span>
            </div>
            <div class="card-body">
                <h2 class="card-title fw-bold">
                    {{ $project->title }}
                </h2>
                <div class="mt-4">
                    @foreach ($project->technologies as $project)
                        #{{ $project->name }}
                    @endforeach
                </div>
                <div class="my-4">
                    <img src="{{ $project->thumb }}" alt="Project image" class="img-fluid">
                </div>
                <a href="{{ $project->link }}" class="btn btn-sm btn-info">
                    Go to the project repository
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection