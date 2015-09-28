<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constant', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('en');                     // 英文名称
            $table->string('cn') ->nullable();                     // 中文名称            
            $table->string('k');                     // key
            $table->string('v') ;                     // value
            $table->string('desc') ->nullable();                     // 描述

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
