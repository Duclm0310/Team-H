@extends('layout.layout')
@section('title', 'Material')
@section('content')
<div class="container">
   <h1 class="text-center">Material</h1>
   <div class="table-responsive">
      <table class="table table-striped table-hover">
         <thead class="thead-light">
            <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Uses</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($material as $material)
            <tr>
               <td>{{$material->id}}</td>
               <td>{{$material->name}}</td>
               <td>{{$material->uses}}</td>
               <td>
                  <a href="{{url("/material/".$material->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                  <a href="{{url("/material/".$material->id."/edit")}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                  <form method="post" action="{{url("/material/".$material->id)}}" class="d-inline">
                     {{method_field('DELETE')}}
                     @csrf
                     <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
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