@extends('layout.layout')
@section('tile','edit designer')
@section('content')

<form action="/designer/{{$designer->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Design Name</label>
        <input type="text" class="form-control" id="name" value="{{$designer->name}}" name="name" placeholder="Design Name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Designer Email</label>
        <input type="text" class="form-control" id="email"  value="{{$designer->email}}" name="email" placeholder="Designer Email">
    </div>
    <div class="mb-3">
        <label for="style" class="form-label">Designer Style</label>
        <input type="text" class="form-control" id="style" value="{{$designer->style}}" name="phone" placeholder="Designer Style">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection