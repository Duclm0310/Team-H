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
               <th>Product</th>
               <th>Status</th>
               <th>Action</th>
           </tr>
           </thead>
           <tbody class="table-group-divider">
             @foreach ($buys as $buy)
               <tr class="table-primary" >
                 <td>{{$buy->id}}</td>
                 <td>
                   <a>
                     {{$buy->gucci->name}}
                   </a>
                 </td>
                   <td>{{$buy->status}}</td>
                   <td>
                     {{-- <button><a href="{{url("/material/".$material->id)}}">Show</a></button>
                     <button><a href="{{url("/material/".$material->id."/edit")}}">Edit</a></button>
                     <form method="post" action="{{url("/material/".$material->id)}}" class="d-inline">
                     {{method_field('DELETE')}}
                     @csrf --}}
                     
                     <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are u sure?')"><a href="{{url("/gucci/".$buy->id."/refund")}}" class="cart-btn">Refund</a></button>
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