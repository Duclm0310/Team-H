@extends('layout.layout')
@section('tile','edit sale')
@section('content')

<form method="post" action="/sale/{{$sale->id}}">
    {{method_field('PUT')}}
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Sale name"
        value={{$sale->name}}>
    </div>
    {{-- <div class="mb-3">
      <label for="author" class="form-label">Image</label>
      {{-- <div>Image: <img src="{{$gucci->getFirstMediaUrl('images')}}"></div> --}}
    {{-- </div> --}}
    <div class="mb-3">
      <label for="biography" class="form-label">Content</label>
      <textarea class="form-control" id="content" name="content" rows="3">{{$sale->content}}
      </textarea>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection