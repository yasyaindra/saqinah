<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Saqinah | Free Online Wedding Invitation Builder</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow">
      <div class="container align-items-center">
        <a class="navbar-brand font-tangerine fw-bold" href="{{route('home')}}">Saqinah</a>
        <div id="navbarNav" class="navbar-collapse collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">Cara Penggunaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">Fitur</a>
            </li>
          </ul>
        </div>
        <div>
          <a
            class="btn btn-light btn-outline-secondary fw-bold"
            href="{{route('login')}}"
            >Login</a
          >
          <a class="btn btn-dark" href="{{route('register')}}">Daftar</a>
        </div>
      </div>
    </nav>
    <div class="container mt-5 mb-5">
      <div class="row align-items-center" style="height: 90vh">
        <div class="col-lg-6 mb-3 order-2 order-lg-1 d-none d-lg-block">
          <img src="/img/login.png" alt="" width="480" class="img-fluid" />
        </div>
        <div class="col-lg-6 mb-3 order-1 order-lg-2">
          @if (session('success'))
              <p class="alert alert-success">{{ session('success') }}</p>
          @endif
          @if ($errors->any())
              @foreach ($errors->all() as $err)
                  <p class="alert alert-danger">{{ $err }}</p>
              @endforeach
          @endif
          <div class="card border-0">
            <div class="card-body">
              <h3 class="card-title fw-bold">Masuk</h3>
              <form method="POST" action="{{route('login.auth')}}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"
                    >Email address</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    aria-describedby="emailHelp" name="email"
                  />
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label"
                    >Password</label
                  >
                  <input
                    type="password"
                    class="form-control" name="password"
                    id="exampleInputPassword1"
                  />
                  <div id="login" class="form-text">
                    Belum Punya akun? Daftar <a href="{{route('register')}}">disini!</a>
                  </div>
                </div>
                <button type="submit" class="btn btn-dark">Masuk</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://kit.fontawesome.com/4c03683015.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
