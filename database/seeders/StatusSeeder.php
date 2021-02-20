<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Estado para los usuarios
        DB::table('Status')->insert([
            'name' => 'Activo',           
        ]);

        DB::table('Status')->insert([
            'name' => 'Bloqueado',           
        ]);

        DB::table('Status')->insert([
            'name' => 'Vacaciones',           
        ]);

        

        /*/estado para los documentos
        Statu::created(['name'=>'Aprobado']);
        Statu::created(['name'=>'Anulado']);
        Statu::created(['name'=>'Cancelado']);*/
    }
}
