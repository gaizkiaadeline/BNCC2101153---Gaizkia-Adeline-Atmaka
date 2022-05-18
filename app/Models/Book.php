<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //  protected $table = 'buku'; //'nama tablenya'
    // //kalo pake indo harus di declare

    protected $fillable = [
        'judul', 'penulis', 'jumlah_halaman', 'tahun_terbit'
    ];
    // data masuk ke database
}
