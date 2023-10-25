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
  <div class="container-fluid">
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="row justify-content-center">
        <div class="col-6 grid-margin stretch-card mt-5">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title" style="text-align:center">Login Form</h3>
              <p class="card-description "> Insert Login Credentials  </p>

              <form class="forms-sample" method="post" action="/getLoginDetails" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Username</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                  </div>
                </div>

               
                   <div style="margin-left:100px" class="mt-3">
                      <button type="submit" class="btn btn-primary mr-2 mt-2" name="submit">Submit</button>
                      <button class="btn btn-dark mt-2" >Cancel</button>
                   </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
  