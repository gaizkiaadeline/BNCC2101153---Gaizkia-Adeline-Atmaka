<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books', compact('books'));
    }



    public function showAllBook(){
        $books = Book::all();
        return view('books/index', compact('books'));
    }

    public function create(){
        return view('books/create');
    }

    public function store(Request $request){
        // dd($request);

        $request->validate([
            'judul' => 'required|string|min:5|max:20',
            'penulis' => 'required|string|min:5|max:20',
            'jumlah_halaman' => 'required|integer|min:0',
            'tahun_terbit' => 'required|integer|min:2000|max:2021'
        ]);

        //ADD

        //1. Query Builder
        DB::table('books')->insert([
            'judul'=> $request->judul,
            'penulis'=> $request->penulis,
            'jumlah_halaman' => $request->jumlah_halaman,
            'tahun_terbit'=> $request->tahun_terbit,
        ]);

        //2. Eloquent ORM
        // Book::create([
        //     'judul'=> $request->judul,
        //     'penulis'=> $request->penulis,
        //     'jumlah_halaman' => $request->jumlah_halaman,
        //     'tahun_terbit'=> $request->tahun_terbit,
        // ]);

        return redirect('/books/manage')->with('status_success', 'Buku Berhasil Ditambahkan');

    }

    public function edit($id){
        $book = Book::findOrFail($id);
        // find -> return null

        return view('books/edit',compact('book'));
        // dd($book);  
    }

    public function update(Request $request, $id){
        // dd('Update Book');
        $request->validate([
            'judul' => 'required|string|min:5|max:20',
            'penulis' => 'required|string|min:5|max:20',
            'jumlah_halaman' => 'required|integer|min:0',
            'tahun_terbit' => 'required|integer|min:2000|max:2021'
        ]);

        // CARA 2
        // Book::where('id', '=' $id)->update([
        //     'judul'=> $request->judul,
        //     'penulis'=> $request->penulis,
        //     'jumlah_halaman' => $request->jumlah_halaman,
        //     'tahun_terbit'=> $request->tahun_terbit,
        // ]);

        $book = Book::findOrFail($id);
        $book->update([
            'judul'=> $request->judul,
            'penulis'=> $request->penulis,
            'jumlah_halaman' => $request->jumlah_halaman,
            'tahun_terbit'=> $request->tahun_terbit,           

        ]);

        return redirect('/books/manage')->with('status_success', 'Buku Berhasil Diedit');
        // // dd($book);  
    }

    public function destroy($id){
        // dd('Delete Book');
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books/manage')->with('status_success', 'Buku Berhasil Dihapus');
    }

}
