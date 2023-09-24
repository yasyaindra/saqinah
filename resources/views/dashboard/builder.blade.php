<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
        <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="{{asset("css/couple.style.css")}}" />
  </head>
  <body onload="timer('{{$date_time}}')">
    <nav class="navbar navbar-expand-lg bg-transparent">
      <div class="container d-flex justify-content-between">
        <a
          class="d-block d-lg-none text-decoration-none text-black"
          data-bs-toggle="offcanvas"
          href="#offcanvasExample"
          type="button"
          role="button"
          aria-controls="offcanvasExample"
          ><i class="fa-solid fa-bars"></i
        ></a>
        <div id="navbarNav">
          <ul class="navbar-nav d-none d-lg-flex d-none d-lg-block">
            <li class="nav-item mx-5">
              <a class="nav-link active" aria-current="page" href="#home"
                >Home</a
              >
            </li>
            <li class="nav-item mx-5">
              <a class="nav-link" href="#invitation">Invitation</a>
            </li>
            <li class="nav-item mx-5">
              <a class="nav-link" href="#venue">Venue</a>
            </li>
            <li class="nav-item mx-5">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item mx-5">
              <a class="nav-link" href="#story">Our Story</a>
            </li>
            <li class="nav-item mx-5">
              <a class="nav-link" href="#rsvp">Kehadiran</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    {{-- Will be on livewire --}}
    @livewire('web-builder')
    {{-- Will be on Livewire --}}

    <div
      class="offcanvas offcanvas-start"
      tabindex="-1"
      id="offcanvasExample"
      aria-labelledby="offcanvasExampleLabel"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Navbar</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
        <div class="container">
          <div class="row justify-content-center">
            <div
              class="col-6 nav-icon text-center d-flex flex-column mb-4"
              style="display: block"
            >
              <i class="fa-solid fa-house"></i>
              <span>
                <a href="#home" class="text-decoration-none"> Home </a>
              </span>
            </div>
            <div class="col-6 nav-icon text-center d-flex flex-column mb-4">
              <i class="fa-solid fa-envelope"></i>
              <span>
                <a href="#invitation" class="text-decoration-none">
                  Invitation
                </a>
              </span>
            </div>
            <div class="col-6 nav-icon text-center d-flex flex-column mb-4">
              <i class="fa-solid fa-location-dot"></i>
              <span>
                <a href="#venue" class="text-decoration-none"> Venue </a>
              </span>
            </div>
            <div class="col-6 nav-icon text-center d-flex flex-column mb-4">
              <i class="fa-solid fa-calendar-days"></i>
              <span>
                <a href="#schedule" class="text-decoration-none"> Schedule </a>
              </span>
            </div>
            <div class="col-6 nav-icon text-center d-flex flex-column mb-4">
              <i class="fa-solid fa-heart"></i>
              <span>
                <a href="#story" class="text-decoration-none"> Our Story </a>
              </span>
            </div>
            <div class="col-6 nav-icon text-center d-flex flex-column mb-4">
              <i class="fa-solid fa-signature"></i>
              <span>
                <a href="#rsvp" class="text-decoration-none"> RSVP </a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="audio-container">
      <audio id="song" autoplay loop>
        <source src="{{asset('audio/audio_save-and-sound.mp3')}}" type="audio/mp3" />
      </audio>
      <div class="audio-icon-wrapper" style="display: none">
        <i class="bi bi-disc"></i>
      </div>
    </div>
    <script>
    const rootElement = document.querySelector(":root");
    const audioIconWrapper = document.querySelector(".audio-icon-wrapper");
    const audioIcon = document.querySelector(".audio-icon-wrapper i");
    const song = document.querySelector("#song");

    function playAudio() {
      song.volume = 0.1;
      audioIconWrapper.style.display = "flex";
      song.pause();
      isPlaying = false;
    }

    audioIconWrapper.onclick = function () {
      if (isPlaying) {
        song.pause();
        audioIcon.classList.add("bi-disc");
        audioIcon.classList.remove("bi-pause-circle");
      } else {
        song.play();
        audioIcon.classList.remove("bi-disc");
        audioIcon.classList.add("bi-pause-circle");
      }

      isPlaying = !isPlaying;
    };
    
    function closeMenu() {
      var element = document.getElementById("custom-menu");
      element.classList.toggle("d-none");
    }

    playAudio();

    </script>
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
  </body>
</html>
