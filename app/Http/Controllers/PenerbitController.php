<?php

namespace App\Http\Controllers;

use App\models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Penerbit::all();
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
            'nama_penerbit'  => ['required'],
            'email' => ['required'],
            'telp'  => ['required'],
            'alamat' => ['required']
        ]);
        Penerbit::create($request->all());

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penerbit $penerbit)
    {
        $this->validate($request, [
            'nama_penerbit'  => ['required'],
            'email' => ['required'],
            'telp'  => ['required'],
            'alamat' => ['required']
        ]);
        $penerbit->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerbit $penerbit)
    {

        $penerbit->delete();
        return back();
    }
}
