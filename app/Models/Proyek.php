<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function tim(){
        return $this->belongsTo(Tim::class);
    }
}
