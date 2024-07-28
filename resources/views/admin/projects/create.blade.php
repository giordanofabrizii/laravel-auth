@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Project Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{ old('title', $project->title) }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image Url</label>
                    <input type="text" class="form-control" name="image" id="image" placeholder="Enter url" value="{{ old('image', $project->image) }}">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection
