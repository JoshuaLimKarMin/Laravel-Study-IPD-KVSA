<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ebuku extends Model
{
    protected $table="ebuku";
    protected $fillable = [
        "judul",
        "nama_penulis",
        "nama_peminjam",
        "tarikh_pinjaman",
        "tarikh_pulangan",
        "status"
    ];
}
