@extends('layout.layout')
@section('tile','edit material')
@section('content')

<form method="post" action="/material/{{$material->id}}">
    {{method_field('PUT')}}
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Material name"
        value={{$material->name}}>
    </div>
    {{-- <div class="mb-3">
      <label for="author" class="form-label">Image</label>
      {{-- <div>Image: <img src="{{$gucci->getFirstMediaUrl('images')}}"></div> --}}
    {{-- </div> --}}
    <div class="mb-3">
      <label for="biography" class="form-label">Uses</label>
      <textarea class="form-control" id="uses" name="uses" rows="3">{{$material->uses}}
      </textarea>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection