<style>
    .show{
      width: 100%;
      height: 220px;
      padding-top: 35px;
      margin-bottom: 200px;
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
    
    }
    .show th{
      text-align: center;
      
    }
    .show td:first-child{
      width: 25%;
      text-align: center;
      
    }
    .show td:last-child{
      text-emphasis: none;
    }
    
    .au_pub{
      font-size: 17px;
    }
    .price{
      font-size: 16px;
      color: red;
    }
    .back:hover{
      background-color: aqua;
    }
    /* img{
      width: 30%;
      height: 100px;
    } */
    </style>
    
    @extends('layout.layout')
    @section('title','Show author')
    @section('content')
    
    <div class="row show">
      <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
          <thead class="table-light">
            <h1>Detail information of {{$gucci->name}}</h1>
            <tr>
              <th>Infor</th>
              <th>Detail</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr class="table-primary" >
                <td scope="row">Name</td>
                <td>{{$gucci->name}}</td>
              </tr>
              {{-- <tr class="table-primary" >
                <td scope="row">Image</td>
                <td><img src="{{url("/upload/".$gucci->photo)}}" class="card-img-top" alt=""></td>
              </tr> --}}
              <tr class="table-primary">
                <td scope="row">Price</td>
                <td class="au_pub">{{$gucci->price}}</td>
              </tr>
              <tr class="table-primary">
                <td scope="row">Material</td>
                <td class="au_pub">{{$gucci->material->name}}</td>
              </tr>
              <tr class="table-primary">
                <td scope="row">Designer</td>
                <td class="au_pub">{{$gucci->designer->name}}</td>
              </tr>
              <tr class="table-primary">
                <td scope="row">Sale</td>
                @foreach($gucci->sales as $sale)
                  <td class="au_pub">{{$sale->name}}</td>
                @endforeach
              </tr>
              <tr class="table-primary">
                <td scope="row">Biography</td>
                <td>{{$gucci->biography}}</td>
              </tr>
            </tbody>
        </table>
        <button class="back"><a href="http://127.0.0.1:8000/gucci">Back to Homepage</a></button>
      </div>
      
    @endsection