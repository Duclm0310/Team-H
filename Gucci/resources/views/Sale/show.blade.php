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
  </style>
  
  @extends('layout.layout')
  @section('title','Show sale')
  @section('content')
  
  <div class="row show">
    <div class="table-responsive">
      <table class="table table-striped
      table-hover	
      table-borderless
      table-primary
      align-middle">
        <thead class="table-light">
          <h1>Detail information of {{$sale->name}}</h1>
          <tr>
            <th>Infor</th>
            <th>Detail</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr class="table-primary" >
              <td scope="row">Name</td>
              <td>{{$sale->name}}</td>
            </tr>
            <tr class="table-primary">
              <td scope="row">Content</td>
              <td>{{$sale->content}}</td>
            </tr>
          </tbody>
      </table>
      <button class="back"><a href="http://127.0.0.1:8000/sale">Back to Homepage</a></button>
    </div>
    
  @endsection