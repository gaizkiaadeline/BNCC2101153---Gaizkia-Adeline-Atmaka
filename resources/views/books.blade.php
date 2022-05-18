@extends('layouts.app')

@section('title', 'Halaman Books')


@section('content')


    <div class="container mt-4">
        <h3>All Books<i class="uil uil-notebooks me-1"></i></h3>
        <hr>
        <div class="row">

            @foreach($books as $book)
            <div class="col-md-4">
                <div class="col-md-12 book-content">
                    <h1 class="judul">{{ $book->judul }}</h1> 
                    <span class="penulis badge">{{ $book->penulis }}</span>
                    <p class="jumlah-halaman">{{ $book->jumlah_halaman }}</p>
                    <span class="tahun_terbit">Tahun : {{ $book->tahun_terbit }}</span> 
                </div>
            </div>


            @endforeach
        </div>
    </div>
@endsection