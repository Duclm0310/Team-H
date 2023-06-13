
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
   <header>
      @include("layout.navbar");
   </header>
  <main>
    <div class="table-responsive">
      <table class="table table-striped table-hover">
          <thead class="table-light">
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
              </tr>
              </thead>
              <tbody class="table-group-divider">
                    @foreach ($designers as $designer)
                    <tr class="table-primary" >
                      <td>
                        <a href="{{url("/designer/".$designer->id)}}">
                        {{$designer->name}}
                        </a>
                      </td>
                      <td>{{$designer->email}}</td>
                      <td>
                        <a href="{{url("/designer/".$designer->id)}}" class="btn btn-primary">View</a>
                        <a href="{{url("/designer/".$designer->id."/edit")}}" class="btn btn-warning">Edit</a>
                        <form action="{{url("/designer/".$designer->id)}}" method="post" class="d-inline">
                          {{ method_field('DELETE') }}
                          @csrf
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
              </tbody>
              <tfoot>
                  
              </tfoot>
      </table>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>