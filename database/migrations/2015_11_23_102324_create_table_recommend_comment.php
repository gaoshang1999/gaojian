<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRecommendComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommend_comment', function (Blueprint $table) {               
            $table->increments('id') ;
              
            $table->integer('recommend_id') ; 
            
            $table->string('comment_type')  ;
              
            $table->string('comment') ; 
              
            $table->integer('remind_type') ->nullable();
              
            $table->datetime('remind_time')  ->nullable();
              
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
        //
    }
}
