<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bank;
use App\Models\User;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function builder() {
        $content_id = auth()->user()->content->id;
        $couple = [
            'name_male' => auth()->user()->content->name_male,
            'name_female' => auth()->user()->content->name_female,
        ];

        $content = Content::find($content_id);

        $date_time = Carbon::createFromTimestamp(strtotime($content->date))->format('j F, Y');

        // dd($date_time);

        return view('dashboard.builder', ['title' => 'Wedding of '.$couple['name_male'].' and ' . $couple['name_female'], 'date_time' => $date_time]);
    }

    public function share(Request $request) {

        // $content_id = auth()->user()->content->id;
        // $content = Content::find($content_id);
        
        $couples = $request->name;

        $content = Content::where('slug', $couples)->first();

        // dd($content->user->banks);
        
        if(!$content) {
            return redirect('/');
        }

        // dd($content->first());
        $date_time = Carbon::createFromTimestamp(strtotime($content->date))->format('j F, Y');
        // dd($content);

        return view('invite', ['guest' => $request->mengundang, 'content' => $content, 'date_time' => $date_time ]);
    }
}
