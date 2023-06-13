

@extends('layout.layout')
@section('title', 'Edit Author')
@section('content')
<form action="/Sales" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Author Name</label>
        <input type="text" class="form-control" id="name" value="{{$Sales->name}}" name="name" placeholder="Author Name">
    </div>
    <div class="mb-3">
        <label class="form-label">Author Email</label>
        <input type="text" class="form-control"  value="{{$Sales->date}}" name="date" placeholder="Author Email">
    </div>
    <div class="mb-3">
        <label class="form-label">Author Phone</label>
        <input type="text" class="form-control"  value="{{$Sales->content}}" name="content" placeholder="Author Phone">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection