@extends('layouts.app')

@section('title', 'Create Book')


@section('content')
<div class="container">
    <div class="col-md-8 manage-wrapper">

        <h3>Create Book<i class="uil uil-plus me-1"></i></h3>
        <p>Create the books and don't forget to recheck it</p>
        <hr>

        <form action="{{url('books/create')}}" method="POST">
          @csrf


            <div class="mb-3">
              <label class="form-label">Judul</label>
              <input type="text" class="form-control @error('judul') is-invalid @enderror" 
              placeholder="Masukkan Judul Buku" name="judul" value="{{old('judul')}}">
              @error('judul') <small class="text-danger">{{ $message }}</small>
              @enderror
              
            </div>
            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" class="form-control @error('penulis') is-invalid @enderror" 
                placeholder="Masukkan Nama Penulis" name="penulis" value="{{old('penulis')}}">
                @error('penulis') <small class="text-danger">{{ $message }}</small>
                @enderror

              </div>
              <div class="mb-3">
                <label class="form-label">Jumlah Halaman</label>
                <input type="number" class="form-control @error('jumlah_halaman') is-invalid @enderror" 
                placeholder="Masukkan Jumlah Halaman" name="jumlah_halaman" value="{{old('jumlah_halaman')}}">
                 @error('jumlah_halaman') <small class="text-danger">{{ $message }}</small>
              @enderror

              </div>
              <div class="mb-3">
                <label class="form-label">Tahun Terbit</label>
                <input type="number" class="form-control @error('tahun_terbit') is-invalid @enderror" 
                placeholder="Masukkan Tahun Terbit" name="tahun_terbit" value="{{old('tahun_terbit')}}">
                 @error('tahun_terbit') <small class="text-danger">{{ $message }}</small>
              @enderror


              </div>

            <button type="submit" class="btn tombol-submit">Submit</button>
          </form>
 
    </div>
</div>
@endsection