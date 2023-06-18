@extends('layout.layout')
@section('tile','create new USer')
@section('content')

<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <h1>Users</h1>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($data as $model)
                <tr class="table-primary" >
                    <td scope="row">{{$model->id}}</td>
                    <td>{{$model->name}}</td>
                    <td>{{$model->email}}</td>
                    <td>
                        <a href="{{route('user.edit',$model->id)}}" class="btn btn-primary">Edit</a>
                        <form method="post" action="{{url("/user/".$model->id)}}" class="d-inline">
                            {{method_field('DELETE')}}
                            @csrf
                            <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are u sure?')">Delete</button>
                            </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
    </table>
</div>

@endsection