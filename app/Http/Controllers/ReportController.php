<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Kasus;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){

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
             
                  return view('welcome', compact('positif','sembuh','meninggal'));
  
     }
     public function provinsi(){

      $provinsi = DB::table('provinsis')
                ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('provinsi')
                ->groupBy('provinsi')
                ->get();


      $positif_prov = DB::table('provinsis')
                ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('provinsi',
                        DB::raw('sum(kasuses.jumlah_positif) as jumlah_positif'))
                ->groupBy('provinsi')
                ->get();
      $sembuh_prov = DB::table('provinsis')
                ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('provinsi',
                        DB::raw('sum(kasuses.jumlah_sembuh) as jumlah_sembuh'))
                ->groupBy('provinsi')
                ->get();
      $meninggal_prov = DB::table('provinsis')
                ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('provinsi',
                        DB::raw('sum(kasuses.jumlah_meninggal) as jumlah_meninggal'))
                ->groupBy('provinsi')
                ->get();
           
                return view('welcome', compact('provinsi','positif_prov','sembuh_prov','meninggal_prov'));

   }
}
