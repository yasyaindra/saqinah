<?php

namespace App\Livewire;

use App\Models\Bank;
use Livewire\Component;

class BankMenu extends Component
{
    public $name, $bank_name, $type, $balance_number, $qr_code, $user_id;
    public $banks, $edit_mode, $bank_id;

    public function render()
    {
        $this->banks = auth()->user()->banks;
        return view('livewire.bank-menu');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->bank_name = '';
        $this->type = '';
        $this->balance_number = '';
        $this->qr_code = '';
    }

    public function edit($id)

    {
        $this->edit_mode = true;        
        $bank = Bank::find($id);
        // dd($bank->name);

        $this->name = $bank->name;
        $this->bank_name = $bank->bank_name;
        $this->type = $bank->type;
        $this->balance_number = $bank->balance_number;
        $this->qr_code = $bank->qr_code;
    }

    public function cancel()

    {
        $this->edit_mode = false;
        $this->resetInputFields();
    }

    public function update()

    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'bank_name' => 'required',
            'type' => 'required',
            'balance_number' => 'required',
        ]);



        $bank = Bank::find($this->bank_id);

        $bank->update([
            'name' => 'required',
            'bank_name' => 'required',
            'type' => 'required',
            'balance_number' => 'required',
        ]);
        $this->edit_mode = false;

        session()->flash('message', 'Bank Updated Successfully.');
        
        $this->resetInputFields();
    }

    public function delete($id)
    {
        $delete = Bank::findOrFail($id);
        $delete->delete();
        return redirect()->route('dashboard.bank');
    }

    public function store()

    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'bank_name' => 'required',
            'type' => 'required',
            'balance_number' => 'required',
        ]);

        $validatedDate['user_id'] = auth()->user()->id;

        Bank::create($validatedDate);
        
        session()->flash('message', 'Bank Created Successfully.');
        
        $this->resetInputFields();
        
        $this->emit('bankStore'); // Close model to using to jquery
    }
}
