<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Error;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penerbit.add_penerbit');
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
            'nama'  => ['required'],
            'email' => ['required'],
            'telp'  => ['required'],
            'alamat' => ['required']
        ]);
        Penerbit::create([
            'nama_penerbit' => $request->nama,
            'email'         => $request->email,
            'telp'          => $request->telp,
            'alamat'        => $request->alamat
        ]);

        return redirect('/penerbit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function show(Penerbit $penerbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerbit $penerbit)
    {
        return view('admin.penerbit.edit_penerbit', compact('penerbit'));
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
            'nama'  => ['required'],
            'email' => ['required'],
            'telp'  => ['required'],
            'alamat' => ['required']
        ]);
        $penerbit->update([
            'nama_penerbit' => $request->nama,
            'email'         => $request->email,
            'telp'          => $request->telp,
            'alamat'        => $request->alamat
        ]);

        return redirect('penerbit');
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
        return redirect('penerbit');
    }
}
