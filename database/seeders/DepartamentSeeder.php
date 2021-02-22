<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Departaments')->insert(['name' =>'Amazonas']);
        DB::table('Departaments')->insert(['name' =>'Ancash']);
        DB::table('Departaments')->insert(['name' =>'Apurimac']);
        DB::table('Departaments')->insert(['name' =>'Arequipa']);
        DB::table('Departaments')->insert(['name' =>'Ayacucho']);
        DB::table('Departaments')->insert(['name' =>'Cajamarca']);
        DB::table('Departaments')->insert(['name' =>'Callao']);
        DB::table('Departaments')->insert(['name' =>'Cusco']);
        DB::table('Departaments')->insert(['name' =>'Huancavelica']);
        DB::table('Departaments')->insert(['name' =>'Huanuco']);
        DB::table('Departaments')->insert(['name' =>'Ica']);
        DB::table('Departaments')->insert(['name' =>'Junin']);
        DB::table('Departaments')->insert(['name' =>'La Libertad']);
        DB::table('Departaments')->insert(['name' =>'Lambayeque']);
        DB::table('Departaments')->insert(['name' =>'Lima']);
        DB::table('Departaments')->insert(['name' =>'Loreto']);
        DB::table('Departaments')->insert(['name' =>'Madre de Dios']);
        DB::table('Departaments')->insert(['name' =>'Moquegua']);
        DB::table('Departaments')->insert(['name' =>'Pasco']);
        DB::table('Departaments')->insert(['name' =>'Piura']);
        DB::table('Departaments')->insert(['name' =>'Puno']);
        DB::table('Departaments')->insert(['name' =>'San Martin']);
        DB::table('Departaments')->insert(['name' =>'Tacna']);
        DB::table('Departaments')->insert(['name' =>'Tumbes']);
        DB::table('Departaments')->insert(['name' =>'Ucayali']);
        
    }
}
