<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PemasukanSosial;
use App\Donatur;

class PemasukanSosialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasukan = PemasukanSosial::with('donatur')->get();

        return view('pemasukan_sosial.index', compact('pemasukan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donatur = Donatur::all();

        return view('pemasukan_sosial.create', compact('donatur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PemasukanSosial::create([
            'donatur_id' => $request->donatur_id,
            'kategori' => $request->kategori,
            'uraian' => $request->uraian,
            'nominal' => $request->nominal,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/pemasukan-sosial');
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
        $pemasukan = PemasukanSosial::findOrFail($id);

        $donatur = Donatur::all();

        return view('pemasukan_sosial.edit', compact('pemasukan', 'donatur'));
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
        $pemasukan = PemasukanSosial::findOrFail($id);

        $pemasukan->update([
            'donatur_id' => $request->donatur_id,
            'kategori' => $request->kategori,
            'uraian' => $request->uraian,
            'nominal' => $request->nominal,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/pemasukan-sosial');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemasukan = PemasukanSosial::findOrFail($id);

        $pemasukan->delete();

        return redirect('/pemasukan-sosial');
    }
}
