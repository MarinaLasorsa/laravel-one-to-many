@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container py-5">
  <h1 class="text-center p-3">My Projects</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($projects as $project )
  <tr>
      <th scope="row">{{$project->title}}</th>
      <td>{{$project->description}}</td>
      <td><a href="{{$project->url}}">link</a></td>
    </tr>
  @endforeach
  </tbody>
 