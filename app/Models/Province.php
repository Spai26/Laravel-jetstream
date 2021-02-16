<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function departament(){
        return $this->belongsTo('App\Models\Departament');
    }

    
    public function districs(){
        return $this->hasMany('App\Models\Disctric');
    }
}
