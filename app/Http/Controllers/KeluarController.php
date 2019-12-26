<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\barangkeluar;
use App\barangmasuk;
use App\divisi;

class KeluarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('barangkeluar.index')
        ->with('barangkeluar', barangkeluar::all())
        ->with('barangmasuk', barangmasuk::all())
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
            'barang_id' => 'required',
        ]);

        $barangkeluar = barangkeluar::create([
            'barang_id' => $request->barangmasuk,
            'jumlah_brg_keluar' => $request->jumlah_brg_keluar,
            'tgl_keluar' =>$request->tgl_keluar,
            'divisi_id' =>$request->divisi,
        ]);

        session()->flash('success', 'urusan berhasil di tambahkan');
        return redirect(route('barangkeluar.index'));
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
            'barang_id' => 'required',
        ]);

        $barangkeluar = barangkeluar::find($id);
        $barangkeluar->update([
            'barang_id' => $request->barang_id,
            'jumlah_brg_keluar' => $request->jumlah_brg_keluar,
            'tgl_keluar' =>$request->tgl_keluar,
            'divisi_id' =>$request->divisi_id,
        ]);

        if (!$barangkeluar) {
            session()->flash('success', 'Data gagal diubah');
            return redirect(route('barangkeluar.index'));
        } else {
            session()->flash('success', 'Data berhasil diubah');
            return redirect(route('barangkeluar.index'));
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
        $barangkeluar = DB::table('barangkeluar')->where('id', $id)->delete();
        session()->flash('success', 'data barang berhasil di hapus');
        return redirect(route('barangkeluar.index'));
    }
}
