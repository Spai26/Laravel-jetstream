<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Distric;
use Illuminate\Support\Facades\DB;

class DistricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('Districs')->insert(['codigo' => '010101', 'distric' => 'Chachapoyas', 'province_id' => '0101', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010102', 'distric' => 'Asuncion', 'province_id' => '0101', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010103', 'distric' => 'Balsas', 'province_id' => '0101', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010104', 'distric' => 'Cheto', 'province_id' => '0101', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010105', 'distric' => 'Chiliquin', 'province_id' => '0101', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010106', 'distric' => 'Chuquibamba	', 'province_id' => '0101', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010107', 'distric' => 'Granada', 'province_id' => '0101', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010108', 'distric' => 'Huancas', 'province_id' => '0101', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010109', 'distric' => 'La Jalca', 'province_id' => '0101', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010110', 'distric' => 'Leimebamba', 'province_id' => '0101', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010111', 'distric' => 'Levanto', 'province_id' => '0101', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010112', 'distric' => 'Magdalena', 'province_id' => '0101', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010113', 'distric' => 'Mariscal Castilla', 'province_id' => '0101', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010114', 'distric' => 'Molinopampa', 'province_id' => '0101', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010115', 'distric' => 'Montevideo', 'province_id' => '0101', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010116', 'distric' => 'Olleros', 'province_id' => '0101', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010117', 'distric' => 'Quinjalca	', 'province_id' => '0101', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010118', 'distric' => 'San Francisco de Daguas', 'province_id' => '0101', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010119', 'distric' => 'San Isidro de Maino', 'province_id' => '0101', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010120', 'distric' => 'Soloco', 'province_id' => '0101', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010121', 'distric' => 'Sonche', 'province_id' => '0101', 'departament_id' => '01']); 
       
       DB::table('Districs')->insert(['codigo' => '010201', 'distric' => 'Bagua', 'province_id' => '0102', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010202', 'distric' => 'Aramango', 'province_id' => '0102', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010203', 'distric' => 'Copallin', 'province_id' => '0102', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010204', 'distric' => 'El Parco', 'province_id' => '0102', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010205', 'distric' => 'Imaza', 'province_id' => '0102', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010206', 'distric' => 'La Peca', 'province_id' => '0102', 'departament_id' => '01']); 
        

       DB::table('Districs')->insert(['codigo' => '010301', 'distric' => 'Jumbilla', 'province_id' => '0103', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010302', 'distric' => 'Chisquilla', 'province_id' => '0103', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010303', 'distric' => 'Churuja', 'province_id' => '0103', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010304', 'distric' => 'Corosha', 'province_id' => '0103', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010305', 'distric' => 'Cuispes', 'province_id' => '0103', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010306', 'distric' => 'Florida	', 'province_id' => '0103', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010307', 'distric' => 'Jazan', 'province_id' => '0103', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010308', 'distric' => 'Recta', 'province_id' => '0103', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010309', 'distric' => 'San Carlos', 'province_id' => '0103', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010310', 'distric' => 'Shipasbamba', 'province_id' => '0103', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010311', 'distric' => 'Valera', 'province_id' => '0103', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010312', 'distric' => 'Yambrasbamba', 'province_id' => '0103', 'departament_id' => '01']);

       DB::table('Districs')->insert(['codigo' => '010401', 'distric' => 'Nieva', 'province_id' => '0104', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010402', 'distric' => 'El Cenepa	', 'province_id' => '0104', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010403', 'distric' => 'Rio Santiago	', 'province_id' => '0104', 'departament_id' => '01']);
        
       DB::table('Districs')->insert(['codigo' => '010501', 'distric' => 'Lamud', 'province_id' => '0105', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010502', 'distric' => 'Camporredondo', 'province_id' => '0105', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010503', 'distric' => 'Cocabamba', 'province_id' => '0105', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010504', 'distric' => 'Colcamar', 'province_id' => '0105', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010505', 'distric' => 'Conila', 'province_id' => '0105', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010506', 'distric' => 'Inguilpata', 'province_id' => '0105', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010507', 'distric' => 'Longuita', 'province_id' => '0105', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010508', 'distric' => 'Lonya Chico', 'province_id' => '0105', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010509', 'distric' => 'Luya', 'province_id' => '0105', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010510', 'distric' => 'Luya Viejo', 'province_id' => '0105', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010511', 'distric' => 'Maria', 'province_id' => '0105', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010512', 'distric' => 'Ocalli', 'province_id' => '0105', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010513', 'distric' => 'Ocumal', 'province_id' => '0105', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010514', 'distric' => 'Pisuquia', 'province_id' => '0105', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010515', 'distric' => 'Providencia', 'province_id' => '0105', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010516', 'distric' => 'San Cristobal', 'province_id' => '0105', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010517', 'distric' => 'San Francisco de Yeso', 'province_id' => '0105', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010518', 'distric' => 'San Jeronimo', 'province_id' => '0105', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010519', 'distric' => 'San Juan de Lopecancha', 'province_id' => '0105', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010520', 'distric' => 'Santa Catalina', 'province_id' => '0105', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010521', 'distric' => 'Santo Tomas', 'province_id' => '0105', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010522', 'distric' => 'Tingo', 'province_id' => '0105', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010523', 'distric' => 'Trita', 'province_id' => '0105', 'departament_id' => '01']); 

       DB::table('Districs')->insert(['codigo' => '010601', 'distric' => 'San Nicolas', 'province_id' => '0106', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010602', 'distric' => 'Chirimoto', 'province_id' => '0106', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010603', 'distric' => 'Cochamal', 'province_id' => '0106', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010604', 'distric' => 'Huambo', 'province_id' => '0106', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010605', 'distric' => 'Limabamba', 'province_id' => '0106', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010606', 'distric' => 'Longar', 'province_id' => '0106', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010607', 'distric' => 'Mariscal Benavides', 'province_id' => '0106', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010608', 'distric' => 'Milpuc', 'province_id' => '0106', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010609', 'distric' => 'Omia', 'province_id' => '0106', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010610', 'distric' => 'Santa Rosa', 'province_id' => '0106', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010611', 'distric' => 'Totora', 'province_id' => '0106', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010612', 'distric' => 'Vista Alegre', 'province_id' => '0106', 'departament_id' => '01']);

       DB::table('Districs')->insert(['codigo' => '010701', 'distric' => 'Bagua Grande	', 'province_id' => '0107', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010702', 'distric' => 'Cajaruro', 'province_id' => '0107', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010703', 'distric' => 'Cumba', 'province_id' => '0107', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010704', 'distric' => 'El Milagro', 'province_id' => '0107', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010705', 'distric' => 'Jamalca', 'province_id' => '0107', 'departament_id' => '01']); 
       DB::table('Districs')->insert(['codigo' => '010706', 'distric' => 'Lonya Grande', 'province_id' => '0107', 'departament_id' => '01']);
       DB::table('Districs')->insert(['codigo' => '010707', 'distric' => 'Yamon', 'province_id' => '0107', 'departament_id' => '01']); 


       DB::table('Districs')->insert(['codigo' => '020101', 'distric' => 'Huaraz', 'province_id' => '0201', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020102', 'distric' => 'Cochabamba', 'province_id' => '0201', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020103', 'distric' => 'Colcabamba', 'province_id' => '0201', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020104', 'distric' => 'Huanchay', 'province_id' => '0201', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020105', 'distric' => 'Independencia', 'province_id' => '0201', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020106', 'distric' => 'Jangas', 'province_id' => '0201', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020107', 'distric' => 'La Libertad', 'province_id' => '0201', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020108', 'distric' => 'Olleros', 'province_id' => '0201', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020109', 'distric' => 'Pampas Grande', 'province_id' => '0201', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020110', 'distric' => 'Pariacoto', 'province_id' => '0201', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020111', 'distric' => 'Pira', 'province_id' => '0201', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020112', 'distric' => 'Tarica', 'province_id' => '0201', 'departament_id' => '02']);

       DB::table('Districs')->insert(['codigo' => '020201', 'distric' => 'Aija', 'province_id' => '0202', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020202', 'distric' => 'Coris', 'province_id' => '0202', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020203', 'distric' => 'Huacllan', 'province_id' => '0202', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020204', 'distric' => 'La Merced', 'province_id' => '0202', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020205', 'distric' => 'Succha', 'province_id' => '0202', 'departament_id' => '02']);
        
       DB::table('Districs')->insert(['codigo' => '020301', 'distric' => 'Llamellin', 'province_id' => '0203', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020302', 'distric' => 'Aczo', 'province_id' => '0203', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020303', 'distric' => 'Chaccho', 'province_id' => '0203', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020304', 'distric' => 'Chingas', 'province_id' => '0203', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020305', 'distric' => 'Mirgas', 'province_id' => '0203', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020306', 'distric' => 'San Juan de Rontoy', 'province_id' => '0203', 'departament_id' => '02']);

       DB::table('Districs')->insert(['codigo' => '020401', 'distric' => 'Chacas', 'province_id' => '0204', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020402', 'distric' => 'Acochaca', 'province_id' => '0204', 'departament_id' => '02']); 

       DB::table('Districs')->insert(['codigo' => '020501', 'distric' => 'Chiquian', 'province_id' => '0205', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020502', 'distric' => 'Abelardo Pardo Lezameta', 'province_id' => '0205', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020503', 'distric' => 'Antonio Raymondi', 'province_id' => '0205', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020504', 'distric' => 'Aquia', 'province_id' => '0205', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020505', 'distric' => 'Cajacay', 'province_id' => '0205', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020506', 'distric' => 'Canis', 'province_id' => '0205', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020507', 'distric' => 'Colquioc', 'province_id' => '0205', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020508', 'distric' => 'Huallanca', 'province_id' => '0205', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020509', 'distric' => 'Huasta', 'province_id' => '0205', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020510', 'distric' => 'Huayllacayan', 'province_id' => '0205', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020511', 'distric' => 'La Primavera', 'province_id' => '0205', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020512', 'distric' => 'Mangas', 'province_id' => '0205', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020513', 'distric' => 'Pacllon', 'province_id' => '0205', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020514', 'distric' => 'San Miguel de Corpanqui', 'province_id' => '0205', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020515', 'distric' => 'Ticllos', 'province_id' => '0205', 'departament_id' => '02']);

       DB::table('Districs')->insert(['codigo' => '020601', 'distric' => 'Carhuaz', 'province_id' => '0206', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020602', 'distric' => 'Acopampa', 'province_id' => '0206', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020603', 'distric' => 'Amashca', 'province_id' => '0206', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020604', 'distric' => 'Anta', 'province_id' => '0206', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020605', 'distric' => 'Ataquero', 'province_id' => '0206', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020606', 'distric' => 'Marcara', 'province_id' => '0206', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020607', 'distric' => 'Pariahuanca', 'province_id' => '0206', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020608', 'distric' => 'San Miguel de Aco', 'province_id' => '0206', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020609', 'distric' => 'Shilla', 'province_id' => '0206', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020610', 'distric' => 'Tinco', 'province_id' => '0206', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020611', 'distric' => 'Yungar', 'province_id' => '0206', 'departament_id' => '02']);
    
       DB::table('Districs')->insert(['codigo' => '020701', 'distric' => 'San Luis', 'province_id' => '0207', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020702', 'distric' => 'San Nicolas', 'province_id' => '0207', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020703', 'distric' => 'Yauya', 'province_id' => '0207', 'departament_id' => '02']); 

       DB::table('Districs')->insert(['codigo' => '020801', 'distric' => 'Casma', 'province_id' => '0208', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020802', 'distric' => 'Buena Vista Alta', 'province_id' => '0208', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020803', 'distric' => 'Comandante Noel', 'province_id' => '0208', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020804', 'distric' => 'Yautan', 'province_id' => '0208', 'departament_id' => '02']); 

       DB::table('Districs')->insert(['codigo' => '020901', 'distric' => 'Corongo', 'province_id' => '0209', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020902', 'distric' => 'Aco', 'province_id' => '0209', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020903', 'distric' => 'Bambas', 'province_id' => '0209', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020904', 'distric' => 'Cusca', 'province_id' => '0209', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020905', 'distric' => 'La Pampa', 'province_id' => '0209', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '020906', 'distric' => 'Yanac', 'province_id' => '0209', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '020907', 'distric' => 'Yupan', 'province_id' => '0209', 'departament_id' => '02']); 

       DB::table('Districs')->insert(['codigo' => '021001', 'distric' => 'Huari', 'province_id' => '0210', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021002', 'distric' => 'Anra', 'province_id' => '0210', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021003', 'distric' => 'Cajay', 'province_id' => '0210', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021004', 'distric' => 'Chavin de Huantar', 'province_id' => '0210', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021005', 'distric' => 'Huacachi', 'province_id' => '0210', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021006', 'distric' => 'Huacchis', 'province_id' => '0210', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021007', 'distric' => 'Huachis', 'province_id' => '0210', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021008', 'distric' => 'Huantar', 'province_id' => '0210', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021009', 'distric' => 'Masin', 'province_id' => '0210', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021010', 'distric' => 'Paucas', 'province_id' => '0210', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021011', 'distric' => 'Ponto', 'province_id' => '0210', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021012', 'distric' => 'Rahuapampa', 'province_id' => '0210', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021013', 'distric' => 'Rapayan', 'province_id' => '0210', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021014', 'distric' => 'San Marcos', 'province_id' => '0210', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021015', 'distric' => 'San Pedro de Chana', 'province_id' => '0210', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021016', 'distric' => 'Uco', 'province_id' => '0210', 'departament_id' => '02']); 

       DB::table('Districs')->insert(['codigo' => '021101', 'distric' => 'Huarmey', 'province_id' => '0211', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021102', 'distric' => 'Cochapeti', 'province_id' => '0211', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021103', 'distric' => 'Culebras', 'province_id' => '0211', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021104', 'distric' => 'Huayan', 'province_id' => '0211', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021105', 'distric' => 'Malvas', 'province_id' => '0211', 'departament_id' => '02']); 
       
       DB::table('Districs')->insert(['codigo' => '021201', 'distric' => 'Caraz', 'province_id' => '0212', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021202', 'distric' => 'Huallanca', 'province_id' => '0212', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021203', 'distric' => 'Huata', 'province_id' => '0212', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021204', 'distric' => 'Huaylas', 'province_id' => '0212', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021205', 'distric' => 'Mato', 'province_id' => '0212', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021206', 'distric' => 'Pamparomas', 'province_id' => '0212', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021207', 'distric' => 'Pueblo Libre', 'province_id' => '0212', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021208', 'distric' => 'Santa Cruz', 'province_id' => '0212', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021209', 'distric' => 'Santo Toribio', 'province_id' => '0212', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021210', 'distric' => 'Yuracmarca', 'province_id' => '0212', 'departament_id' => '02']); 

       DB::table('Districs')->insert(['codigo' => '021301', 'distric' => 'Piscobamba', 'province_id' => '0213', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021302', 'distric' => 'Casca', 'province_id' => '0213', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021303', 'distric' => 'Eleazar Guzman Barron', 'province_id' => '0213', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021304', 'distric' => 'Fidel Olivas Escudero', 'province_id' => '0213', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021305', 'distric' => 'Llama', 'province_id' => '0213', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021306', 'distric' => 'Llumpa', 'province_id' => '0213', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021307', 'distric' => 'Lucma', 'province_id' => '0213', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021308', 'distric' => 'Musga', 'province_id' => '0213', 'departament_id' => '02']); 

       
       DB::table('Districs')->insert(['codigo' => '021401', 'distric' => 'Ocros', 'province_id' => '0214', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021402', 'distric' => 'Acas', 'province_id' => '0214', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021403', 'distric' => 'Cajamarquilla', 'province_id' => '0214', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021404', 'distric' => 'Carhuapampa', 'province_id' => '0214', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021405', 'distric' => 'Cochas', 'province_id' => '0214', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021406', 'distric' => 'Congas', 'province_id' => '0214', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021407', 'distric' => 'Llipa', 'province_id' => '0214', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021408', 'distric' => 'San Cristobal de Rajan', 'province_id' => '0214', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021409', 'distric' => 'San Pedro', 'province_id' => '0214', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021410', 'distric' => 'Santiago de Chilcas', 'province_id' => '0214', 'departament_id' => '02']); 

       DB::table('Districs')->insert(['codigo' => '021501', 'distric' => 'Cabana', 'province_id' => '0215', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021502', 'distric' => 'Bolognesi', 'province_id' => '0215', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021503', 'distric' => 'Conchucos', 'province_id' => '0215', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021504', 'distric' => 'Huacaschuque', 'province_id' => '0215', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021505', 'distric' => 'Huandoval', 'province_id' => '0215', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021506', 'distric' => 'Lacabamba', 'province_id' => '0215', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021507', 'distric' => 'Llapo', 'province_id' => '0215', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021508', 'distric' => 'Pallasca', 'province_id' => '0215', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021509', 'distric' => 'Pampas', 'province_id' => '0215', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021510', 'distric' => 'Santa Rosa', 'province_id' => '0215', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021511', 'distric' => 'Tauca', 'province_id' => '0215', 'departament_id' => '02']); 
       
       DB::table('Districs')->insert(['codigo' => '021601', 'distric' => 'Pomabamba', 'province_id' => '0216', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021602', 'distric' => 'Huayllan', 'province_id' => '0216', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021603', 'distric' => 'Parobamba', 'province_id' => '0216', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021604', 'distric' => 'Quinuabamba', 'province_id' => '0216', 'departament_id' => '02']);

       DB::table('Districs')->insert(['codigo' => '021701', 'distric' => 'Recuay', 'province_id' => '0217', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021702', 'distric' => 'Catac', 'province_id' => '0217', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021703', 'distric' => 'Cotaparaco', 'province_id' => '0217', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021704', 'distric' => 'Huayllapampa', 'province_id' => '0217', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021705', 'distric' => 'Llacllin', 'province_id' => '0217', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021706', 'distric' => 'Marca', 'province_id' => '0217', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021707', 'distric' => 'Pampas Chico', 'province_id' => '0217', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021708', 'distric' => 'Pararin', 'province_id' => '0217', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021709', 'distric' => 'Tapacocha', 'province_id' => '0217', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021710', 'distric' => 'Ticapampa', 'province_id' => '0217', 'departament_id' => '02']);

       DB::table('Districs')->insert(['codigo' => '021801', 'distric' => 'Chimbote', 'province_id' => '0218', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021802', 'distric' => 'Caceres del Peru', 'province_id' => '0218', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021803', 'distric' => 'Coishco', 'province_id' => '0218', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021804', 'distric' => 'Macate', 'province_id' => '0218', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021805', 'distric' => 'Moro', 'province_id' => '0218', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021806', 'distric' => 'Nepeña', 'province_id' => '0218', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021807', 'distric' => 'Samanco', 'province_id' => '0218', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021808', 'distric' => 'Santa', 'province_id' => '0218', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021809', 'distric' => 'Nuevo Chimbote', 'province_id' => '0218', 'departament_id' => '02']);

       DB::table('Districs')->insert(['codigo' => '021901', 'distric' => 'Sihuas', 'province_id' => '0219', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021902', 'distric' => 'Acobamba', 'province_id' => '0219', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021903', 'distric' => 'Alfonso Ugarte', 'province_id' => '0219', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021904', 'distric' => 'Cashapampa', 'province_id' => '0219', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021905', 'distric' => 'Chingalpo', 'province_id' => '0219', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021906', 'distric' => 'Huayllabamba', 'province_id' => '0219', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021907', 'distric' => 'Quiches', 'province_id' => '0219', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021908', 'distric' => 'Ragash', 'province_id' => '0219', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '021909', 'distric' => 'San Juan', 'province_id' => '0219', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '021910', 'distric' => 'Sicsibamba', 'province_id' => '0219', 'departament_id' => '02']);

       DB::table('Districs')->insert(['codigo' => '022001', 'distric' => 'Yungay', 'province_id' => '0220', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '022002', 'distric' => 'Cascapara', 'province_id' => '0220', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '022003', 'distric' => 'Mancos', 'province_id' => '0220', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '022004', 'distric' => 'Matacoto', 'province_id' => '0220', 'departament_id' => '02']);
       DB::table('Districs')->insert(['codigo' => '022005', 'distric' => 'Quillo', 'province_id' => '0220', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '022006', 'distric' => 'Ranrahirca', 'province_id' => '0220', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '022007', 'distric' => 'Shupluy', 'province_id' => '0220', 'departament_id' => '02']); 
       DB::table('Districs')->insert(['codigo' => '022008', 'distric' => 'Yanama', 'province_id' => '0220', 'departament_id' => '02']); 

       DB::table('Districs')->insert(['codigo' => '030101', 'distric' => 'Abancay', 'province_id' => '0301', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030102', 'distric' => 'Chacoche', 'province_id' => '0301', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030103', 'distric' => 'Circa', 'province_id' => '0301', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030104', 'distric' => 'Curahuasi', 'province_id' => '0301', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '030105', 'distric' => 'Huanipaca', 'province_id' => '0301', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030106', 'distric' => 'Lambrama', 'province_id' => '0301', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030107', 'distric' => 'Pichirhua', 'province_id' => '0301', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030108', 'distric' => 'San Pedro de Cachora', 'province_id' => '0301', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030109', 'distric' => 'Tamburco', 'province_id' => '0301', 'departament_id' => '03']);
   
       DB::table('Districs')->insert(['codigo' => '040101', 'distric' => 'Andahuaylas', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '040102', 'distric' => 'Andarapa', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '040103', 'distric' => 'Chiara', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '040104', 'distric' => 'Huancarama', 'province_id' => '0302', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '040105', 'distric' => 'Huancaray', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '040106', 'distric' => 'Huayana', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '040107', 'distric' => 'Kishuara', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '040108', 'distric' => 'Pacobamba', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '040109', 'distric' => 'Pacucha', 'province_id' => '0302', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '030210', 'distric' => 'Pampachiri', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030211', 'distric' => 'Pomacocha', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030212', 'distric' => 'San Antonio de Cachi', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030213', 'distric' => 'San Jerónimo', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030214', 'distric' => 'San Miguel de Chaccrampa', 'province_id' => '0302', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '030215', 'distric' => 'Santa María de Chicmo', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030216', 'distric' => 'Talavera', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030217', 'distric' => 'Tumay Huaraca	', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030218', 'distric' => 'Turpo', 'province_id' => '0302', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030219', 'distric' => 'Kaquiabamba', 'province_id' => '0302', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '030220', 'distric' => 'Jose Maria Arguedas', 'province_id' => '0302', 'departament_id' => '03']);

       DB::table('Districs')->insert(['codigo' => '030301', 'distric' => 'Antabamba', 'province_id' => '0303', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030302', 'distric' => 'El Oro', 'province_id' => '0303', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030303', 'distric' => 'Huaquirca', 'province_id' => '0303', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030304', 'distric' => 'Juan Espinoza Medrano', 'province_id' => '0303', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '030305', 'distric' => 'Oropesa', 'province_id' => '0303', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030306', 'distric' => 'Pachaconas', 'province_id' => '0303', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030307', 'distric' => 'Sabaino', 'province_id' => '0303', 'departament_id' => '03']); 
    
       DB::table('Districs')->insert(['codigo' => '030401', 'distric' => 'Chalhuanca', 'province_id' => '0304', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030402', 'distric' => 'Capaya', 'province_id' => '0304', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030403', 'distric' => 'Caraybamba', 'province_id' => '0304', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030404', 'distric' => 'Chapimarca', 'province_id' => '0304', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '030405', 'distric' => 'Colcabamba', 'province_id' => '0304', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030406', 'distric' => 'Cotaruse', 'province_id' => '0304', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030407', 'distric' => 'Ihuayllo', 'province_id' => '0304', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030408', 'distric' => 'Justo Apu Sahuaraura', 'province_id' => '0304', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030409', 'distric' => 'Lucre', 'province_id' => '0304', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '030410', 'distric' => 'Pocohuanca', 'province_id' => '0304', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030411', 'distric' => 'San Juan de Chacña', 'province_id' => '0304', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030412', 'distric' => 'Sañayca', 'province_id' => '0304', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030413', 'distric' => 'Soraya', 'province_id' => '0304', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030414', 'distric' => 'Tapairihua', 'province_id' => '0304', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '030415', 'distric' => 'Tintay', 'province_id' => '0304', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030416', 'distric' => 'Toraya', 'province_id' => '0304', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030417', 'distric' => 'Yanaca', 'province_id' => '0304', 'departament_id' => '03']);  


       DB::table('Districs')->insert(['codigo' => '030501', 'distric' => 'Tambobamba', 'province_id' => '0305', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030502', 'distric' => 'Cotabambas', 'province_id' => '0305', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030503', 'distric' => 'Coyllurqui', 'province_id' => '0305', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030504', 'distric' => 'Haquira', 'province_id' => '0305', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '030505', 'distric' => 'Mara', 'province_id' => '0305', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030506', 'distric' => 'Challhuahuacho', 'province_id' => '0305', 'departament_id' => '03']); 
    
       DB::table('Districs')->insert(['codigo' => '030601', 'distric' => 'Chincheros', 'province_id' => '0306', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030602', 'distric' => 'Anco_Huallo', 'province_id' => '0306', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030603', 'distric' => 'Cocharcas', 'province_id' => '0306', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030604', 'distric' => 'Huaccana', 'province_id' => '0306', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '030605', 'distric' => 'Ocobamba', 'province_id' => '0306', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030606', 'distric' => 'Ongoy', 'province_id' => '0306', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030607', 'distric' => 'Uranmarca', 'province_id' => '0306', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030608', 'distric' => 'Ranracancha', 'province_id' => '0306', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030609', 'distric' => 'Rocchacc', 'province_id' => '0306', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '030610', 'distric' => 'El Porvenir', 'province_id' => '0306', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030611', 'distric' => 'Los Chankas', 'province_id' => '0306', 'departament_id' => '03']); 

       DB::table('Districs')->insert(['codigo' => '030701', 'distric' => 'Chuquibambilla', 'province_id' => '0307', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030702', 'distric' => 'Curpahuasi', 'province_id' => '0307', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030703', 'distric' => 'Gamarra', 'province_id' => '0307', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030704', 'distric' => 'Huayllati', 'province_id' => '0307', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '030705', 'distric' => 'Mamara', 'province_id' => '0307', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030706', 'distric' => 'Micaela Bastidas', 'province_id' => '0307', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030707', 'distric' => 'Pataypampa', 'province_id' => '0307', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030708', 'distric' => 'Progreso', 'province_id' => '0307', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030709', 'distric' => 'San Antonio', 'province_id' => '0307', 'departament_id' => '03']);
       DB::table('Districs')->insert(['codigo' => '030710', 'distric' => 'Santa Rosa', 'province_id' => '0307', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030711', 'distric' => 'Turpay', 'province_id' => '0307', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030712', 'distric' => 'Vilcabamba', 'province_id' => '0307', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030713', 'distric' => 'Virundo', 'province_id' => '0307', 'departament_id' => '03']); 
       DB::table('Districs')->insert(['codigo' => '030714', 'distric' => 'Curasco', 'province_id' => '0307', 'departament_id' => '03']);

       DB::table('Districs')->insert(['codigo' => '040101', 'distric' => 'Arequipa', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040102', 'distric' => 'Alto Selva Alegre', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040104', 'distric' => 'Cayma', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040104', 'distric' => 'Cerro Colorado', 'province_id' => '0401', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040105', 'distric' => 'Characato', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040106', 'distric' => 'Chiguata', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040107', 'distric' => 'Jacobo Hunter', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040108', 'distric' => 'La Joya', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040109', 'distric' => 'Mariano Melgar', 'province_id' => '0401', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040110', 'distric' => 'Miraflores', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040111', 'distric' => 'Mollebaya', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040112', 'distric' => 'Paucarpata', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040113', 'distric' => 'Pocsi', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040114', 'distric' => 'Polobaya', 'province_id' => '0401', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040115', 'distric' => 'Quequeña', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040116', 'distric' => 'Sabandia', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040117', 'distric' => 'Sachaca', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040118', 'distric' => 'San Juan de Siguas', 'province_id' => '0401', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040119', 'distric' => 'San Juan de Tarucani', 'province_id' => '0401', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040120', 'distric' => 'Santa Isabel de Siguas', 'province_id' => '0401', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040121', 'distric' => 'Santa Rita de Siguas', 'province_id' => '0401', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040122', 'distric' => 'Socabaya', 'province_id' => '0401', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040123', 'distric' => 'Tiabaya', 'province_id' => '0401', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040124', 'distric' => 'Uchumayo', 'province_id' => '0401', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040125', 'distric' => 'Vitor', 'province_id' => '0401', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040126', 'distric' => 'Yanahuara', 'province_id' => '0401', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040127', 'distric' => 'Yarabamba', 'province_id' => '0401', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040128', 'distric' => 'Yura', 'province_id' => '0401', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040129', 'distric' => 'Jose Luis Bustamante Y Rivero', 'province_id' => '0401', 'departament_id' => '04']);
//
       DB::table('Districs')->insert(['codigo' => '040201', 'distric' => 'Camana', 'province_id' => '0402', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040202', 'distric' => 'Jose Maria Quimper', 'province_id' => '0402', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040203', 'distric' => 'Mariano Nicolas Valcarcel', 'province_id' => '0402', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040204', 'distric' => 'Mariscal Caceres', 'province_id' => '0402', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040205', 'distric' => 'Nicolas de Pierola', 'province_id' => '0402', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040206', 'distric' => 'Ocoña', 'province_id' => '0402', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040207', 'distric' => 'Quilca', 'province_id' => '0402', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040208', 'distric' => 'Samuel Pastor', 'province_id' => '0402', 'departament_id' => '04']); 

       DB::table('Districs')->insert(['codigo' => '040301', 'distric' => 'Caraveli', 'province_id' => '0403', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040302', 'distric' => 'Acari', 'province_id' => '0403', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040303', 'distric' => 'Atico', 'province_id' => '0403', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040304', 'distric' => 'Atiquipa', 'province_id' => '0403', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040305', 'distric' => 'Bella Union', 'province_id' => '0403', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040306', 'distric' => 'Cahuacho', 'province_id' => '0403', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040307', 'distric' => 'Chala', 'province_id' => '0403', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040308', 'distric' => 'Chaparra', 'province_id' => '0403', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040309', 'distric' => 'Huanuhuanu', 'province_id' => '0403', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040310', 'distric' => 'Jaqui', 'province_id' => '0403', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040311', 'distric' => 'Lomas', 'province_id' => '0403', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040312', 'distric' => 'Quicacha', 'province_id' => '0403', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040313', 'distric' => 'Yauca', 'province_id' => '0403', 'departament_id' => '04']); 

       DB::table('Districs')->insert(['codigo' => '040401', 'distric' => 'Aplao', 'province_id' => '0404', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040402', 'distric' => 'Andagua', 'province_id' => '0404', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040403', 'distric' => 'Ayo', 'province_id' => '0404', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040404', 'distric' => 'Chachas', 'province_id' => '0404', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040405', 'distric' => 'Chilcaymarca', 'province_id' => '0404', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040406', 'distric' => 'Choco', 'province_id' => '0404', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040407', 'distric' => 'Huancarqui	', 'province_id' => '0404', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040408', 'distric' => 'Machaguay', 'province_id' => '0404', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040409', 'distric' => 'Orcopampa', 'province_id' => '0404', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040410', 'distric' => 'Pampacolca', 'province_id' => '0404', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040411', 'distric' => 'Tipan', 'province_id' => '0404', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040412', 'distric' => 'Uñon', 'province_id' => '0404', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040413', 'distric' => 'Uraca', 'province_id' => '0404', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040414', 'distric' => 'Viraco', 'province_id' => '0404', 'departament_id' => '04']); 

       DB::table('Districs')->insert(['codigo' => '040501', 'distric' => 'Chivay', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040502', 'distric' => 'Achoma', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040504', 'distric' => 'Cabanaconde', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040504', 'distric' => 'Callalli', 'province_id' => '0405', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040505', 'distric' => 'Caylloma', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040506', 'distric' => 'Coporaque', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040507', 'distric' => 'Huambo', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040508', 'distric' => 'Huanca', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040509', 'distric' => 'Ichupampa', 'province_id' => '0405', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040510', 'distric' => 'Lari', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040511', 'distric' => 'Lluta', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040512', 'distric' => 'Maca', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040513', 'distric' => 'Madrigal', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040514', 'distric' => 'San Antonio de Chuca', 'province_id' => '0405', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040515', 'distric' => 'Sibayo', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040516', 'distric' => 'Tapay', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040517', 'distric' => 'Tisco', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040518', 'distric' => 'Tuti', 'province_id' => '0405', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040519', 'distric' => 'Yanque', 'province_id' => '0405', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040520', 'distric' => 'Majes', 'province_id' => '0405', 'departament_id' => '04']);
//
       DB::table('Districs')->insert(['codigo' => '040601', 'distric' => 'Chuquibamba', 'province_id' => '0406', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040602', 'distric' => 'Andaray', 'province_id' => '0406', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040604', 'distric' => 'Cayarani', 'province_id' => '0406', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040604', 'distric' => 'Chichas', 'province_id' => '0406', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040605', 'distric' => 'Iray', 'province_id' => '0406', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040606', 'distric' => 'Rio Grande', 'province_id' => '0406', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040607', 'distric' => 'Salamanca', 'province_id' => '0406', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040608', 'distric' => 'Yanaquihua', 'province_id' => '0406', 'departament_id' => '04']); 

       DB::table('Districs')->insert(['codigo' => '040701', 'distric' => 'Mollendo', 'province_id' => '0407', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040702', 'distric' => 'Cocachacra', 'province_id' => '0407', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040704', 'distric' => 'Dean Valdivia', 'province_id' => '0407', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040704', 'distric' => 'Islay', 'province_id' => '0407', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040705', 'distric' => 'Mejia', 'province_id' => '0407', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040706', 'distric' => 'Punta de Bombon', 'province_id' => '0407', 'departament_id' => '04']); 
       
       DB::table('Districs')->insert(['codigo' => '040801', 'distric' => 'Cotahuasi', 'province_id' => '0408', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040802', 'distric' => 'Alca', 'province_id' => '0408', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040804', 'distric' => 'Charcana', 'province_id' => '0408', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040804', 'distric' => 'Huaynacotas', 'province_id' => '0408', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040805', 'distric' => 'Pampamarca', 'province_id' => '0408', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040806', 'distric' => 'Puyca', 'province_id' => '0408', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040807', 'distric' => 'Quechualla', 'province_id' => '0408', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040808', 'distric' => 'Sayla', 'province_id' => '0408', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040809', 'distric' => 'Tauria', 'province_id' => '0408', 'departament_id' => '04']);
       DB::table('Districs')->insert(['codigo' => '040810', 'distric' => 'Tomepampa', 'province_id' => '0408', 'departament_id' => '04']); 
       DB::table('Districs')->insert(['codigo' => '040811', 'distric' => 'Toro', 'province_id' => '0408', 'departament_id' => '04']); 

       DB::table('Districs')->insert(['codigo' => '050101', 'distric' => 'Ayacucho', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050102', 'distric' => 'Acocro', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050103', 'distric' => 'Acos Vinchos', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050104', 'distric' => 'Carmen Alto', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050105', 'distric' => 'Chiara', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050106', 'distric' => 'Ocros', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050107', 'distric' => 'Pacaycasa', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050108', 'distric' => 'Quinua', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050109', 'distric' => 'San Jose de Ticllas', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050110', 'distric' => 'San Juan Bautista', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050111', 'distric' => 'Santiago de Pischa', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050112', 'distric' => 'Socos', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050103', 'distric' => 'Tambillo', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050114', 'distric' => 'Vinchos', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050115', 'distric' => 'Jesus Nazareno', 'province_id' => '0501', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050116', 'distric' => 'Andres Avelino Caceres Dorregaray', 'province_id' => '0501', 'departament_id' => '05']); 

       DB::table('Districs')->insert(['codigo' => '050201', 'distric' => 'Cangallo', 'province_id' => '0502', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050202', 'distric' => 'Chuschi', 'province_id' => '0502', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050203', 'distric' => 'Los Morochucos', 'province_id' => '0502', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050204', 'distric' => 'Maria Parado de Bellido', 'province_id' => '0502', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050205', 'distric' => 'Paras', 'province_id' => '0502', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050206', 'distric' => 'Totos', 'province_id' => '0502', 'departament_id' => '05']);
       
       DB::table('Districs')->insert(['codigo' => '050301', 'distric' => 'Sancos', 'province_id' => '0503', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050302', 'distric' => 'Carapo', 'province_id' => '0503', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050303', 'distric' => 'Sacsamarca', 'province_id' => '0503', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050304', 'distric' => 'Santiago de Lucanamarca', 'province_id' => '0503', 'departament_id' => '05']); 

       DB::table('Districs')->insert(['codigo' => '050401', 'distric' => 'Huanta', 'province_id' => '0504', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050402', 'distric' => 'Ayahuanco', 'province_id' => '0504', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050403', 'distric' => 'Huamanguilla', 'province_id' => '0504', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050404', 'distric' => 'Iguain', 'province_id' => '0504', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050405', 'distric' => 'Luricocha', 'province_id' => '0504', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050406', 'distric' => 'Santillana', 'province_id' => '0504', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050407', 'distric' => 'Sivia', 'province_id' => '0504', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050408', 'distric' => 'Llochegua', 'province_id' => '0504', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050409', 'distric' => 'Canayre', 'province_id' => '0504', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050410', 'distric' => 'Uchuraccay', 'province_id' => '0504', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050411', 'distric' => 'Pucacolpa', 'province_id' => '0504', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050412', 'distric' => 'Chaca', 'province_id' => '0504', 'departament_id' => '05']); 

       DB::table('Districs')->insert(['codigo' => '050501', 'distric' => 'San Miguel', 'province_id' => '0505', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050502', 'distric' => 'Anco', 'province_id' => '0505', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050503', 'distric' => 'Ayna', 'province_id' => '0505', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050504', 'distric' => 'Chilcas', 'province_id' => '0505', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050505', 'distric' => 'Chungui', 'province_id' => '0505', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050506', 'distric' => 'Luis Carranza', 'province_id' => '0505', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050507', 'distric' => 'Santa Rosa', 'province_id' => '0505', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050508', 'distric' => 'Tambo', 'province_id' => '0505', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050509', 'distric' => 'Samugari', 'province_id' => '0505', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050510', 'distric' => 'Anchihuay', 'province_id' => '0505', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050511', 'distric' => 'Oronccoy', 'province_id' => '0505', 'departament_id' => '05']); 


       DB::table('Districs')->insert(['codigo' => '050601', 'distric' => 'Puquio', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050602', 'distric' => 'Aucara', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050603', 'distric' => 'Cabana', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050604', 'distric' => 'Carmen Salcedo', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050605', 'distric' => 'Chaviña', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050606', 'distric' => 'Chipao', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050607', 'distric' => 'Huac-Huas', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050608', 'distric' => 'Laramate', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050609', 'distric' => 'Leoncio Prado	', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050610', 'distric' => 'Llauta', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050611', 'distric' => 'Lucanas', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050612', 'distric' => 'Ocaña', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050613', 'distric' => 'Otoca', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050614', 'distric' => 'Saisa', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050615', 'distric' => 'San Cristóbal', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050616', 'distric' => 'San Juan', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050617', 'distric' => 'San Pedro', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050618', 'distric' => 'San Pedro de Palco', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050619', 'distric' => 'Sancos', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050620', 'distric' => 'Santa Ana de Huaycahuacho', 'province_id' => '0506', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050621', 'distric' => 'Santa Lucia', 'province_id' => '0506', 'departament_id' => '05']); 

       DB::table('Districs')->insert(['codigo' => '050701', 'distric' => 'Coracora', 'province_id' => '0507', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050702', 'distric' => 'Chumpi', 'province_id' => '0507', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050703', 'distric' => 'Coronel Castañeda', 'province_id' => '0507', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050704', 'distric' => 'Pacapausa', 'province_id' => '0507', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050705', 'distric' => 'Pullo', 'province_id' => '0507', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050706', 'distric' => 'Puyusca', 'province_id' => '0507', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050707', 'distric' => 'San Francisco de Ravacayco', 'province_id' => '0507', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050708', 'distric' => 'Upahuacho', 'province_id' => '0507', 'departament_id' => '05']); 
        
       DB::table('Districs')->insert(['codigo' => '050801', 'distric' => 'Pausa', 'province_id' => '0508', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050802', 'distric' => 'Colta', 'province_id' => '0508', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050803', 'distric' => 'Corculla', 'province_id' => '0508', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050804', 'distric' => 'Lampa', 'province_id' => '0508', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050805', 'distric' => 'Marcabamba', 'province_id' => '0508', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050806', 'distric' => 'Oyolo', 'province_id' => '0508', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050807', 'distric' => 'Pararca', 'province_id' => '0508', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050808', 'distric' => 'San Javier de Alpabamba', 'province_id' => '0508', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050809', 'distric' => 'San Jose de Ushua', 'province_id' => '0508', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050810', 'distric' => 'Sara Sara', 'province_id' => '0508', 'departament_id' => '05']); 
       
       DB::table('Districs')->insert(['codigo' => '050901', 'distric' => 'Querobamba', 'province_id' => '0509', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050902', 'distric' => 'Belen', 'province_id' => '0509', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050903', 'distric' => 'Chalcos', 'province_id' => '0509', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050904', 'distric' => 'Chilcayoc', 'province_id' => '0509', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050905', 'distric' => 'Huacaña', 'province_id' => '0509', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050906', 'distric' => 'Morcolla', 'province_id' => '0509', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050907', 'distric' => 'Paico', 'province_id' => '0509', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050908', 'distric' => 'San Pedro de Larcay', 'province_id' => '0509', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050909', 'distric' => 'San Salvador de Quije', 'province_id' => '0509', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050910', 'distric' => 'Santiago de Paucaray', 'province_id' => '0509', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '050911', 'distric' => 'Soras', 'province_id' => '0509', 'departament_id' => '05']);
       
       DB::table('Districs')->insert(['codigo' => '051001', 'distric' => 'Huancapi', 'province_id' => '0510', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051002', 'distric' => 'Alcamenca', 'province_id' => '0510', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051003', 'distric' => 'Apongo', 'province_id' => '0510', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051004', 'distric' => 'Asquipata', 'province_id' => '0510', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051005', 'distric' => 'Canaria', 'province_id' => '0510', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051006', 'distric' => 'Cayara', 'province_id' => '0510', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051007', 'distric' => 'Colca', 'province_id' => '0510', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051008', 'distric' => 'Huamanquiquia', 'province_id' => '0510', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051009', 'distric' => 'Huancaraylla', 'province_id' => '0510', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051010', 'distric' => 'Hualla', 'province_id' => '0510', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051011', 'distric' => 'Sarhua', 'province_id' => '0510', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051012', 'distric' => 'Vilcanchos', 'province_id' => '0510', 'departament_id' => '05']); 

       DB::table('Districs')->insert(['codigo' => '051101', 'distric' => 'Vilcas Huaman', 'province_id' => '0511', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051102', 'distric' => 'Accomarca', 'province_id' => '0511', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051103', 'distric' => 'Carhuanca', 'province_id' => '0511', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051104', 'distric' => 'Concepcion', 'province_id' => '0511', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051105', 'distric' => 'Huambalpa', 'province_id' => '0511', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051106', 'distric' => 'Independencia', 'province_id' => '0511', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051107', 'distric' => 'Saurama', 'province_id' => '0511', 'departament_id' => '05']); 
       DB::table('Districs')->insert(['codigo' => '051108', 'distric' => 'Vischongo', 'province_id' => '0511', 'departament_id' => '05']); 

       DB::table('Districs')->insert(['codigo' => '060101', 'distric' => 'Cajamarca', 'province_id' => '0601', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060102', 'distric' => 'Asuncion', 'province_id' => '0601', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060103', 'distric' => 'Chetilla', 'province_id' => '0601', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060104', 'distric' => 'Cospan', 'province_id' => '0601', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060105', 'distric' => 'Encañada', 'province_id' => '0601', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060106', 'distric' => 'Jesus', 'province_id' => '0601', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060107', 'distric' => 'Llacanora', 'province_id' => '0601', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060108', 'distric' => 'Los Baños del Inca', 'province_id' => '0601', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060109', 'distric' => 'Magdalena', 'province_id' => '0601', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060110', 'distric' => 'Matara', 'province_id' => '0601', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060111', 'distric' => 'Namora', 'province_id' => '0601', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060112', 'distric' => 'San Juan', 'province_id' => '0601', 'departament_id' => '06']); 

       DB::table('Districs')->insert(['codigo' => '060201', 'distric' => 'Cajabamba', 'province_id' => '0602', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060202', 'distric' => 'Cachachi', 'province_id' => '0602', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060203', 'distric' => 'Condebamba', 'province_id' => '0602', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060204', 'distric' => 'Sitacocha', 'province_id' => '0602', 'departament_id' => '06']); 

       DB::table('Districs')->insert(['codigo' => '060301', 'distric' => 'Celendin', 'province_id' => '0603', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060302', 'distric' => 'Chumuch', 'province_id' => '0603', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060303', 'distric' => 'Cortegana', 'province_id' => '0603', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060304', 'distric' => 'Huasmin', 'province_id' => '0603', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060305', 'distric' => 'Jorge Chavez', 'province_id' => '0603', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060306', 'distric' => 'Jose Galvez', 'province_id' => '0603', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060307', 'distric' => 'Miguel Iglesias', 'province_id' => '0603', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060308', 'distric' => 'Oxamarca', 'province_id' => '0603', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060309', 'distric' => 'Sorochuco', 'province_id' => '0603', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060310', 'distric' => 'Sucre', 'province_id' => '0603', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060311', 'distric' => 'Utco', 'province_id' => '0603', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060312', 'distric' => 'La Libertad de Pallan', 'province_id' => '0603', 'departament_id' => '06']); 

       DB::table('Districs')->insert(['codigo' => '060401', 'distric' => 'Chota', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060402', 'distric' => 'Anguia', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060403', 'distric' => 'Chadin', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060404', 'distric' => 'Chiguirip', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060405', 'distric' => 'Chimban', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060406', 'distric' => 'Choropampa', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060407', 'distric' => 'Cochabamba', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060408', 'distric' => 'Conchan', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060409', 'distric' => 'Huambos', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060410', 'distric' => 'Lajas', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060411', 'distric' => 'Llama', 'province_id' => '0604', 'departament_id' => '06']);
       DB::table('Districs')->insert(['codigo' => '060412', 'distric' => 'Miracosta', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060413', 'distric' => 'Paccha', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060414', 'distric' => 'Pion', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060415', 'distric' => 'Querocoto', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060416', 'distric' => 'SSan Juan de Licupis', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060417', 'distric' => 'Tacabamba', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060418', 'distric' => 'Tocmoche', 'province_id' => '0604', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060419', 'distric' => 'Chalamarca', 'province_id' => '0604', 'departament_id' => '06']); 

       DB::table('Districs')->insert(['codigo' => '060501', 'distric' => 'Contumaza', 'province_id' => '0605', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060502', 'distric' => 'Chilete', 'province_id' => '0605', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060503', 'distric' => 'Cupisnique', 'province_id' => '0605', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060504', 'distric' => 'Guzmango', 'province_id' => '0605', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060505', 'distric' => 'San Benito', 'province_id' => '0605', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060506', 'distric' => 'Santa Cruz de Toledo', 'province_id' => '0605', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060507', 'distric' => 'Tantarica', 'province_id' => '0605', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060508', 'distric' => 'Yonan', 'province_id' => '0605', 'departament_id' => '06']); 
    
       DB::table('Districs')->insert(['codigo' => '060601', 'distric' => 'Cutervo', 'province_id' => '0606', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060602', 'distric' => 'Callayuc', 'province_id' => '0606', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060603', 'distric' => 'Choros', 'province_id' => '0606', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060604', 'distric' => 'Cujillo', 'province_id' => '0606', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060605', 'distric' => 'La Ramada	', 'province_id' => '0606', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060606', 'distric' => 'Pimpingos', 'province_id' => '0606', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060607', 'distric' => 'Querocotillo	', 'province_id' => '0606', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060608', 'distric' => 'San Andres de Cutervo', 'province_id' => '0606', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060609', 'distric' => 'San Juan de Cutervo', 'province_id' => '0606', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060610', 'distric' => 'San Luis de Lucma', 'province_id' => '0606', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060611', 'distric' => 'Santa Cruz', 'province_id' => '0606', 'departament_id' => '06']);
       DB::table('Districs')->insert(['codigo' => '060612', 'distric' => 'Santo Domingo de la Capilla', 'province_id' => '0606', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060613', 'distric' => 'Santo Tomas', 'province_id' => '0606', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060614', 'distric' => 'Socota', 'province_id' => '0606', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060615', 'distric' => 'Toribio Casanova', 'province_id' => '0606', 'departament_id' => '06']); 
    
       DB::table('Districs')->insert(['codigo' => '060701', 'distric' => 'Bambamarca', 'province_id' => '0607', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060702', 'distric' => 'Chugur', 'province_id' => '0607', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060703', 'distric' => 'Hualgayoc', 'province_id' => '0607', 'departament_id' => '06']); 

       DB::table('Districs')->insert(['codigo' => '060801', 'distric' => 'Jaen', 'province_id' => '0608', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060802', 'distric' => 'Bellavista', 'province_id' => '0608', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060803', 'distric' => 'Chontali', 'province_id' => '0608', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060804', 'distric' => 'Colasay', 'province_id' => '0608', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060805', 'distric' => 'Huabal', 'province_id' => '0608', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060806', 'distric' => 'Las Pirias', 'province_id' => '0608', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060807', 'distric' => 'Pomahuaca', 'province_id' => '0608', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060808', 'distric' => 'Pucara', 'province_id' => '0608', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060809', 'distric' => 'Sallique', 'province_id' => '0608', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060810', 'distric' => 'San Felipe', 'province_id' => '0608', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060811', 'distric' => 'San Jose del Alto', 'province_id' => '0608', 'departament_id' => '06']);
       DB::table('Districs')->insert(['codigo' => '060812', 'distric' => 'Santa Rosa', 'province_id' => '0608', 'departament_id' => '06']);

       DB::table('Districs')->insert(['codigo' => '060901', 'distric' => 'San Ignacio', 'province_id' => '0609', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060902', 'distric' => 'Chirinos', 'province_id' => '0609', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060903', 'distric' => 'Huarango', 'province_id' => '0609', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060904', 'distric' => 'La Coipa', 'province_id' => '0609', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060905', 'distric' => 'Namballe', 'province_id' => '0609', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060906', 'distric' => 'San Jose de Lourdes', 'province_id' => '0609', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '060907', 'distric' => 'Tabaconas', 'province_id' => '0609', 'departament_id' => '06']);
       
       DB::table('Districs')->insert(['codigo' => '061001', 'distric' => 'Pedro Galvez', 'province_id' => '0610', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061002', 'distric' => 'Chancay', 'province_id' => '0610', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061003', 'distric' => 'Eduardo Villanueva', 'province_id' => '0610', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061004', 'distric' => 'Gregorio Pita', 'province_id' => '0610', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061005', 'distric' => 'Ichocan', 'province_id' => '0610', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061006', 'distric' => 'Jose Manuel Quiroz', 'province_id' => '0610', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061007', 'distric' => 'Jose Sabogal	', 'province_id' => '0610', 'departament_id' => '06']);

       DB::table('Districs')->insert(['codigo' => '061101', 'distric' => 'San Miguel', 'province_id' => '0611', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061102', 'distric' => 'Bolivar', 'province_id' => '0611', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061103', 'distric' => 'Calquis', 'province_id' => '0611', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061104', 'distric' => 'Catilluc', 'province_id' => '0611', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061105', 'distric' => 'El Prado', 'province_id' => '0611', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061106', 'distric' => 'La Florida', 'province_id' => '0611', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061107', 'distric' => 'Llapa', 'province_id' => '0611', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061108', 'distric' => 'Nanchoc', 'province_id' => '0611', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061109', 'distric' => 'Niepos', 'province_id' => '0611', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061110', 'distric' => 'San Gregorio', 'province_id' => '0611', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061111', 'distric' => 'San Silvestre de Cochan', 'province_id' => '0611', 'departament_id' => '06']);
       DB::table('Districs')->insert(['codigo' => '061112', 'distric' => 'Tongod', 'province_id' => '0611', 'departament_id' => '06']);
       DB::table('Districs')->insert(['codigo' => '061113', 'distric' => 'Unión Agua Blanca', 'province_id' => '0611', 'departament_id' => '06']);

       DB::table('Districs')->insert(['codigo' => '061201', 'distric' => 'San Pablo', 'province_id' => '0612', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061202', 'distric' => 'San Bernardino', 'province_id' => '0612', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061203', 'distric' => 'San Luis', 'province_id' => '0612', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061204', 'distric' => 'Tumbaden', 'province_id' => '0612', 'departament_id' => '06']);

       DB::table('Districs')->insert(['codigo' => '061301', 'distric' => 'Santa Cruz', 'province_id' => '0613', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061302', 'distric' => 'Andabamba', 'province_id' => '0613', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061303', 'distric' => 'Catache', 'province_id' => '0613', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061304', 'distric' => 'Chancaybaños', 'province_id' => '0613', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061305', 'distric' => 'La Esperanza', 'province_id' => '0613', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061306', 'distric' => 'Ninabamba', 'province_id' => '0613', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061307', 'distric' => 'Pulan', 'province_id' => '0613', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061308', 'distric' => 'Saucepampa', 'province_id' => '0613', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061309', 'distric' => 'Sexi', 'province_id' => '0613', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061310', 'distric' => 'Uticyacu', 'province_id' => '0613', 'departament_id' => '06']); 
       DB::table('Districs')->insert(['codigo' => '061311', 'distric' => 'Yauyucan', 'province_id' => '0613', 'departament_id' => '06']);

       DB::table('Districs')->insert(['codigo' => '070101', 'distric' => 'Callao', 'province_id' => '0701', 'departament_id' => '07']); 
       DB::table('Districs')->insert(['codigo' => '070102', 'distric' => 'Bellavista', 'province_id' => '0701', 'departament_id' => '07']); 
       DB::table('Districs')->insert(['codigo' => '070103', 'distric' => 'Carmen de la Legua Reynoso', 'province_id' => '0701', 'departament_id' => '07']); 
       DB::table('Districs')->insert(['codigo' => '070104', 'distric' => 'La Perla', 'province_id' => '0701', 'departament_id' => '07']); 
       DB::table('Districs')->insert(['codigo' => '070105', 'distric' => 'La Punta', 'province_id' => '0701', 'departament_id' => '07']); 
       DB::table('Districs')->insert(['codigo' => '070106', 'distric' => 'Ventanilla', 'province_id' => '0701', 'departament_id' => '07']); 
       DB::table('Districs')->insert(['codigo' => '070107', 'distric' => 'Mi Peru', 'province_id' => '0701', 'departament_id' => '07']);
       
       DB::table('Districs')->insert(['codigo' => '080101', 'distric' => 'Cusco', 'province_id' => '0801', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080102', 'distric' => 'Ccorca', 'province_id' => '0801', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080103', 'distric' => 'Poroy', 'province_id' => '0801', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080104', 'distric' => 'San Jeronimo', 'province_id' => '0801', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080105', 'distric' => 'San Sebastian', 'province_id' => '0801', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080106', 'distric' => 'Santiago', 'province_id' => '0801', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080107', 'distric' => 'Saylla', 'province_id' => '0801', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080108', 'distric' => 'Wanchaq', 'province_id' => '0801', 'departament_id' => '08']); 

       DB::table('Districs')->insert(['codigo' => '080201', 'distric' => 'Acomayo', 'province_id' => '0802', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080202', 'distric' => 'Acopia', 'province_id' => '0802', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080203', 'distric' => 'Acos', 'province_id' => '0802', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080204', 'distric' => 'Mosoc Llacta', 'province_id' => '0802', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080205', 'distric' => 'Pomacanchi', 'province_id' => '0802', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080206', 'distric' => 'Rondocan', 'province_id' => '0802', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080207', 'distric' => 'Sangarara', 'province_id' => '0802', 'departament_id' => '08']);
       
       DB::table('Districs')->insert(['codigo' => '080301', 'distric' => 'Anta', 'province_id' => '0803', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080302', 'distric' => 'Ancahuasi', 'province_id' => '0803', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080303', 'distric' => 'Cachimayo', 'province_id' => '0803', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080304', 'distric' => 'Chinchaypujio', 'province_id' => '0803', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080305', 'distric' => 'Huarocondo', 'province_id' => '0803', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080306', 'distric' => 'Limatambo', 'province_id' => '0803', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080307', 'distric' => 'Mollepata', 'province_id' => '0803', 'departament_id' => '08']);
       DB::table('Districs')->insert(['codigo' => '080308', 'distric' => 'Pucyura', 'province_id' => '0803', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080309', 'distric' => 'Zurite', 'province_id' => '0803', 'departament_id' => '08']);

       DB::table('Districs')->insert(['codigo' => '080401', 'distric' => 'Calca', 'province_id' => '0804', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080402', 'distric' => 'Coya', 'province_id' => '0804', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080403', 'distric' => 'Lamay', 'province_id' => '0804', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080404', 'distric' => 'Lares', 'province_id' => '0804', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080405', 'distric' => 'Pisac', 'province_id' => '0804', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080406', 'distric' => 'San Salvador', 'province_id' => '0804', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080407', 'distric' => 'Taray', 'province_id' => '0804', 'departament_id' => '08']);
       DB::table('Districs')->insert(['codigo' => '080408', 'distric' => 'Yanatile', 'province_id' => '0804', 'departament_id' => '08']); 

       DB::table('Districs')->insert(['codigo' => '080501', 'distric' => 'Yanaoca', 'province_id' => '0805', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080502', 'distric' => 'Checca', 'province_id' => '0805', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080503', 'distric' => 'Kunturkanki', 'province_id' => '0805', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080504', 'distric' => 'Langui', 'province_id' => '0805', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080505', 'distric' => 'Layo', 'province_id' => '0805', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080506', 'distric' => 'Pampamarca', 'province_id' => '0805', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080507', 'distric' => 'Quehue', 'province_id' => '0805', 'departament_id' => '08']);
       DB::table('Districs')->insert(['codigo' => '080508', 'distric' => 'Tupac Amaru', 'province_id' => '0805', 'departament_id' => '08']); 

       DB::table('Districs')->insert(['codigo' => '080601', 'distric' => 'Sicuani', 'province_id' => '0806', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080602', 'distric' => 'Checacupe', 'province_id' => '0806', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080603', 'distric' => 'Combapata', 'province_id' => '0806', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080604', 'distric' => 'Marangani', 'province_id' => '0806', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080605', 'distric' => 'Pitumarca', 'province_id' => '0806', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080606', 'distric' => 'San Pablo', 'province_id' => '0806', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080607', 'distric' => 'San Pedro', 'province_id' => '0806', 'departament_id' => '08']);
       DB::table('Districs')->insert(['codigo' => '080608', 'distric' => 'Tinta', 'province_id' => '0806', 'departament_id' => '08']); 


       DB::table('Districs')->insert(['codigo' => '080701', 'distric' => 'Santo Tomas', 'province_id' => '0807', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080702', 'distric' => 'Capacmarca', 'province_id' => '0807', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080703', 'distric' => 'Chamaca', 'province_id' => '0807', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080704', 'distric' => 'Colquemarca', 'province_id' => '0807', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080705', 'distric' => 'Livitaca', 'province_id' => '0807', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080706', 'distric' => 'Llusco', 'province_id' => '0807', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080707', 'distric' => 'Quiñota', 'province_id' => '0807', 'departament_id' => '08']);
       DB::table('Districs')->insert(['codigo' => '080708', 'distric' => 'Velille', 'province_id' => '0807', 'departament_id' => '08']);


       DB::table('Districs')->insert(['codigo' => '080801', 'distric' => 'Espinar', 'province_id' => '0808', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080802', 'distric' => 'Condoroma', 'province_id' => '0808', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080803', 'distric' => 'Coporaque', 'province_id' => '0808', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080804', 'distric' => 'Ocoruro', 'province_id' => '0808', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080805', 'distric' => 'Pallpata', 'province_id' => '0808', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080806', 'distric' => 'Pichigua', 'province_id' => '0808', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080807', 'distric' => 'Suyckutambo', 'province_id' => '0808', 'departament_id' => '08']);
       DB::table('Districs')->insert(['codigo' => '080808', 'distric' => 'Alto Pichigua', 'province_id' => '0808', 'departament_id' => '08']);

       DB::table('Districs')->insert(['codigo' => '080901', 'distric' => 'Santa Ana', 'province_id' => '0809', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080902', 'distric' => 'Echarate', 'province_id' => '0809', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080903', 'distric' => 'Huayopata', 'province_id' => '0809', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080904', 'distric' => 'Maranura', 'province_id' => '0809', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080905', 'distric' => 'Ocobamba', 'province_id' => '0809', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080906', 'distric' => 'Quellouno', 'province_id' => '0809', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080907', 'distric' => 'Kimbiri', 'province_id' => '0809', 'departament_id' => '08']);
       DB::table('Districs')->insert(['codigo' => '080908', 'distric' => 'Santa Teresa', 'province_id' => '0809', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080909', 'distric' => 'Vilcabamba', 'province_id' => '0809', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080910', 'distric' => 'Pichari', 'province_id' => '0809', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080911', 'distric' => 'Inkawasi', 'province_id' => '0809', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080912', 'distric' => 'Villa Virgen', 'province_id' => '0809', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080913', 'distric' => 'Villa Kintiarina', 'province_id' => '0809', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '080914', 'distric' => 'Megantoni', 'province_id' => '0809', 'departament_id' => '08']); 

       DB::table('Districs')->insert(['codigo' => '081001', 'distric' => 'Paruro', 'province_id' => '0810', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081002', 'distric' => 'Accha', 'province_id' => '0810', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081003', 'distric' => 'Ccapi', 'province_id' => '0810', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081004', 'distric' => 'Colcha', 'province_id' => '0810', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081005', 'distric' => 'Huanoquite', 'province_id' => '0810', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081006', 'distric' => 'Omacha', 'province_id' => '0810', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081007', 'distric' => 'Paccaritambo', 'province_id' => '0810', 'departament_id' => '08']);
       DB::table('Districs')->insert(['codigo' => '081008', 'distric' => 'Pillpinto', 'province_id' => '0810', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081009', 'distric' => 'Yaurisque', 'province_id' => '0810', 'departament_id' => '08']); 
  

       DB::table('Districs')->insert(['codigo' => '081101', 'distric' => 'Paucartambo', 'province_id' => '0811', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081102', 'distric' => 'Caicay', 'province_id' => '0811', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081103', 'distric' => 'Challabamba', 'province_id' => '0811', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081104', 'distric' => 'Colquepata', 'province_id' => '0811', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081105', 'distric' => 'Huancarani', 'province_id' => '0811', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081106', 'distric' => 'Kosñipata', 'province_id' => '0811', 'departament_id' => '08']); 


       DB::table('Districs')->insert(['codigo' => '081201', 'distric' => 'Urcos', 'province_id' => '0812', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081202', 'distric' => 'Andahuaylillas', 'province_id' => '0812', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081203', 'distric' => 'Camanti', 'province_id' => '0812', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081204', 'distric' => 'Ccarhuayo', 'province_id' => '0812', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081205', 'distric' => 'Ccatca', 'province_id' => '0812', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081206', 'distric' => 'Cusipata', 'province_id' => '0812', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081207', 'distric' => 'Huaro', 'province_id' => '0812', 'departament_id' => '08']);
       DB::table('Districs')->insert(['codigo' => '081208', 'distric' => 'Lucre', 'province_id' => '0812', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081209', 'distric' => 'Marcapata', 'province_id' => '0812', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081210', 'distric' => 'Ocongate', 'province_id' => '0812', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081211', 'distric' => 'Oropesa', 'province_id' => '0812', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081212', 'distric' => 'Quiquijana', 'province_id' => '0812', 'departament_id' => '08']); 
   

       DB::table('Districs')->insert(['codigo' => '081301', 'distric' => 'Urubamba', 'province_id' => '0813', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081302', 'distric' => 'Chinchero', 'province_id' => '0813', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081303', 'distric' => 'Huayllabamba', 'province_id' => '0813', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081304', 'distric' => 'Machupicchu', 'province_id' => '0813', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081305', 'distric' => 'Maras', 'province_id' => '0813', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081306', 'distric' => 'Ollantaytambo', 'province_id' => '0813', 'departament_id' => '08']); 
       DB::table('Districs')->insert(['codigo' => '081307', 'distric' => 'Yucay', 'province_id' => '0813', 'departament_id' => '08']);


       DB::table('Districs')->insert(['codigo' => '090101', 'distric' => 'Huancavelica', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090102', 'distric' => 'Acobambilla', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090103', 'distric' => 'Acoria', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090104', 'distric' => 'Conayca', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090105', 'distric' => 'Cuenca', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090106', 'distric' => 'Huachocolpa', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090107', 'distric' => 'Huayllahuara', 'province_id' => '0901', 'departament_id' => '09']);
       DB::table('Districs')->insert(['codigo' => '090108', 'distric' => 'Izcuchaca', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090109', 'distric' => 'Laria', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090110', 'distric' => 'Manta', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090111', 'distric' => 'Mariscal Caceres', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090112', 'distric' => 'Moya', 'province_id' => '0901', 'departament_id' => '09']);
       DB::table('Districs')->insert(['codigo' => '090113', 'distric' => 'Nuevo Occoro', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090114', 'distric' => 'Palca', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090115', 'distric' => 'Pilchaca', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090116', 'distric' => 'Vilca', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090117', 'distric' => 'Yauli', 'province_id' => '0901', 'departament_id' => '09']);
       DB::table('Districs')->insert(['codigo' => '090118', 'distric' => 'Ascension', 'province_id' => '0901', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090119', 'distric' => 'Huando', 'province_id' => '0901', 'departament_id' => '09']); 

       DB::table('Districs')->insert(['codigo' => '090201', 'distric' => 'Acobamba', 'province_id' => '0902', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090202', 'distric' => 'Andabamba', 'province_id' => '0902', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090203', 'distric' => 'Anta', 'province_id' => '0902', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090204', 'distric' => 'Caja', 'province_id' => '0902', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090205', 'distric' => 'Marcas', 'province_id' => '0902', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090206', 'distric' => 'Paucara', 'province_id' => '0902', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090207', 'distric' => 'Pomacocha', 'province_id' => '0902', 'departament_id' => '09']);
       DB::table('Districs')->insert(['codigo' => '090208', 'distric' => 'Rosario', 'province_id' => '0902', 'departament_id' => '09']); 

       DB::table('Districs')->insert(['codigo' => '090301', 'distric' => 'Lircay', 'province_id' => '0903', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090302', 'distric' => 'Anchonga', 'province_id' => '0903', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090303', 'distric' => 'Callanmarca', 'province_id' => '0903', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090304', 'distric' => 'Ccochaccasa', 'province_id' => '0903', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090305', 'distric' => 'Chincho', 'province_id' => '0903', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090306', 'distric' => 'Congalla', 'province_id' => '0903', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090307', 'distric' => 'Huanca-Huanca', 'province_id' => '0903', 'departament_id' => '09']);
       DB::table('Districs')->insert(['codigo' => '090308', 'distric' => 'Huayllay Grande', 'province_id' => '0903', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090309', 'distric' => 'Julcamarca', 'province_id' => '0903', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090310', 'distric' => 'San Antonio de Antaparco', 'province_id' => '0903', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090311', 'distric' => 'Santo Tomas de Pata', 'province_id' => '0903', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090312', 'distric' => 'Secclla', 'province_id' => '0903', 'departament_id' => '09']);

       DB::table('Districs')->insert(['codigo' => '090401', 'distric' => 'Castrovirreyna', 'province_id' => '0904', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090402', 'distric' => 'Arma', 'province_id' => '0904', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090403', 'distric' => 'Aurahua', 'province_id' => '0904', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090404', 'distric' => 'Capillas', 'province_id' => '0904', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090405', 'distric' => 'Chupamarca', 'province_id' => '0904', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090406', 'distric' => 'Cocas', 'province_id' => '0904', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090407', 'distric' => 'Huachos', 'province_id' => '0904', 'departament_id' => '09']);
       DB::table('Districs')->insert(['codigo' => '090408', 'distric' => 'Huamatambo', 'province_id' => '0904', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090409', 'distric' => 'Mollepampa', 'province_id' => '0904', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090410', 'distric' => 'San Juan', 'province_id' => '0904', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090411', 'distric' => 'Santa Ana', 'province_id' => '0904', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090412', 'distric' => 'Tantara', 'province_id' => '0904', 'departament_id' => '09']);
       DB::table('Districs')->insert(['codigo' => '090413', 'distric' => 'Ticrapo', 'province_id' => '0904', 'departament_id' => '09']);

       DB::table('Districs')->insert(['codigo' => '090501', 'distric' => 'Churcampa', 'province_id' => '0905', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090502', 'distric' => 'Anco', 'province_id' => '0905', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090503', 'distric' => 'Chinchihuasi', 'province_id' => '0905', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090504', 'distric' => 'El Carmen', 'province_id' => '0905', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090505', 'distric' => 'La Merced', 'province_id' => '0905', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090506', 'distric' => 'Locroja', 'province_id' => '0905', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090507', 'distric' => 'Paucarbamba', 'province_id' => '0905', 'departament_id' => '09']);
       DB::table('Districs')->insert(['codigo' => '090508', 'distric' => 'San Miguel de Mayocc', 'province_id' => '0905', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090509', 'distric' => 'San Pedro de Coris', 'province_id' => '0905', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090510', 'distric' => 'Pachamarca', 'province_id' => '0905', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090511', 'distric' => 'Cosme', 'province_id' => '0905', 'departament_id' => '09']); 

       DB::table('Districs')->insert(['codigo' => '090601', 'distric' => 'Huaytara', 'province_id' => '0906', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090602', 'distric' => 'Ayavi', 'province_id' => '0906', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090603', 'distric' => 'Cordova', 'province_id' => '0906', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090604', 'distric' => 'Huayacundo Arma', 'province_id' => '0906', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090605', 'distric' => 'Laramarca', 'province_id' => '0906', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090606', 'distric' => 'Ocoyo', 'province_id' => '0906', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090607', 'distric' => 'Pilpichaca', 'province_id' => '0906', 'departament_id' => '09']);
       DB::table('Districs')->insert(['codigo' => '090608', 'distric' => 'Querco', 'province_id' => '0906', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090609', 'distric' => 'Quito-Arma', 'province_id' => '0906', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090610', 'distric' => 'San Antonio de Cusicancha', 'province_id' => '0906', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090611', 'distric' => 'San Francisco de Sangayaico', 'province_id' => '0906', 'departament_id' => '09']);
       DB::table('Districs')->insert(['codigo' => '090612', 'distric' => 'San Isidro', 'province_id' => '0906', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090613', 'distric' => 'Santiago de Chocorvos', 'province_id' => '0906', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090614', 'distric' => 'Santiago de Quirahuara', 'province_id' => '0906', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090615', 'distric' => 'Santo Domingo de Capillas', 'province_id' => '0906', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090616', 'distric' => 'Tambo', 'province_id' => '0906', 'departament_id' => '09']); 
       
       DB::table('Districs')->insert(['codigo' => '090701', 'distric' => 'Pampas', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090702', 'distric' => 'Acostambo', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090703', 'distric' => 'Acraquia', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090704', 'distric' => 'Ahuaycha', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090705', 'distric' => 'Colcabamba', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090706', 'distric' => 'Daniel Hernandez', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090707', 'distric' => 'Huachocolpa', 'province_id' => '0907', 'departament_id' => '09']);
       
       DB::table('Districs')->insert(['codigo' => '090709', 'distric' => 'Huaribamba', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090710', 'distric' => 'Ñahuimpuquio', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090711', 'distric' => 'Pazos', 'province_id' => '0907', 'departament_id' => '09']);
       
       DB::table('Districs')->insert(['codigo' => '090713', 'distric' => 'Quishuar', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090714', 'distric' => 'Salcabamba', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090715', 'distric' => 'Salcahuasi', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090716', 'distric' => 'San Marcos de Rocchac', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090717', 'distric' => 'Surcubamba', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090718', 'distric' => 'Tintay Puncu', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090719', 'distric' => 'Quichuas', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090720', 'distric' => 'Andaymarca', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090721', 'distric' => 'Roble', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090722', 'distric' => 'Pichos', 'province_id' => '0907', 'departament_id' => '09']); 
       DB::table('Districs')->insert(['codigo' => '090723', 'distric' => 'Santiago de Tucuma', 'province_id' => '0907', 'departament_id' => '09']); 

       DB::table('Districs')->insert(['codigo' => '100101', 'distric' => 'Huanuco', 'province_id' => '1001', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100102', 'distric' => 'Amarilis', 'province_id' => '1001', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100103', 'distric' => 'Chinchao', 'province_id' => '1001', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100104', 'distric' => 'Churubamba', 'province_id' => '1001', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100105', 'distric' => 'Margos', 'province_id' => '1001', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100106', 'distric' => 'Quisqui (Kichki)', 'province_id' => '1001', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100107', 'distric' => 'San Francisco de Cayran', 'province_id' => '1001', 'departament_id' => '10']);
       DB::table('Districs')->insert(['codigo' => '100108', 'distric' => 'San Pedro de Chaulan', 'province_id' => '1001', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100109', 'distric' => 'Santa Maria del Valle', 'province_id' => '1001', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100110', 'distric' => 'Yarumayo', 'province_id' => '1001', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100111', 'distric' => 'Pillco Marca', 'province_id' => '1001', 'departament_id' => '10']);
       DB::table('Districs')->insert(['codigo' => '100112', 'distric' => 'Yacus', 'province_id' => '1001', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100113', 'distric' => 'San Pablo de Pillao', 'province_id' => '1001', 'departament_id' => '10']); 
              
       DB::table('Districs')->insert(['codigo' => '100201', 'distric' => 'Ambo', 'province_id' => '1002', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100202', 'distric' => 'Cayna', 'province_id' => '1002', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100203', 'distric' => 'Colpas', 'province_id' => '1002', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100204', 'distric' => 'Conchamarca', 'province_id' => '1002', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100205', 'distric' => 'Huacar', 'province_id' => '1002', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100206', 'distric' => 'San Francisco', 'province_id' => '1002', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100207', 'distric' => 'San Rafael', 'province_id' => '1002', 'departament_id' => '10']);
       DB::table('Districs')->insert(['codigo' => '100208', 'distric' => 'Tomay Kichwa', 'province_id' => '1002', 'departament_id' => '10']); 

       DB::table('Districs')->insert(['codigo' => '100301', 'distric' => 'La Union', 'province_id' => '1003', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100307', 'distric' => 'Chuquis', 'province_id' => '1003', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100311', 'distric' => 'Marias', 'province_id' => '1003', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100313', 'distric' => 'Pachas', 'province_id' => '1003', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100316', 'distric' => 'Quivilla', 'province_id' => '1003', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100317', 'distric' => 'Ripan', 'province_id' => '1003', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100321', 'distric' => 'Shunqui', 'province_id' => '1003', 'departament_id' => '10']);
       DB::table('Districs')->insert(['codigo' => '100322', 'distric' => 'Sillapata', 'province_id' => '1003', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100323', 'distric' => 'Yanas', 'province_id' => '1003', 'departament_id' => '10']); 

       DB::table('Districs')->insert(['codigo' => '100401', 'distric' => 'Huacaybamba', 'province_id' => '1004', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100402', 'distric' => 'Canchabamba', 'province_id' => '1004', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100403', 'distric' => 'Cochabamba', 'province_id' => '1004', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100404', 'distric' => 'Pinra', 'province_id' => '1004', 'departament_id' => '10']); 

       DB::table('Districs')->insert(['codigo' => '100501', 'distric' => 'Llata', 'province_id' => '1005', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100502', 'distric' => 'Arancay', 'province_id' => '1005', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100503', 'distric' => 'Chavin de Pariarca', 'province_id' => '1005', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100504', 'distric' => 'Jacas Grande', 'province_id' => '1005', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100505', 'distric' => 'Jircan', 'province_id' => '1005', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100506', 'distric' => 'Miraflores', 'province_id' => '1005', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100507', 'distric' => 'Monzón', 'province_id' => '1005', 'departament_id' => '10']);
       DB::table('Districs')->insert(['codigo' => '100508', 'distric' => 'Punchao', 'province_id' => '1005', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100509', 'distric' => 'Puños', 'province_id' => '1005', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100510', 'distric' => 'Singa', 'province_id' => '1005', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100511', 'distric' => 'Tantamayo', 'province_id' => '1005', 'departament_id' => '10']);

       DB::table('Districs')->insert(['codigo' => '100601', 'distric' => 'Rupa-Rupa', 'province_id' => '1006', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100602', 'distric' => 'Daniel Alomia Robles', 'province_id' => '1006', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100603', 'distric' => 'Hermilio Valdizan', 'province_id' => '1006', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100604', 'distric' => 'Jose Crespo y Castillo', 'province_id' => '1006', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100605', 'distric' => 'Luyando', 'province_id' => '1006', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100606', 'distric' => 'Mariano Damaso Beraun', 'province_id' => '1006', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100607', 'distric' => 'Pucayacu', 'province_id' => '1006', 'departament_id' => '10']);
       DB::table('Districs')->insert(['codigo' => '100608', 'distric' => 'Castillo Grande', 'province_id' => '1006', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100610', 'distric' => 'Pueblo Nuevo', 'province_id' => '1006', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100610', 'distric' => 'Santo Domingo de Anda', 'province_id' => '1006', 'departament_id' => '10']); 

       DB::table('Districs')->insert(['codigo' => '100701', 'distric' => 'Huacrachuco', 'province_id' => '1007', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100702', 'distric' => 'Cholon', 'province_id' => '1007', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100703', 'distric' => 'San Buenaventura', 'province_id' => '1007', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100704', 'distric' => 'Morada', 'province_id' => '1007', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100705', 'distric' => 'Santa Rosa de Alto Yanajanca', 'province_id' => '1007', 'departament_id' => '10']); 

       DB::table('Districs')->insert(['codigo' => '100801', 'distric' => 'Panao', 'province_id' => '1008', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100802', 'distric' => 'Chaglla', 'province_id' => '1008', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100803', 'distric' => 'Molino', 'province_id' => '1008', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100804', 'distric' => 'Umari', 'province_id' => '1008', 'departament_id' => '10']); 

       DB::table('Districs')->insert(['codigo' => '100901', 'distric' => 'Puerto Inca', 'province_id' => '1009', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100902', 'distric' => 'Codo del Pozuzo', 'province_id' => '1009', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100903', 'distric' => 'Honoria', 'province_id' => '1009', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100904', 'distric' => 'Tournavista', 'province_id' => '1009', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '100905', 'distric' => 'Yuyapichis', 'province_id' => '1009', 'departament_id' => '10']); 

       DB::table('Districs')->insert(['codigo' => '101001', 'distric' => 'Jesus', 'province_id' => '1010', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '101002', 'distric' => 'Baños', 'province_id' => '1010', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '101003', 'distric' => 'Jivia', 'province_id' => '1010', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '101004', 'distric' => 'Queropalca', 'province_id' => '1010', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '101005', 'distric' => 'Rondos', 'province_id' => '1010', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '101006', 'distric' => 'San Francisco de Asis', 'province_id' => '1010', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '101007', 'distric' => 'San Miguel de Cauri', 'province_id' => '1010', 'departament_id' => '10']); 

       DB::table('Districs')->insert(['codigo' => '101101', 'distric' => 'Chavinillo', 'province_id' => '1011', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '101102', 'distric' => 'Cahuac', 'province_id' => '1011', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '101103', 'distric' => 'Chacabamba', 'province_id' => '1011', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '101104', 'distric' => 'Aparicio Pomares', 'province_id' => '1011', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '101105', 'distric' => 'Jacas Chico', 'province_id' => '1011', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '101106', 'distric' => 'Obas', 'province_id' => '1011', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '101107', 'distric' => 'Pampamarca', 'province_id' => '1011', 'departament_id' => '10']); 
       DB::table('Districs')->insert(['codigo' => '101108', 'distric' => 'Choras', 'province_id' => '1011', 'departament_id' => '10']); 
        

       DB::table('Districs')->insert(['codigo' => '110101', 'distric' => 'Ica', 'province_id' => '1101', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110102', 'distric' => 'La Tinguiña', 'province_id' => '1101', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110103', 'distric' => 'Los Aquijes', 'province_id' => '1101', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110104', 'distric' => 'Ocucaje', 'province_id' => '1101', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110105', 'distric' => 'Pachacutec	', 'province_id' => '1101', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110106', 'distric' => 'Parcona', 'province_id' => '1101', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110107', 'distric' => 'Pueblo Nuevo', 'province_id' => '1101', 'departament_id' => '11']);
       DB::table('Districs')->insert(['codigo' => '110108', 'distric' => 'Salas', 'province_id' => '1101', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110109', 'distric' => 'San Jose de Los Molinos', 'province_id' => '1101', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110110', 'distric' => 'San Juan Bautista	', 'province_id' => '1101', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110111', 'distric' => 'Santiago', 'province_id' => '1101', 'departament_id' => '11']);
       DB::table('Districs')->insert(['codigo' => '110112', 'distric' => 'Subtanjalla', 'province_id' => '1101', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110113', 'distric' => 'Tate', 'province_id' => '1101', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110114', 'distric' => 'Yauca del Rosario', 'province_id' => '1101', 'departament_id' => '11']); 

       DB::table('Districs')->insert(['codigo' => '110201', 'distric' => 'Chincha Alta', 'province_id' => '1102', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110202', 'distric' => 'Alto Laran', 'province_id' => '1102', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110203', 'distric' => 'Chavin', 'province_id' => '1102', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110204', 'distric' => 'Chincha Baja', 'province_id' => '1102', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110205', 'distric' => 'El Carmen', 'province_id' => '1102', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110206', 'distric' => 'Grocio Prado', 'province_id' => '1102', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110207', 'distric' => 'Pueblo Nuevo', 'province_id' => '1102', 'departament_id' => '11']);
       DB::table('Districs')->insert(['codigo' => '110208', 'distric' => 'San Juan de Yanac', 'province_id' => '1102', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110209', 'distric' => 'San Pedro de Huacarpana', 'province_id' => '1102', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110210', 'distric' => 'Sunampe', 'province_id' => '1102', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110211', 'distric' => 'Tambo de Mora', 'province_id' => '1102', 'departament_id' => '11']);

       DB::table('Districs')->insert(['codigo' => '100301', 'distric' => 'Nasca', 'province_id' => '1003', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '100302', 'distric' => 'Changuillo', 'province_id' => '1003', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '100303', 'distric' => 'El Ingenio', 'province_id' => '1003', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '100304', 'distric' => 'Marcona', 'province_id' => '1003', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '100305', 'distric' => 'Vista Alegre', 'province_id' => '1003', 'departament_id' => '11']); 
      
       DB::table('Districs')->insert(['codigo' => '110401', 'distric' => 'Palpa', 'province_id' => '1104', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110402', 'distric' => 'Llipata', 'province_id' => '1104', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110403', 'distric' => 'Rio Grande', 'province_id' => '1104', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110404', 'distric' => 'Santa Cruz', 'province_id' => '1104', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110405', 'distric' => 'Tibillo', 'province_id' => '1104', 'departament_id' => '11']); 
       
       DB::table('Districs')->insert(['codigo' => '110501', 'distric' => 'Pisco', 'province_id' => '1105', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110502', 'distric' => 'Huancano', 'province_id' => '1105', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110503', 'distric' => 'Humay', 'province_id' => '1105', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110504', 'distric' => 'Independencia', 'province_id' => '1105', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110505', 'distric' => 'Paracas', 'province_id' => '1105', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110506', 'distric' => 'San Andres', 'province_id' => '1105', 'departament_id' => '11']); 
       DB::table('Districs')->insert(['codigo' => '110507', 'distric' => 'San Clemente', 'province_id' => '1105', 'departament_id' => '11']);
       DB::table('Districs')->insert(['codigo' => '110508', 'distric' => 'Tupac Amaru Inca', 'province_id' => '1105', 'departament_id' => '11']); 


       DB::table('Districs')->insert(['codigo' => '120101', 'distric' => 'Huancayo', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120104', 'distric' => 'Carhuacallanga', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120105', 'distric' => 'Chacapampa', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120106', 'distric' => 'Chicche', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120107', 'distric' => 'Chilca', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120108', 'distric' => 'Chongos Alto	', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120111', 'distric' => 'Chupuro', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120112', 'distric' => 'Colca', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120113', 'distric' => 'Cullhuas', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120114', 'distric' => 'El Tambo	', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120116', 'distric' => 'Huacrapuquio', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120117', 'distric' => 'Hualhuas', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120119', 'distric' => 'Huancan', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120120', 'distric' => 'Huasicancha', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120121', 'distric' => 'Huayucachi', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120122', 'distric' => 'Ingenio', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120124', 'distric' => 'Pariahuanca', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120125', 'distric' => 'Pilcomayo', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120126', 'distric' => 'Pucara', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120127', 'distric' => 'Quichuay	', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120128', 'distric' => 'Quilcas', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120129', 'distric' => 'San Agustín	', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120130', 'distric' => 'San Jerónimo de Tunan	', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120132', 'distric' => 'Saño', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120133', 'distric' => 'Sapallanga', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120134', 'distric' => 'Sicaya', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120135', 'distric' => 'Santo Domingo de Acobamba	', 'province_id' => '1201', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120136', 'distric' => 'Viques', 'province_id' => '1201', 'departament_id' => '12']); 

       DB::table('Districs')->insert(['codigo' => '120201', 'distric' => 'Concepcion', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120202', 'distric' => 'Aco', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120203', 'distric' => 'Andamarca', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120204', 'distric' => 'Chambara', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120205', 'distric' => 'Cochas', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120206', 'distric' => 'Comas', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120207', 'distric' => 'Heroínas Toledo', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120208', 'distric' => 'Manzanares', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120209', 'distric' => 'Mariscal Castilla', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120210', 'distric' => 'Matahuasi', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120211', 'distric' => 'Mito', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120212', 'distric' => 'Nueve de Julio', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120213', 'distric' => 'Orcotuna', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120214', 'distric' => 'San José de Quero', 'province_id' => '1202', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120215', 'distric' => 'Santa Rosa de Ocopa', 'province_id' => '1202', 'departament_id' => '12']); 

       DB::table('Districs')->insert(['codigo' => '120301', 'distric' => 'Chanchamayo', 'province_id' => '1203', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120302', 'distric' => 'Perene', 'province_id' => '1203', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120303', 'distric' => 'Pichanaqui', 'province_id' => '1203', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120304', 'distric' => 'San Luis de Shuaro', 'province_id' => '1203', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120305', 'distric' => 'San Ramón', 'province_id' => '1203', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120306', 'distric' => 'Vitoc', 'province_id' => '1203', 'departament_id' => '12']); 
      
       DB::table('Districs')->insert(['codigo' => '120401', 'distric' => 'Jauja	', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120402', 'distric' => 'Acolla', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120403', 'distric' => 'Apata', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120404', 'distric' => 'Ataura', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120405', 'distric' => 'Canchayllo', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120406', 'distric' => 'Curicaca', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120407', 'distric' => 'El Mantaro', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120408', 'distric' => 'Huamali', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120409', 'distric' => 'Huaripampa', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120410', 'distric' => 'Huertas', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120411', 'distric' => 'Janjaillo', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120412', 'distric' => 'Julcan', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120413', 'distric' => 'Leonor Ordoñez', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120414', 'distric' => 'Llocllapampa', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120415', 'distric' => 'Marco', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120416', 'distric' => 'Masma', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120417', 'distric' => 'Masma Chicche', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120418', 'distric' => 'Molinos', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120419', 'distric' => 'Monobamba', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120420', 'distric' => 'Muqui', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120421', 'distric' => 'Muquiyauyo', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120422', 'distric' => 'Paca', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120423', 'distric' => 'Paccha', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120424', 'distric' => 'Pancan', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120425', 'distric' => 'Parco', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120426', 'distric' => 'Pomacancha', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120427', 'distric' => 'Ricran', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120428', 'distric' => 'San Lorenzo	', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120429', 'distric' => 'San Pedro de Chunan', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120430', 'distric' => 'Sausa	', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120431', 'distric' => 'Sincos', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120432', 'distric' => 'Tunan Marca', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120433', 'distric' => 'Yauli', 'province_id' => '1204', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120434', 'distric' => 'Yauyos', 'province_id' => '1204', 'departament_id' => '12']); 

       DB::table('Districs')->insert(['codigo' => '120501', 'distric' => 'Junin', 'province_id' => '1205', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120502', 'distric' => 'Carhuamayo', 'province_id' => '1205', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120503', 'distric' => 'Ondores', 'province_id' => '1205', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120504', 'distric' => 'Ulcumayo', 'province_id' => '1205', 'departament_id' => '12']); 


       DB::table('Districs')->insert(['codigo' => '120601', 'distric' => 'Satipo', 'province_id' => '1206', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120602', 'distric' => 'Coviriali', 'province_id' => '1206', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120603', 'distric' => 'Llaylla', 'province_id' => '1206', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120604', 'distric' => 'Mazamari', 'province_id' => '1206', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120605', 'distric' => 'Pampa Hermosa', 'province_id' => '1206', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120606', 'distric' => 'Pangoa', 'province_id' => '1206', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120607', 'distric' => 'Río Negro', 'province_id' => '1206', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120608', 'distric' => 'Río Tambo', 'province_id' => '1206', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120609', 'distric' => 'Vizcatan del Ene	', 'province_id' => '1206', 'departament_id' => '12']); 

       DB::table('Districs')->insert(['codigo' => '120701', 'distric' => 'Tarma', 'province_id' => '1207', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120702', 'distric' => 'Acobamba', 'province_id' => '1207', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120703', 'distric' => 'Huaricolca', 'province_id' => '1207', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120704', 'distric' => 'Huasahuasi', 'province_id' => '1207', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120705', 'distric' => 'La Union', 'province_id' => '1207', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120706', 'distric' => 'Palca', 'province_id' => '1207', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120707', 'distric' => 'Palcamayo', 'province_id' => '1207', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120708', 'distric' => 'San Pedro de Cajas', 'province_id' => '1207', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120709', 'distric' => 'Tapo', 'province_id' => '1207', 'departament_id' => '12']); 

       DB::table('Districs')->insert(['codigo' => '120801', 'distric' => 'La Oroya	', 'province_id' => '1208', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120802', 'distric' => 'Chacapalpa', 'province_id' => '1208', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120803', 'distric' => 'Huay-Huay', 'province_id' => '1208', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120804', 'distric' => 'Marcapomacocha', 'province_id' => '1208', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120805', 'distric' => 'Morococha', 'province_id' => '1208', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120806', 'distric' => 'Paccha', 'province_id' => '1208', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120807', 'distric' => 'Santa Bárbara de Carhuacayan', 'province_id' => '1208', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120808', 'distric' => 'Santa Rosa de Sacco', 'province_id' => '1208', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120809', 'distric' => 'Suitucancha', 'province_id' => '1208', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120810', 'distric' => 'Yauli', 'province_id' => '1208', 'departament_id' => '12']); 

       DB::table('Districs')->insert(['codigo' => '120901', 'distric' => 'Chupaca', 'province_id' => '1209', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120902', 'distric' => 'Ahuac', 'province_id' => '1209', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120903', 'distric' => 'Chongos Bajo', 'province_id' => '1209', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120904', 'distric' => 'Huachac', 'province_id' => '1209', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120905', 'distric' => 'Huamancaca Chico', 'province_id' => '1209', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120906', 'distric' => 'San Juan de Iscos', 'province_id' => '1209', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120907', 'distric' => 'San Juan de Jarpa', 'province_id' => '1209', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120908', 'distric' => 'Tres de Diciembre', 'province_id' => '1209', 'departament_id' => '12']); 
       DB::table('Districs')->insert(['codigo' => '120909', 'distric' => 'Yanacancha', 'province_id' => '1209', 'departament_id' => '12']);

       DB::table('Districs')->insert(['codigo' => '130101', 'distric' => 'Trujillo', 'province_id' => '1301', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130102', 'distric' => 'El Porvenir', 'province_id' => '1301', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130103', 'distric' => 'Florencia de Mora', 'province_id' => '1301', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130104', 'distric' => 'Huanchaco', 'province_id' => '1301', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130105', 'distric' => 'La Esperanza', 'province_id' => '1301', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130106', 'distric' => 'Laredo', 'province_id' => '1301', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130107', 'distric' => 'Moche', 'province_id' => '1301', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130108', 'distric' => 'Poroto', 'province_id' => '1301', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130109', 'distric' => 'Salaverry', 'province_id' => '1301', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130110', 'distric' => 'Simbal', 'province_id' => '1301', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130111', 'distric' => 'Victor Larco Herrera	', 'province_id' => '1301', 'departament_id' => '13']); 
       
       
       DB::table('Districs')->insert(['codigo' => '130201', 'distric' => 'Ascope', 'province_id' => '1302', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130202', 'distric' => 'Chicama', 'province_id' => '1302', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130203', 'distric' => 'Chocope', 'province_id' => '1302', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130204', 'distric' => 'Magdalena de Cao', 'province_id' => '1302', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130205', 'distric' => 'Paijan', 'province_id' => '1302', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130206', 'distric' => 'Razuri', 'province_id' => '1302', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130207', 'distric' => 'Santiago de Cao', 'province_id' => '1302', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130208', 'distric' => 'Casa Grande', 'province_id' => '1302', 'departament_id' => '13']); 

       DB::table('Districs')->insert(['codigo' => '130301', 'distric' => 'Bolivar', 'province_id' => '1303', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130302', 'distric' => 'Bambamarca', 'province_id' => '1303', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130303', 'distric' => 'Condormarca	', 'province_id' => '1303', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130304', 'distric' => 'Longotea', 'province_id' => '1303', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130305', 'distric' => 'Uchumarca', 'province_id' => '1303', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130306', 'distric' => 'Ucuncha', 'province_id' => '1303', 'departament_id' => '13']); 
    
       DB::table('Districs')->insert(['codigo' => '130401', 'distric' => 'Chepen', 'province_id' => '1304', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130402', 'distric' => 'Pacanga', 'province_id' => '1304', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130403', 'distric' => 'Pueblo Nuevo', 'province_id' => '1304', 'departament_id' => '13']); 

       DB::table('Districs')->insert(['codigo' => '130501', 'distric' => 'Julcan', 'province_id' => '1305', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130502', 'distric' => 'Calamarca', 'province_id' => '1305', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130503', 'distric' => 'Carabamba', 'province_id' => '1305', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130504', 'distric' => 'Huaso', 'province_id' => '1305', 'departament_id' => '13']); 
       
       DB::table('Districs')->insert(['codigo' => '130601', 'distric' => 'Otuzco', 'province_id' => '1306', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130602', 'distric' => 'Agallpampa', 'province_id' => '1306', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130604', 'distric' => 'Charat', 'province_id' => '1306', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130605', 'distric' => 'Huaranchal	', 'province_id' => '1306', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130606', 'distric' => 'La Cuesta	', 'province_id' => '1306', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130608', 'distric' => 'Mache', 'province_id' => '1306', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130610', 'distric' => 'Paranday', 'province_id' => '1306', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130611', 'distric' => 'Salpo', 'province_id' => '1306', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130613', 'distric' => 'Sinsicap', 'province_id' => '1306', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130614', 'distric' => 'Usquil', 'province_id' => '1306', 'departament_id' => '13']); 

       DB::table('Districs')->insert(['codigo' => '130701', 'distric' => 'San Pedro de Lloc	', 'province_id' => '1307', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130702', 'distric' => 'Guadalupe', 'province_id' => '1307', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130703', 'distric' => 'Jequetepeque', 'province_id' => '1307', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130704', 'distric' => 'Pacasmayo', 'province_id' => '1307', 'departament_id' => '13']);
       DB::table('Districs')->insert(['codigo' => '130705', 'distric' => 'San Jose', 'province_id' => '1307', 'departament_id' => '13']);

       DB::table('Districs')->insert(['codigo' => '130801', 'distric' => 'Tayabamba', 'province_id' => '1308', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130802', 'distric' => 'Buldibuyo', 'province_id' => '1308', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130803', 'distric' => 'Chillia', 'province_id' => '1308', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130804', 'distric' => 'Huancaspata', 'province_id' => '1308', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130805', 'distric' => 'Huaylillas', 'province_id' => '1308', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130806', 'distric' => 'Huayo', 'province_id' => '1308', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130807', 'distric' => 'Ongon', 'province_id' => '1308', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130808', 'distric' => 'Parcoy', 'province_id' => '1308', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130809', 'distric' => 'Pataz', 'province_id' => '1308', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130810', 'distric' => 'Pias', 'province_id' => '1308', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130811', 'distric' => 'Santiago de Challas	', 'province_id' => '1308', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130812', 'distric' => 'Taurija', 'province_id' => '1308', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130813', 'distric' => 'Urpay', 'province_id' => '1308', 'departament_id' => '13']); 

       DB::table('Districs')->insert(['codigo' => '130901', 'distric' => 'Huamachuco', 'province_id' => '1309', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130902', 'distric' => 'Chugay', 'province_id' => '1309', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130903', 'distric' => 'Cochorco', 'province_id' => '1309', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130904', 'distric' => 'Curgos	', 'province_id' => '1309', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130905', 'distric' => 'Marcabal', 'province_id' => '1309', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130906', 'distric' => 'Sanagoran', 'province_id' => '1309', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130907', 'distric' => 'Sarin', 'province_id' => '1309', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '130908', 'distric' => 'Sartimbamba', 'province_id' => '1309', 'departament_id' => '13']); 

       DB::table('Districs')->insert(['codigo' => '131001', 'distric' => 'Santiago de Chuco	', 'province_id' => '1310', 'departament_id' => '13']);
       DB::table('Districs')->insert(['codigo' => '131002', 'distric' => 'Angasmarca', 'province_id' => '1310', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '131003', 'distric' => 'Cachicadan', 'province_id' => '1310', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '131004', 'distric' => 'Mollebamba', 'province_id' => '1310', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '131005', 'distric' => 'Mollepata', 'province_id' => '1310', 'departament_id' => '13']);
       DB::table('Districs')->insert(['codigo' => '131006', 'distric' => 'Quiruvilca', 'province_id' => '1310', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '131007', 'distric' => 'Santa Cruz de Chuca', 'province_id' => '1310', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '131008', 'distric' => 'Sitabamba', 'province_id' => '1310', 'departament_id' => '13']); 


       DB::table('Districs')->insert(['codigo' => '131101', 'distric' => 'Cascas', 'province_id' => '1311', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '131102', 'distric' => 'Lucma', 'province_id' => '1311', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '131103', 'distric' => 'Marmot', 'province_id' => '1311', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '131104', 'distric' => 'Sayapullo', 'province_id' => '1311', 'departament_id' => '13']);

       DB::table('Districs')->insert(['codigo' => '131201', 'distric' => 'Viru', 'province_id' => '1312', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '131202', 'distric' => 'Chao', 'province_id' => '1312', 'departament_id' => '13']); 
       DB::table('Districs')->insert(['codigo' => '131203', 'distric' => 'Guadalupito', 'province_id' => '1312', 'departament_id' => '13']); 

       DB::table('Districs')->insert(['codigo' => '140101', 'distric' => 'Chiclayo', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140102', 'distric' => 'Chongoyape', 'province_id' => '1401', 'departament_id' => '14']);       
       DB::table('Districs')->insert(['codigo' => '140103', 'distric' => 'Eten', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140104', 'distric' => 'Eten Puerto', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140105', 'distric' => 'Jose Leonardo Ortiz	', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140106', 'distric' => 'La Victoria', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140107', 'distric' => 'Lagunas', 'province_id' => '1401', 'departament_id' => '14']);       
       DB::table('Districs')->insert(['codigo' => '140108', 'distric' => 'Monsefu', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140109', 'distric' => 'Nueva Arica', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140110', 'distric' => 'Oyotun', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140111', 'distric' => 'Picsi', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140112', 'distric' => 'Pimentel', 'province_id' => '1401', 'departament_id' => '14']);       
       DB::table('Districs')->insert(['codigo' => '140113', 'distric' => 'Reque', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140114', 'distric' => 'Santa Rosa	', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140115', 'distric' => 'Saña', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140116', 'distric' => 'Cayalti', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140117', 'distric' => 'Patapo', 'province_id' => '1401', 'departament_id' => '14']);       
       DB::table('Districs')->insert(['codigo' => '140118', 'distric' => 'Pomalca', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140119', 'distric' => 'Pucala', 'province_id' => '1401', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140120', 'distric' => 'Tuman', 'province_id' => '1401', 'departament_id' => '14']); 

       DB::table('Districs')->insert(['codigo' => '140201', 'distric' => 'Ferreñafe', 'province_id' => '1402', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140202', 'distric' => 'Cañaris', 'province_id' => '1402', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140203', 'distric' => 'Incahuasi', 'province_id' => '1402', 'departament_id' => '14']);       
       DB::table('Districs')->insert(['codigo' => '140204', 'distric' => 'Manuel Antonio Mesones Muro', 'province_id' => '1402', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140205', 'distric' => 'Pitipo', 'province_id' => '1402', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140206', 'distric' => 'Pueblo Nuevo	', 'province_id' => '1402', 'departament_id' => '14']); 
       
       DB::table('Districs')->insert(['codigo' => '140301', 'distric' => 'Lambayeque', 'province_id' => '1403', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140302', 'distric' => 'Chochope', 'province_id' => '1403', 'departament_id' => '14']);       
       DB::table('Districs')->insert(['codigo' => '140303', 'distric' => 'Illimo', 'province_id' => '1403', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140304', 'distric' => 'Jayanca', 'province_id' => '1403', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140305', 'distric' => 'Mochumi', 'province_id' => '1403', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140306', 'distric' => 'Morrope', 'province_id' => '1403', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140307', 'distric' => 'Motupe', 'province_id' => '1403', 'departament_id' => '14']);       
       DB::table('Districs')->insert(['codigo' => '140308', 'distric' => 'Olmos', 'province_id' => '1403', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140309', 'distric' => 'Pacora', 'province_id' => '1403', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140310', 'distric' => 'Salas', 'province_id' => '1403', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140311', 'distric' => 'San Jose', 'province_id' => '1403', 'departament_id' => '14']); 
       DB::table('Districs')->insert(['codigo' => '140312', 'distric' => 'Tucume', 'province_id' => '1403', 'departament_id' => '14']);

       DB::table('Districs')->insert(['codigo' => '150101', 'distric' => 'Lima', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150102', 'distric' => 'Ancón', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150103', 'distric' => 'Ate', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150104', 'distric' => 'Barranco', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150105', 'distric' => 'Breña', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150106', 'distric' => 'Carabayllo', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150107', 'distric' => 'Chaclacayo', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150108', 'distric' => 'Chorrillos', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150109', 'distric' => 'Cieneguilla', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150110', 'distric' => 'Comas', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150111', 'distric' => 'El Agustino', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150112', 'distric' => 'Independencia', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150113', 'distric' => 'Jesús María', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150114', 'distric' => 'La Molina', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150115', 'distric' => 'La Victoria', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150116', 'distric' => 'Lince', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150117', 'distric' => 'Los Olivos', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150118', 'distric' => 'Lurigancho', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150119', 'distric' => 'Lurin', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150120', 'distric' => 'Magdalena del Mar', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150121', 'distric' => 'Pueblo Libre', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150122', 'distric' => 'Miraflores', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150123', 'distric' => 'Pachacamac', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150124', 'distric' => 'Pucusana', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150125', 'distric' => 'Puente Piedra', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150126', 'distric' => 'Punta Hermosa', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150127', 'distric' => 'Punta Negra', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150128', 'distric' => 'Rímac', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150129', 'distric' => 'San Bartolo', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150130', 'distric' => 'San Borja', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150131', 'distric' => 'San Isidro', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150132', 'distric' => 'San Juan de Lurigancho', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150133', 'distric' => 'San Juan de Miraflores', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150134', 'distric' => 'San Luis', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150135', 'distric' => 'San Martín de Porres', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150136', 'distric' => 'San Miguel', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150137', 'distric' => 'Santa Anita', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150138', 'distric' => 'Santa María del Mar', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150139', 'distric' => 'Santa Rosa', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150140', 'distric' => 'Santiago de Surco', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150141', 'distric' => 'Surquillo', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150142', 'distric' => 'Villa El Salvador', 'province_id' => '1501', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150143', 'distric' => 'Villa María del Triunfo', 'province_id' => '1501', 'departament_id' => '15']);

       DB::table('Districs')->insert(['codigo' => '150201', 'distric' => 'Barranca', 'province_id' => '1502', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150202', 'distric' => 'Paramonga', 'province_id' => '1502', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150203', 'distric' => 'Pativilca', 'province_id' => '1502', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150204', 'distric' => 'Supe', 'province_id' => '1502', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150205', 'distric' => 'Supe Puerto', 'province_id' => '1502', 'departament_id' => '15']);

       DB::table('Districs')->insert(['codigo' => '150301', 'distric' => 'Cajatambo', 'province_id' => '1503', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150302', 'distric' => 'Copa', 'province_id' => '1503', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150303', 'distric' => 'Gorgor', 'province_id' => '1503', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150304', 'distric' => 'Huancapon', 'province_id' => '1503', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150305', 'distric' => 'Manas', 'province_id' => '1503', 'departament_id' => '15']);

       DB::table('Districs')->insert(['codigo' => '150401', 'distric' => 'Canta', 'province_id' => '1504', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150402', 'distric' => 'Arahuay', 'province_id' => '1504', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150403', 'distric' => 'Huamantanga', 'province_id' => '1504', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150404', 'distric' => 'Huaros', 'province_id' => '1504', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150405', 'distric' => 'Lachaqui', 'province_id' => '1504', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150406', 'distric' => 'San Buenaventura', 'province_id' => '1504', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150407', 'distric' => 'Santa Rosa de Quives', 'province_id' => '1504', 'departament_id' => '15']);

       DB::table('Districs')->insert(['codigo' => '150501', 'distric' => 'San Vicente de Cañete	', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150502', 'distric' => 'Asia', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150503', 'distric' => 'Calango', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150504', 'distric' => 'Cerro Azul', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150505', 'distric' => 'Chilca', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150506', 'distric' => 'Coayllo', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150507', 'distric' => 'Imperial', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150508', 'distric' => 'Lunahuana', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150509', 'distric' => 'Mala', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150510', 'distric' => 'Nuevo Imperial', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150511', 'distric' => 'Pacaran', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150512', 'distric' => 'Quilmana', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150513', 'distric' => 'San Antonio', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150514', 'distric' => 'San Luis', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150515', 'distric' => 'Santa Cruz de Flores', 'province_id' => '1505', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150516', 'distric' => 'Zúñiga', 'province_id' => '1505', 'departament_id' => '15']);

       DB::table('Districs')->insert(['codigo' => '150601', 'distric' => 'Huaral', 'province_id' => '1506', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150602', 'distric' => 'Atavillos Alto', 'province_id' => '1506', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150603', 'distric' => 'Atavillos Bajo', 'province_id' => '1506', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150604', 'distric' => 'Aucallama	', 'province_id' => '1506', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150605', 'distric' => 'Chancay', 'province_id' => '1506', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150606', 'distric' => 'Ihuari', 'province_id' => '1506', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150607', 'distric' => 'Lampian', 'province_id' => '1506', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150608', 'distric' => 'Pacaraos', 'province_id' => '1506', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150609', 'distric' => 'San Miguel de Acos', 'province_id' => '1506', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150610', 'distric' => 'Santa Cruz de Andamarca', 'province_id' => '1506', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150611', 'distric' => 'Sumbilca', 'province_id' => '1506', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150612', 'distric' => 'Veintisiete de Noviembre', 'province_id' => '1506', 'departament_id' => '15']);
       
       DB::table('Districs')->insert(['codigo' => '150701', 'distric' => 'Matucana', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150702', 'distric' => 'Antioquia', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150703', 'distric' => 'Callahuanca', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150704', 'distric' => 'Carampoma	', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150705', 'distric' => 'Chicla', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150706', 'distric' => 'Cuenca', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150707', 'distric' => 'Huachupampa', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150708', 'distric' => 'Huanza', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150709', 'distric' => 'Huarochiri', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150710', 'distric' => 'Lahuaytambo', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150711', 'distric' => 'Langa', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150712', 'distric' => 'Laraos', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150713', 'distric' => 'Mariatana', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150714', 'distric' => 'Ricardo Palma', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150715', 'distric' => 'San Andrés de Tupicocha	', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150716', 'distric' => 'San Antonio', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150717', 'distric' => 'San Bartolomé', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150718', 'distric' => 'San Damian', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150719', 'distric' => 'San Juan de Iris', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150720', 'distric' => 'San Juan de Tantaranche', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150721', 'distric' => 'San Lorenzo de Quinti', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150722', 'distric' => 'San Mateo', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150723', 'distric' => 'San Mateo de Otao', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150724', 'distric' => 'San Pedro de Casta', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150725', 'distric' => 'San Pedro de Huancayre', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150726', 'distric' => 'Sangallaya', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150727', 'distric' => 'Santa Cruz de Cocachacra', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150728', 'distric' => 'Santa Eulalia', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150729', 'distric' => 'Santiago de Anchucaya', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150730', 'distric' => 'Santiago de Tuna', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150731', 'distric' => 'Santo Domingo de Los Olleros', 'province_id' => '1507', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150732', 'distric' => 'Surco', 'province_id' => '1507', 'departament_id' => '15']);

       DB::table('Districs')->insert(['codigo' => '150801', 'distric' => 'Huacho', 'province_id' => '1508', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150802', 'distric' => 'Ambar', 'province_id' => '1508', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150803', 'distric' => 'Caleta de Carquin	', 'province_id' => '1508', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150804', 'distric' => 'Checras', 'province_id' => '1508', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150805', 'distric' => 'Hualmay', 'province_id' => '1508', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150806', 'distric' => 'Huaura', 'province_id' => '1508', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150807', 'distric' => 'Leoncio Prado', 'province_id' => '1508', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150808', 'distric' => 'Paccho', 'province_id' => '1508', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150809', 'distric' => 'Santa Leonor', 'province_id' => '1508', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150810', 'distric' => 'Santa María', 'province_id' => '1508', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150811', 'distric' => 'Sayan', 'province_id' => '1508', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150812', 'distric' => 'Vegueta', 'province_id' => '1508', 'departament_id' => '15']);

       DB::table('Districs')->insert(['codigo' => '150901', 'distric' => 'Oyon', 'province_id' => '1509', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150902', 'distric' => 'Andajes', 'province_id' => '1509', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150903', 'distric' => 'Caujul', 'province_id' => '1509', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150904', 'distric' => 'Cochamarca', 'province_id' => '1509', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150905', 'distric' => 'Navan', 'province_id' => '1509', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '150906', 'distric' => 'Pachangara', 'province_id' => '1509', 'departament_id' => '15']);
      
       DB::table('Districs')->insert(['codigo' => '151001', 'distric' => 'Yauyos', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151002', 'distric' => 'Alis', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151003', 'distric' => 'Allauca', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151004', 'distric' => 'Ayaviri', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151005', 'distric' => 'Azángaro', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151006', 'distric' => 'Cacra', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151007', 'distric' => 'Carania', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151008', 'distric' => 'Catahuasi', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151009', 'distric' => 'Chocos', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151010', 'distric' => 'Cochas', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151011', 'distric' => 'Colonia', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151012', 'distric' => 'Hongos', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151013', 'distric' => 'Huampara', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151014', 'distric' => 'Huancaya', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151015', 'distric' => 'Huangascar', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151016', 'distric' => 'Huantan', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151017', 'distric' => 'Huañec', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151018', 'distric' => 'Laraos', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151019', 'distric' => 'Lincha', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151020', 'distric' => 'Madean', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151021', 'distric' => 'Miraflores', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151022', 'distric' => 'Omas', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151023', 'distric' => 'Putinza', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151024', 'distric' => 'Quinches', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151025', 'distric' => 'Quinocay', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151026', 'distric' => 'San Joaquín', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151027', 'distric' => 'San Pedro de Pilas', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151028', 'distric' => 'Tanta', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151029', 'distric' => 'Tauripampa', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151030', 'distric' => 'Tomas', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151031', 'distric' => 'Tupe', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151032', 'distric' => 'Viñac', 'province_id' => '1510', 'departament_id' => '15']);
       DB::table('Districs')->insert(['codigo' => '151033', 'distric' => 'Vitis', 'province_id' => '1510', 'departament_id' => '15']);

       DB::table('Districs')->insert(['codigo' => '160101', 'distric' => 'Iquitos', 'province_id' => '1601', 'departament_id' => '16']);      
       DB::table('Districs')->insert(['codigo' => '160102', 'distric' => 'Alto Nanay	', 'province_id' => '1601', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160103', 'distric' => 'Fernando Lores	', 'province_id' => '1601', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160104', 'distric' => 'Indiana', 'province_id' => '1601', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160105', 'distric' => 'Las Amazonas	', 'province_id' => '1601', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160106', 'distric' => 'Mazan', 'province_id' => '1601', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160107', 'distric' => 'Napo', 'province_id' => '1601', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160118', 'distric' => 'Punchana', 'province_id' => '1601', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160110', 'distric' => 'Torres Causana	', 'province_id' => '1601', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160112', 'distric' => 'Belén', 'province_id' => '1601', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160113', 'distric' => 'San Juan Bautista	', 'province_id' => '1601', 'departament_id' => '16']);

       DB::table('Districs')->insert(['codigo' => '160201', 'distric' => 'Yurimaguas', 'province_id' => '1602', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160202', 'distric' => 'Balsapuerto', 'province_id' => '1602', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160205', 'distric' => 'Jeberos', 'province_id' => '1602', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160206', 'distric' => 'Lagunas', 'province_id' => '1602', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160210', 'distric' => 'Santa Cruz', 'province_id' => '1602', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160211', 'distric' => 'Teniente Cesar López Rojas', 'province_id' => '1602', 'departament_id' => '16']);

       DB::table('Districs')->insert(['codigo' => '160301', 'distric' => 'Nauta', 'province_id' => '1603', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160302', 'distric' => 'Parinari', 'province_id' => '1603', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160303', 'distric' => 'Tigre', 'province_id' => '1603', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160314', 'distric' => 'Trompeteros', 'province_id' => '1603', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160315', 'distric' => 'Urarinas', 'province_id' => '1603', 'departament_id' => '16']);
       
       DB::table('Districs')->insert(['codigo' => '160401', 'distric' => 'Ramón Castilla', 'province_id' => '1604', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160402', 'distric' => 'Pebas', 'province_id' => '1604', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160403', 'distric' => 'Yavari', 'province_id' => '1604', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160404', 'distric' => 'San Pablo', 'province_id' => '1604', 'departament_id' => '16']);

       DB::table('Districs')->insert(['codigo' => '160501', 'distric' => 'Requena', 'province_id' => '1605', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160502', 'distric' => 'Alto Tapiche', 'province_id' => '1605', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160503', 'distric' => 'Capelo', 'province_id' => '1605', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160504', 'distric' => 'Emilio San Martín	', 'province_id' => '1605', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160505', 'distric' => 'Maquia', 'province_id' => '1605', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160506', 'distric' => 'Puinahua', 'province_id' => '1605', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160507', 'distric' => 'Saquena', 'province_id' => '1605', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160508', 'distric' => 'Soplin', 'province_id' => '1605', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160509', 'distric' => 'Tapiche', 'province_id' => '1605', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160510', 'distric' => 'Jenaro Herrera', 'province_id' => '1605', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160511', 'distric' => 'Yaquerana', 'province_id' => '1605', 'departament_id' => '16']);

       DB::table('Districs')->insert(['codigo' => '160601', 'distric' => 'Contamana', 'province_id' => '1606', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160602', 'distric' => 'Inahuaya', 'province_id' => '1606', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160603', 'distric' => 'Padre Márquez', 'province_id' => '1606', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160604', 'distric' => 'Pampa Hermosa', 'province_id' => '1606', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160605', 'distric' => 'Sarayacu', 'province_id' => '1606', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160606', 'distric' => 'Vargas Guerra', 'province_id' => '1606', 'departament_id' => '16']);

       DB::table('Districs')->insert(['codigo' => '160701', 'distric' => 'Barranca', 'province_id' => '1607', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160702', 'distric' => 'Cahuapanas', 'province_id' => '1607', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160703', 'distric' => 'Manseriche', 'province_id' => '1607', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160704', 'distric' => 'Morona', 'province_id' => '1607', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160705', 'distric' => 'Pastaza', 'province_id' => '1607', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160706', 'distric' => 'Andoas', 'province_id' => '1607', 'departament_id' => '16']);

       DB::table('Districs')->insert(['codigo' => '160801', 'distric' => 'Putumayo', 'province_id' => '1608', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160802', 'distric' => 'Rosa Panduro	', 'province_id' => '1608', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160803', 'distric' => 'Teniente Manuel Clavero', 'province_id' => '1608', 'departament_id' => '16']);
       DB::table('Districs')->insert(['codigo' => '160804', 'distric' => 'Yaguas', 'province_id' => '1608', 'departament_id' => '16']);


       DB::table('Districs')->insert(['codigo' => '170101', 'distric' => 'Tambopata', 'province_id' => '1701', 'departament_id' => '17']);
       DB::table('Districs')->insert(['codigo' => '170102', 'distric' => 'Inambari', 'province_id' => '1701', 'departament_id' => '17']);
       DB::table('Districs')->insert(['codigo' => '170103', 'distric' => 'Las Piedras', 'province_id' => '1701', 'departament_id' => '17']);
       DB::table('Districs')->insert(['codigo' => '170104', 'distric' => 'Laberinto', 'province_id' => '1701', 'departament_id' => '17']);

       DB::table('Districs')->insert(['codigo' => '170201', 'distric' => 'Manu', 'province_id' => '1702', 'departament_id' => '17']);
       DB::table('Districs')->insert(['codigo' => '170202', 'distric' => 'Fitzcarrald', 'province_id' => '1702', 'departament_id' => '17']);
       DB::table('Districs')->insert(['codigo' => '170203', 'distric' => 'Madre de Dios', 'province_id' => '1702', 'departament_id' => '17']);
       DB::table('Districs')->insert(['codigo' => '170204', 'distric' => 'Huepetuhe', 'province_id' => '1702', 'departament_id' => '17']);

       DB::table('Districs')->insert(['codigo' => '170301', 'distric' => 'Iñapari', 'province_id' => '1703', 'departament_id' => '17']);
       DB::table('Districs')->insert(['codigo' => '170302', 'distric' => 'Iberia', 'province_id' => '1703', 'departament_id' => '17']);
       DB::table('Districs')->insert(['codigo' => '170303', 'distric' => 'Tahuamanu', 'province_id' => '1703', 'departament_id' => '17']);
       
    
       DB::table('Districs')->insert(['codigo' => '180101', 'distric' => 'Moquegua', 'province_id' => '1801', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180102', 'distric' => 'Carumas', 'province_id' => '1801', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180103', 'distric' => 'Cuchumbaya', 'province_id' => '1801', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180104', 'distric' => 'Samegua', 'province_id' => '1801', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180105', 'distric' => 'San Cristobal', 'province_id' => '1801', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180106', 'distric' => 'Torata', 'province_id' => '1801', 'departament_id' => '18']);

       DB::table('Districs')->insert(['codigo' => '180201', 'distric' => 'Omate', 'province_id' => '1802', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180202', 'distric' => 'Chojata', 'province_id' => '1802', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180203', 'distric' => 'Coalaque', 'province_id' => '1802', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180204', 'distric' => 'Ichuña', 'province_id' => '1802', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180205', 'distric' => 'La Capilla', 'province_id' => '1802', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180206', 'distric' => 'Lloque', 'province_id' => '1802', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180207', 'distric' => 'Matalaque', 'province_id' => '1802', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180208', 'distric' => 'Puquina', 'province_id' => '1802', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180209', 'distric' => 'Quinistaquillas', 'province_id' => '1802', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180210', 'distric' => 'Ubinas', 'province_id' => '1802', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180211', 'distric' => 'Yunga', 'province_id' => '1802', 'departament_id' => '18']);

       DB::table('Districs')->insert(['codigo' => '180301', 'distric' => 'Ilo', 'province_id' => '1803', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180302', 'distric' => 'El Algarrobal', 'province_id' => '1803', 'departament_id' => '18']);
       DB::table('Districs')->insert(['codigo' => '180303', 'distric' => 'Pacocha', 'province_id' => '1803', 'departament_id' => '18']);

       DB::table('Districs')->insert(['codigo' => '190101', 'distric' => 'Chaupimarca', 'province_id' => '1901', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190102', 'distric' => 'Huachon', 'province_id' => '1901', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190103', 'distric' => 'Huariaca', 'province_id' => '1901', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190104', 'distric' => 'Huayllay', 'province_id' => '1901', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190105', 'distric' => 'Ninacaca', 'province_id' => '1901', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190106', 'distric' => 'Pallanchacra', 'province_id' => '1901', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190107', 'distric' => 'Paucartambo', 'province_id' => '1901', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190108', 'distric' => 'San Francisco de Asis de Yarusyacan', 'province_id' => '1901', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190109', 'distric' => 'Simon Bolívar', 'province_id' => '1901', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190110', 'distric' => 'Ticlacayan', 'province_id' => '1901', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190111', 'distric' => 'Tinyahuarco', 'province_id' => '1901', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190112', 'distric' => 'Vicco', 'province_id' => '1901', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190113', 'distric' => 'Yanacancha', 'province_id' => '1901', 'departament_id' => '19']);
       
       DB::table('Districs')->insert(['codigo' => '190201', 'distric' => 'Yanahuanca', 'province_id' => '1902', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190202', 'distric' => 'Chacayan', 'province_id' => '1902', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190203', 'distric' => 'Goyllarisquizga', 'province_id' => '1902', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190204', 'distric' => 'Paucar', 'province_id' => '1902', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190205', 'distric' => 'San Pedro de Pillao', 'province_id' => '1902', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190206', 'distric' => 'Santa Ana de Tusi', 'province_id' => '1902', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190207', 'distric' => 'Tapuc', 'province_id' => '1902', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190208', 'distric' => 'Vilcabamba', 'province_id' => '1902', 'departament_id' => '19']);

       DB::table('Districs')->insert(['codigo' => '190301', 'distric' => 'Oxapampa', 'province_id' => '1903', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190302', 'distric' => 'Chontabamba', 'province_id' => '1903', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190303', 'distric' => 'Huancabamba', 'province_id' => '1903', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190304', 'distric' => 'Palcazu', 'province_id' => '1903', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190305', 'distric' => 'Pozuzo', 'province_id' => '1903', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190306', 'distric' => 'Puerto Bermudez', 'province_id' => '1903', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190307', 'distric' => 'Villa Rica', 'province_id' => '1903', 'departament_id' => '19']);
       DB::table('Districs')->insert(['codigo' => '190308', 'distric' => 'Constitucion', 'province_id' => '1903', 'departament_id' => '19']);


       DB::table('Districs')->insert(['codigo' => '200101', 'distric' => 'Piura', 'province_id' => '2001', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200104', 'distric' => 'Castilla', 'province_id' => '2001', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200105', 'distric' => 'Catacaos', 'province_id' => '2001', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200107', 'distric' => 'Cura Mori', 'province_id' => '2001', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200108', 'distric' => 'El Tallan', 'province_id' => '2001', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200109', 'distric' => 'La Union', 'province_id' => '2001', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200110', 'distric' => 'Las Lomas', 'province_id' => '2001', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200111', 'distric' => 'Tambo Grande', 'province_id' => '2001', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200114', 'distric' => 'Veintiseis de Octubre', 'province_id' => '2001', 'departament_id' => '20']);
       
       DB::table('Districs')->insert(['codigo' => '200201', 'distric' => 'Ayabaca', 'province_id' => '2002', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200202', 'distric' => 'Frias', 'province_id' => '2002', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200203', 'distric' => 'Jilili', 'province_id' => '2002', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200204', 'distric' => 'Lagunas', 'province_id' => '2002', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200205', 'distric' => 'Montero', 'province_id' => '2002', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200206', 'distric' => 'Pacaipampa', 'province_id' => '2002', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200207', 'distric' => 'Paimas', 'province_id' => '2002', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200208', 'distric' => 'Sapillica', 'province_id' => '2002', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200209', 'distric' => 'Sicchez', 'province_id' => '2002', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200210', 'distric' => 'Suyo', 'province_id' => '2002', 'departament_id' => '20']);

       DB::table('Districs')->insert(['codigo' => '200301', 'distric' => 'Huancabamba', 'province_id' => '2003', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200302', 'distric' => 'Canchaque', 'province_id' => '2003', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200303', 'distric' => 'El Carmen de la Frontera', 'province_id' => '2003', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200304', 'distric' => 'Huarmaca', 'province_id' => '2003', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200305', 'distric' => 'Lalaquiz', 'province_id' => '2003', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200306', 'distric' => 'San Miguel de El Faique', 'province_id' => '2003', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200307', 'distric' => 'Sondor', 'province_id' => '2003', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200308', 'distric' => 'Sondorillo', 'province_id' => '2003', 'departament_id' => '20']);

       DB::table('Districs')->insert(['codigo' => '200401', 'distric' => 'Chulucanas', 'province_id' => '2004', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200402', 'distric' => 'Buenos Aires', 'province_id' => '2004', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200403', 'distric' => 'Chalaco', 'province_id' => '2004', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200404', 'distric' => 'La Matanza', 'province_id' => '2004', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200405', 'distric' => 'Morropon', 'province_id' => '2004', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200406', 'distric' => 'Salitral', 'province_id' => '2004', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200407', 'distric' => 'San Juan de Bigote', 'province_id' => '2004', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200408', 'distric' => 'Santa Catalina de Mossa', 'province_id' => '2004', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200409', 'distric' => 'Santo Domingo', 'province_id' => '2004', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200410', 'distric' => 'Yamango', 'province_id' => '2004', 'departament_id' => '20']);

       DB::table('Districs')->insert(['codigo' => '200501', 'distric' => 'Paita', 'province_id' => '2005', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200502', 'distric' => 'Amotape', 'province_id' => '2005', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200503', 'distric' => 'Arenal', 'province_id' => '2005', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200504', 'distric' => 'Colan', 'province_id' => '2005', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200505', 'distric' => 'La Huaca', 'province_id' => '2005', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200506', 'distric' => 'Tamarindo', 'province_id' => '2005', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200507', 'distric' => 'Vichayal', 'province_id' => '2005', 'departament_id' => '20']);

       DB::table('Districs')->insert(['codigo' => '200601', 'distric' => 'Sullana', 'province_id' => '2006', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200602', 'distric' => 'Bellavista', 'province_id' => '2006', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200603', 'distric' => 'Ignacio Escudero', 'province_id' => '2006', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200604', 'distric' => 'Lancones', 'province_id' => '2006', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200605', 'distric' => 'Marcavelica', 'province_id' => '2006', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200606', 'distric' => 'Miguel Checa', 'province_id' => '2006', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200607', 'distric' => 'Querecotillo', 'province_id' => '2006', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200608', 'distric' => 'Salitral', 'province_id' => '2006', 'departament_id' => '20']);

       DB::table('Districs')->insert(['codigo' => '200701', 'distric' => 'Pariñas', 'province_id' => '2007', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200702', 'distric' => 'El Alto', 'province_id' => '2007', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200703', 'distric' => 'La Brea', 'province_id' => '2007', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200704', 'distric' => 'Lobitos', 'province_id' => '2007', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200705', 'distric' => 'Los Organos', 'province_id' => '2007', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200706', 'distric' => 'Mancora', 'province_id' => '2007', 'departament_id' => '20']);

       DB::table('Districs')->insert(['codigo' => '200801', 'distric' => 'Sechura', 'province_id' => '2008', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200802', 'distric' => 'Bellavista de la Unión', 'province_id' => '2008', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200803', 'distric' => 'Bernal', 'province_id' => '2008', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200804', 'distric' => 'Cristo Nos Valga', 'province_id' => '2008', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200805', 'distric' => 'Vice', 'province_id' => '2008', 'departament_id' => '20']);
       DB::table('Districs')->insert(['codigo' => '200806', 'distric' => 'Rinconada Llicuar', 'province_id' => '2008', 'departament_id' => '20']);

       DB::table('Districs')->insert(['codigo' => '210101', 'distric' => 'Puno', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210102', 'distric' => 'Acora', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210103', 'distric' => 'Amantani', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210104', 'distric' => 'Atuncolla', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210105', 'distric' => 'Capachica', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210106', 'distric' => 'Chucuito', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210107', 'distric' => 'Coata', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210108', 'distric' => 'Huata', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210109', 'distric' => 'Mañazo', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210110', 'distric' => 'Paucarcolla', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210111', 'distric' => 'Pichacani', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210112', 'distric' => 'Plateria', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210113', 'distric' => 'San Antonio', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210114', 'distric' => 'Tiquillaca', 'province_id' => '2101', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210115', 'distric' => 'Vilque', 'province_id' => '2101', 'departament_id' => '21']);
     
       DB::table('Districs')->insert(['codigo' => '210201', 'distric' => 'Azángaro', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210202', 'distric' => 'Achaya', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210203', 'distric' => 'Arapa', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210204', 'distric' => 'Asillo', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210205', 'distric' => 'Caminaca', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210206', 'distric' => 'Chupa', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210207', 'distric' => 'Jose Domingo Choquehuanca	', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210208', 'distric' => 'Muñani', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210209', 'distric' => 'Potoni', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210210', 'distric' => 'Saman', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210211', 'distric' => 'San Anton', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210212', 'distric' => 'San Jose', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210213', 'distric' => 'San San Juan de Salinas', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210214', 'distric' => 'Santiago de Pupuja', 'province_id' => '2102', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210215', 'distric' => 'Tirapata', 'province_id' => '2102', 'departament_id' => '21']);

       DB::table('Districs')->insert(['codigo' => '210301', 'distric' => 'Macusani', 'province_id' => '2103', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210302', 'distric' => 'Ajoyani', 'province_id' => '2103', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210303', 'distric' => 'Ayapata', 'province_id' => '2103', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210304', 'distric' => 'Coasa', 'province_id' => '2103', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210305', 'distric' => 'Corani', 'province_id' => '2103', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210306', 'distric' => 'Crucero', 'province_id' => '2103', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210307', 'distric' => 'Ituata', 'province_id' => '2103', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210308', 'distric' => 'Ollachea', 'province_id' => '2103', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210309', 'distric' => 'San Gaban', 'province_id' => '2103', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210310', 'distric' => 'Usicayos', 'province_id' => '2103', 'departament_id' => '21']);

       DB::table('Districs')->insert(['codigo' => '210401', 'distric' => 'Juli', 'province_id' => '2104', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210402', 'distric' => 'Desaguadero', 'province_id' => '2104', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210403', 'distric' => 'Huacullani', 'province_id' => '2104', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210404', 'distric' => 'Kelluyo', 'province_id' => '2104', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210405', 'distric' => 'Pisacoma', 'province_id' => '2104', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210406', 'distric' => 'Pomata', 'province_id' => '2104', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210407', 'distric' => 'Zepita', 'province_id' => '2104', 'departament_id' => '21']);

       DB::table('Districs')->insert(['codigo' => '210501', 'distric' => 'Ilave', 'province_id' => '2105', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210502', 'distric' => 'Capazo', 'province_id' => '2105', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210503', 'distric' => 'Pilcuyo', 'province_id' => '2105', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210504', 'distric' => 'Santa Rosa', 'province_id' => '2105', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210505', 'distric' => 'Conduriri', 'province_id' => '2105', 'departament_id' => '21']);

       DB::table('Districs')->insert(['codigo' => '210601', 'distric' => 'Huancane', 'province_id' => '2106', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210602', 'distric' => 'Cojata', 'province_id' => '2106', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210603', 'distric' => 'Huatasani', 'province_id' => '2106', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210604', 'distric' => 'Inchupalla', 'province_id' => '2106', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210605', 'distric' => 'Pusi', 'province_id' => '2106', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210606', 'distric' => 'Rosaspata', 'province_id' => '2106', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210607', 'distric' => 'Taraco', 'province_id' => '2106', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210608', 'distric' => 'Vilque Chico', 'province_id' => '2106', 'departament_id' => '21']);

       DB::table('Districs')->insert(['codigo' => '210701', 'distric' => 'Lampa', 'province_id' => '2107', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210702', 'distric' => 'Cabanilla', 'province_id' => '2107', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210703', 'distric' => 'Calapuja', 'province_id' => '2107', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210704', 'distric' => 'Nicasio', 'province_id' => '2107', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210705', 'distric' => 'Ocuviri', 'province_id' => '2107', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210706', 'distric' => 'Palca', 'province_id' => '2107', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210707', 'distric' => 'Paratia', 'province_id' => '2107', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210708', 'distric' => 'Pucara', 'province_id' => '2107', 'departament_id' => '21']);       
       DB::table('Districs')->insert(['codigo' => '210709', 'distric' => 'Santa Lucia', 'province_id' => '2107', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210710', 'distric' => 'Vilavila', 'province_id' => '2107', 'departament_id' => '21']);

       DB::table('Districs')->insert(['codigo' => '210801', 'distric' => 'Ayaviri', 'province_id' => '2108', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210802', 'distric' => 'Antauta', 'province_id' => '2108', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210803', 'distric' => 'Cupi', 'province_id' => '2108', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210804', 'distric' => 'Llalli', 'province_id' => '2108', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210805', 'distric' => 'Macari', 'province_id' => '2108', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210806', 'distric' => 'Nuñoa', 'province_id' => '2108', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210807', 'distric' => 'Orurillo', 'province_id' => '2108', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210808', 'distric' => 'Santa Rosa', 'province_id' => '2108', 'departament_id' => '21']);       
       DB::table('Districs')->insert(['codigo' => '210809', 'distric' => 'Umachiri', 'province_id' => '2108', 'departament_id' => '21']);

       DB::table('Districs')->insert(['codigo' => '210901', 'distric' => 'Moho', 'province_id' => '2109', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210902', 'distric' => 'Conima', 'province_id' => '2109', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210903', 'distric' => 'Huayrapata', 'province_id' => '2109', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '210904', 'distric' => 'Tilali', 'province_id' => '2109', 'departament_id' => '21']);

       DB::table('Districs')->insert(['codigo' => '211001', 'distric' => 'Putina', 'province_id' => '2110', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211002', 'distric' => 'Ananea', 'province_id' => '2110', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211003', 'distric' => 'Pedro Vilca Apaza', 'province_id' => '2110', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211004', 'distric' => 'Quilcapuncu', 'province_id' => '2110', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211005', 'distric' => 'Sina', 'province_id' => '2110', 'departament_id' => '21']);

       DB::table('Districs')->insert(['codigo' => '211101', 'distric' => 'Juliaca', 'province_id' => '2111', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211102', 'distric' => 'Cabana', 'province_id' => '2111', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211103', 'distric' => 'Cabanillas', 'province_id' => '2111', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211104', 'distric' => 'Caracoto', 'province_id' => '2111', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211105', 'distric' => 'San Miguel', 'province_id' => '2111', 'departament_id' => '21']);

       DB::table('Districs')->insert(['codigo' => '211201', 'distric' => 'Sandia', 'province_id' => '2112', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211202', 'distric' => 'Cuyocuyo', 'province_id' => '2112', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211203', 'distric' => 'Limbani', 'province_id' => '2112', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211204', 'distric' => 'Patambuco', 'province_id' => '2112', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211205', 'distric' => 'Phara', 'province_id' => '2112', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211206', 'distric' => 'Quiaca', 'province_id' => '2112', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211207', 'distric' => 'San Juan del Oro	', 'province_id' => '2112', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211208', 'distric' => 'Yanahuaya', 'province_id' => '2112', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211209', 'distric' => 'Alto Inambari', 'province_id' => '2112', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211210', 'distric' => 'San Pedro de Putina Punco', 'province_id' => '2112', 'departament_id' => '21']);

       DB::table('Districs')->insert(['codigo' => '211301', 'distric' => 'Yunguyo', 'province_id' => '2113', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211302', 'distric' => 'Anapia', 'province_id' => '2113', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211303', 'distric' => 'Copani', 'province_id' => '2113', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211304', 'distric' => 'Cuturapi', 'province_id' => '2113', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211305', 'distric' => 'Ollaraya', 'province_id' => '2113', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211306', 'distric' => 'Tinicachi', 'province_id' => '2113', 'departament_id' => '21']);
       DB::table('Districs')->insert(['codigo' => '211307', 'distric' => 'Unicachi', 'province_id' => '2113', 'departament_id' => '21']);

       DB::table('Districs')->insert(['codigo' => '220101', 'distric' => 'Moyobamba', 'province_id' => '2201', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220102', 'distric' => 'Calzada', 'province_id' => '2201', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220103', 'distric' => 'Habana', 'province_id' => '2201', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220104', 'distric' => 'Jepelacio', 'province_id' => '2201', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220105', 'distric' => 'Soritor', 'province_id' => '2201', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220106', 'distric' => 'Yantalo', 'province_id' => '2201', 'departament_id' => '22']);

       DB::table('Districs')->insert(['codigo' => '220201', 'distric' => 'Bellavista', 'province_id' => '2202', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220202', 'distric' => 'Alto Biavo', 'province_id' => '2202', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220203', 'distric' => 'Bajo Biavo', 'province_id' => '2202', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220204', 'distric' => 'Huallaga', 'province_id' => '2202', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220205', 'distric' => 'San Pablo', 'province_id' => '2202', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220206', 'distric' => 'San Rafael', 'province_id' => '2202', 'departament_id' => '22']);

       DB::table('Districs')->insert(['codigo' => '220301', 'distric' => 'San José de Sisa', 'province_id' => '2203', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220302', 'distric' => 'Agua Blanca', 'province_id' => '2203', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220303', 'distric' => 'San Martín', 'province_id' => '2203', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220304', 'distric' => 'Santa Rosa', 'province_id' => '2203', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220305', 'distric' => 'Shatoja', 'province_id' => '2203', 'departament_id' => '22']);

       DB::table('Districs')->insert(['codigo' => '220401', 'distric' => 'Saposoa', 'province_id' => '2204', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220402', 'distric' => 'Alto Saposoa', 'province_id' => '2204', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220403', 'distric' => 'El Eslabon', 'province_id' => '2204', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220404', 'distric' => 'Piscoyacu', 'province_id' => '2204', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220405', 'distric' => 'Sacanche', 'province_id' => '2204', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220406', 'distric' => 'Tingo de Saposoa', 'province_id' => '2204', 'departament_id' => '22']);

       DB::table('Districs')->insert(['codigo' => '220501', 'distric' => 'Lamas', 'province_id' => '2205', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220502', 'distric' => 'Alonso de Alvarado', 'province_id' => '2205', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220503', 'distric' => 'Barranquita', 'province_id' => '2205', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220504', 'distric' => 'Caynarachi', 'province_id' => '2205', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220505', 'distric' => 'Cuñumbuqui', 'province_id' => '2205', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220506', 'distric' => 'Pinto Recodo', 'province_id' => '2205', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220507', 'distric' => 'Rumisapa', 'province_id' => '2205', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220508', 'distric' => 'San Roque de Cumbaza', 'province_id' => '2205', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220509', 'distric' => 'Shanao', 'province_id' => '2205', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220510', 'distric' => 'Tabalosos', 'province_id' => '2205', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220511', 'distric' => 'Zapatero', 'province_id' => '2205', 'departament_id' => '22']);

       DB::table('Districs')->insert(['codigo' => '220601', 'distric' => 'Juanjui', 'province_id' => '2206', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220602', 'distric' => 'Campanilla', 'province_id' => '2206', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220603', 'distric' => 'Huicungo', 'province_id' => '2206', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220604', 'distric' => 'Pachiza', 'province_id' => '2206', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220605', 'distric' => 'Pajarillo', 'province_id' => '2206', 'departament_id' => '22']);

       DB::table('Districs')->insert(['codigo' => '220701', 'distric' => 'Picota', 'province_id' => '2207', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220702', 'distric' => 'Buenos Aires', 'province_id' => '2207', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220703', 'distric' => 'Caspisapa', 'province_id' => '2207', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220704', 'distric' => 'Pilluana', 'province_id' => '2207', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220705', 'distric' => 'Pucacaca', 'province_id' => '2207', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220706', 'distric' => 'San Cristobal', 'province_id' => '2207', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220707', 'distric' => 'San Hilarion', 'province_id' => '2207', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220708', 'distric' => 'Shamboyacu', 'province_id' => '2207', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220709', 'distric' => 'Tingo de Ponasa', 'province_id' => '2207', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220710', 'distric' => 'Tres Unidos', 'province_id' => '2207', 'departament_id' => '22']);

       DB::table('Districs')->insert(['codigo' => '220801', 'distric' => 'Rioja', 'province_id' => '2208', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220802', 'distric' => 'Awajun', 'province_id' => '2208', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220803', 'distric' => 'Elias Soplin Vargas	', 'province_id' => '2208', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220804', 'distric' => 'Nueva Cajamarca', 'province_id' => '2208', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220805', 'distric' => 'Pardo Miguel', 'province_id' => '2208', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220806', 'distric' => 'Posic', 'province_id' => '2208', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220807', 'distric' => 'San Fernando', 'province_id' => '2208', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220808', 'distric' => 'Yorongos', 'province_id' => '2208', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220809', 'distric' => 'Yuracyacu', 'province_id' => '2208', 'departament_id' => '22']);

       DB::table('Districs')->insert(['codigo' => '220901', 'distric' => 'Tarapoto', 'province_id' => '2209', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220902', 'distric' => 'Alberto Leveau', 'province_id' => '2209', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220903', 'distric' => 'Cacatachi', 'province_id' => '2209', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220904', 'distric' => 'Chazuta', 'province_id' => '2209', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220905', 'distric' => 'Chipurana', 'province_id' => '2209', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220906', 'distric' => 'El Porvenir', 'province_id' => '2209', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220907', 'distric' => 'Huimbayoc', 'province_id' => '2209', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220908', 'distric' => 'Juan Guerra', 'province_id' => '2209', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220909', 'distric' => 'La Banda de Shilcayo', 'province_id' => '2209', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220910', 'distric' => 'Morales', 'province_id' => '2209', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220911', 'distric' => 'Papaplaya', 'province_id' => '2209', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220912', 'distric' => 'San Antonio', 'province_id' => '2209', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220913', 'distric' => 'Sauce', 'province_id' => '2209', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '220914', 'distric' => 'Shapaja', 'province_id' => '2209', 'departament_id' => '22']);
     
       DB::table('Districs')->insert(['codigo' => '221001', 'distric' => 'Tocache', 'province_id' => '2210', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '221002', 'distric' => 'Nuevo Progreso', 'province_id' => '2210', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '221003', 'distric' => 'Polvora', 'province_id' => '2210', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '221004', 'distric' => 'Shunte', 'province_id' => '2210', 'departament_id' => '22']);
       DB::table('Districs')->insert(['codigo' => '221005', 'distric' => 'Uchiza', 'province_id' => '2210', 'departament_id' => '22']);
      
       DB::table('Districs')->insert(['codigo' => '230101', 'distric' => 'Tacna', 'province_id' => '2301', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230102', 'distric' => 'Alto de la Alianza', 'province_id' => '2301', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230103', 'distric' => 'Calana', 'province_id' => '2301', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230104', 'distric' => 'Ciudad Nueva', 'province_id' => '2301', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230105', 'distric' => 'Inclan', 'province_id' => '2301', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230106', 'distric' => 'Pachia', 'province_id' => '2301', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230107', 'distric' => 'Palca', 'province_id' => '2301', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230108', 'distric' => 'Pocollay', 'province_id' => '2301', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230109', 'distric' => 'Sama', 'province_id' => '2301', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230110', 'distric' => 'Coronel Gregorio Albarracín Lanchipa', 'province_id' => '2301', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230111', 'distric' => 'La Yarada los Palos', 'province_id' => '2301', 'departament_id' => '23']);

       DB::table('Districs')->insert(['codigo' => '230201', 'distric' => 'Candarave', 'province_id' => '2302', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230202', 'distric' => 'Cairani', 'province_id' => '2302', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230203', 'distric' => 'Camilaca', 'province_id' => '2302', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230204', 'distric' => 'Curibaya', 'province_id' => '2302', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230205', 'distric' => 'Huanuara', 'province_id' => '2302', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230206', 'distric' => 'Quilahuani', 'province_id' => '2302', 'departament_id' => '23']);

       DB::table('Districs')->insert(['codigo' => '230301', 'distric' => 'Locumba', 'province_id' => '2303', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230302', 'distric' => 'Ilabaya', 'province_id' => '2303', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230303', 'distric' => 'Ite', 'province_id' => '2303', 'departament_id' => '23']);

       DB::table('Districs')->insert(['codigo' => '230401', 'distric' => 'Tarata', 'province_id' => '2304', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230402', 'distric' => 'Héroes Albarracín', 'province_id' => '2304', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230403', 'distric' => 'Estique', 'province_id' => '2304', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230404', 'distric' => 'Estique-Pampa', 'province_id' => '2304', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230405', 'distric' => 'Sitajara', 'province_id' => '2304', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230406', 'distric' => 'Susapaya', 'province_id' => '2304', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230407', 'distric' => 'Tarucachi', 'province_id' => '2304', 'departament_id' => '23']);
       DB::table('Districs')->insert(['codigo' => '230408', 'distric' => 'Ticaco', 'province_id' => '2304', 'departament_id' => '23']);


       DB::table('Districs')->insert(['codigo' => '240101', 'distric' => 'Tumbes', 'province_id' => '2401', 'departament_id' => '24']);
       DB::table('Districs')->insert(['codigo' => '240102', 'distric' => 'Corrales', 'province_id' => '2401', 'departament_id' => '24']);
       DB::table('Districs')->insert(['codigo' => '240103', 'distric' => 'La Cruz', 'province_id' => '2401', 'departament_id' => '24']);
       DB::table('Districs')->insert(['codigo' => '240104', 'distric' => 'Pampas de Hospital', 'province_id' => '2401', 'departament_id' => '24']);
       DB::table('Districs')->insert(['codigo' => '240105', 'distric' => 'San Jacinto', 'province_id' => '2401', 'departament_id' => '24']);
       DB::table('Districs')->insert(['codigo' => '240106', 'distric' => 'San Juan de la Virgen', 'province_id' => '2401', 'departament_id' => '24']);

       DB::table('Districs')->insert(['codigo' => '240201', 'distric' => 'Zorritos', 'province_id' => '2402', 'departament_id' => '24']);
       DB::table('Districs')->insert(['codigo' => '240202', 'distric' => 'Casitas', 'province_id' => '2402', 'departament_id' => '24']);
       DB::table('Districs')->insert(['codigo' => '240203', 'distric' => 'Canoas de Punta Sal', 'province_id' => '2402', 'departament_id' => '24']);

       DB::table('Districs')->insert(['codigo' => '240301', 'distric' => 'Zarumilla', 'province_id' => '2403', 'departament_id' => '24']);
       DB::table('Districs')->insert(['codigo' => '240302', 'distric' => 'Aguas Verdes', 'province_id' => '2403', 'departament_id' => '24']);
       DB::table('Districs')->insert(['codigo' => '240303', 'distric' => 'Matapalo', 'province_id' => '2403', 'departament_id' => '24']);
       DB::table('Districs')->insert(['codigo' => '240304', 'distric' => 'Papayal', 'province_id' => '2403', 'departament_id' => '24']);

       DB::table('Districs')->insert(['codigo' => '250101', 'distric' => 'Calleria', 'province_id' => '2501', 'departament_id' => '25']);
       DB::table('Districs')->insert(['codigo' => '250102', 'distric' => 'Campoverde', 'province_id' => '2501', 'departament_id' => '25']);
       DB::table('Districs')->insert(['codigo' => '250103', 'distric' => 'Iparia', 'province_id' => '2501', 'departament_id' => '25']);
       DB::table('Districs')->insert(['codigo' => '250104', 'distric' => 'Masisea', 'province_id' => '2501', 'departament_id' => '25']);
       DB::table('Districs')->insert(['codigo' => '250105', 'distric' => 'Yarinacocha', 'province_id' => '2501', 'departament_id' => '25']);
       DB::table('Districs')->insert(['codigo' => '250106', 'distric' => 'Nueva Requena', 'province_id' => '2501', 'departament_id' => '25']);
       DB::table('Districs')->insert(['codigo' => '250107', 'distric' => 'Manantay', 'province_id' => '2501', 'departament_id' => '25']);

       DB::table('Districs')->insert(['codigo' => '250201', 'distric' => 'Raymondi', 'province_id' => '2502', 'departament_id' => '25']);
       DB::table('Districs')->insert(['codigo' => '250202', 'distric' => 'Sepahua', 'province_id' => '2502', 'departament_id' => '25']);
       DB::table('Districs')->insert(['codigo' => '250203', 'distric' => 'Tahuania', 'province_id' => '2502', 'departament_id' => '25']);
       DB::table('Districs')->insert(['codigo' => '250204', 'distric' => 'Yurua', 'province_id' => '2502', 'departament_id' => '25']);

       DB::table('Districs')->insert(['codigo' => '250301', 'distric' => 'Padre Abad', 'province_id' => '2503', 'departament_id' => '25']);
       DB::table('Districs')->insert(['codigo' => '250302', 'distric' => 'Irazola', 'province_id' => '2503', 'departament_id' => '25']);
       DB::table('Districs')->insert(['codigo' => '250303', 'distric' => 'Curimana', 'province_id' => '2503', 'departament_id' => '25']);
       DB::table('Districs')->insert(['codigo' => '250304', 'distric' => 'Neshuya', 'province_id' => '2503', 'departament_id' => '25']);
       DB::table('Districs')->insert(['codigo' => '250305', 'distric' => 'Alexander Von Humboldt', 'province_id' => '2503', 'departament_id' => '25']);

       DB::table('Districs')->insert(['codigo' => '250401', 'distric' => 'Purus', 'province_id' => '2504', 'departament_id' => '25']);
    }
}
