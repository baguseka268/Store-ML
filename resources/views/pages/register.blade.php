<!DOCTYPE html>
<html lang="en">
  
<head>
  @include('includes.head')
</head>
<body>

  <header>
    @include('includes.header')
  </header>
    <div aria-label="breadcrumb" class="breadcrumb-container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/register">Register</a></li>
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
                        <h5>Register</h5>
                    </div>
            </div>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>

    {{-- form lojin --}}
    <div class="container-row">
        <div class="col-md-8 p-4">
            <div class="card card-regis">
                <div class="card-body">
                  
                  <form class="form-bg" action='/register' method="POST">
                      @csrf
                        <div class="mb-3">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div> 
                        <div class="mb-3">
                            <label for="">Email address</label>
                            <input type="email" class="form-control" name="email">
                        </div>
        
                        <div class="mb-3">
                            <label for="">Nomor Hpmu Cok!</label>
                            <input type="text" class="form-control" name="number">
                        </div>
        
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>

<footer>
  @include('includes.footer')
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
</body>
</html>