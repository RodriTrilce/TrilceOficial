<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademiaEnrollmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academia_enrollment', function (Blueprint $table) {
          $table->increments('id')->unique();

          $table->string('student_dni');
          $table->string('student_names');
          $table->string('student_district');
          $table->string('student_address');
          $table->string('student_phone_home');
          $table->string('student_phone_cell');
          $table->string('student_email');
          $table->integer('student_year_finish_school'); // <--  NO ESTA
          $table->string('student_school');
          $table->string('student_postulate_university');
          $table->string('student_postulate_profession');
          $table->string('student_last_academy')->nullable();
          
          $table->string('interest_university');
          $table->string('interest_venue');
          $table->string('interest_cycle');
          $table->string('interest_turn');
          
          $table->enum('attorney_type', ['mother', 'father', 'attorney']);
          $table->string('attorney_names');
          $table->string('attorney_dni');
          $table->string('attorney_phone_home');
          $table->string('attorney_phone_cell');
          $table->string('attorney_email');
          $table->string('attorney_occupation');
          $table->string('attorney_work_location');
          $table->string('attorney_work_phone');
          $table->string('attorney_phone_emergency');
          
          $table->enum('visible', [0, 1])->default('1');
          $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academia_enrollment');
    }
}
