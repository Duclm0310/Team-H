@extends('layout.layout')
@section('title', 'Create New User')
@section('content')

<style>
    .background-image {
        background-image: url('{{ asset('img/bg.jpg') }}');
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
        margin: 0;
    }

    .card {
        background-color: rgba(255, 255, 255, 0.8);
        max-width: 400px;
        padding: 20px;
        border-radius: 10px;
    }

    .form-label {
        font-weight: bold;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }
</style>

<div class="background-image">
    <div class="card">
        <h2 class="text-center">Create New User</h2>
        <form method="post" action="/user" role="form">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Repeat Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repeat Password">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                @foreach($role as $role)
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="role[]" value="{{$role->id}}">
                        {{$role->name}}
                    </label>
                </div>
                @endforeach
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
