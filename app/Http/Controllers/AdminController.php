<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Peminjaman;
use App\Models\Penerbit;
use App\Models\Pengarang;
use App\models\Katalog;
use App\Models\Buku;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // $data = Anggota::with('user', 'peminjaman')->get();
        // $data = Peminjaman::with('buku', 'anggota')->get();
        // $data = Penerbit::with('buku')->get();
        // $data = Pengarang::with('buku')->get();
        // $data = Katalog::with('buku')->get();
        $data = Buku::with('penerbit', 'pengarang', 'katalog')->get();
        return $data;
        return view('admin/dashboard');
    }

    public function katalog()
    {
        return view('admin.katalog');
    }

    public function penerbit()
    {
        return view('admin.penerbit');
    }

    public function pengarang()
    {
        return view('admin.pengarang');
    }

    public function anggota()
    {
        return view('admin.anggota');
    }
}
