<div>
    <div class="d-flex justify-content-between">
        <h2 class="fw-bold fs-6 fs-2 text-start">Daftar Bank/eWallet</h2>
        <div class="d-flex align-items-center">
          <div class="row justify-content-end">
            <div class="col mb-2">
              <button
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#addModal" data-toggle="modal"
              >
                <i class="fa-regular fa-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg">
          <table class="table">
              <thead>
                <tr class="table-dark text-start">
                  <th>Nama Pemilik</th>
                  <th>Nama Bank/eWallet</th>
                  <th>Tipe</th>
                  <th>No. Rekening</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($banks as $bank)
                  <tr class="text-uppercase">
                    <td>{{$bank->name}}</td>
                    <td>{{$bank->bank_name}}</td>
                    <td>{{$bank->type}}</td>
                    <td>{{$bank->balance_number}}</td>
                    <td class="text-center">                  
                      <button href="" class="btn btn-danger d-block d-lg-inline mb-2" wire:click='delete({{$bank->id}})'
                        ><i class="fa-solid fa-trash"></i></button
                      >
                    </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
      </div>
</div>
