<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ PengeluaranSosial;

class PengeluaranSosialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluaran = PengeluaranSosial::all();

        return view('pengeluaran_sosial.index', compact('pengeluaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengeluaran_sosial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PengeluaranSosial::create([
            'kategori' => $request->kategori,
            'uraian' => $request->uraian,
            'nominal' => $request->nominal,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/pengeluaran-sosial');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengeluaran = PengeluaranSosial::findOrFail($id);

        return view('pengeluaran_sosial.edit', compact('pengeluaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengeluaran = PengeluaranSosial::findOrFail($id);

        $pengeluaran->update([
            'kategori' => $request->kategori,
            'uraian' => $request->uraian,
            'nominal' => $request->nominal,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/pengeluaran-sosial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengeluaran = PengeluaranSosial::findOrFail($id);

        $pengeluaran->delete();

        return redirect('/pengeluaran-sosial');
    }
}
