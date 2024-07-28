@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <article class="col-12">
                <img src="{{$project->image}}" alt="">
                <h1>{{ $project->title }} </h1>
            </article>
        </div>
    </div>

@endsection
