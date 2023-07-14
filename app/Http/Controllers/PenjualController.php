<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use App\Models\Jenis;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Penjual::all();
        return view('penjual.index')->with([
            'penjual' => Penjual::all(),
            'jenis' => Jenis::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjual.create', [
            'jenis' => Jenis::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required',
            'jenis_barang' => 'required',
            'harga_barang' => 'required',
            'alamat' => 'required',
        ]);

        $penjual = new Penjual;
        $penjual ->nama_pemesan = $request->nama_pemesan;
        $penjual ->jenis_barang = $request->jenis_barang;
        $penjual ->harga_barang = $request->harga_barang;
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
        $penjual = Penjual::find($id);
        if (!$penjual) return redirect()->route('penjual.index')
            ->with('error_message', 'penjual dengan id = ' . $id . ' tidak ditemukan');
        return view('penjual.edit', [
            'penjual' => $penjual,
            'jenis' => Jenis::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pemesan' => 'required',
            'jenis_barang' => 'required',
            'harga_barang' => 'required',
            'alamat' => 'required',
        ]);

        $penjual = Penjual::find($id);
        $penjual ->nama_pemesan = $request->nama_pemesan;
        $penjual ->jenis_barang = $request->jenis_barang;
        $penjual ->harga_barang = $request->harga_barang;
        $penjual ->alamat = $request->alamat;
        $penjual ->save();

        return to_route('penjual.index')->with('success', 'Data Di Tambah');
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
