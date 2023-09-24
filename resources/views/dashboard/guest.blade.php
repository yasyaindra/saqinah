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
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.6/dist/clipboard.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/dashboard.style.css')}}" />
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
      <div class="d-flex justify-content-between">
        <h2 class="fw-bold fs-6 fs-2 text-start d-none d-lg-block">Daftar Tamu</h2>
        <div class="d-flex align-items-center">
          @livewire('create-guest')
        </div>
      </div>
      <div class="row">
        <div class="col-lg">
          <table class="table">
            <thead>
              <tr class="table-dark">
                <th scope="col">Nama</th>
                <th scope="col">Link Undang</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($guests as $guest)
              <tr>
                <td>{{$guest->name}}</td>
                <td>
                  <div class="input-group mb-3">
                    <input
                      id="in{{$guest->id}}"
                      type="text"
                      class="form-control"
                      placeholder="BTC Address..."
                      aria-label="BTC Address"
                      aria-describedby="btn01"
                      value="{{url('/')}}/{{$couple_name}}?mengundang={{$guest->name}}"
                      readonly
                    />
                    <button
                      id="btn{{$guest->id}}" onclick="copyToClipboard('btn{{$guest->id}}')"
                      class="btn btn-secondary"
                      type="button"
                      data-clipboard-demo=""
                      data-clipboard-target="#in{{$guest->id}}"
                      data-bs-toggle="tooltip"
                      data-bs-placement="bottom"
                      title="Copy to Clipboard"
                    >
                      Copy
                    </button>
                  </div>
                </td>
                <td>
                  <form action="{{route('delete.guest', $guest->id)}}">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
  <script>
    function copyToClipboard(id) {

        let btn = document.getElementById(id);
        let clipboard = new ClipboardJS(btn);
    
        clipboard.on("success", function (e) {
            btn.innerHTML = "Copied!"
            setTimeout(() => {
                btn.innerHTML = 'Copy'
            }, 1000);
          console.log(e);
        });
    
        clipboard.on("error", function (e) {
          console.log(e);
        });
    }
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
</html>
