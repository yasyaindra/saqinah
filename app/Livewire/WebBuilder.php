<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Content;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class WebBuilder extends Component
{
    use WithFileUploads;
    public $name_male, $name_female, $reception_address, $wedding_address;
    public $wedding_time, $reception_time, $venue_url, $venue_iframe;
    public $our_story, $phone_number;
    public $date, $couple_photo, $music_file, $first_our_story_photo, $second_our_story_photo, $horizontal_photo;

    public function mount() {
        //get post
        $content_id = auth()->user()->content->id;
        $content = Content::find($content_id); 
        //assign        
        
        // $this->date = Carbon::now()->addMonth($this->date)->format('d/m/Y');
        $this->date = $content->date;
        $this->name_male  = $content->name_male;
        $this->name_female  = $content->name_female;
        $this->reception_address  = $content->reception_address;
        $this->wedding_address  = $content->wedding_address;
        $this->our_story  = $content->our_story;
        $this->phone_number  = $content->phone_number;
        $this->venue_url  = $content->venue_url;
        $this->venue_iframe = $content->venue_iframe;
        $this->couple_photo = $content->couple_photo;
        $this->reception_time = $content->reception_time;
        $this->wedding_time = $content->wedding_time;
        $this->music_file = $content->music_file;
        $this->first_our_story_photo = $content->first_our_story_photo;
        $this->second_our_story_photo = $content->second_our_story_photo;
        $this->horizontal_photo = $content->horizontal_photo;
    }

    public function storeData() {

        // dd($this->couple_photo);
        $content_id = auth()->user()->content->id;
        $content = Content::find($content_id);
        // dd($this->music_file->name);


        $content->update([
            'name_male' => $this->name_male,
            'name_female' => $this->name_female,
            'slug' => "$this->name_male-$this->name_female", 
            'reception_address' => $this->reception_address,
            'wedding_address' => $this->wedding_address,
            'our_story' => $this->our_story,
            'phone_number' => $this->phone_number,
            'venue_url' => $this->venue_url,
            'venue_iframe' => $this->venue_iframe,
            'date' => $this->date,
            'reception_time' => $this->reception_time,
            'wedding_time' => $this->wedding_time,
            'reception_time' => $this->reception_time,
            'couple_photo' => $this->couple_photo ? (is_string($this->couple_photo) ? $this->couple_photo : $this->couple_photo->store('uploads', 'public')) : '',
            'music_file' => $this->music_file ? (is_string($this->music_file) ? $this->music_file : $this->music_file->store('uploads', 'public')) : '',
            'first_our_story_photo' => $this->first_our_story_photo ? (is_string($this->first_our_story_photo) ? $this->first_our_story_photo : $this->first_our_story_photo->store('uploads', 'public')) : '',
            'second_our_story_photo' => $this->second_our_story_photo ? (is_string($this->second_our_story_photo) ? $this->second_our_story_photo : $this->second_our_story_photo->store('uploads', 'public')) : '',
            'horizontal_photo' => $this->horizontal_photo ? (is_string($this->horizontal_photo) ? $this->horizontal_photo : $this->horizontal_photo->store('uploads', 'public')) : ''
        ]);


        return redirect()->route('builder', ['id' => $content_id]);
    }

    public function render()
    {
        $content_id = auth()->user()->content->id;
        $content = Content::find($content_id);

        return view('livewire.web-builder', ['content' => $content]);
    }
}
