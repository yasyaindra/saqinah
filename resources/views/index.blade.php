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
    <link rel="stylesheet" href="{{asset("css/style.css")}}" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow">
      <div class="container align-items-center">
        <a class="navbar-brand font-tangerine fw-bold" href="#">Saqinah</a>
        <div id="navbarNav" class="navbar-collapse collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#demo">Cara Penggunaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#feature">Fitur</a>
            </li>
          </ul>
        </div>
        <div>
          @guest
          <a
            class="btn btn-light btn-outline-secondary fw-bold"
            href="{{route('login')}}"
            >Login</a
          >
          <a class="btn btn-dark" href="{{route('register')}}">Daftar</a>
          @endguest
          @auth
          <a class="btn btn-dark" href="{{route('dashboard')}}">Dashboard</a>
          @endauth
        </div>
      </div>
    </nav>
    <section class="container mt-5">
      <div class="row hero-section align-items-center">
        <div class="col-lg-8">
          <h1 class="font-tangerine hero-size">
            Buat Undangan Pernikahan Online Gratis!
          </h1>
          <p>
            Masa aktif selamanya.
            <span class="fw-bold">Tanpa bayar sepeserpun</span>
          </p>
          <div>
            <a href="{{route('dashboard')}}" class="btn btn-dark mt-3 fw-bold"
              ><i class="fa-solid fa-heart-circle-bolt"></i> Buat Undanganmu
              Sekarang!</a
            >
          </div>
        </div>
      </div>
    </section>
    <section class="container mt-5" id="demo">
      <div class="row justify-content-between">
        <div class="col-lg-6">
          <h1 class="font-tangerine section-title">
            Cara Membuat Undangan Kamu
          </h1>
          <p>
            Cara mudah membuat undangan, hanya butuh 5 menit undangan kamu sudah
            bisa di sebarkan.
          </p>
          <div class="d-flex align-items-center section-icon mb-2 gap-3">
              <i class="fa-solid fa-right-to-bracket"></i>
              <p>Registrasi</p>
          </div>
          <div class="d-flex align-items-center section-icon mb-2 gap-3">
              <i class="fa-solid fa-calendar-days"></i>
              <p>Isi Info Acara</p>
          </div>
          <div class="d-flex align-items-center section-icon mb-2 gap-3">
              <i class="fa-solid fa-share-from-square"></i>
              <p>Sebarkan</p>
          </div>
        </div>
        <div class="col-lg-6 text-end">
          <iframe
            width="100%"
            class="image-radius"
            height="315"
            src="https://www.youtube.com/embed/D0UnqGm_miA?si=SkJJYpvH1sW0mHQj"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </section>
    <section class="container" style="margin-top: 120px" id="feature">
      <h1 class="font-tangerine hero-size fw-bold text-center mb-5">
        Fitur Keren
      </h1>
      <div class="row justify-content-center">
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow" style="height: 140px">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-2 col-lg-2 text-center section-icon">
                  <i class="fa-solid fa-music"></i>
                </div>
                <div class="col col-lg">
                  <h5 class="card-title fw-bold">Musik</h5>
                  <p class="card-text">
                    Pasang musik pengiring di undanganmu
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow" style="height: 140px">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-2 col-lg-2 text-center section-icon">
                  <i class="fa-solid fa-map-location-dot"></i>
                </div>
                <div class="col col-lg">
                  <h5 class="card-title fw-bold">Lokasi Google Map</h5>
                  <p class="card-text">
                    Bantu tamumu menemukan lokasi pesta pernikahanmu dengan mudah menggunakan link Google Map
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow" style="height: 140px">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-2 col-lg-2 text-center section-icon">
                  <i class="fa-solid fa-user-check"></i>
                </div>
                <div class="col col-lg">
                  <h5 class="card-title fw-bold">Buku Tamu</h5>
                  <p class="card-text">
                    Tulis siapa saja nama tamu yang ingin kamu undang
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow" style="height: 140px">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-2 col-lg-2 text-center section-icon">
                  <i class="fa-solid fa-images"></i>
                </div>
                <div class="col col-lg">
                  <h5 class="card-title fw-bold">Image Gallery</h5>
                  <p class="card-text">
                    Tunjukan foto prewedding terbaikmu
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow" style="height: 140px">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-2 col-lg-2 text-center section-icon">
                  <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
                <div class="col col-lg">
                  <h5 class="card-title fw-bold">Countdown</h5>
                  <p class="card-text">
                    Hitung mundur momen sakral yang akan kamu adakan
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow" style="height: 140px">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-2 col-lg-2 text-center section-icon">
                  <i class="fa-solid fa-heart"></i>
                </div>
                <div class="col col-lg">
                  <h5 class="card-title fw-bold">Love Stories</h5>
                  <p class="card-text">
                    Ceritakan kisah cintamu
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow" style="height: 140px">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-2 col-lg-2 text-center section-icon">
                  <i class="fa-solid fa-pen-ruler"></i>
                </div>
                <div class="col col-lg">
                  <h5 class="card-title fw-bold">
                    Design Elegan dan Responsive
                  </h5>
                  <p class="card-text">
                    Design simple, sederhana, dan responsive untuk tampilan mobile
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow" style="height: 140px">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-2 col-lg-2 text-center section-icon">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
                <div class="col col-lg">
                  <h5 class="card-title fw-bold">Sebar Melalui Link</h5>
                  <p class="card-text">
                    Generate link secara otomatis ke semua sosial media
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow" style="height: 140px">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-2 col-lg-2 text-center section-icon">
                  <i class="fa-solid fa-pen-to-square"></i>
                </div>
                <div class="col col-lg">
                  <h5 class="card-title fw-bold">Real Time Editing</h5>
                  <p class="card-text">
                    Edit undanganmu secara real-time pada undangan builder
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow" style="height: 140px">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-2 col-lg-2 text-center section-icon">
                  <i class="fa-solid fa-bell"></i>
                </div>
                <div class="col col-lg">
                  <h5 class="card-title fw-bold">Notification</h5>
                  <p class="card-text">
                    Ada kolom pemberitahuan siapa saja yang mengirimkanmu pesan dan harapan
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow" style="height: 140px">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-2 col-lg-2 text-center section-icon">
                  <i class="fa-regular fa-address-card"></i>
                </div>
                <div class="col col-lg">
                  <h5 class="card-title fw-bold">Nama Tamu</h5>
                  <p class="card-text">
                    Kirimkan undanganmu dengan sedikit kata kunci dan nama tamu-mu
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow" style="height: 140px">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-2 col-lg-2 text-center section-icon">
                  <i class="fa-solid fa-envelope-open-text"></i>
                </div>
                <div class="col col-lg">
                  <h5 class="card-title fw-bold">Amplop Digital</h5>
                  <p class="card-text">
                   Tambahkan cara pembayaran untuk mengirimkan bingkisan suka cita dari tamumu
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <h4 class="text-center p-5">Yasya Technology</h4>
      </div>
    </footer>
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
