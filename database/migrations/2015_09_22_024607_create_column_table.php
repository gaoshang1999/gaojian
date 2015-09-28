<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('column', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('cn');                     // 中文名称
            $table->string('cn_segment') ->nullable();                     // 中文分词
            $table->string('en') ->nullable();                     // 英文名称
            $table->string('desc') ->nullable();                     // 描述
            $table->string('type');                     // 类型
            $table->string('length') ->nullable();                     // 长度
            $table->string('value_range') ->nullable();                          // 取值范围
            $table->string('default') ->nullable();                     // 默认取值
            $table->string('page_type') ->nullable();                     // 页面类型
            $table->integer('table_id');     
            $table->integer('rank')->default(1);   // 顺序
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
