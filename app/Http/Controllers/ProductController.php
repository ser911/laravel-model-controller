<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


Use App\Movie;

class ProductController extends Controller
{
    public function index(){
        $movies = Movie::all();
        
        return view('welcome', ['movies'=> $movies]);
        
    }
}
