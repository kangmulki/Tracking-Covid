<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    use HasFactory;

    public function kasuss()
    {
    	return $this->hasMany(Kasus::class);
    }

    public function kelurahann()
    {
    	return $this->BelongsTo(Kelurahan::class,'id_kelurahan');
    }
}
