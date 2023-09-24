<div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
          <form wire:submit='storeMessage'>
            <div class="row mb-3">
              <div class="col-lg-6">
                <label for="exampleInputEmail1" class="form-label"
                  >Name</label
                >
                <input type="text" class="form-control" wire:model='name' />
              </div>
              <div class="col-lg-6">
                <label for="number" class="form-label">No. Hape</label>
                <input type="number" class="form-control" wire:model='email' />
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
                  id="floatingTextarea2" wire:model='message'
                  style="height: 100px"
                ></textarea>
                <label for="floatingTextarea2">Message</label>
              </div>
            </div>
            <button type="submit" class="btn btn-secondary">Send</button>
          </form>
        </div>
    </div>
</div>
