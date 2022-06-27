<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="content m-5 p-5">
        <div class="card text-center">
            <div class="card-header">
              
            </div>
            @if ($message = Session::get('success'))
              <div class="alert alert-success mt-2">
                <p>{{ $message }}</p>
              </div>
            @endif
            @if (session()->has('loginError'))
              <div class="alert alert-danger mt-2">
                <p>{{ session('loginError') }}</p>
              </div>
            @endif
            <form action="{{ route('authentication') }}" method="post">
              @csrf
              <div class="card-body mt-5 ms-5 me-5 md-3">
                  <div class="form-floating mb-4">
                      <input type="text" name="managerusername" placeholder="name@example.com" value="{{ old('username') }}">
               
                    </div>
                    <div class="form-floating">
                      <input type="password" name="managerpassword" placeholder="Password">
                
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Login</button>
              </div>
            </form>
            <small class="d-block text-center md-3"><a href="/register">Register!</a></small>
          </div>
    </div>

</body>
</html>