@extends('layout.layout')
@section('tile','Material')
@section('content')
<div class="table-responsive">
   <table class="table table-striped
   table-hover	
   table-borderless
   table-primary
   align-middle">
       <thead class="table-light">
           <h1 class="h1">Material</h1>
           <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Uses</th>
               <th>Action</th>
           </tr>
           </thead>
           <tbody class="table-group-divider">
             @foreach ($material as $material)
               <tr class="table-primary" >
                 <td>{{$material->id}}</td>
                 <td>
                   <a>
                     {{$material->name}}
                   </a>
                 </td>
                   <td>{{$material->uses}}</td>
                   <td>
                     <button><a href="{{url("/material/".$material->id)}}">Show</a></button>
                     <button><a href="{{url("/material/".$material->id."/edit")}}">Edit</a></button>
                     <form method="post" action="{{url("/material/".$material->id)}}" class="d-inline">
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