<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kasus;
use App\Models\Provinsi;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public $data = [];
        public function global(){
     
        $response = Http::get('https://api.kawalcorona.com/')->json();
        $data = [
                'Data Global' => $response
        ];

        return response()->json($data,200);


     }

     public function indonesia(){
             
        $positif = DB::table('rws')
                   ->select('kasuses.jumlah_positif','kasuses.jumlah_sembuh','kasuses.jumlah_meninggal')
                   ->join('kasuses','rws.id','=','kasuses.id_rw')
                   ->sum('kasuses.jumlah_positif');
                
        $sembuh  = DB::table('rws')
                   ->select('kasuses.jumlah_positif','kasuses.jumlah_sembuh','kasuses.jumlah_meninggal')
                   ->join('kasuses','rws.id','=','kasuses.id_rw')
                   ->sum('kasuses.jumlah_sembuh');

        $meninggal = DB::table('rws')
                   ->select('kasuses.jumlah_positif','kasuses.jumlah_sembuh','kasuses.jumlah_meninggal')
                   ->join('kasuses','rws.id','=','kasuses.id_rw')
                   ->sum('kasuses.jumlah_meninggal');

                    //    Data Hari Ini
        $selectpositif = DB::table('rws')
                   ->select('kasuses.jumlah_positif','kasuses.jumlah_sembuh','kasuses.jumlah_meninggal')
                   ->join('kasuses','rws.id','=','kasuses.id_rw')
                   ->whereDate('tanggal',Carbon::today())
                   ->sum('kasuses.jumlah_positif');
                
        $selectsembuh  = DB::table('rws')
                   ->select('kasuses.jumlah_positif','kasuses.jumlah_sembuh','kasuses.jumlah_meninggal')
                   ->join('kasuses','rws.id','=','kasuses.id_rw')
                   ->whereDate('tanggal',Carbon::today())
                   ->sum('kasuses.jumlah_sembuh');

        $selectmeninggal = DB::table('rws')
                   ->select('kasuses.jumlah_positif','kasuses.jumlah_sembuh','kasuses.jumlah_meninggal')
                   ->join('kasuses','rws.id','=','kasuses.id_rw')
                   ->whereDate('tanggal',Carbon::today())
                   ->sum('kasuses.jumlah_meninggal');

                
                $hari_ini = [
                        'Jumlah Positif'      => $selectpositif,
                        'Jumlah Sembuh'       => $selectsembuh,
                        'Jumlah Meninggal'    => $selectmeninggal
                ];
                $total = [
                        'Jumlah Positif'      => $positif,
                        'Jumlah Sembuh'       => $sembuh,
                        'Jumlah Meninggal'    => $meninggal
                ];
                
                
                   $data = [
                        'success'             => true,
                        'Data'                => ['Hari Ini '=>$hari_ini,
                                                  'Kasus Indonesia'=>$total],
                        
                        'message' => 'Data Kasus Indonesia Ditampilkan'
                         ];
    
            return response()->json($data,200);
     } 
    
    
    public function provinsi(){

        $provinsi = DB::table('provinsis')
                ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kode_provinsi','provinsi',
                        DB::raw('sum(kasuses.jumlah_positif) as jumlah_positif'),
                        DB::raw('sum(kasuses.jumlah_sembuh) as jumlah_sembuh'),
                        DB::raw('sum(kasuses.jumlah_meninggal) as jumlah_meninggal'))
                ->groupBy('provinsi','kode_provinsi')
                ->get();

                $data = [
                        'success'       => true,
                        'Data Provinsi' => $provinsi,
                        'message'       => 'Data Kasus Ditampilkan'
                        ];

            return response()->json($data,200);

        }

        public function kota(){

                $kota = DB::table('kotas')
                        // ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                        ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                        ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                        ->join('kasuses','kasuses.id_rw','=','rws.id')
                        ->select('kode_kota','kota',
                                DB::raw('sum(kasuses.jumlah_positif) as jumlah_positif'),
                                DB::raw('sum(kasuses.jumlah_sembuh) as jumlah_sembuh'),
                                DB::raw('sum(kasuses.jumlah_meninggal) as jumlah_meninggal'))
                        ->groupBy('kota','kode_kota')
                        ->get();
        
                        $data = [
                                'success'       => true,
                                'Data Kota' => $kota,
                                'message'       => 'Data Kasus Ditampilkan'
                                ];
        
                    return response()->json($data,200);
        
                }
        
        public function kecamatan(){

                $kecamatan = DB::table('kecamatans')
                                // ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                                // ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                        ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                        ->join('kasuses','kasuses.id_rw','=','rws.id')
                        ->select('kecamatan',
                                DB::raw('sum(kasuses.jumlah_positif) as jumlah_positif'),
                                DB::raw('sum(kasuses.jumlah_sembuh) as jumlah_sembuh'),
                                DB::raw('sum(kasuses.jumlah_meninggal) as jumlah_meninggal'))
                        ->groupBy('kecamatan')
                        ->get();
                
                        $data = [
                                'success'       => true,
                                'Data Kecamatan' => $kecamatan,
                                'message'       => 'Data Kasus Ditampilkan'
                                ];
                
                    return response()->json($data,200);
                
                }

                
                public function kelurahan(){

                        $kelurahan = DB::table('kelurahans')
                                // ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                                // ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                                // ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                                ->join('kasuses','kasuses.id_rw','=','rws.id')
                                ->select('kelurahan',
                                        DB::raw('sum(kasuses.jumlah_positif) as jumlah_positif'),
                                        DB::raw('sum(kasuses.jumlah_sembuh) as jumlah_sembuh'),
                                        DB::raw('sum(kasuses.jumlah_meninggal) as jumlah_meninggal'))
                                ->groupBy('kelurahan')
                                ->get();
                
                                $data = [
                                        'success'       => true,
                                        'Data Kelurahan' => $kelurahan,
                                        'message'       => 'Data Kasus Ditampilkan'
                                        ];
                
                            return response()->json($data,200);
                
                        }
//     public function provinsi2($id){


//         $tampil = DB::table('provinsis')
//                 ->join('kotas','kotas.id_provinsi','=','provinsis.id')
//                 ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
//                 ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
//                 ->join('rws','rws.id_kelurahan','=','kelurahans.id')
//                 ->join('kasuses','kasuses.id_rw','=','rws.id')
//                 ->where('provinsis.id',$id)
//                 ->select('provinsi',
//                         DB::raw('sum(kasuses.jumlah_positif) as jumlah_positif'),
//                         DB::raw('sum(kasuses.jumlah_sembuh) as jumlah_sembuh'),
//                         DB::raw('sum(kasuses.jumlah_meninggal) as jumlah_meninggal'))
//                 ->groupBy('provinsi')
//                 ->get();
        
//                  $data = [
//                         'success'        => true,
//                         'Data Provinsi'  => $tampil,
//                         'message'        => 'Data Kasus Ditampilkan'
//                          ];
    
        //     return response()->json($data,200);
        // }
    
         
            
        

}
