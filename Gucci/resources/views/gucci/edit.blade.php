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
    {{-- <div class="mb-3">
      <label for="author" class="form-label">Image</label>
      {{-- <div>Image: <img src="{{$gucci->getFirstMediaUrl('images')}}"></div> --}}
    {{-- </div> --}}
    <div class="mb-3">
      <label for="biography" class="form-label">Biography</label>
      <textarea class="form-control" id="biography" name="biography" rows="3">{{$gucci->biography}}
      </textarea>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection