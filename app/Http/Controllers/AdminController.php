<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Peminjaman;
use App\Models\Penerbit;
use App\Models\Pengarang;
use App\models\Katalog;
use App\Models\Buku;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function dashboard()
    {
        // eloqount relsional
        // $data = Anggota::with('user', 'peminjaman')->get();
        // $data = Peminjaman::with('buku', 'anggota')->get();
        // $data = Penerbit::with('buku')->get();
        // $data = Pengarang::with('buku')->get();
        // $data = Katalog::with('buku')->get();
        // $data = Buku::with('penerbit', 'pengarang', 'katalog')->get();
        // return $data;

        //query builder
        // $total_anggota = DB::table('anggotas')->count();
        // $data_buku = DB::table('bukus')->join('penerbits', 'id_penerbit', '=', 'penerbits.id')->get();
        // $data_buku_penerbit = DB::table('bukus')->whereBetween('id_penerbit', [3, 6])->get();
        // $data_buku_pengarang = DB::table('bukus')->where('id_pengarang', 4)->first();
        // $data_penerbit = DB::table('penerbits')->find(2);
        // $data_katalog = DB::table('katalogs')->where('nama_katalog', 'like', '%o%')->orderBy('id', 'desc')->get();
        // $data_buku_harga = DB::table('bukus')->max('harga_pinjam');
        // $data_pengarang = DB::table('pengarangs')->addSelect('nama_pengarang', 'telp', 'alamat')->get();
        // $data_anggotas = DB::table('anggotas')->where('sex', '=', 'L')->get();

        // $data_buku_stok = DB::table('bukus')
        //     ->select('qty_stok', DB::raw('sum(qty_stok) as total_stok'), DB::raw('count(qty_stok) as jumlah_stok'))
        //     ->groupBy('qty_stok')
        //     ->get();
        // return $data_anggotas;

        return view('admin/dashboard');
    }

    public function katalog()
    {
        $data_katalogs = DB::table('katalogs')->get();
        return view('admin.katalog.katalog', compact('data_katalogs'));
    }

    public function penerbit()
    {
        $data_penerbits = DB::table('penerbits')->get();
        return view('admin.penerbit.penerbit', compact('data_penerbits'));
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
