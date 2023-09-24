<?php

namespace App\Livewire;

use App\Models\Guest;
use App\Models\Content;
use Livewire\Component;

class GuestBook extends Component
{
    public $name, $email, $message, $is_present = false, $slug;

    public function storeMessage() {
        // dd($this->slug);
        // dd($this->slug);

        $content = Content::where('slug', $this->slug)->first();
        // dd($content->id);
        // dd($this->is_present);
        $validated = $this->validate([
            "name" => 'required',
            "message" => 'required',
            "email" => 'required',
            "is_present" => 'required',
        ]);

        $validated['content_id'] = $content->id;

        Guest::create($validated);


        $this->resetExcept('slug');
        session()->flash('success','Pesan dikirim!');
        // return back();
    }

    public function render()
    {
        return view('livewire.guest-book');
    }

}
