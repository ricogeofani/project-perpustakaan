<?php

use Illuminate\Support\Facades\DB;
use App\Models\Peminjaman;

function total_telat()
{
    return Peminjaman::where([
        ['tgl_kembali', '<', now()],
        ['status', '==', 0]
    ])->count();
}

function anggota_telat()
{

    return Peminjaman::select('peminjamen.*', DB::raw('DATEDIFF(now(), tgl_kembali) as telat_pengembalian'))
        ->where([
            ['tgl_kembali', '<', now()],
            ['status', '==', '0']
        ])
        ->with('anggota')
        ->get();
}
