<?php

namespace App\Livewire;

use App\Models\Bank;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBank extends Component
{
    use WithFileUploads;
    public $name, $bank_name, $type = 'bank', $qr_code, $balance_number;

    public function storeBank() {

        $validated = $this->validate([
            'name' => 'required',
            'bank_name' => 'required',
            'type' => 'required',
            'balance_number' => 'required',
        ]);

        $validated['user_id'] = auth()->user()->id;
        $validated['qr_code'] = $this->qr_code ? (is_string($this->qr_code) ? $this->qr_code : $this->qr_code->store('uploads', 'public')) : '';



        Bank::create($validated);        

        $this->reset();
        return redirect()->route('dashboard.bank');
    }

    public function render()
    {
        return view('livewire.create-bank');
    }
}
