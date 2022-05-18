<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

// VIEW
class AppController extends Controller
{
    public function index()
    {

        //get data from database    
        $books = Book::all();
        // var_dump($books);
        //dump die -> perintah yang dibawah ga akkan di jalanin
        // dd($books);

        return view('home', compact('books'));
    }
}
