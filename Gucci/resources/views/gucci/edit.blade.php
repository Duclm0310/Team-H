@extends('layout.layout')
@section('tile','create new product')
@section('content')

<form method="post" action="/gucci/{{$gucci->id}}">
    {{method_field('PUT')}}
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Product name"
        value={{$gucci->name}}>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Price"
        value={{$gucci->price}}>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Material</label>
        <select id="material" name="material" class="form-control">
            <option selected="selected">Choose material</option>
            @foreach($material as $material)
          <option {{($material->id==$gucci->material->id)?"selected":""}} value="{{$material->id}}">{{$material->name}}</option>
          @endforeach
        </select>
    </div>
    <div class="mb-3">
      <label for="author" class="form-label">Designer</label>
      <select id="material" name="material" class="form-control">
          <option selected="selected">Choose designer</option>
          @foreach($designer as $designer)
        <option {{($designer->id==$gucci->designer->id)?"selected":""}} value="{{$designer->id}}">{{$material->name}}</option>
        @endforeach
      </select>
  </div>
  <div class="form-group">
    <label for="sales">Sales</label>
    <select name="sales[]" id="sales" class="form-control" multiple>
        @foreach($sale as $sale)
        <option value="{{$sale->id}}" @if($gucci->sales->contains($sale->id)) selected @endif>{{$sale->name}}</option>
        @endforeach
    </select>
  </div>
    <div class="mb-3">
      <label for="biography" class="form-label">Biography</label>
      <textarea class="form-control" id="biography" name="biography" rows="3">{{$gucci->biography}}
      </textarea>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection