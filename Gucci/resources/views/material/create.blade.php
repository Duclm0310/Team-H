@extends('layout.layout')
@section('title', 'Create New Product')
@section('content')

<style>
    body {
        margin: 0;
        padding: 0;
    }

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
        <h2 class="text-center">Create New Product</h2>
        <form method="post" action="/material">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Material name">
            </div>
            <div class="mb-3">
                <label for="uses" class="form-label">Uses</label>
                <textarea class="form-control" id="uses" name="uses" rows="3"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection