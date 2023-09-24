<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/dashboard.style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/{{Auth::user()->content->slug}}" target="_blank"">Lihat Undanganku</a>
            </li>
          </ul>
        </div>
        <div class="d-flex align-items-center gap-2">
          <a href="" class="btn btn-light"
            >
            <i class="fa-solid fa-gear"></i>
          </a>
          <a href="{{route('logout')}}" class="btn btn-danger"
            ><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
      <h2 class="fw-bold">Overview Undanganmu</h2>
      @auth
      <div class="row mt-3">
        <div class="col-lg">
          <div class="card shadow">
            <div class="card-body">
              <div class="row justify-content-between">
                <div class="col-lg-8 mb-3">
                  <h5 class="card-title fw-bold">Selamat Datang, {{Auth::user()->name}}!</h5>
                  <p class="card-text">
                    Yuk, kreasikan undanganmu sekarang dan sebarkan ke teman
                    teman terdekatmu!
                  </p>
                </div>
                <div
                  class="col-lg mb-3 align-self-center text-lg-end text-start"
                >
                  <a href="https://wa.me/6281285849052" class="btn btn-success">
                    <i class="fa-solid fa-comments"></i>
                    Bantuan
                  </a>
                  <a href="https://saweria.co/yasyaindra" class="btn btn-warning" target="_blank">Donasi</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endauth
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-4 mb-4">
          @auth
          <a href="{{route('builder', Auth::user()->content->id)}}" class="text-decoration-none">
            <div class="card menu-item h-100">
              <div class="card-body">
                <div class="d-flex">
                  <div class="p-3 text-center">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </div>
                  <div>
                    <h5 class="card-title text-dark fw-bold">Edit Undangan</h5>
                    <p class="card-text">Edit undanganmu secara realtime</p>
                  </div>
                </div>
              </div>
            </div>
          </a>
          @endauth
        </div>
        <div class="col-lg-4 mb-4">
          <a href="{{route('dashboard.guest')}}" class="text-decoration-none">
            <div class="card menu-item h-100">
              <div class="card-body">
                <div class="d-flex">
                  <div class="p-3 text-center">
                    <i class="fa-solid fa-book"></i>
                  </div>
                  <div>
                    <h5 class="card-title text-dark fw-bold">Buku Tamu</h5>
                    <p class="card-text">
                      Tulis siapa saja yang kamu undang ke pesta mu
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 mb-4">
          <a href="{{route('dashboard.bank')}}" class="text-decoration-none">
            <div class="card menu-item h-100">
              <div class="card-body">
                <div class="d-flex">
                  <div class="p-3 text-center">
                    <i class="fa-solid fa-bank"></i>
                  </div>
                  <div>
                    <h5 class="card-title text-dark fw-bold">Daftar Bank</h5>
                    <p class="card-text">
                      Tambah cara pembayaran untuk amplop digitalmu
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="container">
      <h2 class="fw-bold">Ucapan & Harapan</h2>
      @if (count($guests) > 0)
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          @foreach ($guests->chunk(4) as $key => $group)
          <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
            <div class="row">
              @foreach ($group as $guest)
              <div class="col-lg-3 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">{{$guest->name}}</h5>
                    <h6 class="card-subtitle badge bg-{{$guest->is_present ? 'success':'danger'}} mb-2">{{$guest->is_present?' Hadir':' Tidak Hadir'}}</h6>
                    <p class="card-text">
                      {{$guest->message}}
                    </p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          @endforeach
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      @else
      <div>
        <p class="text-center p-5">Belum Ada Pesan</p>  
      </div>
      @endif
    </div>
  </body>
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
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"
  ></script>
</html>
