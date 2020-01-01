<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barangmasuk;
use App\barangkeluar;
class HomeController extends Controller
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
        return view('home')
        ->with('total_masuk', barangmasuk::all()->sum('jumlah_brg'))
        ->with('total_keluar', barangkeluar::all()->sum('jumlah_brg_keluar'));
    }

    public function barangmasuk()
    {
        return view('barangmasuk');

    }
}
