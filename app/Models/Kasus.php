<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    use HasFactory;

    public function rww()
    {
    	return $this->BelongsTo(Rw::class,'id_rw');
    }
}
