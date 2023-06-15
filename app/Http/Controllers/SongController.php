<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    //
    public function index(){
        $songs = Song::all();
        return view('songs', compact('songs'));
    
    }
}
