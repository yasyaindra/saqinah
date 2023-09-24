<div>
    <div
      class="modal fade"
      id="addModal"
      tabindex="-1"
      aria-labelledby="addModalLabel"
      aria-hidden="true" wire:ignore
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="addModalLabel">Tambah Bank</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form wire:submit='storeBank'>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Pemilik</label>
                <input type="text" class="form-control" id="name" wire:model='name' />
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Bank/eWallet</label>
                <input type="text" class="form-control" id="bank_name" wire:model='bank_name' />
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Tipe</label>
                <select class="form-select" aria-label="Default select example" wire:model='type'>
                  <option value="bank">Bank</option>
                  <option value="ewallet">eWallet</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">No. Rekening</label>
                <input type="text" class="form-control" id="name" wire:model='balance_number' />
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">QR Code</label>
                <input class="form-control" type="file" id="formFile" wire:model='qr_code' />
                @if ($qr_code)
                    <img src="{{$qr_code->temporaryUrl()}}" class="img-fluid" alt="">
                @endif
              </div>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>