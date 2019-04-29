@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<a href="/home/newPost" class="btn btn-lights btn-block mb-3">New Post</a>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $post->text }}</p>
                    <hr class="my-4">
                <a href="/posts/{{ $post->id }}" class="btn btn-primary float-right">Details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
