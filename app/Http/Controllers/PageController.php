<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;

class PageController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        //dd($tours);
        return view('home', compact('tours'));
    }
}
