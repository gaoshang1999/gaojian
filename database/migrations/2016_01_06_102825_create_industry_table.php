<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industry', function (Blueprint $table) { 
           $table->increments('id');
           
           $table->string('name') ;
              
            $table->integer('number') ;
              
            $table->integer('level');
              
            $table->integer('parent_id')  ->default(0);
            
            $table->string('comment')->nullable() ;
           
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
