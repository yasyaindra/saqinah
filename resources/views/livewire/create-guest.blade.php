<div>
    <form wire:submit='storeGuest'>
        <div class="row justify-content-end mb-3">
          <div class="col-6 col-lg-6">
              <div class="">
                <input
                  type="text"
                  placeholder="Tambah nama tamu" wire:model='name'
                  class="form-control"
                />
              </div>
          </div>
          <div class="col-6 col-lg">
            <input class="form-control" type="file" id="formFile">
          </div>
          <div class="col-4 col-lg-1 text-end mt-3 mt-lg-0">
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
          </div>
        </div>
    </form>
</div>
