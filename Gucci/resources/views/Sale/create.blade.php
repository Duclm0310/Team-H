@extends('layout.layout')
@section('tile','create new sale')
@section('content')

<form method="post" action="/sale">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Material name">
    </div>
    <div class="mb-3">
      <label for="biography" class="form-label">Content</label>
      <textarea class="form-control" id="content" name="content" rows="3"></textarea>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection