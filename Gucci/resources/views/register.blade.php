
 <!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                      <h2 class="fw-bold mb-5">Register now</h2>
                      <form action="/register" method="post">
                        @csrf
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <input type="text"  name="name" id="name" class="form-control" />
                              <label class="form-label" for="name">First name</label>
                            </div>
                          </div>
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <input type="text" id="form3Example2" class="form-control" />
                              <label class="form-label" for="form3Example2">Last name</label>
                            </div>
                          </div>
                        </div>
            
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                          <input type="email" name="email" id="email" class="form-control" />
                          <label class="form-label" for="email">Email address</label>
                        </div>
            
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                          <input type="password" name="password" id="password" class="form-control" />
                          <label class="form-label" for="pwd">Password</label>
                        </div>

                        <!-- Password re-input -->
                        <div class="form-outline mb-4">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
                        <label class="form-label" for="pwd">Repeate Password</label>
                        </div>
            
                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                          <label class="form-check-label" for="form2Example33">
                            Subscribe to our newsletter
                          </label>
                        </div>
            
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">
                          Sign up
                        </button>
                      </form>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>


  </main>
  <footer>

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