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
        return view('barangmasuk.homemasuk', ['barangmasuk'=>$barangmasuk]);
    }

    public function destroy($id)
    {
        //
        $barangmasuk = DB::table('barang')->where('id', $id)->delete();
        session()->flash('success', 'data barang berhasil di hapus');
        return redirect('barangmasuk.homemasuk');
    }
}
