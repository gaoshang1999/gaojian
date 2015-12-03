<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recom', function (Blueprint $table) { 
              $table->increments('id') ; 
              $table->integer('user_id') ->nullable(); 
              $table->integer('talent_id') ->nullable(); 
              $table->integer('demand_id') ->nullable(); 
              $table->integer('host_id') ->nullable();
              $table->integer('type') ->nullable();
              $table->integer('flow_id') ->nullable();
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
