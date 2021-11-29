<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buku::all();
        return json_encode($data);
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
            "isbn" => ["required"],
            "judul" => ["required"],
            "tahun" => ["required"],
            "id_penerbit" => ["required"],
            "id_pengarang" => ["required"],
            "id_katalog" => ["required"],
            "qty_stok" => ["required"],
            "harga_pinjam" => ["required"],
        ]);

        Buku::create($request->all());
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        $this->validate($request, [
            "isbn" => ["required"],
            "judul" => ["required"],
            "tahun" => ["required"],
            "id_penerbit" => ["required"],
            "id_pengarang" => ["required"],
            "id_katalog" => ["required"],
            "qty_stok" => ["required"],
            "harga_pinjam" => ["required"],
        ]);

        $buku->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return back();
    }
}
