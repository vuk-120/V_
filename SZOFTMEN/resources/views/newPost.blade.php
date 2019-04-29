@extends('layouts.app') 
@section('pageTitle', 'New Post') 
@section('content')

<form action="{{ url('saveNewPost') }}" method="post" id="myform">
    {{ csrf_field() }}

    <h1 class="mt-2 ml-2">New Post</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">New Post
            </li>
        </ol>
    </nav>

    <div class="col-lg-6">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="title" name="title" id="title" class="form-control">
        </div>
    </div>


    <div class="col-lg-6">
        <div class="form-group">
            <label for="text">Post</label>
            <textarea name="text" id="text" cols="30" rows="5" class="form-control"></textarea>
        </div>
    </div>

    <div class="form-group col-2">
        <label for="category">Category</label>
        <select class="form-control" name="category" id="category">
              <option>v_python</option>
              <option>v_java</option>
              <option>v_AI</option>
        </select>
    </div>

    <div class="col-6 mt-5">
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Post</button>
        </div>
    </div>
</form>
@endsection