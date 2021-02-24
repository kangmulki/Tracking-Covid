<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    public function kelurahann()
    {
    	return $this->hasMany(Kelurahan::class);
    }

    public function kotaa()
    {
    	return $this->BelongsTo(Kota::class,'id_kota');
    }
}
