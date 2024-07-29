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
                <form class="d-inline" action="{{route('admin.projects.destroy',$project)}}" method="POST">
                    @method('DELETE')
                    @csrf

                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </article>
        </div>
    </div>

@endsection
