<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


Use App\Movie;

class ProductController extends Controller
{
    public function index(){

        $movies = Movie::all();
        
        return view('movies.index', compact('movies'));
        
    }
    public function show($id){

        $movie = Movie::find($id);

        return view('movies.show', compact('movie'));
    }

    public function store(Request $request){

        $request->validate([
        'Title' => 'required|string|max:50'
        'author' => 'required|string|max:50'
        'genre' => 'required|string|max:50'
        'length' => 'required|numeric|min:60|max:240'
        ])

        $data = $request->all();

        $movieNew = New Movie();

        $movieNew = $data['Title'];
        $movieNew = $author['author'];
        $movieNew = $genre['genre'];
        $movieNew = $length['length'];
        $movieNew = $data['Title'];

        $movieNew ->save();


        return view('movies.create');
    }
}

public function create(){
return view('movies.create')

}
