<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Provinces')->insert(['departament_id' => '1', 'name' => 'Chachapoyas']);
        DB::table('Provinces')->insert(['departament_id' => '1', 'name' => 'Bagua']);
        DB::table('Provinces')->insert(['departament_id' => '1', 'name' => 'Bongara']);
        DB::table('Provinces')->insert(['departament_id' => '1', 'name' => 'Condorcanqui']);
        DB::table('Provinces')->insert(['departament_id' => '1', 'name' => 'Luya']);
        DB::table('Provinces')->insert(['departament_id' => '1', 'name' => 'Rodriguez de Mendoza']);
        DB::table('Provinces')->insert(['departament_id' => '1', 'name' => 'Utcubamba']);

        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Huaraz']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Aija']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Antonio Raymondi']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Asunción']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Bolognesi']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Carhuaz']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Carlos Fermin Fitzcarrald']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Casma']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Corongo']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Huari']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Huarmey']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Huaylas']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Mariscal Luzuriaga']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Ocros']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Pallasca']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Pomabamba']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Recuay']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Santa']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Sihuas']);
        DB::table('Provinces')->insert(['departament_id' => '2', 'name' => 'Yungay']);

        DB::table('Provinces')->insert(['departament_id' => '3', 'name' => 'Abancay']);
        DB::table('Provinces')->insert(['departament_id' => '3', 'name' => 'Andahuaylas']);
        DB::table('Provinces')->insert(['departament_id' => '3', 'name' => 'Antabamba']);
        DB::table('Provinces')->insert(['departament_id' => '3', 'name' => 'Aymaraes']);
        DB::table('Provinces')->insert(['departament_id' => '3', 'name' => 'Cotabambas']);
        DB::table('Provinces')->insert(['departament_id' => '3', 'name' => 'Chincheros']);
        DB::table('Provinces')->insert(['departament_id' => '3', 'name' => 'Grau']);

        DB::table('Provinces')->insert(['departament_id' => '4', 'name' => 'Arequipa']);
        DB::table('Provinces')->insert(['departament_id' => '4', 'name' => 'Camana']);
        DB::table('Provinces')->insert(['departament_id' => '4', 'name' => 'Caraveli']);
        DB::table('Provinces')->insert(['departament_id' => '4', 'name' => 'Castilla']);
        DB::table('Provinces')->insert(['departament_id' => '4', 'name' => 'Caylloma']);
        DB::table('Provinces')->insert(['departament_id' => '4', 'name' => 'Condesuyos']);
        DB::table('Provinces')->insert(['departament_id' => '4', 'name' => 'Islay']);
        DB::table('Provinces')->insert(['departament_id' => '4', 'name' => 'La Union']);

        DB::table('Provinces')->insert(['departament_id' => '5', 'name' => 'Huamanga']);
        DB::table('Provinces')->insert(['departament_id' => '5', 'name' => 'Cangallo']);
        DB::table('Provinces')->insert(['departament_id' => '5', 'name' => 'Huanca Sancos']);
        DB::table('Provinces')->insert(['departament_id' => '5', 'name' => 'Huanta']);
        DB::table('Provinces')->insert(['departament_id' => '5', 'name' => 'La Mar']);        
        DB::table('Provinces')->insert(['departament_id' => '5', 'name' => 'Lucanas']);
        DB::table('Provinces')->insert(['departament_id' => '5', 'name' => 'Parinacochas']);
        DB::table('Provinces')->insert(['departament_id' => '5', 'name' => 'Paucar del Sara Sara']);
        DB::table('Provinces')->insert(['departament_id' => '5', 'name' => 'Sucre']);
        DB::table('Provinces')->insert(['departament_id' => '5', 'name' => 'Victor Fajardo']);
        DB::table('Provinces')->insert(['departament_id' => '5', 'name' => 'Vilcas Huaman']);

        DB::table('Provinces')->insert(['departament_id' => '6', 'name' => 'Cajamarca']);
        DB::table('Provinces')->insert(['departament_id' => '6', 'name' => 'Cajabamba']);
        DB::table('Provinces')->insert(['departament_id' => '6', 'name' => 'Celendin']);
        DB::table('Provinces')->insert(['departament_id' => '6', 'name' => 'Chota']);
        DB::table('Provinces')->insert(['departament_id' => '6', 'name' => 'Contumaza']);
        DB::table('Provinces')->insert(['departament_id' => '6', 'name' => 'Cutervo']);
        DB::table('Provinces')->insert(['departament_id' => '6', 'name' => 'Hualgayoc']);
        DB::table('Provinces')->insert(['departament_id' => '6', 'name' => 'Jaen']);
        DB::table('Provinces')->insert(['departament_id' => '6', 'name' => 'San Ignacio']);
        DB::table('Provinces')->insert(['departament_id' => '6', 'name' => 'San Marcos']);
        DB::table('Provinces')->insert(['departament_id' => '6', 'name' => 'San Miguel']);
        DB::table('Provinces')->insert(['departament_id' => '6', 'name' => 'San Pablo']);
        DB::table('Provinces')->insert(['departament_id' => '6', 'name' => 'Santa Cruz']);
        
        DB::table('Provinces')->insert(['departament_id' => '7', 'name' => 'Prov. Const. del Callao']);
        
        DB::table('Provinces')->insert(['departament_id' => '8', 'name' => 'Cusco']);
        DB::table('Provinces')->insert(['departament_id' => '8', 'name' => 'Acomayo']);
        DB::table('Provinces')->insert(['departament_id' => '8', 'name' => 'Anta']);
        DB::table('Provinces')->insert(['departament_id' => '8', 'name' => 'Calca']);
        DB::table('Provinces')->insert(['departament_id' => '8', 'name' => 'Canas']);
        DB::table('Provinces')->insert(['departament_id' => '8', 'name' => 'Canchis']);
        DB::table('Provinces')->insert(['departament_id' => '8', 'name' => 'Chumbivilcas']);
        DB::table('Provinces')->insert(['departament_id' => '8', 'name' => 'Espinar']);
        DB::table('Provinces')->insert(['departament_id' => '8', 'name' => 'La Convencion']);
        DB::table('Provinces')->insert(['departament_id' => '8', 'name' => 'Paruro']);
        DB::table('Provinces')->insert(['departament_id' => '8', 'name' => 'Paucartambo']);
        DB::table('Provinces')->insert(['departament_id' => '8', 'name' => 'Quispicanchi	']);
        DB::table('Provinces')->insert(['departament_id' => '8', 'name' => 'Urubamba']);

        DB::table('Provinces')->insert(['departament_id' => '9', 'name' => 'Huancavelica']);
        DB::table('Provinces')->insert(['departament_id' => '9', 'name' => 'Acobamba']);
        DB::table('Provinces')->insert(['departament_id' => '9', 'name' => 'Angaraes']);
        DB::table('Provinces')->insert(['departament_id' => '9', 'name' => 'Castrovirreyna']);
        DB::table('Provinces')->insert(['departament_id' => '9', 'name' => 'Churcampa']);
        DB::table('Provinces')->insert(['departament_id' => '9', 'name' => 'Huaytara']);
        DB::table('Provinces')->insert(['departament_id' => '9', 'name' => 'Tayacaja']);

        DB::table('Provinces')->insert(['departament_id' => '10', 'name' => 'Huanuco']);
        DB::table('Provinces')->insert(['departament_id' => '10', 'name' => 'Ambo']);
        DB::table('Provinces')->insert(['departament_id' => '10', 'name' => 'Dos de Mayo']);
        DB::table('Provinces')->insert(['departament_id' => '10', 'name' => 'Huacaybamba']);
        DB::table('Provinces')->insert(['departament_id' => '10', 'name' => 'Huamalies']);
        DB::table('Provinces')->insert(['departament_id' => '10', 'name' => 'Leoncio Pradoo']);
        DB::table('Provinces')->insert(['departament_id' => '10', 'name' => 'Marañon']);
        DB::table('Provinces')->insert(['departament_id' => '10', 'name' => 'Pachitea']);
        DB::table('Provinces')->insert(['departament_id' => '10', 'name' => 'Puerto Inca']);
        DB::table('Provinces')->insert(['departament_id' => '10', 'name' => 'Lauricocha']);
        DB::table('Provinces')->insert(['departament_id' => '10', 'name' => 'Yarowilca']);

        DB::table('Provinces')->insert(['departament_id' => '11', 'name' => 'Ica']);
        DB::table('Provinces')->insert(['departament_id' => '11', 'name' => 'Chincha']);
        DB::table('Provinces')->insert(['departament_id' => '11', 'name' => 'Nasca']);
        DB::table('Provinces')->insert(['departament_id' => '11', 'name' => 'Palpa']);
        DB::table('Provinces')->insert(['departament_id' => '11', 'name' => 'Pisco']);
        
        DB::table('Provinces')->insert(['departament_id' => '12', 'name' => 'Huancayo']);
        DB::table('Provinces')->insert(['departament_id' => '12', 'name' => 'Concepcion']);
        DB::table('Provinces')->insert(['departament_id' => '12', 'name' => 'Chanchamayo']);
        DB::table('Provinces')->insert(['departament_id' => '12', 'name' => 'Jauja']);
        DB::table('Provinces')->insert(['departament_id' => '12', 'name' => 'Junin']);
        DB::table('Provinces')->insert(['departament_id' => '12', 'name' => 'Satipo']);
        DB::table('Provinces')->insert(['departament_id' => '12', 'name' => 'Tarma']);
        DB::table('Provinces')->insert(['departament_id' => '12', 'name' => 'Yauli']);
        DB::table('Provinces')->insert(['departament_id' => '12', 'name' => 'Chupaca']);

        DB::table('Provinces')->insert(['departament_id' => '13', 'name' => 'Trujillo']);
        DB::table('Provinces')->insert(['departament_id' => '13', 'name' => 'Ascope']);
        DB::table('Provinces')->insert(['departament_id' => '13', 'name' => 'Bolivar']);
        DB::table('Provinces')->insert(['departament_id' => '13', 'name' => 'Chepen']);        
        DB::table('Provinces')->insert(['departament_id' => '13', 'name' => 'Julcan']);
        DB::table('Provinces')->insert(['departament_id' => '13', 'name' => 'Otuzco']);
        DB::table('Provinces')->insert(['departament_id' => '13', 'name' => 'Pacasmayo']);
        DB::table('Provinces')->insert(['departament_id' => '13', 'name' => 'Pataz']);        
        DB::table('Provinces')->insert(['departament_id' => '13', 'name' => 'Sánchez Carrion']);
        DB::table('Provinces')->insert(['departament_id' => '13', 'name' => 'Santiago de Chuco']);
        DB::table('Provinces')->insert(['departament_id' => '13', 'name' => 'Gran Chimu']);
        DB::table('Provinces')->insert(['departament_id' => '13', 'name' => 'Viru']);

        DB::table('Provinces')->insert(['departament_id' => '14', 'name' => 'Chiclayo']);
        DB::table('Provinces')->insert(['departament_id' => '14', 'name' => 'Ferreñafe']);
        DB::table('Provinces')->insert(['departament_id' => '14', 'name' => 'Lambayeque']);
        
        DB::table('Provinces')->insert(['departament_id' => '15', 'name' => 'Lima']);
        DB::table('Provinces')->insert(['departament_id' => '15', 'name' => 'Barranca']);
        DB::table('Provinces')->insert(['departament_id' => '15', 'name' => 'Cajatambo']);
        DB::table('Provinces')->insert(['departament_id' => '15', 'name' => 'Canta']);
        DB::table('Provinces')->insert(['departament_id' => '15', 'name' => 'Cañete']);
        DB::table('Provinces')->insert(['departament_id' => '15', 'name' => 'Huaral']);
        DB::table('Provinces')->insert(['departament_id' => '15', 'name' => 'Huarochiri']);
        DB::table('Provinces')->insert(['departament_id' => '15', 'name' => 'Huaura']);
        DB::table('Provinces')->insert(['departament_id' => '15', 'name' => 'Oyon']);
        DB::table('Provinces')->insert(['departament_id' => '15', 'name' => 'Yauyos']);
        
        DB::table('Provinces')->insert(['departament_id' => '16', 'name' => 'Maynas']);
        DB::table('Provinces')->insert(['departament_id' => '16', 'name' => 'Alto Amazonas']);
        DB::table('Provinces')->insert(['departament_id' => '16', 'name' => 'Loreto']);
        DB::table('Provinces')->insert(['departament_id' => '16', 'name' => 'Mariscal Ramon Castilla']);
        DB::table('Provinces')->insert(['departament_id' => '16', 'name' => 'Requena']);
        DB::table('Provinces')->insert(['departament_id' => '16', 'name' => 'Ucayali']);
        DB::table('Provinces')->insert(['departament_id' => '16', 'name' => 'Datem del Marañon']);
        DB::table('Provinces')->insert(['departament_id' => '16', 'name' => 'Putumayo']);
                
        DB::table('Provinces')->insert(['departament_id' => '17', 'name' => 'Tambopata']);
        DB::table('Provinces')->insert(['departament_id' => '17', 'name' => 'Manu']);
        DB::table('Provinces')->insert(['departament_id' => '17', 'name' => 'Tahuamanu']);

        DB::table('Provinces')->insert(['departament_id' => '18', 'name' => 'Mariscal Nieto']);
        DB::table('Provinces')->insert(['departament_id' => '18', 'name' => 'General Sánchez Cerro']);
        DB::table('Provinces')->insert(['departament_id' => '18', 'name' => 'Ilo']);

        DB::table('Provinces')->insert(['departament_id' => '19', 'name' => 'Pasco']);
        DB::table('Provinces')->insert(['departament_id' => '19', 'name' => 'Daniel Alcides Carrion']);
        DB::table('Provinces')->insert(['departament_id' => '19', 'name' => 'Oxapampa']);

        DB::table('Provinces')->insert(['departament_id' => '20', 'name' => 'Piura']);
        DB::table('Provinces')->insert(['departament_id' => '20', 'name' => 'Ayabaca']);
        DB::table('Provinces')->insert(['departament_id' => '20', 'name' => 'Huancabamba']);
        DB::table('Provinces')->insert(['departament_id' => '20', 'name' => 'Morropon']);
        DB::table('Provinces')->insert(['departament_id' => '20', 'name' => 'Paita']);
        DB::table('Provinces')->insert(['departament_id' => '20', 'name' => 'Sullana']);
        DB::table('Provinces')->insert(['departament_id' => '20', 'name' => 'Talara']);
        DB::table('Provinces')->insert(['departament_id' => '20', 'name' => 'Sechura']);

        DB::table('Provinces')->insert(['departament_id' => '21', 'name' => 'Puno']);
        DB::table('Provinces')->insert(['departament_id' => '21', 'name' => 'Azangaro']);
        DB::table('Provinces')->insert(['departament_id' => '21', 'name' => 'Carabaya']);
        DB::table('Provinces')->insert(['departament_id' => '21', 'name' => 'Chucuito']);
        DB::table('Provinces')->insert(['departament_id' => '21', 'name' => 'El Collao']);
        DB::table('Provinces')->insert(['departament_id' => '21', 'name' => 'Huancane']);
        DB::table('Provinces')->insert(['departament_id' => '21', 'name' => 'Lampa']);
        DB::table('Provinces')->insert(['departament_id' => '21', 'name' => 'Melgar']);
        DB::table('Provinces')->insert(['departament_id' => '21', 'name' => 'Moho']);
        DB::table('Provinces')->insert(['departament_id' => '21', 'name' => 'San Antonio de Putina']);
        DB::table('Provinces')->insert(['departament_id' => '21', 'name' => 'San Román']);
        DB::table('Provinces')->insert(['departament_id' => '21', 'name' => 'Sandia']);
        DB::table('Provinces')->insert(['departament_id' => '21', 'name' => 'Yunguyo']);

        DB::table('Provinces')->insert(['departament_id' => '22', 'name' => 'Moyobamba']);
        DB::table('Provinces')->insert(['departament_id' => '22', 'name' => 'Bellavista']);
        DB::table('Provinces')->insert(['departament_id' => '22', 'name' => 'El Dorado']);
        DB::table('Provinces')->insert(['departament_id' => '22', 'name' => 'Huallaga']);
        DB::table('Provinces')->insert(['departament_id' => '22', 'name' => 'Lamas']);
        DB::table('Provinces')->insert(['departament_id' => '22', 'name' => 'Marisca Caceres']);
        DB::table('Provinces')->insert(['departament_id' => '22', 'name' => 'Picota']);
        DB::table('Provinces')->insert(['departament_id' => '22', 'name' => 'Rioja']);
        DB::table('Provinces')->insert(['departament_id' => '22', 'name' => 'San Martin']);
        DB::table('Provinces')->insert(['departament_id' => '22', 'name' => 'Tocache']);

        DB::table('Provinces')->insert(['departament_id' => '23', 'name' => 'Tacna']);
        DB::table('Provinces')->insert(['departament_id' => '23', 'name' => 'Candarave']);
        DB::table('Provinces')->insert(['departament_id' => '23', 'name' => 'Jorge Basadre']);
        DB::table('Provinces')->insert(['departament_id' => '23', 'name' => 'Tarata']);

        DB::table('Provinces')->insert(['departament_id' => '24', 'name' => 'Tumbes']);
        DB::table('Provinces')->insert(['departament_id' => '24', 'name' => 'Contralmirante Villar']);
        DB::table('Provinces')->insert(['departament_id' => '24', 'name' => 'Zarumilla']);
        
        DB::table('Provinces')->insert(['departament_id' => '25', 'name' => 'Coronel Portillo']);
        DB::table('Provinces')->insert(['departament_id' => '25', 'name' => 'Atalaya']);
        DB::table('Provinces')->insert(['departament_id' => '25', 'name' => 'Padre Abad']);
        DB::table('Provinces')->insert(['departament_id' => '25', 'name' => 'Purus']);
        
        





        

    }
}
