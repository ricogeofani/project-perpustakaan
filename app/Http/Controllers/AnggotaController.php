<?php

namespace App\Http\Controllers;

use App\models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Anggota::all();
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
            'nama' => ['required'],
            'sex' => ['required'],
            'telp' => ['required'],
            'alamat' => ['required'],
            'email' => ['required'],
        ]);

        Anggota::create($request->all());

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    // $id karena biasanya id nya tidak di bawah
    public function update(Request $request, Anggota $anggota, $id)
    {
        $this->validate($request, [
            'nama' => ['required'],
            'sex' => ['required'],
            'telp' => ['required'],
            'alamat' => ['required'],
            'email' => ['required'],
        ]);
        $anggota = Anggota::find($id);
        $anggota->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota, $id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();
        return back();
    }
}
