<?php

namespace App\Http\Controllers;

use App\Models\DetailPeminjaman;
use App\Models\Peminjaman;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $datas = Peminjaman::with('buku', 'anggota', 'detail_peminjaman')->orderBy('id', 'asc')->get();
        $datas = Peminjaman::select('peminjamen.*', DB::raw('DATEDIFF(tgl_kembali, tgl_pinjam) as lama_pinjam'))
            ->with('buku', 'anggota', 'detail_peminjaman');

        // cek untuk filter status
        if ($request->status) {
            $filter_status = $request->status == 'sudah' ? 1 : 0;
            $datas  = $datas->where('status', '=', $filter_status);
        }

        //cek filter tgl pinjam
        if ($request->tglPinjam) {
            $datas = $datas->where('tgl_pinjam', '=', $request->tglPinjam);
        }

        $datas = $datas->get();


        $datatables = datatables()->of($datas)->addIndexColumn();
        return $datatables->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_anggota' => ['required'],
            'tgl_pinjam' => ['required'],
            'tgl_kembali' => ['required'],
            'id_buku' => ['required'],
        ]);

        $id_peminjaman = Peminjaman::create([
            'id_anggota' => $request->id_anggota,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'status'     => 0,
        ]);

        $bukus = $request->id_buku;

        foreach ($bukus as $buku) {
            DetailPeminjaman::insert([
                'id_peminjaman' => $id_peminjaman->id,
                'id_buku'   => $buku,
                'qty'       => 1,
            ]);

            $data_buku = Buku::find($buku);
            $data_buku->update([
                'qty_stok' => $data_buku->qty_stok - 1
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman, DetailPeminjaman $dtl_peminjaman)
    {
        $this->validate($request, [
            'id_anggota' => ['required'],
            'tgl_pinjam' => ['required'],
            'tgl_kembali' => ['required'],
            'id_buku'   => ['required'],
            'status'    => ['required'],
        ]);

        $peminjaman->update([
            'id_anggota' => $request->id_anggota,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'status'     => $request->status,
        ]);

        $bukus = $request->id_buku;
        $dtl_peminjaman->where('id_peminjaman', $peminjaman->id)->delete();

        foreach ($bukus as $buku) {

            $dtl_peminjaman->insert([
                'id_peminjaman' => $peminjaman->id,
                'id_buku'   => $buku,
                'qty'       => 1,
            ]);

            $data_buku = Buku::find($buku);

            if ($request->status == 0) {
                $data_buku->update([
                    'qty_stok' => $data_buku->qty_stok - 1,
                ]);
            } else {
                $data_buku->update([
                    'qty_stok' => $data_buku->qty_stok + 1,
                ]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        DetailPeminjaman::where('id_peminjaman', $peminjaman->id)->delete();
        $peminjaman->delete();
    }
}
