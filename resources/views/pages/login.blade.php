<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <?php include('header.php'); ?>
  
<div aria-label="breadcrumb" class="breadcrumb-container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="/login">Login</a></li>
    </ol>
</div>
<div class="navbar navbar-expand-lg navbar-light bg-light" style="z-index: -1">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
                <div class="my-account">
                    <h3>My Account</h3>
                    <h5>Login</h5>
                </div>
        </div>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</div>

  <div class="container">
    <div class="form-login justify-content-between pt-5 row">
        <div class="card col-7">
            <div class="card-body">
                
@if(Session::has('error'))
<div class="alert alert-danger">
    {{ Session::get('error') }}
    @php
        Session::forget('error');
    @endphp
</div>
@endif
                <div class="form-login">
                    <form action="{{route('login.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div> 
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
          </div>

        <div class="navbar-login col-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit praesentium, sit natus pariatur nulla magni distinctio quos dolorum itaque aut minus quam unde voluptate eum ipsam? Quasi amet voluptate aliquam.
        </div>
    </div>
</div>
</body>
</html>