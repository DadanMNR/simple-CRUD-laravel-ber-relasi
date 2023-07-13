<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**    
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jenis.index')->with([
            'jenis' => Jenis::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_barang' => 'required|min:3',
        ]);

        $jenis = new Jenis;
        $jenis ->jenis_barang = $request->jenis_barang;
        $jenis ->save();

        return to_route('jenis.index')->with('success', 'Data Berhasil di Tambah');
        
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
        return view('jenis.edit')->with([
            'jenis' => Jenis::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_barang' => 'required|min:3',
        ]);

        $jenis = Jenis::find($id);
        $jenis->jenis_barang = $request->jenis_barang;
        $jenis->save();

        return to_route('jenis.index')->with('succes', 'data di tambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenis = Jenis::find($id);
        $jenis->delete();

        return back()->with('success', 'data dihapus');
    }
}
