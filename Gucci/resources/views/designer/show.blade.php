@extends('layout.layout')
@section('tile','edit designer')
@section('content')

<div class="row show">
    <div class="table-responsive">
      <table class="table table-striped
      table-hover	
      table-borderless
      table-primary
      align-middle">
        <thead class="table-light">
          <h1>Detail information of {{$designer->name}}</h1>
          <tr>
            <th>Infor</th>
            <th>Detail</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr class="table-primary" >
              <td scope="row">Name</td>
              <td>{{$designer->name}}</td>
            </tr>
            <tr class="table-primary">
              <td scope="row">Email</td>
              <td class="au_pub">{{$designer->email}}</td>
            </tr>
            <tr class="table-primary">
              <td scope="row">Style</td>
              <td class="au_pub">{{$designer->style}}</td>
            </tr>
          </tbody>
      </table>
      <button class="back"><a href="http://127.0.0.1:8000/designer">Back to Homepage</a></button>
    </div>

@endsection
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