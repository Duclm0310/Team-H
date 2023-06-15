<style>
    .navbar {
        background-color: #1c2331;
        padding: 20px;
    }

    .navbar-brand {
        color: #fff;
        font-size: 24px;
        font-weight: bold;
    }

    .navbar-nav .nav-link {
        color: #fff;
        font-size: 16px;
        margin-right: 15px;
    }

    .navbar-nav .nav-link:hover {
        color: #7c4dff;
    }

    .navbar-nav .dropdown-menu {
        background-color: #1c2331;
        border: none;
        box-shadow: none;
    }

    .navbar-nav .dropdown-item {
        color: #fff;
    }

    .navbar-nav .dropdown-item:hover {
        background-color: #7c4dff;
    }

    .navbar-nav .nav-item:last-child .nav-link {
        margin-right: 0;
    }

    .navbar-nav.ml-auto .nav-link {
        margin-right: 0;
    }

    .navbar-nav.ml-auto .nav-link.btn {
        padding: 8px 20px;
        background-color: #7c4dff;
        border-radius: 30px;
        font-weight: bold;
        text-transform: uppercase;
    }
</style>

<nav class="navbar navbar-expand-sm">
    <a class="navbar-brand" href="http://127.0.0.1:8000/gucci">Gucci</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/gucci">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url("/gucci/create")}}">Product</a>
                    <a class="dropdown-item" href="{{url("/material/create")}}">Material</a>
                    <a class="dropdown-item" href="{{url("/designer/create")}}">Designer</a>
                    <a class="dropdown-item" href="{{url("/sale/create")}}">Sale</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Show all</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="http://127.0.0.1:8000/gucci">Product</a>
                    <a class="dropdown-item" href="http://127.0.0.1:8000/material">Material</a>
                    <a class="dropdown-item" href="http://127.0.0.1:8000/designer">Designer</a>
                    <a class="dropdown-item" href="http://127.0.0.1:8000/sale">Sale</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="/logout">Logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link btn" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="/register">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav>