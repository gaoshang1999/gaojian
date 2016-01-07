<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add36ColumnsToDemandCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     if (!Schema::hasColumn('demand', 'quantify_duty')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_duty')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_position')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_position')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_occupation_1')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_occupation_1')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_occupation_2')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_occupation_2')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_occupation_3')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_occupation_3')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_occupation_4')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_occupation_4')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_quantify_occupation_1')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_quantify_occupation_1')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_quantify_occupation_2')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_quantify_occupation_2')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_quantify_occupation_3')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_quantify_occupation_3')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_quantify_occupation_4')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_quantify_occupation_4')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_occupation_value_1')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_occupation_value_1')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_occupation_value_2')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_occupation_value_2')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_occupation_value_3')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_occupation_value_3')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_occupation_value_4')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_occupation_value_4')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_quantify_occupation_value_1')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_quantify_occupation_value_1')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_quantify_occupation_value_2')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_quantify_occupation_value_2')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_quantify_occupation_value_3')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_quantify_occupation_value_3')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_quantify_occupation_value_4')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_quantify_occupation_value_4')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_occupation_depth_1')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_occupation_depth_1')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_occupation_depth_2')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_occupation_depth_2')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_occupation_depth_3')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_occupation_depth_3')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_occupation_depth_4')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_occupation_depth_4')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_quantify_occupation_depth_1')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_quantify_occupation_depth_1')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_quantify_occupation_depth_2')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_quantify_occupation_depth_2')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_quantify_occupation_depth_3')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_quantify_occupation_depth_3')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_quantify_occupation_depth_4')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_quantify_occupation_depth_4')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'basic_match_strategy')) {
            Schema::table('demand', function ($table) {
                            $table->integer('basic_match_strategy')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_match_strategy_1')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_match_strategy_1')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_match_strategy_2')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_match_strategy_2')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_match_strategy_3')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_match_strategy_3')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_match_strategy_4')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_match_strategy_4')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'additional_match_strategy_5')) {
            Schema::table('demand', function ($table) {
                            $table->integer('additional_match_strategy_5')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_recommend_period')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_recommend_period')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_recommend_batch')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_recommend_batch')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_recommend_stop_parameter')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_recommend_stop_parameter')  ->default(0); 
 
            });
        }
          
        if (!Schema::hasColumn('demand', 'quantify_recommend_additional_parameter')) {
            Schema::table('demand', function ($table) {
                            $table->integer('quantify_recommend_additional_parameter')  ->default(0); 
 
            });
        }
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
