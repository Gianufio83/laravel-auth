@extends('layouts.layout')
@section('header')
  <h1 class="text-center">Create new Post</h1>  
@endsection
@section('main-content')
  <div class="wrapper">
    <div class="row">
      
      <form action="{{route('admin.posts.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea class="form-control" name="body" id="body" cols="30" rows="10">
          </textarea>
        </div>
        {{-- <input type="hidden" name="user_id" value="{{Auth::user()->name}}"> --}}
        <button class="btn btn-success" type="submit">Salva</button>
      </form>
    </div>
  </div>
@endsection