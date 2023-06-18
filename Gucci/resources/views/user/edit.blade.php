@extends('layout.layout')
@section('tile','Edit user')
@section('content')


<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-tilte">User</h3>
    </div>
    <div class="panel-body">
        <form action="/user/{{$user->id}}" method="POST" role="form">
            {{ method_field('PUT')}}
            @csrf  
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Input name" value="{{$user->name}}"></label>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Input email" value="{{$user->email}}"></label>
                </div>
                <div class="form-group">
                    <label for="">Roles</label>
                    @foreach($roles as $role)
                    <?php $checked=in_array($role->name,$role_assigments) ? 'checked':''; ?>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" {{$checked}} name="role[]" value="{{$role->id}}">
                            {{$role->name}}
                        </label>
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection