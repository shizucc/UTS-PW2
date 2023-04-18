<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    protected $guarded = ['id'];
    use HasFactory;


    public function proyek(){
        return $this->hasMany(Proyek::class);
    }
}
