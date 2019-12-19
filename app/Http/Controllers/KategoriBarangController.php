<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoribarang;

class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kategoribarang.index')
        ->with('kategoribarang', kategoribarang::all());

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
            'keteranganbarang' => 'required',

        ]);

        $kategoribarang = kategoribarang::create([
            'kategoribarang' => $request->kategoribarang,
            'keteranganbarang' => $request->keteranganbarang,
            
        ]);

        session()->flash('success', 'urusan berhasil di tambahkan');
         return redirect(route('kategoribarang.index'));
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
            'kategoribarang' => 'required',
        ]);

        $kategoribarang = kategoribarang::find($id);
        $kategoribarang->update([
            'keteranganbarang' => $request->keteranganbarang,
            'kategoribarang' => $request->kategoribarang,

        ]);

        if (!$kategoribarang) {
            session()->flash('success', 'Data gagal diubah');
            return redirect(route('kategoribarang.index'));
        } else {
            session()->flash('success', 'Data berhasil diubah');
            return redirect(route('kategoriibarang.index'));
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
        $kategoribarang = kategoribarang::find($id);
        $kategoribarang->delete();

        if (!$kategoribarang) {
            session()->flash('success', 'Data gagal dihapus');
            return redirect(route('kategoribarang.index'));
        } else {
            session()->flash('success', 'Data berhasil dihapus');
            return redirect(route('kategoribarang.index'));
        }
    }
}
