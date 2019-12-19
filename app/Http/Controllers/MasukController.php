<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\barangmasuk;

class MasukController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $barangmasuk = DB::table('barang')->orderBy('tgl_masuk', 'desc')->get();
        return view('barangmasuk.index', ['barangmasuk'=>$barangmasuk]);
    }

    public function destroy($id)
    {
        //
        $barangmasuk = DB::table('barang')->where('id', $id)->delete();
        session()->flash('success', 'data barang berhasil di hapus');
        return redirect(route('barangmasuk.index'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:unit',

        ]);

        $barangmasuk = barangmasuk::create([
            'nama_brg' => $request->nama_brg,
            'kategory_barang_id' => $request->kategory_barang,
            'jumlah_brg' => $request->jumlah_brg,
            'tgl_masuk' =>$request->tgl_masuk,
        ]);

        session()->flash('success', 'urusan berhasil di tambahkan');
         return redirect(route('barangmasuk.index'));
    }

    public function update(Request $request, $id)
    {
         $request->validate([
            'nama_brg' => 'required',
        ]);

        $barangmasuk = barangmasuk::find($id);
        $barangmasuk->update([
            'nama_brg' => $request->nama_brg,
            'kategory_barang_id' => $request->kategory_barang_id,
            'jumlah_brg' => $request->jumlah_brg,
            'tgl_masuk' =>$request->tgl_masuk,
        ]);

        if (!$barangmasuk) {
            session()->flash('success', 'Data gagal diubah');
            return redirect(route('unibarangmasukt.index'));
        } else {
            session()->flash('success', 'Data berhasil diubah');
            return redirect(route('barangmasuk.index'));
        }
    }
}

