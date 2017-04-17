<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->length(6);
            $table->integer('user_id')->length(6);
            $table->text('comment_body');
            $table->boolean('approved');
            $table->timestamps();
            
         });
        
        Schema::table('comments', function ($table)
    {
        $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
        Schema::dropForeign(['post_id']);
    }
}
