<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = ['departament_id', 'name'];

    public function departament()
    {
        return $this->belongsTo('App\Models\Departament', 'departament_id');
    }
  
}
