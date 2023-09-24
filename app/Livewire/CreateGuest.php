<?php

namespace App\Livewire;

use App\Models\GuestList;
use Livewire\Component;

class CreateGuest extends Component
{

    public $name;

    public function delete($id) {
        // dd($id);
        $delete = GuestList::findOrFail($id);
        $delete->delete();
        return redirect()->route('dashboard.guest');
    }

    public function storeGuest(){
        // dd($this->name);
        $validated = $this->validate([
            "name" => 'required',
        ]);

        $validated['user_id'] = auth()->user()->id;

        GuestList::create($validated);

        // session()->flash('success','Tamu ditambah!');
        
        return redirect()->route('dashboard.guest');
    }

    public function render()
    {
        return view('livewire.create-guest');
    }
}
