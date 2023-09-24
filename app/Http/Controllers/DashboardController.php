<?php

namespace App\Http\Controllers;

use App\Models\GuestList;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $guest = auth()->user()->content->guest;
        // dd($user);
        return view('dashboard.index', ['guests' => $guest]);
    }

    public function guest_list() {

        $user = auth()->user();
        // dd($guests->first());

        return view('dashboard.guest', ['guests' => $user->guestlist, 'couple_name' => $user->content->slug]);
    }

    public function delete_guest(GuestList $guest) {
        // dd($guest->id);
        $delete = GuestList::findOrFail($guest->id);
        $delete->delete();
        return back();

    }
}
