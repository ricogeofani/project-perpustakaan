<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $fillable = ['id_anggota', 'tgl_pinjam', 'tgl_kembali', 'status'];

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'detail_peminjamen', 'id_peminjaman', 'id_buku');
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }

    public function detail_peminjaman()
    {
        return $this->hasMany(DetailPeminjaman::class, 'id_peminjaman');
    }
}
