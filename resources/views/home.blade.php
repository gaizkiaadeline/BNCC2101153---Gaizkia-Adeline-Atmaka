@extends('layouts/app')

@section('title', 'Library of PT Musang')

@section('content')

    <div class="container banner">
        <h1>Hello!!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta possimus accusamus quibusdam non dolore recusandae magnam harum sapiente ad numquam? Sit, error magni? Hic sed eos, consectetur totam quia ipsa.</p>
        
        <a href="" class="btn tombol-1">Collections</a>   
        <a href="{{url('books/')}}" class="btn tombol-2">Add Book</a>   

    </div>


    
    <div class="container mt-4">
        <div class="row">

            @foreach($books as $book)
            <div class="col-md-4">
                <div class="col-md-12 book-content">
                    <h1 class="judul">{{ $book->judul }}</h1> 
                    <span class="penulis badge">{{ $book->penulis }}</span>
                    <p class="jumlah-halaman">Jumlah Halaman : {{ $book->jumlah_halaman }}</p>
                    <span class="tahun_terbit">Tahun Terbit : {{ $book->tahun_terbit }}</span> 
                </div>
            </div>


            @endforeach
        </div>
    </div>

    
@endsection
