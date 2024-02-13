<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){

        $titolo = 'COMBO_FIT';
        return view('home', compact('titolo'));

    }
}
