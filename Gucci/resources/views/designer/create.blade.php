@extends('layout.layout')
@section('title', 'Create New Designer')
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
</style>
<div class="background-image">
    <div class="card">
        <h2 class="text-center">Create New Designer</h2>
        <form action="/designer" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Design Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Design Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Designer Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Designer Email">
            </div>
            <div class="mb-3">
                <label for="style" class="form-label">Designer Style</label>
                <input type="text" class="form-control" id="style" name="style" placeholder="Designer Style">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection