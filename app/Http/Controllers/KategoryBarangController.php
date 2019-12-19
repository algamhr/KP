<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategory_barang;

class KategoryBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kategorybarang.index')
        ->with('kategory_barang', kategory_barang::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required',

        ]);

        $kategory_barang = kategory_barang::create([
            'keterangan_barang' => $request->nama_brg,
            'kategory_barang' => $request->kategory_barang,

        ]);

        session()->flash('success', 'urusan berhasil di tambahkan');
         return redirect(route('kategory-barang.index'));
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
        //
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
          $request->validate([
            'nama_brg' => 'required',
        ]);

        $kategory_barang = kategory_barang::find($id);
        $kategory_barang->update([
            'keterangan_barang' => $request->nama_brg,
            'kategory_barang' => $request->kategory_barang,

        ]);

        if (!$kategory_barang) {
            session()->flash('success', 'Data gagal diubah');
            return redirect(route('kategory-barang.index'));
        } else {
            session()->flash('success', 'Data berhasil diubah');
            return redirect(route('kategory-barang.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategory_barang = kategory_barang::find($id);
        $kategory_barang->delete();

        if (!$kategory_barang) {
            session()->flash('success', 'Data gagal dihapus');
            return redirect(route('kategory-barang.index'));
        } else {
            session()->flash('success', 'Data berhasil dihapus');
            return redirect(route('kategory-barang.index'));
        }
    }
}
