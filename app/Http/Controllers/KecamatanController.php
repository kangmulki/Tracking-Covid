<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

    $kota = Kota::all();
    $kecamatan = Kecamatan::paginate(5)->fragment('kecamatan');
    return view('kecamatan.index', compact('kecamatan','kota'));
    }

    public function create(){

        $kota = Kota::all();
        return view('kecamatan.create', compact('kota'));
    }

    public function store(Request $request)
    {
        $kecamatan = new Kecamatan;
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->kecamatan = $request->kecamatan;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')->with(['message' => 'Data kecamatan Berhasil disimpan']);
    }

    public function show($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kota = Kota::all();
        return view('kecamatan.show', compact('kecamatan','kota'))->with(['message' => 'Data provinsi Berhasil diedit']);
    }

    public function edit($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kota = Kota::all();
        return view('kecamatan.edit', compact('kecamatan','kota'))->with(['message' => 'Data provinsi Berhasil diedit']);
    }

    public function update(Request $request, $id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->kecamatan = $request->kecamatan;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')->with(['message' => 'Data kota Berhasil disimpan']);
    }

    public function destroy($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->delete();
        return redirect()->route('kecamatan.index')
                        ->with('success','Kota deleted successfully');
    }

}
