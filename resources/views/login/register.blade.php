<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="content m-5 p-5">
        <div class="card text-center">
            <div class="card-header">
        
            </div>
            <form action="/register" method="post">
                @csrf
              <div class="card-body mt-5 ms-5 me-5 md-3">
                  <div class="form-floating mb-3">
                      <input type="text" name="username" placeholder="name@example.com" value="{{ old('username') }}">
                    </div>
                    <div class="form-floating">
                      <input type="password" name="password" placeholder="Password">
                    </div>
                    <input type="hidden" name="role" class="form-control" value="user">
                  <button class="btn btn-primary mt-4" type="submit">Register</button>
              </div>
            </form>
            <small class="d-block text-center md-3"><a href="/login">Login!</a></small>
          </div>
    </div>

</body>
</html>