<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('banners', function (Blueprint $table) {
             $table->increments('id');
             $table->enum('type', ['academia', 'colegio']);
             $table->string('title')->nullable();
             $table->string('link')->nullable();
             $table->integer('file_id')->unsigned();
             $table->integer('order');
             $table->integer('state')->default('0');
             $table->timestamp('expire')->nullable();
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
        Schema::dropIfExists('banners');
    }
}
