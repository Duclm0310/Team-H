@extends('layout.layout')
@section('title', 'Designer')
@section('content')

<div class="container">
    <h1 class="text-center">Designer</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($designers as $designer)
                <tr>
                    <td>
                        <a href="{{url("/designer/".$designer->id)}}">
                            {{$designer->name}}
                        </a>
                    </td>
                    <td>{{$designer->email}}</td>
                    <td>
                        <a href="{{url("/designer/".$designer->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                        <a href="{{url("/designer/".$designer->id."/edit")}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <form action="{{url("/designer/".$designer->id)}}" method="post" class="d-inline">
                            {{ method_field('DELETE') }}
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    .container {
        margin-top: 20px;
    }

    .table th {
        background-color: #f8f9fa;
        border-color: #dee2e6;
    }

    .table td {
        vertical-align: middle;
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }
</style>
@endsection