<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penjual.index')->with([
            'penjual' => Penjual::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjual.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required|min:3',
            'nama_barang' => 'required|min:3',
            'jumlah_barang' => 'required|min:1',
            'alamat' => 'required|min:3',
        ]);

        $penjual = new Penjual;
        $penjual ->nama_pemesan = $request->nama_pemesan;
        $penjual ->nama_barang = $request->nama_barang;
        $penjual ->jumlah_barang = $request->jumlah_barang;
        $penjual ->alamat = $request->alamat;
        $penjual ->save();

        return to_route('penjual.index')->with('success', 'Data Berhasil di Tambah');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('penjual.edit')->with([
            'penjual' => Penjual::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pemesan' => 'required|min:3',
            'nama_barang' => 'required|min:3',
            'jumlah_barang' => 'required|min:1',
            'alamat' => 'required|min:3',
        ]);

        $penjual = Penjual::find($id);
        $penjual->nama_pemesan = $request->nama_pemesan;

        $penjual->nama_barang = $request->nama_barang;

        $penjual->jumlah_barang = $request->jumlah_barang;

        $penjual->alamat = $request->alamat;
        $penjual->save();

        return to_route('penjual.index')->with('succes', 'data di tambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penjual = Penjual::find($id);
        $penjual->delete();

        return back()->with('success', 'data dihapus');
    }
}
