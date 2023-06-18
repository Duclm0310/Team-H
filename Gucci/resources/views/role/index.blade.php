@extends('layout.layout')
@section('tile','create new role')
@section('content')

<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <h1>Roles</h1>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Permission</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($data as $model)
                <tr class="table-primary" >
                    <td scope="row">{{$model->id}}</td>
                    <td>{{$model->name}}</td>
                    <td>
                        @if (is_array($model->permissions))
                            @foreach ($model->permissions as $permission)
                            {{$permission}}|
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <form method="post" action="{{url("/role/".$model->id)}}" class="d-inline">
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