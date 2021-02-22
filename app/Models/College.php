<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'departament_id'];

    public function departament(){
        return $this->belongsTo('App\Models\Departament');
    }
}
