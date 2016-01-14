<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->increments('id'); 
            $table->timestamp('start_time');                      
            $table->timestamp('end_time'); 
            $table->integer('user_id');
            $table->json('ips');
            $table->string('method');     
            $table->boolean('ajax');
            $table->string('url');              
            $table->string('full_url');
            $table->json('input');
            $table->json('cookie');
            $table->json('header');
            $table->integer('response_code');
            $table->json('response_header');
            $table->text('response_content');
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
