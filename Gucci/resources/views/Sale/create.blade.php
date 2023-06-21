@extends('layout.layout')
@section('title', 'Create New Sale')
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
        <h2 class="text-center">Create New Sale</h2>
        <form method="post" action="/sale">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Sale name">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection