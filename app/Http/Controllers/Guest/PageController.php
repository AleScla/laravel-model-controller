<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// models
use App\Models\movie;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        
        return view('welcome', compact('movies'));
    }
}
