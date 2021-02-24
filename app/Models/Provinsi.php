<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $fillable = ['kode_provinsi','provinsi'];
    public $timestamps = true;

    public function kotaa()
    {
    	return $this->hasMany(Kota::class);
    }

}
