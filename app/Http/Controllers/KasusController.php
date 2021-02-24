<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\Kasus;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        // $provinsi = Provinsi::all();
         // mengambil data dari table pegawai
        // $provinsi = DB::table('provinsi')->paginate(2);
        
        $kasus = Kasus::all();
        $rw = Rw::all();
        return view('kasus.index', compact('kasus','rw'));
    }   

    public function create(){

        $rw = Rw::all();
        return view('kasus.create', compact('rw'));
    }
    public function store(Request $request)
    {
        $kasus = new Kasus;
        $kasus->id_rw = $request->id_rw;
        $kasus->jumlah_positif = $request->jumlah_positif;
        $kasus->jumlah_sembuh = $request->jumlah_sembuh;
        $kasus->jumlah_meninggal = $request->jumlah_meninggal;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index')->with(['message' => 'Data kota Berhasil disimpan']);
    }

    public function edit($id)
    {
        $kasus = Kasus::findOrFail($id);
        $provinsi = Provinsi::all();
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        $rw = Rw::all();
        return view('kasus.edit', compact('kasus'))->with(['message' => 'Data provinsi Berhasil diedit']);
    }
}
