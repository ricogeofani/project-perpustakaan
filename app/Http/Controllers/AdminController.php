<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use App\Models\Peminjaman;
use App\Models\Penerbit;
use App\Models\Pengarang;
use App\models\Katalog;
use App\Models\Buku;
use App\Models\DetailPeminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        // $data = Peminjaman::with('detail_peminjaman')->get();

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

        // data total
        $total_buku = Buku::count();
        $total_anggota = Anggota::count();
        $total_peminjaman = Peminjaman::whereMonth('tgl_pinjam', date('m'))->count();
        $total_penerbit = Penerbit::count();

        // data grafik donut
        $data_donut = Buku::select(DB::raw("COUNT(id_penerbit) as total"))->groupBy('id_penerbit')->orderBy('id_penerbit', 'asc')->pluck('total');
        $label_donut = Penerbit::orderBy('penerbits.id', 'asc')->join('bukus', 'bukus.id_penerbit', '=', 'penerbits.id')->groupBy('nama_penerbit')->pluck('nama_penerbit');

        //data grafik bar
        $label_bar = ['Peminjaman', 'Pengembalian'];
        $data_bar = [];

        foreach ($label_bar as $key => $value) {
            $data_bar[$key]['label'] = $label_bar[$key];
            $data_bar[$key]['backgroundColor'] = $key == 0 ? 'rgba(60, 141, 188, 0.9)' : 'rgba(210, 214, 222, 1)';
            $data_month = [];

            foreach (range(1, 12) as $month) {
                if ($key == 0) {
                    $data_month[] = Peminjaman::select(DB::raw('COUNT(*) as total'))->whereMonth('tgl_pinjam', $month)->first()->total;
                } else {
                    $data_month[] = Peminjaman::select(DB::raw('COUNT(*) as total'))->whereMonth('tgl_kembali', $month)->first()->total;
                }
            }
            $data_bar[$key]['data'] = $data_month;
        }

        //data grafik pie
        $data_pie = Buku::select(DB::raw('COUNT(id_pengarang) as total'))->groupBy('id_pengarang')->orderBy('id_pengarang', 'asc')->pluck('total');
        $label_pie = Pengarang::orderBy('pengarangs.id', 'asc')->join('bukus', 'bukus.id_pengarang', '=', 'pengarangs.id')->groupBy('nama_pengarang')->pluck('nama_pengarang');

        if (!auth()->user()) {
            return abort('403');
        } else {
            return view('admin/dashboard', compact('total_buku', 'total_anggota', 'total_peminjaman', 'total_penerbit', 'data_donut', 'label_donut', 'data_bar', 'data_pie', 'label_pie'));
        }
    }

    public function katalog()
    {
        $data_katalogs = Katalog::all();
        return view('admin.katalog.katalog', compact('data_katalogs'));
    }

    public function penerbit()
    {
        $data_penerbits = Penerbit::all();
        return view('admin.penerbit.penerbit', compact('data_penerbits'));
    }

    public function pengarang()
    {
        $data_pengarangs = Pengarang::all();
        return view('admin.pengarang.pengarang', compact('data_pengarangs'));
    }

    public function anggota()
    {
        $data_anggotas = Anggota::all();
        return view('admin.anggota.anggota', compact('data_anggotas'));
    }
    public function buku()
    {
        $data_bukus = Buku::with('penerbit', 'pengarang', 'katalog')->get();
        $data_penerbits = Penerbit::all();
        $data_pengarangs = Pengarang::all();
        $data_katalogs = Katalog::all();
        return view('admin.buku', compact(['data_bukus', 'data_penerbits', 'data_pengarangs', 'data_katalogs']));
    }
    public function peminjaman()
    {

        if (auth()->user()->can('index peminjaman')) {
            $data_peminjaman = Peminjaman::all();
            $anggotas = Anggota::all();
            $bukus = Buku::where('qty_stok', '>', '0')->get();

            return view('admin.peminjaman.peminjaman', compact('data_peminjaman', 'anggotas', 'bukus'));
        } else {
            return abort('403');
        }
    }

    public function test_spatie()
    {
        // $role = Role::create(['name' => 'petugas']);
        // $permission = Permission::create(['name' => 'index peminjaman']);
        // $role->givePermissionTo($permission);
        // $permission->assignRole($role);

        // $user = User::where('id', 4)->first();
        // $user->assignRole('petugas');
        // return $user;


        // $user = auth()->user();
        // $user->assignRole('petugas');
        // return $user;

        // $user = User::with('roles')->get();
        // return $user;

        // $user = auth()->user();
        // $user = User::where('id', 4)->first();
        // $user->removeRole('petugas');
        // return $user;

    }
}
