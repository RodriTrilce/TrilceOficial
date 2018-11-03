<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesVacationsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('colegio_venue_vacations', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idvenue')->unsigned();
          $table->string('grades');
          $table->text('address');
          $table->string('phone');
          $table->string('logitude');
          $table->string('latitude');
          $table->timestamps();
        });


        Schema::table('colegio_venue_address', function(Blueprint $table)
        {
          $table->foreign('idvenue')->references('id')->on('colegio_venue');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('colegio_venue_vacations', function (Blueprint $table) {
            //
        });
    }
}
