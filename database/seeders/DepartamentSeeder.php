<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departament;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departament::created(['codigo' => '01', 'departament' =>'Amazonas']);
        Departament::created(['codigo' => '01','departament' =>'Ancash']);
        Departament::created(['codigo' => '03','departament' =>'Apurímac']);
        Departament::created(['codigo' => '04','departament' =>'Arequipa']);
        Departament::created(['codigo' => '05','departament' =>'Ayacucho']);
        Departament::created(['codigo' => '06','departament' =>'Cajamarca']);
        Departament::created(['codigo' => '07','departament' =>'Callao']);
        Departament::created(['codigo' => '08','departament' =>'Cusco']);
        Departament::created(['codigo' => '09','departament' =>'Huancavelica']);
        Departament::created(['codigo' => '10','departament' =>'Huánuco']);
        Departament::created(['codigo' => '11','departament' =>'Ica']);
        Departament::created(['codigo' => '12','departament' =>'Junin']);
        Departament::created(['codigo' => '13','departament' =>'La Libertad']);
        Departament::created(['codigo' => '14','departament' =>'Lambayeque']);
        Departament::created(['codigo' => '15','departament' =>'Lima']);
        Departament::created(['codigo' => '16','departament' =>'Loreto']);
        Departament::created(['codigo' => '17','departament' =>'Madre de Dios']);
        Departament::created(['codigo' => '18','departament' =>'Moquegua']);
        Departament::created(['codigo' => '19','departament' =>'Pasco']);
        Departament::created(['codigo' => '20','departament' =>'Piura']);
        Departament::created(['codigo' => '21','departament' =>'Puno']);
        Departament::created(['codigo' => '22','departament' =>'San Martín']);
        Departament::created(['codigo' => '23','departament' =>'Tacna']);
        Departament::created(['codigo' => '24','departament' =>'Tumbes']);
        Departament::created(['codigo' => '25','departament' =>'Ucayali']);
        
    }
}
