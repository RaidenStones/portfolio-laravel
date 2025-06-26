<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function cv() {
        return view('cv');
    }
    
    public function competences() {
        return view('competences');
    }
    
    public function passions() {
        return view('passions');
    }
    
}
