<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;

    //menangani interaksi" yang berhubungan dengan database
    protected $fillable = [
        'nama',
        'nisn',
        'kelas',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'telepon',

        //ini kita membuat kolom-kolom mana saja yang dapat kita isi untuk masuk ke dalam database
    ];
}
