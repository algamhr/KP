<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\divisi;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('divisi.index')
        ->with('divisi', divisi::all());
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
            'nama_divisi' => 'required',


        ]);

        $divisi = divisi::create([
            'nama_divisi' => $request->nama_divisi,
            'ket_divisi' => $request->ket_divisi,

        ]);

        session()->flash('success', 'urusan berhasil di tambahkan');
         return redirect(route('divisi.index'));
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
            'nama_divisi' => 'required',
        ]);

        $divisi = divisi::find($id);
        $divisi->update([
            'nama_divisi' => $request->nama_divisi,
            'ket_divisi' => $request->ket_divisi,

        ]);

        if (!$divisi) {
            session()->flash('success', 'Data gagal diubah');
            return redirect(route('divisi.index'));
        } else {
            session()->flash('success', 'Data berhasil diubah');
            return redirect(route('divisi.index'));
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
        $divisi = divisi::find($id);
        $divisi->delete();

        if (!$divisi) {
            session()->flash('success', 'Data gagal dihapus');
            return redirect(route('divisi.index'));
        } else {
            session()->flash('success', 'Data berhasil dihapus');
            return redirect(route('divisi.index'));
        }
    }
}
