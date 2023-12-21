<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = ['nim', 'nama', 'jenis_kelamin', 'jurusan', 'alamat'];
}
