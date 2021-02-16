<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Statu;

class StatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Estado para los usuarios
        Statu::created(['name'=>'Activo']);
        Statu::created(['name'=>'Bloqueado']);
        Statu::created(['name'=>'Vacaciones']);

        /*/estado para los documentos
        Statu::created(['name'=>'Aprobado']);
        Statu::created(['name'=>'Anulado']);
        Statu::created(['name'=>'Cancelado']);*/
    }
}
