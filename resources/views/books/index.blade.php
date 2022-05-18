@extends('layouts/app')

@section('title', 'Manage Books')

@section('content')
<div class="container">
    <div class="col-md-8 manage-wrapper">

        <h3>Manage Book<i class="uil uil-create-dashboard"></i></h3>
        <p>Manage the books and don't forget to recheck it</p>
        <a href="{{url('books/create')}}" class="btn btn-dark btn-sm mb-3"><i class="uil uil-plus-circle me-1">
            </i>Create Books</a>

            @if(session('status_success'))
                <div class="alert alert-success" role="alert">
                    <i class="uil uil-smile-beam me-1"></i> {{session('status_success')}}
                </div>
            @endif



        <table class="table table-suceess table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Jumlah Halaman</th>
                <th>Tahun Terbit</th>
                <th>Action</th>


              </tr>
            </thead>
         
            <tbody>
                {{-- @php $num=1; @endphp --}}
                @foreach($books as $book)
                    <tr>
                        {{-- <th>{{num++}}</th> --}}
                        <th>{{ $loop->iteration}}</th>
                        <td>{{ $book->judul}}</td>
                        <td>{{ $book->penulis}}</td>
                        <td>{{ $book->jumlah_halaman}}</td>
                        <td>{{ $book->tahun_terbit}}</td>
                        <td>
                            <a href="{{ url('books/' . $book->id) }}" 
                                class="text-primary"><i class="uil uil-edit-alt"></i></a>
                        </td>

                        <td>
                            <a href="#" class="text-danger"
                            onclick="event.preventDefault();document.getElementById
                            ('delete-form-{{$book->id}}').submit();">
                            <i class="uil uil-trash-alt"></i>

                            <form id="delete-form-{{$book->id}}" action="{{url
                            ('books/'.$book->id)}}"
                                method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </a>
                        </td>

                        

                    </tr>
                @endforeach

            </tbody>
          </table>
    </div>
</div>
    
@endsection
