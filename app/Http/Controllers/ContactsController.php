<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contacts() {
        $titolo2 = 'Chi Sono ?';
        return view('contatti', compact('titolo2'));
    }
}
