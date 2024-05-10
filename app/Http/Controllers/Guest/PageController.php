<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class PageController extends Controller
{
    public function index(){

        return view('home');
    }

    public function films(){

        $films = Film::all();

        return view('films', compact('films'));
    }
}
