<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $fillable = ['id_provinsi','kota'];
    public $timestamps = true;

    public function kecamatann()
    {
    	return $this->hasMany(Kecamatan::class);
    }

    public function provinsii()
    {
    	return $this->BelongsTo(Provinsi::class,'id_provinsi');
    }
}
