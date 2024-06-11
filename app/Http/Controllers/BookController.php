<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
    $books = Book::all();
    //resources\views\books\index.blade.php
    return view('books.index', ['books' => $books]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'pages'=>'nullable|integer',
            'year'=>'nullable|integer',
            'author'=>'string'
        ]);
        Book::create($request->all());

        return redirect()->route('index');
    }

}
