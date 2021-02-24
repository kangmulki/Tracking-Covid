<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        // $provinsi = Provinsi::all();
         // mengambil data dari table pegawai
        // $provinsi = DB::table('provinsi')->paginate(2);
        
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        return view('kelurahan.index', compact('kelurahan','kecamatan'));
    }   

    public function create(){

        $kecamatan = Kecamatan::all();
        return view('kelurahan.create', compact('kecamatan'));
    }

    public function store(Request $request)
    {
        $kelurahan = new Kelurahan;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->kelurahan = $request->kelurahan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with(['message' => 'Data kota Berhasil disimpan']);
    }

    public function edit($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kecamatan = Kecamatan::all();
        return view('kelurahan.edit', compact('kelurahan','kecamatan'))->with(['message' => 'Data provinsi Berhasil diedit']);
    }

    public function update(Request $request, $id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->kelurahan = $request->kelurahan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with(['message' => 'Data kota Berhasil disimpan']);
    }

    public function show($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kecamatan = Kecamatan::all();
        return view('kelurahan.show', compact('kelurahan','kecamatan'));
    }

    public function destroy($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->delete();
        return redirect()->route('kelurahan.index')
                        ->with('success','Kota deleted successfully');
    }

}
