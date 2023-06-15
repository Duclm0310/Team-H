@extends('layout.layout')
@section('tile','gucci')
@section('content')

  <div class="row">
    @foreach ($gucci as $gucci)
    <div class="ad col-lg-4">
      <div class="item">
        
              <a>
                  <img src="{{url("/upload/".$gucci->photo)}}" class="card-img-top" alt="">
              </a>
              <div class="brand">{{$gucci->name}}</div>
              <div class="sex">{{$gucci->material->name}}</div>
              <div class="sex">{{$gucci->designer->name}}</div>
              <div class="sex">
                  @foreach($gucci->sales as $sale)
                       <span >{{$sale->name}}</span>
                  @endforeach
              </div>
              <div class="price">{{$gucci->price}}</div>
              <div class="action">
                <button><a href="{{url("/gucci/".$gucci->id)}}">Show</a></button>
                <button><a href="{{url("/gucci/".$gucci->id."/edit")}}">Edit</a></button>
                <form method="post" action="{{url("/gucci/".$gucci->id)}}" class="d-inline">
                {{method_field('DELETE')}}
                @csrf
                <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are u sure?')">Delete</button>
                </form>
              </div>
      </div>
        </div>
      @endforeach
  </div>
   {{-- <table class="table table-striped
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
        
   </table> --}}


@endsection

<style>
  .ad{
		margin: 10px 0;
		width: 30%;
    margin: 30px 0;

	}
	.item{
		border: 3px solid #f4f1f1;
		text-align:left;
		height: 100%;
	}
	.item img{
		width: 100%;
		height: 40%;
	}
	.item img:hover{
		transform: scale(1.1,1.1);
	}

	.sex,.brand,.price{
		padding:0 0 5px 10px;
	}
	.sex{
		font-size: 0.7rem;
		color: rgb(103, 95, 95);
	}
	.brand{
		font-weight: 500;
	}
	.price{
		font-size: 1.2rem;
		font-weight: bold;
		margin-bottom: 10px;
	}
	.ad{
		margin: 50px 0;
	}
  .action{
    padding-left: 60px;
    margin: 20px 0;
  }
  </style>