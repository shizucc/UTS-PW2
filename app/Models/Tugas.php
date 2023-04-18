<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function id_proyek(){
        return $this->belongsTo(Proyek::class, 'proyek_id');
    }
    public function id_tim(){
        return $this->belongsTo(Tim::class, 'tim_id');
    }
}
