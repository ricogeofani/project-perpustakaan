<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit');
    }

    public function pengarang()
    {
        return $this->belongsTo(Pengarang::class, 'id_pengarang');
    }

    public function katalog()
    {
        return $this->belongsTo(Katalog::class, 'id_katalog');
    }
}
