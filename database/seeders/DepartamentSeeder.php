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
        DB::table('Departaments')->insert(['codigo' => '01', 'departament' =>'Amazonas']);
        DB::table('Departaments')->insert(['codigo' => '02','departament' =>'Ancash']);
        DB::table('Departaments')->insert(['codigo' => '03','departament' =>'Apurímac']);
        DB::table('Departaments')->insert(['codigo' => '04','departament' =>'Arequipa']);
        DB::table('Departaments')->insert(['codigo' => '05','departament' =>'Ayacucho']);
        DB::table('Departaments')->insert(['codigo' => '06','departament' =>'Cajamarca']);
        DB::table('Departaments')->insert(['codigo' => '07','departament' =>'Callao']);
        DB::table('Departaments')->insert(['codigo' => '08','departament' =>'Cusco']);
        DB::table('Departaments')->insert(['codigo' => '09','departament' =>'Huancavelica']);
        DB::table('Departaments')->insert(['codigo' => '10','departament' =>'Huánuco']);
        DB::table('Departaments')->insert(['codigo' => '11','departament' =>'Ica']);
        DB::table('Departaments')->insert(['codigo' => '12','departament' =>'Junin']);
        DB::table('Departaments')->insert(['codigo' => '13','departament' =>'La Libertad']);
        DB::table('Departaments')->insert(['codigo' => '14','departament' =>'Lambayeque']);
        DB::table('Departaments')->insert(['codigo' => '15','departament' =>'Lima']);
        DB::table('Departaments')->insert(['codigo' => '16','departament' =>'Loreto']);
        DB::table('Departaments')->insert(['codigo' => '17','departament' =>'Madre de Dios']);
        DB::table('Departaments')->insert(['codigo' => '18','departament' =>'Moquegua']);
        DB::table('Departaments')->insert(['codigo' => '19','departament' =>'Pasco']);
        DB::table('Departaments')->insert(['codigo' => '20','departament' =>'Piura']);
        DB::table('Departaments')->insert(['codigo' => '21','departament' =>'Puno']);
        DB::table('Departaments')->insert(['codigo' => '22','departament' =>'San Martín']);
        DB::table('Departaments')->insert(['codigo' => '23','departament' =>'Tacna']);
        DB::table('Departaments')->insert(['codigo' => '24','departament' =>'Tumbes']);
        DB::table('Departaments')->insert(['codigo' => '25','departament' =>'Ucayali']);
        
    }
}
