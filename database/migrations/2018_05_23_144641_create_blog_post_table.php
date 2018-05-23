<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('blog_post', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_user')->default(1);
          $table->string('title');
          $table->string('image_default');
          $table->enum('category', ['academia', 'colegio']);
          $table->text('content');
          $table->text('tags');
          $table->integer('view')->default('0');
          $table->timestamps();
      });
      
      Schema::table('blog_post', function(Blueprint $table)
      {
        $table->foreign('id_user')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_post');
    }
}
