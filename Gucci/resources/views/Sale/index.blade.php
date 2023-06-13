@extends('layout.layout')
@section('tile','Sales')
@section('content')
<div class="table-responsive">
   <table class="table table-striped
   table-hover	
   table-borderless
   table-primary
   align-middle">
       <thead class="table-light">
           <h1 class="h1">Sale</h1>
           <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Content</th>
               <th>Action</th>
           </tr>
           </thead>
           <tbody class="table-group-divider">
             @foreach ($sale as $sale)
               <tr class="table-primary" >
                 <td>{{$sale->id}}</td>
                 <td>
                   <a>
                     {{$sale->name}}
                   </a>
                 </td>
                   <td>{{$sale->content}}</td>
                   <td>
                     <button><a href="{{url("/sale/".$sale->id)}}">Show</a></button>
                     <button><a href="{{url("/sale/".$sale->id."/edit")}}">Edit</a></button>
                     <form method="post" action="{{url("/sale/".$sale->id)}}" class="d-inline">
                     {{method_field('DELETE')}}
                     @csrf
                     <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are u sure?')">Delete</button>
                     </form>
                   </td>
               </tr>
               @endforeach
           </tbody>
   </table>
 </div>

@endsection