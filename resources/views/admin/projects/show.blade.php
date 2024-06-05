@extends('layouts.app')

@section('title', $project->title)

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{$project->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$project->type ? $project->type->name : "no type"}}</h6>
                </div>
                <div class="card-body">
                  <p class="card-text">{{$project->description}}</p>
                  <a href="#" class="card-link">Edit</a>
                  <a href="#" class="card-link">Delete</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
 