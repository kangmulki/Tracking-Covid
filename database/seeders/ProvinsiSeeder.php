<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = [
            ['id'=>11, 'kode_provinsi' =>'11','provinsi'=>'ACEH'],
            ['id'=>12, 'kode_provinsi' =>'12','provinsi'=>'SUMATERA UTARA'],
            ['id'=>13, 'kode_provinsi' =>'13','provinsi'=>'SUMATERA BARAT'],
            ['id'=>14, 'kode_provinsi' =>'14','provinsi'=>'RIAU'],
            ['id'=>15, 'kode_provinsi' =>'15','provinsi'=>'JAMBI'],
            ['id'=>16, 'kode_provinsi' =>'16','provinsi'=>'SUMATERA SELATAN'],
            ['id'=>17, 'kode_provinsi' =>'17','provinsi'=>'BENGKULU'],
            ['id'=>18, 'kode_provinsi' =>'18','provinsi'=>'LAMPUNG'],
            ['id'=>19, 'kode_provinsi' =>'19','provinsi'=>'KEPULAUAN BANGKA BELITUNG'],
            ['id'=>21, 'kode_provinsi' =>'21','provinsi'=>'KEPULAUAN RIAU'],
            ['id'=>31, 'kode_provinsi' =>'31','provinsi'=>'DKI JAKARTA'],
            ['id'=>32, 'kode_provinsi' =>'32','provinsi'=>'JAWA BARAT'],
            ['id'=>33, 'kode_provinsi' =>'33','provinsi'=>'JAWA TENGAH'],
            ['id'=>34, 'kode_provinsi' =>'34','provinsi'=>'DI YOGYAKARTA'],
            ['id'=>35, 'kode_provinsi' =>'35','provinsi'=>'JAWA TIMUR'],
            ['id'=>36, 'kode_provinsi' =>'36','provinsi'=>'BANTEN'],
            ['id'=>51, 'kode_provinsi' =>'51','provinsi'=>'BALI'],
            ['id'=>52, 'kode_provinsi' =>'52','provinsi'=>'NUSA TENGGARA BARAT'],
            ['id'=>53, 'kode_provinsi' =>'53','provinsi'=>'NUSA TENGGARA TIMUR'],
            ['id'=>61, 'kode_provinsi' =>'61','provinsi'=>'KALIMANTAN BARAT'],
            ['id'=>62, 'kode_provinsi' =>'62','provinsi'=>'KALIMANTAN TENGAH'],
            ['id'=>63, 'kode_provinsi' =>'63','provinsi'=>'KALIMANTAN SELATAN'],
            ['id'=>64, 'kode_provinsi' =>'64','provinsi'=>'KALIMANTAN TIMUR'],
            ['id'=>65, 'kode_provinsi' =>'65','provinsi'=>'KALIMANTAN UTARA'],
            ['id'=>71, 'kode_provinsi' =>'71','provinsi'=>'SULAWESI UTARA'],
            ['id'=>72, 'kode_provinsi' =>'72','provinsi'=>'SULAWESI TENGAH'],
            ['id'=>73, 'kode_provinsi' =>'73','provinsi'=>'SULAWESI SELATAN'],
            ['id'=>74, 'kode_provinsi' =>'74','provinsi'=>'SULAWESI TENGGARA'],
            ['id'=>75, 'kode_provinsi' =>'75','provinsi'=>'GORONTALO'],
            ['id'=>76, 'kode_provinsi' =>'76','provinsi'=>'SULAWESI BARAT'],
            ['id'=>81, 'kode_provinsi' =>'81','provinsi'=>'MALUKU'],
            ['id'=>82, 'kode_provinsi' =>'82','provinsi'=>'MALUKU UTARA'],
            ['id'=>91, 'kode_provinsi' =>'91','provinsi'=>'PAPUA BARAT'],
            ['id'=>94, 'kode_provinsi' =>'94','provinsi'=>'PAPUA'],
        ];

        DB::table('provinsis')->insert($provinsi);
    }
}
