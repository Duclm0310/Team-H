@extends('layout.layout')
@section('title', 'Sales')
@section('content')
<div class="container">
   <h1 class="text-center">Sale</h1>
   <div class="table-responsive">
      <table class="table table-striped table-hover">
         <thead class="thead-light">
            <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Content</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($sale as $sale)
            <tr>
               <td>{{$sale->id}}</td>
               <td>{{$sale->name}}</td>
               <td>{{$sale->content}}</td>
               <td>
                  <a href="{{url("/sale/".$sale->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                  <a href="{{url("/sale/".$sale->id."/edit")}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                  <form method="post" action="{{url("/sale/".$sale->id)}}" class="d-inline">
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