<?php

namespace App\Http\Controllers;
use App\Models\Provinsi;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
     $provinsi = Provinsi::all();
     return view('provinsi.index', compact('provinsi'));
    // return response()->json([
    //     'success' => true,
    //     'message' => 'Menampilkan Data',
    //     'data'    => $provinsi
    // ],400);
}
    

    public function create(){
        return view('provinsi.create');
    }

    public function store(Request $request)
    {
        //Validasi
        $validatedData = $request->validate([
            'kode_provinsi' => 'required',
            'provinsi' => 'required|max:255',
       ]);

        $provinsi = new Provinsi;
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->provinsi      = $request->provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index');
    }

    public function show($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.show', compact('provinsi'));
    }

    public function edit($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.edit', compact('provinsi'));
    }

    public function update(Request $request, $id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->provinsi      = $request->provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index');
    }

    public function destroy($id)
        {
            $provinsi = Provinsi::findOrFail($id);
            $provinsi->delete();
            return redirect()->route('provinsi.index');
    }

    

}
