<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengarang extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pengarang', 'email', 'telp', 'alamat'];

    public function buku()
    {
        return $this->hasMany(Buku::class, 'id_pengarang');
    }
}
