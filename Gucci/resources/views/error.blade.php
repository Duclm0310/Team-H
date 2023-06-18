@extends('layout.layout')
@section('tile','Error')
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
    <h3 class="text-center mb-4">You do not have access this page</h3>

    <div class="text-center">
        <button type="submit" class="btn-warning" class="btn btn-primary"><a href="http://127.0.0.1:8000/gucci">Back To HomePage</a></button>
      </div>
  </div>
</div>


@endsection