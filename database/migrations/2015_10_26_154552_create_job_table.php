<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {               
            $table->increments('id')  ->nullable();  
              
            $table->string('job_id', 128)  ->nullable(); 
              
            $table->string('task_id', 128)  ->nullable(); 
              
            $table->string('status')  ->nullable();
              
            $table->integer('count')  ->nullable();
              
            $table->integer('total')  ->nullable();
              
            $table->datetime('start_time')  ->nullable();
              
            $table->datetime('over_time')  ->nullable();
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
