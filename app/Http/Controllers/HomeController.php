<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class HomeController extends Controller
{
    public function home(){
        echo "string";
        print_r(Genre::all());
    }
    
}
