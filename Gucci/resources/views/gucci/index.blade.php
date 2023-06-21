@extends('layout.layout')
@section('title', 'gucci')
@section('content')
  <div class="row" style="margin-top: 30px" >
    @foreach ($gucci as $gucci)
      <div class="ad col-lg-4" style="height: 35%">
        <div class="item">
          <a>
            <img src="{{ url("/upload/".$gucci->photo) }}" class="item-image" alt="">
          </a>
          <div class="brand">{{ $gucci->name }}</div>
          <div class="sex">{{ $gucci->material->name }}</div>
          <div class="sex">{{ $gucci->designer->name }}</div>
          <div class="sex">
            @foreach($gucci->sales as $sale)
              <span class="sale-name">{{ $sale->name }}</span>
            @endforeach
          </div>
          <div class="price">{{ $gucci->price }}</div>
          <div class="action">
            <div class="btn-group">
              <a href="{{ url("/gucci/".$gucci->id) }}" class="btn btn-round btn-show" title="Show">
                <i class="fas fa-eye"></i>
              </a>
              <a href="{{ url("/gucci/".$gucci->id."/edit") }}" class="btn btn-round btn-edit" title="Edit">
                <i class="fas fa-edit"></i>
              </a>
              <form method="post" action="{{ url("/gucci/".$gucci->id) }}" class="d-inline">
                {{ method_field('DELETE') }}
                @csrf
                <button class="btn btn-round btn-delete" type="submit" onclick="return confirm('Are you sure?')"
                  title="Delete">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection

<style>
  /* Existing CSS styles */

  .btn {
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    background-color: #f4f1f1;
    border: none;
    transition: background-color 0.3s;
    cursor: pointer;
  }

  .btn-round {
    margin-right: 5px;
  }

  .btn:hover {
    background-color: #ccc;
  }

  .btn i {
    font-size: 18px;
    color: #000;
  }

  /* Additional CSS for unique class names */

  .item-image {
    width: 100%;
    height: 40%;
  }

  .sale-name {
    font-size: 0.7rem;
    color: rgb(103, 95, 95);
  }

  .brand {
    font-weight: 500;
  }

  .price {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .ad {
    margin: 50px 0;
  }

  .action {
    margin-top: 10px;
  }

  .btn-group {
    display: flex;
  }
</style>