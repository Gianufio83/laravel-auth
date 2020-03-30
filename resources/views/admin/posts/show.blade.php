@extends('layouts.layout')
@section('main-content')
  <h2 class="text-center text-success">Posts details</h2>
    <div class="card">
      <ul>
        <li class="text-primary">ID: <span class="text-dark">{{$post->id}}</span></li>
        <li class="text-primary">Post Title: <span class="text-dark">{{$post->name}}</span></li>
        <li class="text-primary">Content <span class="text-dark">{{$post->body}}</span></li>
        <li class="text-primary">Author: <span class="text-dark">{{$post->user->name}}</span></li>
        <li class="text-primary">Created at: <span class="text-dark">{{$post->created_at}}</span></li>       
      </ul>
    </div>            
    <a class="btn btn-success mt-5" href="{{route('admin.posts.index')}}">HOME</a>
  @endsection