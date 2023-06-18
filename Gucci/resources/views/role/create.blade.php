@extends('layout.layout')
@section('tile','create roles')
@section('content')

<form method="post" action="/role" role="form">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>
    <div class="mb-3" style="height: 300px; overflow-y:auto">
      <label for="biography" class="form-label">Routes</label>
      @foreach($routes as $route)
      <div class="checkbox">
        <label>
            <input type="checkbox" type="checkbox" class="role-item" name="route[]" value={{$route}}>
        {{$route}}
        </label>
      </div>
      @endforeach
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <label>
      <input type="checkbox" type="checkbox"  id="check-all" ng-click="check-all" >Check All
  </label>
  </form>
@endsection

@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.0/angular.min.js
"></script>
<script type="text/javascript" >

  //JQuery check box
  $('#check-all').click(function(){
      var isChecked=$(this).is(':checked');
      if(isChecked==true) {
        $('.role-item').attr('checked',true);  
        
      }else{
        $('.role-item').attr('checked',false); 
      }
  })
</script>
@endsection