<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function provinces(){
        return $this->HasMany('App\Models\Province');
    }
}
