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
        DB::table('Provinces')->insert(['codigo' => '0101', 'province' => 'Chachapoyas', 'departament_id' => '01']);
        DB::table('Provinces')->insert(['codigo' => '0102', 'province' => 'Bagua', 'departament_id' => '01']);
        DB::table('Provinces')->insert(['codigo' => '0103', 'province' => 'Bongará	', 'departament_id' => '01']);
        DB::table('Provinces')->insert(['codigo' => '0104', 'province' => 'Condorcanqui', 'departament_id' => '01']);
        DB::table('Provinces')->insert(['codigo' => '0105', 'province' => 'Luya', 'departament_id' => '01']);
        DB::table('Provinces')->insert(['codigo' => '0106', 'province' => 'Rodriguez de Mendoza	', 'departament_id' => '01']);
        DB::table('Provinces')->insert(['codigo' => '0107', 'province' => 'Utcubamba', 'departament_id' => '01']);

        DB::table('Provinces')->insert(['codigo' => '0201', 'province' => 'Huaraz', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0202', 'province' => 'Aija', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0203', 'province' => 'Antonio Raymondi', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0204', 'province' => 'Asunción', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0205', 'province' => 'Bolognesi', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0206', 'province' => 'Carhuaz', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0207', 'province' => 'Carlos Fermín Fitzcarrald', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0208', 'province' => 'Casma', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0209', 'province' => 'Corongo', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0210', 'province' => 'Huari', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0211', 'province' => 'Huarmey', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0212', 'province' => 'Huaylas', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0213', 'province' => 'Mariscal Luzuriaga', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0214', 'province' => 'Ocros', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0215', 'province' => 'Pallasca', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0216', 'province' => 'Pomabamba', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0217', 'province' => 'Recuay', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0218', 'province' => 'Santa', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0219', 'province' => 'Sihuas', 'departament_id' => '02']);
        DB::table('Provinces')->insert(['codigo' => '0220', 'province' => 'Yungay', 'departament_id' => '02']);

        DB::table('Provinces')->insert(['codigo' => '0301', 'province' => 'Abancay	', 'departament_id' => '03']);
        DB::table('Provinces')->insert(['codigo' => '0302', 'province' => 'Andahuaylas', 'departament_id' => '03']);
        DB::table('Provinces')->insert(['codigo' => '0303', 'province' => 'Antabamba', 'departament_id' => '03']);
        DB::table('Provinces')->insert(['codigo' => '0304', 'province' => 'Aymaraes', 'departament_id' => '03']);
        DB::table('Provinces')->insert(['codigo' => '0305', 'province' => 'Cotabambas', 'departament_id' => '03']);
        DB::table('Provinces')->insert(['codigo' => '0306', 'province' => 'Chincheros', 'departament_id' => '03']);
        DB::table('Provinces')->insert(['codigo' => '0307', 'province' => 'Grau', 'departament_id' => '03']);

        DB::table('Provinces')->insert(['codigo' => '0401', 'province' => 'Arequipa', 'departament_id' => '04']);
        DB::table('Provinces')->insert(['codigo' => '0402', 'province' => 'Camana', 'departament_id' => '04']);
        DB::table('Provinces')->insert(['codigo' => '0403', 'province' => 'Caraveli', 'departament_id' => '04']);
        DB::table('Provinces')->insert(['codigo' => '0404', 'province' => 'Castilla', 'departament_id' => '04']);
        DB::table('Provinces')->insert(['codigo' => '0405', 'province' => 'Caylloma', 'departament_id' => '04']);
        DB::table('Provinces')->insert(['codigo' => '0406', 'province' => 'Condesuyos', 'departament_id' => '04']);
        DB::table('Provinces')->insert(['codigo' => '0407', 'province' => 'Islay', 'departament_id' => '04']);
        DB::table('Provinces')->insert(['codigo' => '0408', 'province' => 'La Union', 'departament_id' => '04']);

        DB::table('Provinces')->insert(['codigo' => '0501', 'province' => 'Huamanga', 'departament_id' => '05']);
        DB::table('Provinces')->insert(['codigo' => '0502', 'province' => 'Cangallo', 'departament_id' => '05']);
        DB::table('Provinces')->insert(['codigo' => '0503', 'province' => 'Huanca Sancos', 'departament_id' => '05']);
        DB::table('Provinces')->insert(['codigo' => '0504', 'province' => 'Huanta', 'departament_id' => '05']);
        DB::table('Provinces')->insert(['codigo' => '0505', 'province' => 'La Mar', 'departament_id' => '05']);        
        DB::table('Provinces')->insert(['codigo' => '0506', 'province' => 'Lucanas', 'departament_id' => '05']);
        DB::table('Provinces')->insert(['codigo' => '0507', 'province' => 'Parinacochas', 'departament_id' => '05']);
        DB::table('Provinces')->insert(['codigo' => '0508', 'province' => 'Paucar del Sara Sara', 'departament_id' => '05']);
        DB::table('Provinces')->insert(['codigo' => '0509', 'province' => 'Sucre', 'departament_id' => '05']);
        DB::table('Provinces')->insert(['codigo' => '0510', 'province' => 'Victor Fajardo', 'departament_id' => '05']);
        DB::table('Provinces')->insert(['codigo' => '0511', 'province' => 'Vilcas Huaman', 'departament_id' => '05']);

        DB::table('Provinces')->insert(['codigo' => '0601', 'province' => 'Cajamarca', 'departament_id' => '06']);
        DB::table('Provinces')->insert(['codigo' => '0602', 'province' => 'Cajabamba', 'departament_id' => '06']);
        DB::table('Provinces')->insert(['codigo' => '0603', 'province' => 'Celendin', 'departament_id' => '06']);
        DB::table('Provinces')->insert(['codigo' => '0604', 'province' => 'Chota', 'departament_id' => '06']);
        DB::table('Provinces')->insert(['codigo' => '0605', 'province' => 'Contumaza', 'departament_id' => '06']);
        DB::table('Provinces')->insert(['codigo' => '0606', 'province' => 'Cutervo', 'departament_id' => '06']);
        DB::table('Provinces')->insert(['codigo' => '0607', 'province' => 'Hualgayoc', 'departament_id' => '06']);
        DB::table('Provinces')->insert(['codigo' => '0608', 'province' => 'Jaen', 'departament_id' => '06']);
        DB::table('Provinces')->insert(['codigo' => '0609', 'province' => 'San Ignacio', 'departament_id' => '06']);
        DB::table('Provinces')->insert(['codigo' => '0610', 'province' => 'San Marcos', 'departament_id' => '06']);
        DB::table('Provinces')->insert(['codigo' => '0611', 'province' => 'San Miguel', 'departament_id' => '06']);
        DB::table('Provinces')->insert(['codigo' => '0612', 'province' => 'San Pablo', 'departament_id' => '06']);
        DB::table('Provinces')->insert(['codigo' => '0613', 'province' => 'Santa Cruz', 'departament_id' => '06']);
        
        DB::table('Provinces')->insert(['codigo' => '0701', 'province' => 'Prov. Const. del Callao', 'departament_id' => '07']);
        
        DB::table('Provinces')->insert(['codigo' => '0801', 'province' => 'Cusco', 'departament_id' => '08']);
        DB::table('Provinces')->insert(['codigo' => '0802', 'province' => 'Acomayo', 'departament_id' => '08']);
        DB::table('Provinces')->insert(['codigo' => '0803', 'province' => 'Anta', 'departament_id' => '08']);
        DB::table('Provinces')->insert(['codigo' => '0804', 'province' => 'Calca', 'departament_id' => '08']);
        DB::table('Provinces')->insert(['codigo' => '0805', 'province' => 'Canas', 'departament_id' => '08']);
        DB::table('Provinces')->insert(['codigo' => '0806', 'province' => 'Canchis', 'departament_id' => '08']);
        DB::table('Provinces')->insert(['codigo' => '0807', 'province' => 'Chumbivilcas', 'departament_id' => '08']);
        DB::table('Provinces')->insert(['codigo' => '0808', 'province' => 'Espinar', 'departament_id' => '08']);
        DB::table('Provinces')->insert(['codigo' => '0809', 'province' => 'La Convencion', 'departament_id' => '08']);
        DB::table('Provinces')->insert(['codigo' => '0810', 'province' => 'Paruro', 'departament_id' => '08']);
        DB::table('Provinces')->insert(['codigo' => '0811', 'province' => 'Paucartambo', 'departament_id' => '08']);
        DB::table('Provinces')->insert(['codigo' => '0812', 'province' => 'Quispicanchi	', 'departament_id' => '08']);
        DB::table('Provinces')->insert(['codigo' => '0813', 'province' => 'Urubamba', 'departament_id' => '08']);

        DB::table('Provinces')->insert(['codigo' => '0901', 'province' => 'Huancavelica', 'departament_id' => '09']);
        DB::table('Provinces')->insert(['codigo' => '0902', 'province' => 'Acobamba	', 'departament_id' => '09']);
        DB::table('Provinces')->insert(['codigo' => '0903', 'province' => 'Angaraes', 'departament_id' => '09']);
        DB::table('Provinces')->insert(['codigo' => '0904', 'province' => 'Castrovirreyna', 'departament_id' => '09']);
        DB::table('Provinces')->insert(['codigo' => '0905', 'province' => 'Churcampa', 'departament_id' => '09']);
        DB::table('Provinces')->insert(['codigo' => '0906', 'province' => 'Huaytara', 'departament_id' => '09']);
        DB::table('Provinces')->insert(['codigo' => '0907', 'province' => 'Tayacaja', 'departament_id' => '09']);

        DB::table('Provinces')->insert(['codigo' => '1001', 'province' => 'Huanuco', 'departament_id' => '10']);
        DB::table('Provinces')->insert(['codigo' => '1002', 'province' => 'Ambo', 'departament_id' => '10']);
        DB::table('Provinces')->insert(['codigo' => '1003', 'province' => 'Dos de Mayo', 'departament_id' => '10']);
        DB::table('Provinces')->insert(['codigo' => '1004', 'province' => 'Huacaybamba', 'departament_id' => '10']);
        DB::table('Provinces')->insert(['codigo' => '1005', 'province' => 'Huamalies', 'departament_id' => '10']);
        DB::table('Provinces')->insert(['codigo' => '1006', 'province' => 'Leoncio Pradoo', 'departament_id' => '10']);
        DB::table('Provinces')->insert(['codigo' => '1007', 'province' => 'Marañon', 'departament_id' => '10']);
        DB::table('Provinces')->insert(['codigo' => '1008', 'province' => 'Pachitea', 'departament_id' => '10']);
        DB::table('Provinces')->insert(['codigo' => '1009', 'province' => 'Puerto Inca', 'departament_id' => '10']);
        DB::table('Provinces')->insert(['codigo' => '1010', 'province' => 'Lauricocha', 'departament_id' => '10']);
        DB::table('Provinces')->insert(['codigo' => '1011', 'province' => 'Yarowilca', 'departament_id' => '10']);

        DB::table('Provinces')->insert(['codigo' => '1101', 'province' => 'Ica', 'departament_id' => '11']);
        DB::table('Provinces')->insert(['codigo' => '1102', 'province' => 'Chincha', 'departament_id' => '11']);
        DB::table('Provinces')->insert(['codigo' => '1103', 'province' => 'Nasca', 'departament_id' => '11']);
        DB::table('Provinces')->insert(['codigo' => '1104', 'province' => 'Palpa', 'departament_id' => '11']);
        DB::table('Provinces')->insert(['codigo' => '1105', 'province' => 'Pisco', 'departament_id' => '11']);
        
        DB::table('Provinces')->insert(['codigo' => '1201', 'province' => 'Huancayo', 'departament_id' => '12']);
        DB::table('Provinces')->insert(['codigo' => '1202', 'province' => 'Concepcion', 'departament_id' => '12']);
        DB::table('Provinces')->insert(['codigo' => '1203', 'province' => 'Chanchamayo', 'departament_id' => '12']);
        DB::table('Provinces')->insert(['codigo' => '1204', 'province' => 'Jauja', 'departament_id' => '12']);
        DB::table('Provinces')->insert(['codigo' => '1205', 'province' => 'Junin', 'departament_id' => '12']);
        DB::table('Provinces')->insert(['codigo' => '1206', 'province' => 'Satipo', 'departament_id' => '12']);
        DB::table('Provinces')->insert(['codigo' => '1207', 'province' => 'Tarma', 'departament_id' => '12']);
        DB::table('Provinces')->insert(['codigo' => '1208', 'province' => 'Yauli', 'departament_id' => '12']);
        DB::table('Provinces')->insert(['codigo' => '1209', 'province' => 'Chupaca', 'departament_id' => '12']);

        DB::table('Provinces')->insert(['codigo' => '1301', 'province' => 'Trujillo', 'departament_id' => '13']);
        DB::table('Provinces')->insert(['codigo' => '1302', 'province' => 'Ascope', 'departament_id' => '13']);
        DB::table('Provinces')->insert(['codigo' => '1303', 'province' => 'Bolivar', 'departament_id' => '13']);
        DB::table('Provinces')->insert(['codigo' => '1304', 'province' => 'Chepen', 'departament_id' => '13']);        
        DB::table('Provinces')->insert(['codigo' => '1305', 'province' => 'Julcan', 'departament_id' => '13']);
        DB::table('Provinces')->insert(['codigo' => '1306', 'province' => 'Otuzco', 'departament_id' => '13']);
        DB::table('Provinces')->insert(['codigo' => '1307', 'province' => 'Pacasmayo', 'departament_id' => '13']);
        DB::table('Provinces')->insert(['codigo' => '1308', 'province' => 'Pataz', 'departament_id' => '13']);        
        DB::table('Provinces')->insert(['codigo' => '1309', 'province' => 'Sánchez Carrion', 'departament_id' => '13']);
        DB::table('Provinces')->insert(['codigo' => '1310', 'province' => 'Santiago de Chuco', 'departament_id' => '13']);
        DB::table('Provinces')->insert(['codigo' => '1311', 'province' => 'Gran Chimu', 'departament_id' => '13']);
        DB::table('Provinces')->insert(['codigo' => '1312', 'province' => 'Viru', 'departament_id' => '13']);

        DB::table('Provinces')->insert(['codigo' => '1401', 'province' => 'Chiclayo', 'departament_id' => '14']);
        DB::table('Provinces')->insert(['codigo' => '1401', 'province' => 'Ferreñafe', 'departament_id' => '14']);
        DB::table('Provinces')->insert(['codigo' => '1401', 'province' => 'Lambayeque', 'departament_id' => '14']);
        
        DB::table('Provinces')->insert(['codigo' => '1501', 'province' => 'Lima', 'departament_id' => '15']);
        DB::table('Provinces')->insert(['codigo' => '1502', 'province' => 'Barranca', 'departament_id' => '15']);
        DB::table('Provinces')->insert(['codigo' => '1503', 'province' => 'Cajatambo', 'departament_id' => '15']);
        DB::table('Provinces')->insert(['codigo' => '1504', 'province' => 'Canta', 'departament_id' => '15']);
        DB::table('Provinces')->insert(['codigo' => '1505', 'province' => 'Cañete', 'departament_id' => '15']);
        DB::table('Provinces')->insert(['codigo' => '1506', 'province' => 'Huaral', 'departament_id' => '15']);
        DB::table('Provinces')->insert(['codigo' => '1507', 'province' => 'Huarochiri', 'departament_id' => '15']);
        DB::table('Provinces')->insert(['codigo' => '1508', 'province' => 'Huaura', 'departament_id' => '15']);
        DB::table('Provinces')->insert(['codigo' => '1509', 'province' => 'Oyon', 'departament_id' => '15']);
        DB::table('Provinces')->insert(['codigo' => '1510', 'province' => 'Yauyos', 'departament_id' => '15']);
        
        DB::table('Provinces')->insert(['codigo' => '1601', 'province' => 'Maynas', 'departament_id' => '16']);
        DB::table('Provinces')->insert(['codigo' => '1602', 'province' => 'Alto Amazonas', 'departament_id' => '16']);
        DB::table('Provinces')->insert(['codigo' => '1603', 'province' => 'Loreto', 'departament_id' => '16']);
        DB::table('Provinces')->insert(['codigo' => '1604', 'province' => 'Mariscal Ramon Castilla	', 'departament_id' => '16']);
        DB::table('Provinces')->insert(['codigo' => '1605', 'province' => 'Requena', 'departament_id' => '16']);
        DB::table('Provinces')->insert(['codigo' => '1606', 'province' => 'Ucayali', 'departament_id' => '16']);
        DB::table('Provinces')->insert(['codigo' => '1607', 'province' => 'Datem del Marañon', 'departament_id' => '16']);
        DB::table('Provinces')->insert(['codigo' => '1608', 'province' => 'Putumayo', 'departament_id' => '16']);
                
        DB::table('Provinces')->insert(['codigo' => '1701', 'province' => 'Tambopata', 'departament_id' => '17']);
        DB::table('Provinces')->insert(['codigo' => '1702', 'province' => 'Manu', 'departament_id' => '17']);
        DB::table('Provinces')->insert(['codigo' => '1703', 'province' => 'Tahuamanu', 'departament_id' => '17']);

        DB::table('Provinces')->insert(['codigo' => '1801', 'province' => 'Mariscal Nieto', 'departament_id' => '18']);
        DB::table('Provinces')->insert(['codigo' => '1802', 'province' => 'General Sánchez Cerro', 'departament_id' => '18']);
        DB::table('Provinces')->insert(['codigo' => '1803', 'province' => 'Ilo', 'departament_id' => '18']);

        DB::table('Provinces')->insert(['codigo' => '1901', 'province' => 'Pasco', 'departament_id' => '19']);
        DB::table('Provinces')->insert(['codigo' => '1902', 'province' => 'Daniel Alcides Carrion', 'departament_id' => '19']);
        DB::table('Provinces')->insert(['codigo' => '1903', 'province' => 'Oxapampa', 'departament_id' => '19']);

        DB::table('Provinces')->insert(['codigo' => '2001', 'province' => 'Piura', 'departament_id' => '20']);
        DB::table('Provinces')->insert(['codigo' => '2002', 'province' => 'Ayabaca', 'departament_id' => '20']);
        DB::table('Provinces')->insert(['codigo' => '2003', 'province' => 'Huancabamba', 'departament_id' => '20']);
        DB::table('Provinces')->insert(['codigo' => '2004', 'province' => 'Morropon', 'departament_id' => '20']);
        DB::table('Provinces')->insert(['codigo' => '2005', 'province' => 'Paita', 'departament_id' => '20']);
        DB::table('Provinces')->insert(['codigo' => '2006', 'province' => 'Sullana', 'departament_id' => '20']);
        DB::table('Provinces')->insert(['codigo' => '2007', 'province' => 'Talara', 'departament_id' => '20']);
        DB::table('Provinces')->insert(['codigo' => '2008', 'province' => 'Sechura', 'departament_id' => '20']);

        DB::table('Provinces')->insert(['codigo' => '2101', 'province' => 'Puno', 'departament_id' => '21']);
        DB::table('Provinces')->insert(['codigo' => '2102', 'province' => 'Azangaro', 'departament_id' => '21']);
        DB::table('Provinces')->insert(['codigo' => '2103', 'province' => 'Carabaya', 'departament_id' => '21']);
        DB::table('Provinces')->insert(['codigo' => '2104', 'province' => 'Chucuito', 'departament_id' => '21']);
        DB::table('Provinces')->insert(['codigo' => '2105', 'province' => 'El Collao', 'departament_id' => '21']);
        DB::table('Provinces')->insert(['codigo' => '2106', 'province' => 'Huancane', 'departament_id' => '21']);
        DB::table('Provinces')->insert(['codigo' => '2107', 'province' => 'Lampa', 'departament_id' => '21']);
        DB::table('Provinces')->insert(['codigo' => '2108', 'province' => 'Melgar', 'departament_id' => '21']);
        DB::table('Provinces')->insert(['codigo' => '2109', 'province' => 'Moho', 'departament_id' => '21']);
        DB::table('Provinces')->insert(['codigo' => '2110', 'province' => 'San Antonio de Putina', 'departament_id' => '21']);
        DB::table('Provinces')->insert(['codigo' => '2111', 'province' => 'San Román', 'departament_id' => '21']);
        DB::table('Provinces')->insert(['codigo' => '2112', 'province' => 'Sandia', 'departament_id' => '21']);
        DB::table('Provinces')->insert(['codigo' => '2113', 'province' => 'Yunguyo', 'departament_id' => '21']);

        DB::table('Provinces')->insert(['codigo' => '2201', 'province' => 'Moyobamba', 'departament_id' => '22']);
        DB::table('Provinces')->insert(['codigo' => '2202', 'province' => 'Bellavista', 'departament_id' => '22']);
        DB::table('Provinces')->insert(['codigo' => '2203', 'province' => 'El Dorado', 'departament_id' => '22']);
        DB::table('Provinces')->insert(['codigo' => '2204', 'province' => 'Huallaga', 'departament_id' => '22']);
        DB::table('Provinces')->insert(['codigo' => '2205', 'province' => 'Lamas', 'departament_id' => '22']);
        DB::table('Provinces')->insert(['codigo' => '2206', 'province' => 'Mariscal Caceres', 'departament_id' => '22']);
        DB::table('Provinces')->insert(['codigo' => '2207', 'province' => 'Picota', 'departament_id' => '22']);
        DB::table('Provinces')->insert(['codigo' => '2208', 'province' => 'Rioja', 'departament_id' => '22']);
        DB::table('Provinces')->insert(['codigo' => '2209', 'province' => 'San Martin', 'departament_id' => '22']);
        DB::table('Provinces')->insert(['codigo' => '2210', 'province' => 'Tocache', 'departament_id' => '22']);

        DB::table('Provinces')->insert(['codigo' => '2301', 'province' => 'Tacna', 'departament_id' => '23']);
        DB::table('Provinces')->insert(['codigo' => '2302', 'province' => 'Candarave', 'departament_id' => '23']);
        DB::table('Provinces')->insert(['codigo' => '2303', 'province' => 'Jorge Basadre', 'departament_id' => '23']);
        DB::table('Provinces')->insert(['codigo' => '2304', 'province' => 'Tarata', 'departament_id' => '23']);

        DB::table('Provinces')->insert(['codigo' => '2401', 'province' => 'Tumbes', 'departament_id' => '24']);
        DB::table('Provinces')->insert(['codigo' => '2402', 'province' => 'Contralmirante Villar', 'departament_id' => '24']);
        DB::table('Provinces')->insert(['codigo' => '2403', 'province' => 'Zarumilla', 'departament_id' => '24']);
        
        DB::table('Provinces')->insert(['codigo' => '2501', 'province' => 'Coronel Portillo', 'departament_id' => '25']);
        DB::table('Provinces')->insert(['codigo' => '2502', 'province' => 'Atalaya', 'departament_id' => '25']);
        DB::table('Provinces')->insert(['codigo' => '2503', 'province' => 'Padre Abad', 'departament_id' => '25']);
        DB::table('Provinces')->insert(['codigo' => '2514', 'province' => 'Purus', 'departament_id' => '25']);
        
        





        

    }
}
