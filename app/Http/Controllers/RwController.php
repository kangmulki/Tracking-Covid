<?php

namespace App\Http\Controllers;
use App\Models\Rw;
use App\Models\Kelurahan;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class RwController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        // $provinsi = Provinsi::all();
         // mengambil data dari table pegawai
        // $provinsi = DB::table('provinsi')->paginate(2);
        
        $kelurahan = Kelurahan::all();
        $rw = Rw::all();
        return view('rw.index', compact('kelurahan','rw'));
    }   

    public function create(){

        $kelurahan = Kelurahan::all();
        return view('rw.create', compact('kelurahan'));
    }

    public function store(Request $request)
    {
        $rw = new Rw;
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->rw = $request->rw;
        $rw->save();
        return redirect()->route('rw.index')->with(['message' => 'Data kota Berhasil disimpan']);
    }

    public function edit($id)
    {
        $rw = Rw::findOrFail($id);
        $kelurahan = Kelurahan::all();
        return view('rw.edit', compact('kelurahan','rw'))->with(['message' => 'Data provinsi Berhasil diedit']);
    }

    public function update(Request $request, $id)
    {
        $rw = Rw::findOrFail($id);
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->rw = $request->rw;
        $rw->save();
        return redirect()->route('rw.index')->with(['message' => 'Data kota Berhasil disimpan']);
    }

    public function show($id)
    {
        $rw = Rw::findOrFail($id);
        $kelurahan = Kelurahan::all();
        return view('rw.show', compact('kelurahan','rw'));
    }

    public function destroy($id)
    {
        $rw = Rw::findOrFail($id);
        $rw->delete();
        return redirect()->route('rw.index')
                        ->with('success','Kota deleted successfully');
    }

}
