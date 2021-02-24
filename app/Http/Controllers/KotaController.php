<?php

namespace App\Http\Controllers;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        // $provinsi = Provinsi::all();
         // mengambil data dari table pegawai
        // $provinsi = DB::table('provinsi')->paginate(2);
        
        $provinsi = Provinsi::all();
        $kota = Kota::all();
        return view('kota.index', compact('kota','provinsi'));
    }   

    public function create(){

        $provinsi = Provinsi::all();
        return view('kota.create', compact('provinsi'));
    }

    public function store(Request $request)
    {
        $kota = new Kota;
        $kota->id_provinsi = $request->id_provinsi;
        $kota->kode_kota = $request->kode_kota;
        $kota->kota = $request->kota;
        $kota->save();
        return redirect()->route('kota.index')->with(['message' => 'Data kota Berhasil disimpan']);
    }

    public function edit($id)
    {
        $kota = Kota::findOrFail($id);
        $provinsi = Provinsi::all();
        return view('kota.edit', compact('kota','provinsi'))->with(['message' => 'Data provinsi Berhasil diedit']);
    }

    public function update(Request $request, $id)
    {
        $kota = Kota::findOrFail($id);
        $kota->id_provinsi = $request->id_provinsi;
        $kota->kode_kota = $request->kode_kota;
        $kota->kota = $request->kota;
        $kota->save();
        return redirect()->route('kota.index')->with(['message' => 'Data kota Berhasil disimpan']);
    }

    public function show($id)
    {
        $kota = Kota::findOrFail($id);
        $provinsi = Provinsi::all();
        return view('kota.show', compact('kota','provinsi'))->with(['message' => 'Data provinsi Berhasil diedit']);
    }

    public function destroy($id)
    {
        $kota = Kota::findOrFail($id);
        $kota->delete();
        return redirect()->route('kota.index')
                        ->with('success','Kota deleted successfully');
    }
}
