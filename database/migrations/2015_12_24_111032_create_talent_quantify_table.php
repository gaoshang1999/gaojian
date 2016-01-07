<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentQuantifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('talent_quantify', function (Blueprint $table) { 
           $table->integer('talent_id')  ->default(0);
           
           $table->integer('occupation_level')  ->default(0);
              
            $table->integer('occupation_parameter')  ->default(0);
              
            $table->integer('match_strategy')  ->default(0);
              
            $table->integer('quantify_value')  ->default(0);
           
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
