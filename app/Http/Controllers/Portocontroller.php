<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Portocontroller extends Controller
{
    public function about() {
        return view('about');
    }
    public function myskill() {
        return view('myskill');
    }
}
