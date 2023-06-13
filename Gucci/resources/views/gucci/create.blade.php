@extends('layout.layout')
@section('tile','create new product')
@section('content')

<section classs="form-box">
  {{-- enctype="multipart/form-data" để có thế upload file --}}
<form method="post" action="/gucci" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Product name">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Price">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Material</label>
        <select id="material" name="material" class="form-control">
            <option selected="selected">Choose material</option>
            @foreach($material as $material)
            <option value="{{$material->id}}">{{$material->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
      <label for="author" class="form-label">Designer</label>
      <select id="designer" name="designer" class="form-control">
          <option selected="selected">Choose designer</option>
          @foreach($designer as $designer)
          <option value="{{$designer->id}}">{{$designer->name}}</option>
          @endforeach
      </select>
  </div>
  <div class="form-group">
    <label for="sales">Sales</label>
    <select name="sales[]" id="sales" class="form-control" multiple>
        @foreach($sale as $sale)
        <option value="{{$sale->id}}">{{$sale->name}}</option>
        @endforeach
    </select>
</div>
    <div class="mb-3">
      <label for="biography" class="form-label">Biography</label>
      <textarea class="form-control" id="biography" name="biography" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="photo">Attach a photograph</label>
    <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-outline-primary">Submit</button>
  </div>
  </form>
</section>

<style>
   .form-box{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        margin-bottom: 10px
      }
  </style>
  @endsection