<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uri');
            $table->string('title');
            $table->string('subtitle');
            $table->string('cover')->nullable();
            $table->text('content');
            $table->string('views')->default(0);
            $table->integer('category_id')->unsigned();
            $table->timestamps();            
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Foreign

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
