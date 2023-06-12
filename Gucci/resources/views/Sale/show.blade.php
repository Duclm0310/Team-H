@extends('layout.layout')
@section('title', 'Author Details')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$Sales->name}}</h4>
            <p class="card-text">{{$Sales->date}}</p>
            <p class="card-text">{{$Sales->content}}</p>
        </div>
    </div>
@endsection