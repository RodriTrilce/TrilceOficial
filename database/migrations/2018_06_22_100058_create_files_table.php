<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('files', function (Blueprint $table) {
          $table->increments('id');
          $table->string('file_id')->unique();
          $table->string('type');
          $table->string('mime');
          $table->string('extension');
          $table->string('location');
          $table->string('name');
          $table->text('description')->nullable();
          $table->string('tag')->nullable();
          $table->enum('trash', [0, 1])->default('0');
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
        Schema::dropIfExists('files');
    }
}
