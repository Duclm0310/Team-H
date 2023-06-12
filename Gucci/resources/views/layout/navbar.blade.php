<style>
    .h1{
      text-align: center;
      margin: 20px 0;
    }
    a{
      text-decoration: none;
      color: black;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    button{
      background-color: rgb(253, 31, 64);
    }
    </style>
<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(13, 13, 110);">
    <a class="navbar-brand" href="#">HieuStore</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="http://127.0.0.1:8000/books" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="{{url("/books/create")}}">Book</a>
                    <a class="dropdown-item" href="{{url("/authors/create")}}">Author</a>
                    <a class="dropdown-item" href="{{url("/categories/create")}}">Category</a>
                    <a class="dropdown-item" href="{{url("/tags/create")}}">Tag</a>
                </div>
            </li>
        
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Show all</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="http://127.0.0.1:8000/books">Book</a>
                    <a class="dropdown-item" href="http://127.0.0.1:8000/authors">Author</a>
                    <a class="dropdown-item" href="http://127.0.0.1:8000/categories">Category</a>
                    <a class="dropdown-item" href="http://127.0.0.1:8000/tags">Tag</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ Auth::user()->name }} <span class="visually-hidden"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout <span class="visually-hidden"></span></a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login <span class="visually-hidden"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register <span class="visually-hidden"></span></a>
                </li>
            @endif
            </ul>
            
    </div>
</nav>