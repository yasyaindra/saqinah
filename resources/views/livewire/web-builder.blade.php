<div>
      <!-- Customizable Menu -->
    <div class="customizable-menu mt-5 mx-3">
        <h3 class="fw-bold">Preview</h3>
        <button type="button" class="btn btn-primary fw-bold" onclick="closeMenu()">Munculkan Menu</button>
        <a class="btn btn-light btn-outline-success fw-bold" href="{{route('invite', ['name' => Auth::user()->content->slug])}}" target="_blank">Link Undangan</a>
    </div>
    <div class="customizable-menu" id="custom-menu">
      <div class="row">
        <div class="col-lg-4">
          <div class="container">
            <div class="card" style="overflow-y: scroll; height: 632px">
              <div class="card-body">
                <div class="card-title d-flex justify-content-between align-items-center mb-3 sticky-top py-3 bg-white">
                  <h5 class="card-title fw-bold text-secondary">
                    Kustomisasi Undangan
                  </h5>
                  <button type="button" class="btn btn-primary" onclick="closeMenu()"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <form wire:submit="storeData" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg mb-3">
                      <input
                        type="text"
                        class="form-control" wire:model.live="name_male" id="name_male"
                      />
                    </div>
                    <div class="col-lg mb-3">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Sarah" wire:model.live="name_female"
                      />
                    </div>
                  </div>
                  <div class="mb-3 text-end">
                        {{ Form::date('date', $date, ['wire:model="date"', 'class' => 'form-control', 'id' => 'date']) }}  
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label"
                      >Foto Pengantin</label
                    >
                    <input class="form-control" type="file" id="formFile" wire:model="couple_photo">
                  </div>
                  <div class="row">
                    <div class="col-lg">
                      <div class="mb-3">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Embed Lokasi Google Map" wire:model="venue_iframe"
                        />
                      </div>
                    </div>
                    <div class="col-lg align-self-end">
                      <div class="mb-3">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="URL Google Map Venue" wire:model="venue_url"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-lg-6">
                      <input
                        type="text"
                        class="form-control" wire:model.live="reception_address"
                        placeholder="Alamat resepsi"
                      />
                    </div>
                    <div class="col-lg-4">
                      <input
                        type="time"
                        wire:model="reception_time"
                        class="form-control"
                      />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-lg-6">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Alamat wedding" wire:model.live="wedding_address"
                      />
                    </div>
                    <div class="col-lg-4">
                      <input
                        type="time"
                        wire:model="wedding_time"
                        class="form-control"
                      />
                    </div>
                  </div>
                  <div class="mb-3">
                    <textarea
                      class="form-control"
                      rows="3"
                      placeholder="Our Story" wire:model.live='our_story'
                    ></textarea>
                  </div>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-lg-6">
                          <input class="form-control" type="file" id="formFile" wire:model='first_our_story_photo'>
                      </div>
                      <div class="col-lg-6">
                          <input class="form-control" type="file" id="formFile" wire:model='second_our_story_photo'>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Photo Besar</label>
                    <input class="form-control" type="file" id="formFile" wire:model='horizontal_photo'>
                  </div>                  
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="+62" wire:model='phone_number' />
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Music Background</label>
                    <input type="file" class="form-control" placeholder="+62" wire:model='music_file' />
                  </div>
                  <div class="sticky-bottom py-3 bg-white">
                    <button type="submit" class="btn btn-dark fw-bold">
                      Terapkan
                    </button>
                    <a class="btn btn-light btn-outline-success fw-bold" href="{{route('dashboard')}}">
                      Kembali Ke Dashboard
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  End Customizable Menu -->
    <!-- Hero -->
    <section
      class="hero-section container mt-5 d-flex align-items-center justify-content-center"
      style="height: 80vh"
      id="home"
    >
      <div class="text-center">
        <h1 class="hero-title text-center"> {{$name_male}} & {{$name_female}}</h1>
        <div class="rsvp-section text-center">
          <h5 class="text-uppercase fw-bold">Save The Date</h5>
          <h6 class="fst-italic">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($date))->format('l, j F Y') }}</h6>
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
                  Nama Tamu
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
        <div class="col-lg-6" style="background-image: url('{{ asset('storage/' . $couple_photo) }}');
        background-position: center;">        <div class="spinner-border" role="status" wire:loading wire:target='couple_photo'>
          <span class="visually-hidden">Loading...</span>
        </div>     </div>
       
      </div>
    </section>
    <!-- End Invitation -->
    <!-- Date -->
    <section class="date-section container pb-5">
      <div class="row justify-content-center">
        <h1 class="text-center fw-bold date-title">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($date))->format('j F Y') }}</h1>
        <p class="text-center mb-5">{{$wedding_address}}</p>
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
              <a href="{{$venue_url}}" class="venue-button text-uppercase">Venue Website</a>
            </div>
            <div class="col-lg-6 mb-5">
                  {!!
                  $venue_iframe
                  !!}
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
            <p>{{$reception_address}}</p>
            <p>{{$reception_time}} WIB</p>
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
            <p>{{$wedding_address}}</p>
            <p>{{$wedding_time}} WIB</p> 
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
              {{$our_story}}
            </p>
          </div>
        </div>
        <div class="row justify-content-center mb-5">
          <div class="col-6 col-lg-6 text-end">
            <img
              src="{{asset('storage/' . $first_our_story_photo)}}"
              class="img-fluid"
              width="320px"
              alt=""
            />
          </div>
          <div class="col-6 col-lg-6">
            <img
              src="{{asset('storage/' . $second_our_story_photo)}}"
              class="img-fluid"
              width="320px"
              alt=""
            />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 text-start">
            <h1 class="gift-title text-start">Amplop Digital</h1>
            <div class="row justify-content-start">
              <div class="col-lg-4 col-6 mb-3">
                <div class="d-flex gap-3 align-items-center">
                  <h5 class="fw-bold">BCA</h5>
                  <h6 class="badge rounded-pill text-bg-success text-capitalize">Bank</h6>
                </div>
                <p>an. JOHN</p>
                <input type="text" class="form-control fw-bold" value="7567867879">
              </div>
              <div class="col-lg-4 col-6 mb-3">
                <div class="d-flex gap-3 align-items-center">
                  <h5 class="fw-bold">BCA</h5>
                  <h6 class="badge rounded-pill text-bg-success text-capitalize">Bank</h6>
                </div>
                <p>an. JOHN</p>
                <input type="text" class="form-control fw-bold" value="7567867879">
              </div>
              <div class="col-lg-4 col-6 mb-3">
                <div class="d-flex gap-3 align-items-center">
                  <h5 class="fw-bold">BCA</h5>
                  <h6 class="badge rounded-pill text-bg-success text-capitalize">Bank</h6>
                </div>
                <p>an. JOHN</p>
                <input type="text" class="form-control fw-bold" value="7567867879">
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="cake-section mt-5" style="background-image: url('{{asset('storage/' . $horizontal_photo)}}');"></section>
    </div>

    <div style="background-color: #fafafa; padding-top: 60px" id="rsvp">
      <section class="attendance pb-5">
        <div class="container">
          <h1 class="attendance-title text-center">Hope To See You</h1>
          <h5 class="text-center">RSVP</h5>
          <p class="text-center">
            Please let us know before the 15pm of june 2023. If you are
            attending
          </p>
          <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
              <form>
                <div class="row mb-3">
                  <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label"
                      >Name</label
                    >
                    <input type="text" class="form-control" />
                  </div>
                  <div class="col-lg-6">
                    <label for="text" class="form-label">Nomor Hape</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Kehadiran</label>
                  <select class="form-select" aria-label="Default select example" wire:model='is_present'>
                    <option value="true">Hadir</option>
                    <option value="false">Tidak Hadir</option>
                  </select>
                </div>
                <div class="mb-3">
                  <div class="form-floating">
                    <textarea
                      class="form-control"
                      placeholder="Leave a comment here"
                      id="floatingTextarea2"
                      style="height: 100px"
                    ></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-secondary">Send</button>
              </form>
            </div>
          </div>
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
              {{$phone_number}}
            </p>
          </div>
        </div>
      </div>
    </div> 


</div>
<script>
  //using the function
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
</script>