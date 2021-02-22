<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distric extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function province(){
        return $this->belongsTo('App\Models\Province', 'province_id');
    }
    public function departament(){
        return $this->belongsTo('App\Models\Departament', 'departament_id');
    }
}
