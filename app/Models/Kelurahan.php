<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    public function rww()
    {
    	return $this->hasMany(Rw::class);
    }

    public function kecamatann()
    {
    	return $this->BelongsTo(Kecamatan::class,'id_kecamatan');
    }
}
