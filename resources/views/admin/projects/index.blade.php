@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($projects as $project)
            <article class="col-4">
                <a href="">
                    <img src="{{ $project->image }}" alt="{{ $project->title }} image">
                    <h1>{{ $project->title }}</h1>
                </a>
            </article>
        @endforeach
    </div>
</div>
@endsection
