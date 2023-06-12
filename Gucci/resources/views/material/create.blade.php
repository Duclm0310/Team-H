@extends('layout.layout')
@section('tile','create new product')
@section('content')

<form method="post" action="/material">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Material name">
    </div>
    {{-- <div class="mb-3">
      <label for="author" class="form-label">Image</label>
      {{-- <div>Image: <img src="{{$gucci->getFirstMediaUrl('images')}}"></div> --}}
    {{-- </div> --}}
    <div class="mb-3">
      <label for="biography" class="form-label">Uses</label>
      <textarea class="form-control" id="uses" name="uses" rows="3"></textarea>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection