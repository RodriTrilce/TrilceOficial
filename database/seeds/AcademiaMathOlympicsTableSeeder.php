<?php

use Illuminate\Database\Seeder;

class AcademiaMathOlympicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $x = array(
        array('id' => '1','type' => 'academia','sede' => 'Comas','title' => 'I OLIMPIADA DE MATEMÁTICA - IE "ESTHER FESTINI DE RAMOS OCAMPO"','grade' => '1.° sec. a 5.° sec.
      ','base_url' => 'http://www.trilce.edu.pe/olimpiadas/bases/comas/bases-comas.pdf','inscription_url' => 'http://www.trilce.edu.pe/olimpiadas/bases/comas/bases-comas.pdf','inscription_group_url' => 'http://app.trilce.edu.pe/olimpiadas-comas/','results_url' => 'http://app.trilce.edu.pe/olimpiadas-comasgrupo/','created_at' => '2018-06-01 19:00:00','updated_at' => NULL),
        array('id' => '2','type' => 'academia','sede' => 'SAN JUAN DE LURIGANCHO
      ','title' => 'III OLIMPIADA DE MATEMÁTICA - IEP INTERNACIONAL ELIM
      ','grade' => '1.° prim. a 5.° sec.
      ','base_url' => 'http://www.trilce.edu.pe/olimpiadas/bases/sjl/bases-sjl-2018.pdf','inscription_url' => 'http://app.trilce.edu.pe/olimpiadas-sjl/','inscription_group_url' => 'http://app.trilce.edu.pe/olimpiadas-sjlgrupo/','results_url' => '','created_at' => '2018-06-08 19:00:00','updated_at' => NULL),
        array('id' => '3','type' => 'academia','sede' => 'Chimbote','title' => 'V OLIMPIADA DE MATEMÁTICA 7 IEP "EL SEÑOR ES MI PASTOR"','grade' => '1.° prim. a 5.° sec.
      ','base_url' => 'http://www.trilce.edu.pe/olimpiadas/bases/chimbote/bases-chimbote-2018.pdf','inscription_url' => '','inscription_group_url' => '','results_url' => '','created_at' => '2018-06-22 19:00:00','updated_at' => NULL),
        array('id' => '4','type' => 'academia','sede' => 'Huánuco','title' => 'I OLIMPIADA DE MATEMÁTICA - IEP SAN PABLO','grade' => '1.° prim. a 5.° sec.
      ','base_url' => '','inscription_url' => '','inscription_group_url' => '','results_url' => '','created_at' => '2018-06-13 19:00:00','updated_at' => NULL),
        array('id' => '5','type' => 'academia','sede' => 'Barranco','title' => 'I OLIMPIADA DE MATEMÁTICA - IE ENRIQUE ARNÁEZ NAVEDA
      ','grade' => '1.° sec. a 5.° sec.
      ','base_url' => '','inscription_url' => '','inscription_group_url' => '','results_url' => '','created_at' => '2018-08-17 19:00:00','updated_at' => NULL),
        array('id' => '7','type' => 'academia','sede' => 'Cercado de Lima','title' => 'I OLIMPIADA DE MATEMÁTICA - IE N.° 105 PEDRO CORONADO ARRASCUE
      ','grade' => '1.° sec. a 5.° sec.
      ','base_url' => '','inscription_url' => '','inscription_group_url' => '','results_url' => '','created_at' => '2018-09-14 19:00:00','updated_at' => NULL),
        array('id' => '8','type' => 'academia','sede' => 'Huancayo','title' => 'VIII OLIMPIADA DE MATEMÁTICA - IEP TRILCE
      ','grade' => '1.° prim. a 5.° sec.
      ','base_url' => '','inscription_url' => '','inscription_group_url' => '','results_url' => '','created_at' => '2018-09-21 19:00:00','updated_at' => NULL),
        array('id' => '9','type' => 'academia','sede' => 'Comas','title' => 'II OLIMPIADA DE MATEMÁTICA - IE N.° 2038 INCA GARCILASO DE LA VEGA
      ','grade' => '5.° prim. a 5.° sec.
      ','base_url' => '','inscription_url' => '','inscription_group_url' => '','results_url' => '','created_at' => '2018-09-28 19:00:00','updated_at' => NULL),
        array('id' => '10','type' => 'academia','sede' => 'Ventanilla','title' => 'I OLIMPIADA DE MATEMÁTICA - IEP NUESTRA SEÑORA DE GUADALUPE DE PACHACÚTEC
      ','grade' => '3.° prim. a 5.° sec.
      ','base_url' => '','inscription_url' => '','inscription_group_url' => '','results_url' => '','created_at' => '2018-10-12 19:00:00','updated_at' => NULL),
        array('id' => '11','type' => 'academia','sede' => 'Chorrrillos','title' => 'XX OLIMPIADA DE MATEMÁTICA - IE N.° 7075 JUAN PABLO II
      ','grade' => '1.° prim. a 5.° sec.
      ','base_url' => '','inscription_url' => '','inscription_group_url' => '','results_url' => '','created_at' => '2018-10-19 19:00:00','updated_at' => NULL),
        array('id' => '12','type' => 'academia','sede' => 'VILLA EL SALVADOR
      ','title' => 'II OLIMPIADA DE MATEMÁTICA - IEP AMERICAN SYSTEMS
      ','grade' => '3.° prim. a 5.° sec.
      ','base_url' => '','inscription_url' => '','inscription_group_url' => '','results_url' => '','created_at' => '2018-10-26 19:00:00','updated_at' => NULL),
        array('id' => '13','type' => 'academia','sede' => 'Callao','title' => 'I OLIMPIADA DE MATEMÁTICA - IE N.° 5024 FRANCISCO MIRO QUESADA CANTUARIAS
      ','grade' => '1.° prim. a 6.° prim.
      ','base_url' => '','inscription_url' => '','inscription_group_url' => '','results_url' => '','created_at' => '2018-11-02 19:00:00','updated_at' => NULL)
      );

      for($i=0;$i<count($x);$i++){
        DB::table('academia_math_olympics')->insert([
          'type'                  => $x[$i]['type'],
          'sede'                  => $x[$i]['sede'],
          'title'                 => $x[$i]['title'],
          'grade'                 => $x[$i]['grade'],
          'base_url'              => $x[$i]['base_url'],
          'inscription_url'       => $x[$i]['inscription_url'],
          'inscription_group_url' => $x[$i]['inscription_group_url'],
          'results_url'           => $x[$i]['results_url'],
          'created_at'            => $x[$i]['created_at']
        ]);
      }

    }
}






