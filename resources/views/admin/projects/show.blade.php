@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <article class="col-12">
                <img src="{{$project->image}}" alt="">
                <h1>{{ $project->title }} </h1>
                <a class="btn btn-warning" href="{{route('admin.projects.edit',compact('project'))}}">
                    Edit
                </a>
            </article>
        </div>
    </div>

@endsection
