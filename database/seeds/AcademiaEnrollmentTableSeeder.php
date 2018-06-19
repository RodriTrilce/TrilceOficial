<?php

use Illuminate\Database\Seeder;

class AcademiaEnrollmentTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $c = array(
      array('student_dni' => '74065854','student_names' => 'valeria valeria','student_district' => 'Ancon','student_address' => 'av calle sin nombre','student_phone_home' => '3248914','student_phone_cell' => '994439231','student_email' => 'vasaleria@ddd.com','student_year_finish_school' => '2014','student_school' => 'San Cristobal','student_postulate_university' => 'Universidad de Lima (ULIMA)','student_postulate_profession' => 'Música','student_last_academy' => 'aduni','interest_university' => 'uni','interest_venue' => 'santa beatriz','interest_cycle' => 'Semestral','interest_turn' => 'Mañana','attorney_type' => 'father','attorney_names' => 'Carlos santoyo','attorney_dni' => '06578464','attorney_phone_home' => '32489921','attorney_phone_cell' => '995464001','attorney_email' => 'santoyo@sdss.cm','attorney_occupation' => 'Profesor','attorney_work_location' => 'Trilce','attorney_work_phone' => '41102401','attorney_phone_emergency' => '0314644555','visible' => '1','created_at' => '2018-06-15 12:51:56','updated_at' => '2018-06-15 12:51:56'),
      array('student_dni' => '44965194','student_names' => 'Mori Garrido Ronald','student_district' => 'Comas','student_address' => 'Av. Arequipa 1384 - Dpto 1604 -  Lince','student_phone_home' => '261915','student_phone_cell' => '960262577','student_email' => 'ronaldmg80@gmail.com','student_year_finish_school' => '2014','student_school' => 'Pedro Ruiz Gallo','student_postulate_university' => 'Universidad de San Martín de Porres (USMP)','student_postulate_profession' => 'Software y Sistemas','student_last_academy' => NULL,'interest_university' => 'uni','interest_venue' => 'santa beatriz','interest_cycle' => 'Semestral','interest_turn' => 'Mañana','attorney_type' => 'father','attorney_names' => 'Gaston Mori Mori','attorney_dni' => '44965194','attorney_phone_home' => '2616915','attorney_phone_cell' => '960262577','attorney_email' => 'ronaldmg80@gmail.com','attorney_occupation' => 'Militar','attorney_work_location' => 'Militar','attorney_work_phone' => '65464646','attorney_phone_emergency' => '92626262626','visible' => '1','created_at' => '2018-06-15 14:08:07','updated_at' => '2018-06-15 14:08:07'),
      array('student_dni' => '10180382','student_names' => 'ffdsfdf  sdfdsfdsfd dsfsdfdsf','student_district' => 'Ancon','student_address' => 'dfsdfsdfd 222 fdsfsdfsdfs','student_phone_home' => '3652097','student_phone_cell' => '999023265','student_email' => 'asdad@sjsj.com','student_year_finish_school' => '1234','student_school' => 'acasdasdasd','student_postulate_university' => 'Universidad Nacional del Callao (UNAC)','student_postulate_profession' => 'Administración de Negocios Internacionales','student_last_academy' => 'asdasdasdasdsad','interest_university' => 'uni','interest_venue' => 'santa beatriz','interest_cycle' => 'Semestral','interest_turn' => 'Tarde','attorney_type' => 'mother','attorney_names' => 'ddddddddddddddddd','attorney_dni' => '10180382','attorney_phone_home' => '3652097','attorney_phone_cell' => '999023265','attorney_email' => 'dsdasd@dsadads.com','attorney_occupation' => 'dsddddddddd','attorney_work_location' => 'SDASDADASD','attorney_work_phone' => '112343','attorney_phone_emergency' => '222222','visible' => '1','created_at' => '2018-06-15 16:16:22','updated_at' => '2018-06-15 16:16:22'),
      array('student_dni' => '45413267','student_names' => 'valverde sanchez gabriela vanessa','student_district' => 'Santiago De Surco','student_address' => 'urb los proceres pasaje micaela bastidas 111','student_phone_home' => '2745882','student_phone_cell' => '980848716','student_email' => 'gabivane8819@hotmail.com','student_year_finish_school' => '2000','student_school' => 'los proceres','student_postulate_university' => 'Universidad Nacional Mayor de San Marcos (UNMSM)','student_postulate_profession' => 'Administración y Marketing','student_last_academy' => 'Pamer','interest_university' => 'sm','interest_venue' => 'marsano','interest_cycle' => 'Anual','interest_turn' => 'Mañana','attorney_type' => 'mother','attorney_names' => 'Maria Sanchez Pacheco','attorney_dni' => '45625897','attorney_phone_home' => '2745882','attorney_phone_cell' => '99652387','attorney_email' => 'mariasanchez@gmail.com','attorney_occupation' => 'ama de casa','attorney_work_location' => 'ama de casa','attorney_work_phone' => '2715895','attorney_phone_emergency' => '99652387','visible' => '1','created_at' => '2018-06-18 16:27:45','updated_at' => '2018-06-18 16:27:45'),
      array('student_dni' => '75896409','student_names' => 'zamudio zuloaga luz','student_district' => 'Lince','student_address' => 'Jr. Francisco de Zela 1937','student_phone_home' => '4724274','student_phone_cell' => '980541218','student_email' => 'stephanny_1996@hotmail.com','student_year_finish_school' => '2013','student_school' => 'Divina Trinidad','student_postulate_university' => 'Universidad Científica del Sur (UCSUR)','student_postulate_profession' => 'ingeniera economica','student_last_academy' => 'Trilce','interest_university' => 'sm','interest_venue' => 'santa beatriz','interest_cycle' => 'Anual','interest_turn' => 'Mañana','attorney_type' => 'mother','attorney_names' => 'Luz Zuloaga Basantez','attorney_dni' => '07593626','attorney_phone_home' => '47242747','attorney_phone_cell' => '980541218','attorney_email' => 'marina_7077@hotmail.com','attorney_occupation' => 'empresaria','attorney_work_location' => 'lince','attorney_work_phone' => '980541218','attorney_phone_emergency' => '4724274','visible' => '1','created_at' => '2018-06-18 16:28:31','updated_at' => '2018-06-18 16:28:31'),
      array('student_dni' => '48082425','student_names' => 'Villavicencio Contreras Lisette Giovanna','student_district' => 'Rimac','student_address' => 'Av. Samuel Alcazar 366','student_phone_home' => '5779650','student_phone_cell' => '964798413','student_email' => 'lis.vc26@gmail.com','student_year_finish_school' => '2010','student_school' => 'nuestra señora de montserrat','student_postulate_university' => 'Universidad de San Martín de Porres (USMP)','student_postulate_profession' => 'Psicología Humana','student_last_academy' => 'ninguna','interest_university' => 'pucp','interest_venue' => 'torrico','interest_cycle' => 'Semestral','interest_turn' => 'Mañana','attorney_type' => 'mother','attorney_names' => 'Contreras Rivas Rosario Giovanna','attorney_dni' => '10286920','attorney_phone_home' => '5779650','attorney_phone_cell' => '997730172','attorney_email' => 'gcrasesores@gmail.com','attorney_occupation' => 'conciliadora','attorney_work_location' => 'oficina','attorney_work_phone' => '5779650','attorney_phone_emergency' => '964798413','visible' => '1','created_at' => '2018-06-18 16:31:56','updated_at' => '2018-06-18 16:31:56'),
      array('student_dni' => '70376047','student_names' => 'Meza Pérez Araceli Valeria','student_district' => 'San Martin De Porres','student_address' => 'mz.B Lt. 1 Asoc. de viv. Los Olivos','student_phone_home' => '7451637','student_phone_cell' => '998542040','student_email' => 'val_per07@hotmail.com','student_year_finish_school' => '2014','student_school' => 'Abraham Valdelomar','student_postulate_university' => 'Universidad Privada del Norte (UPNORTE)','student_postulate_profession' => 'Turismo y Hoteleria','student_last_academy' => NULL,'interest_university' => 'sm','interest_venue' => 'santa beatriz','interest_cycle' => 'Anual','interest_turn' => 'Tarde','attorney_type' => 'mother','attorney_names' => 'Maria Adelaida Pérez Quijano','attorney_dni' => '41328504','attorney_phone_home' => '7451637','attorney_phone_cell' => '948655750','attorney_email' => 'adeli07_per@hotmail.com','attorney_occupation' => 'operaria','attorney_work_location' => 'silsa','attorney_work_phone' => '41102401','attorney_phone_emergency' => '0314644555','visible' => '1','created_at' => '2018-06-18 16:46:26','updated_at' => '2018-06-18 16:46:26'),
      array('student_dni' => '75065855','student_names' => 'salcedp fran','student_district' => 'Independencia','student_address' => 'manzanilla 2 mz l lt 44','student_phone_home' => '3248914','student_phone_cell' => '994439231','student_email' => 'ff@gg.com','student_year_finish_school' => '2010','student_school' => 'cesar vallejo','student_postulate_university' => 'Universidad Peruana de Ciencias Aplicadas (UPC)','student_postulate_profession' => 'Ingeniería de software','student_last_academy' => 'aduni','interest_university' => 'uni','interest_venue' => 'torrico','interest_cycle' => 'Anual','interest_turn' => 'Tarde','attorney_type' => 'mother','attorney_names' => 'marisol castro','attorney_dni' => '55003233','attorney_phone_home' => '3248914','attorney_phone_cell' => '9943392221','attorney_email' => 'marisol@mama.com','attorney_occupation' => 'profesora','attorney_work_location' => 'casa','attorney_work_phone' => '3248914','attorney_phone_emergency' => '3248914','visible' => '1','created_at' => '2018-06-18 23:27:32','updated_at' => '2018-06-18 23:27:32')
    );

    for ($i=0; $i < count($c); $i++) {
      DB::table('academia_enrollment')->insert([
        'student_dni'           => $c[$i]['student_dni'],
        'student_names'          => $c[$i]['student_names'],
        'student_district'          => $c[$i]['student_district'],
        'student_address'          => $c[$i]['student_address'],
        'student_phone_home'          => $c[$i]['student_phone_home'],
        'student_phone_cell'          => $c[$i]['student_phone_cell'],
        'student_email'          => $c[$i]['student_email'],
        'student_year_finish_school'          => $c[$i]['student_year_finish_school'],
        'student_school'          => $c[$i]['student_school'],
        'student_postulate_university'          => $c[$i]['student_postulate_university'],
        'student_postulate_profession'          => $c[$i]['student_postulate_profession'],
        'student_last_academy'          => $c[$i]['student_last_academy'],
        'interest_university'          => $c[$i]['interest_university'],
        'interest_venue'          => $c[$i]['interest_venue'],
        'interest_cycle'          => $c[$i]['interest_cycle'],
        'interest_turn'          => $c[$i]['interest_turn'],
        'attorney_type'          => $c[$i]['attorney_type'],
        'attorney_names'          => $c[$i]['attorney_names'],
        'attorney_dni'          => $c[$i]['attorney_dni'],
        'attorney_phone_home'          => $c[$i]['attorney_phone_home'],
        'attorney_phone_cell'          => $c[$i]['attorney_phone_cell'],
        'attorney_email'          => $c[$i]['attorney_email'],
        'attorney_occupation'          => $c[$i]['attorney_occupation'],
        'attorney_work_location'      => $c[$i]['attorney_work_location'],
        'attorney_work_phone'          => $c[$i]['attorney_work_phone'],
        'attorney_phone_emergency'          => $c[$i]['attorney_phone_emergency'],
        'visible'          => $c[$i]['visible']
      ]);
    }
  }
}
