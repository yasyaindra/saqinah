<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Wedding of {{$content->name_male}} dan {{$content->name_female}}</title>
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
    <link rel="stylesheet" href="css/couple.style.css" />
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
          <ul class="navbar-nav d-none d-lg-flex d-lg-block">
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
              <a class="nav-link" href="#schedule">Jadwal</a>
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
    <!-- Hero -->
    <section
      class="hero-section container mt-5 d-flex align-items-center justify-content-center"
      style="height: 80vh"
      id="home"
    >
      <div class="text-center">
        <h1 class="hero-title text-center">{{ $content->name_male }} & {{$content->name_female}}</h1>
        <div class="rsvp-section text-center">
          <h5 class="text-uppercase fw-bold">Save The Date</h5>
          <h6 class="fst-italic">{{\Carbon\Carbon::createFromTimeStamp(strtotime($content->date))->format('l, j F Y')}}</h6>
        </div>
      </div>
    </section>
    <!-- End Hero -->
    <!-- Invitation -->
    <section class="invitation container mt-5" id="invitation">
      <div class="row" style="background-color: #e5e1d8">
        <div class="col-lg-6">
          <div class="row justify-content-center">
            <div class="col-lg-5 pt-5 pb-5">
                <h6 class="text-center text-uppercase">UNTUK</h6>
                <h1 class="text-center invitation-title text-capitalize">
                    {{$guest}}
              </h1>
            </div>
            <p class="text-center">بسم لله الرحمن الرحيم</p>
            <p class="p-5 pt-0 pb-0 text-lg-center">
              Dengan mengucap rasa syukur, kami mengundang bapak/ibu/saudara untuk menghadiri acara pernikahan putra kami
            </p>
            <p class="p-5 pt-0 pb-5 text-lg-center">
              Suatu kesenangan apabila saudara berkenan untuk menghadiri acara sakral tersebut di lokasi dan waktu yang sudah kami tentukan
            </p>
          </div>
        </div>
        <div class="col-lg-6" style="  background-image: url('{{asset('storage/'.$content->couple_photo)}}');
        background-position: center;"></div>
      </div>
    </section>
    <!-- End Invitation -->
    <!-- Date -->
    <section class="date-section container pb-5">
      <div class="row justify-content-center">
        <h1 class="text-center fw-bold date-title">{{\Carbon\Carbon::createFromTimeStamp(strtotime($content->date))->format('l, j F Y')}}</h1>
        <p class="text-center mb-5">{{$content->wedding_address}}</p>
        <div class="col-3 col-lg-3 text-center">
          <h2 class="mb-3 fw-bold">
          <span id="cd-days"></span>  
          </h2>
          <p>Days</p>
        </div>
        <div class="col-3 col-lg-3 text-center">
          <h2 class="mb-3 fw-bold">
            <span id="cd-hours"></span>
          </h2>
          <p>Hours</p>
        </div>
        <div class="col-3 col-lg-3 text-center">
          <h2 class="mb-3 fw-bold">
            <span id="cd-minutes"></span>
          </h2>
          <p>Mins</p>
        </div>
        <div class="col-3 col-lg-3 text-center">
          <h2 class="mb-3 fw-bold">
            <span id="cd-seconds"></span>
          </h2>
          <p>Sec</p>
        </div>
      </div>
    </section>
    <!-- End Date -->
    <!-- Venue -->
    <div style="background-color: #fafafa" id="venue">
      <section>
        <div class="venue-section container pt-5">
          <div class="row">
            <div class="col-lg-6 mb-5">
              <h2 class="fw-bold pb-3">WEDDING VENUE</h2>
              <p class="fst-italic">
                "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang"
              </p>
              <p class="pb-5">QS. Arrum Ayat 21</p>
              <a href="{{$content->venue_url}}" class="venue-button text-uppercase">Venue Website</a>
            </div>
            <div class="col-lg-6 mb-5">
              {!!
              $content->venue_iframe
              !!}
            </div>
          </div>
        </div>
      </section>
      <!-- End Venue -->
      <!-- Reception -->
      <section
        class="container mt-5"
        style="padding-bottom: 150px"
        id="schedule"
      >
        <div class="row justify-content-around">
          <div
            class="col-lg-5 py-5 text-center"
            style="background-color: #eeede8"
          >
            <img
              src="/img/wedding.png"
              class="img-fluid mb-3"
              alt=""
              width="120px"
            />
            <h1 class="fw-bold text-uppercase">Reception</h1>
            <p>{{$content->reception_address}}</p>
            <p>{{$content->reception_time}} WIB</p>
          </div>
          <div
            class="col-lg-5 py-5 text-center"
            style="background-color: #eeede8"
          >
            <img
              src="/img/ring.png"
              class="img-fluid mb-3"
              alt=""
              width="120px"
            />
            <h1 class="text-center fw-bold text-uppercase">Wedding</h1>
            <p>{{$content->wedding_address}}</p>
            <p>{{$content->wedding_time}} WIB</p>
          </div>
        </div>
      </section>
      <!-- End Reception -->

    </div>
    <div style="background-color: #eeede8" id="story">
      <div class="container mt-5">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-6 text-center">
            <h1 class="story-title">Our Story</h1>
            <p>
                {{$content->our_story}}
            </p>
          </div>
        </div>
        <div class="row justify-content-center mb-5">
          <div class="col-6 col-lg-6 text-end">
            <img
              src="{{asset('storage/'. $content->first_our_story_photo)}}"
              class="img-fluid"
              width="320px"
              alt=""
            />
          </div>
          <div class="col-6 col-lg-6">
            <img
              src="{{asset('storage/'. $content->second_our_story_photo)}}"
              class="img-fluid"
              width="320px"
              alt=""
            />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 text-start">
            <h1 class="gift-title text-start">Amplop Digital</h1>
            <div class="row justify-content-center">
              @foreach ($content->user->banks as $bank)
              <div class="col-lg-4 col-6 mb-3">
                <div class="d-flex gap-3 align-items-center">
                  <h5 class="fw-bold">{{ $bank->bank_name }}</h5>
                  <h6 class="badge rounded-pill text-bg-{{$bank->type === 'bank' ? 'primary' : 'success'}} text-capitalize">{{$bank->type}}</h6>
                </div>
                <p>an. {{$bank->name}}</p>
                <img src="{{asset('storage/'.$bank->qr_code)}}" class="img-fluid mb-3" alt="">
                <input type="text" class="form-control fw-bold" value="{{$bank->balance_number}}">
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <section class="cake-section mt-5"></section>
    </div>

    <div style="background-color: #fafafa; padding-top: 60px" id="rsvp">
      <section class="attendance pb-5">
        <div class="container">
          <h1 class="attendance-title text-center">Konfirmasi Kehadiran</h1>
          <p class="text-center">
            Kirimkan doa dan harapan melalui form dibawah
          </p>
          @livewire('guest-book', ['slug' => $content->slug])
        </div>
      </section>
    </div>

    <div style="background-color: #eeede8" class="pb-5">
      <h1 class="message-title p-5 text-center pb-0">
        Don't hesitate to reach out
      </h1>
      <h4 class="text-uppercase text-center fw-bold">Contact</h4>
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-lg-4">
              <p>
                {{$content->phone_number}}
              </p>
          </div>
        </div>
      </div>
    </div>
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
        <source src="{{asset('storage/' . $content->music_file)}}" type="audio/mp3" />
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

    playAudio();

      function timer(date_time) {
        const today = new Date();
        const tomorrow = new Date(date_time);
        
        date = tomorrow.setDate(tomorrow.getDate() + 1);
        
        let timer =
          Math.round(new Date(date).getTime() / 1000) -
          Math.round(new Date().getTime() / 1000);
        let minutes, seconds;
        setInterval(function () {
          if (--timer < 0) {
            timer = 0;
          }
          days = parseInt(timer / 60 / 60 / 24, 10);
          hours = parseInt((timer / 60 / 60) % 24, 10);
          minutes = parseInt((timer / 60) % 60, 10);
          seconds = parseInt(timer % 60, 10);
    
          days = days < 10 ? "0" + days : days;
          hours = hours < 10 ? "0" + hours : hours;
          minutes = minutes < 10 ? "0" + minutes : minutes;
          seconds = seconds < 10 ? "0" + seconds : seconds;
    
          document.getElementById("cd-days").innerHTML = days;
          document.getElementById("cd-hours").innerHTML = hours;
          document.getElementById("cd-minutes").innerHTML = minutes;
          document.getElementById("cd-seconds").innerHTML = seconds;
        }, 1000);
      };
    
      //using the function
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
