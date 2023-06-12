@extends('layout.layout')
@section('tile','gucci')
@section('content')
<div class="table-responsive">
   <table class="table table-striped
   table-hover	
   table-borderless
   table-primary
   align-middle">
       <thead class="table-light">
           <h1 class="h1">Product</h1>
           <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Price</th>
               <th>Material</th>
               <th>Biography</th>
               <th>Action</th>
           </tr>
           </thead>
           <tbody class="table-group-divider">
             @foreach ($gucci as $gucci)
               <tr class="table-primary" >
                 <td>{{$gucci->id}}</td>
                 <td>
                   <a>
                     {{$gucci->name}}
                   </a>
                 </td>
                   <td>{{$gucci->price}}</td>
                   <td>
                     <a href="{{url("/material/".$gucci->material->id)}}">
                     {{$gucci->material->name}}
                     </a>
                   </td>
                   <td>{{$gucci->biography}}</td>
                   <td>
                     <button><a href="{{url("/gucci/".$gucci->id)}}">Show</a></button>
                     <button><a href="{{url("/gucci/".$gucci->id."/edit")}}">Edit</a></button>
                     <form method="post" action="{{url("/gucci/".$gucci->id)}}" class="d-inline">
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