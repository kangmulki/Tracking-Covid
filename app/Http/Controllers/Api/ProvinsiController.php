<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{

    public function index(){

        $provinsi = Provinsi::all()->get();
        $res = [
            'success' => true,
            'data'    => $provinsi,
            'message' => 'Data Provinsi Ditampilkan'
        ];

        return response()->json($res,200);

    }
    
    public function store(Request $request)
    {
        $provinsi = new Provinsi();
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->provinsi = $request->provinsi;
        $provinsi->save();

        $res = [
            'success'=> true,
            'data' => $provinsi,
            'message' => 'data berhasil ditambah'
        ];
        return response()->json($res,200);
    }





    public function show($id)
    {
        $provinsi = Provinsi::whereId($id)->first();
        if($provinsi){
            $res = [
                'success'=> true,
                'data' => $provinsi,
                'message' => 'berhasil'
            ];
            return response()->json($res,200 );  

        }else{

            return response()->json([
                'success'=> false,
                'data' => '',
                'message' => 'Data Tidak Ada'
            ],400);

        }
    }
    // public function destroy($id)
    // {
    //     $provinsi = Provinsi::whereId($id)->first();
    //     if($provinsi){
    //         $provinsi->delete();
    //         $res = [
    //             'success'=> true,
    //             'data' => $provinsi,
    //             'message' => 'berhasil'
    //         ];
    //         return response()->json($res,200 );
    //     } else {
    //         return response()->json([
    //             'success'=>false,
    //             'data'=> '',
    //             'message'=>'data tidak ada'
    //         ],400);
    //     }
    // }
}
