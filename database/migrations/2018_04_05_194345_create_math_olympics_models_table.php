<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMathOlympicsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('math_olympics_models', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['colegio', 'academia'])->default('academia');
            $table->string('sede');
            $table->string('title');
            $table->string('grade');
            $table->string('base_url');
            $table->string('inscription_url');
            $table->string('inscription_group_url');
            $table->string('results_url');
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
        Schema::dropIfExists('math_olympics_models');
    }
}
