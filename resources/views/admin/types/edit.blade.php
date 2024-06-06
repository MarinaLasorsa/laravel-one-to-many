@extends('layouts.app')

@section('title', 'Edit')

@section('content')

    <main>
        <section class="py-5">
            
            <div class="container">
                <h2 class="text-center mb-4">Edit Type</h2>

                <form action="{{ route('admin.types.update', $type) }}" method="POST">

                    {{-- Cross Site Request Forgering --}}
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Type Name" value="{{old('name', $type->name)}}">
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Type Slug" value="{{old('slug', $type->slug)}}">
                    </div>

                    <button class="btn btn-primary">Save</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )

                            <li>
                                {{$error}}
                            </li>
                                
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </section>
    </main>

@endsection