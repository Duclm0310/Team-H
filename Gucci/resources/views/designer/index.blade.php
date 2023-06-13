@extends('layout.layout')
@section('tile','Designer')
@section('content')

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-light">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                  @foreach ($designers as $designer)
                  <tr class="table-primary" >
                    <td>
                      <a href="{{url("/designer/".$designer->id)}}">
                      {{$designer->name}}
                      </a>
                    </td>
                    <td>{{$designer->email}}</td>
                    <td>
                      <a href="{{url("/designer/".$designer->id)}}" class="btn btn-primary">View</a>
                      <a href="{{url("/designer/".$designer->id."/edit")}}" class="btn btn-warning">Edit</a>
                      <form action="{{url("/designer/".$designer->id)}}" method="post" class="d-inline">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
            </tbody>
    </table>
  </div>
@endsection