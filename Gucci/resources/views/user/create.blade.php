@extends('layout.layout')
@section('tile','create user')
@section('content')

<form method="post" action="/user" role="form">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Name">
  </div>
  <div class="form-outline mb-4">
    <input type="password" name="password" id="password" class="form-control" />
    <label class="form-label" for="pwd">Password</label>
  </div>

  <!-- Password re-input -->
  <div class="form-outline mb-4">
  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
  <label class="form-label" for="pwd">Repeate Password</label>
  </div>
  
    <div class="mb-3">
      <label for="biography" class="form-label">Role</label>
      @foreach($role as $role)
      <div class="checkbox">
        <label>
            <input type="checkbox" type="checkbox" name="role[]" value="">
            {{$role->name}}
        </label>
      </div>
      @endforeach
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection