<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flow', function (Blueprint $table) { 
  $table->increments('id') ;
  $table->date('recommend_time') ->nullable(); 
  $table->integer('recommend_type') ->nullable(); 
  $table->text('recommend_label_1', 30) ->nullable(); 
  $table->string('recommend_label_2', 30) ->nullable(); 
  $table->integer('recommend_label_3') ->nullable(); 
  $table->integer('recommend_label_4') ->nullable(); 
  $table->integer('recommend_parameter_1') ->default(0);
  $table->integer('recommend_parameter_2') ->nullable(); 
  $table->integer('recommend_parameter_3') ->nullable(); 
  $table->integer('recommend_parameter_4') ->nullable(); 
  $table->integer('match_parameter_1') ->nullable(); 
  $table->integer('match_parameter_2') ->nullable(); 
  $table->integer('match_parameter_3') ->nullable(); 
  $table->integer('match_parameter_4') ->nullable(); 
  $table->integer('match_parameter_5') ->nullable(); 
  $table->integer('match_parameter_6') ->nullable(); 
  $table->integer('match_parameter_7') ->nullable(); 
  $table->integer('match_parameter_8') ->nullable(); 
  $table->text('recommend_flow_status_label_1', 30) ->nullable(); 
  $table->text('recommend_flow_status_label_2', 30) ->nullable(); 
  $table->string('recommend_flow_status_label_3', 30) ->nullable(); 
  $table->integer('recommend_flow_parameter_1') ->default(1); 
  $table->integer('recommend_flow_parameter_2') ->nullable(); 
  $table->integer('recommend_flow_parameter_3') ->nullable(); 
  $table->text('recommend_feedback_label_1') ->nullable(); 
  $table->text('recommend_feedback_label_2', 30) ->nullable(); 
  $table->string('recommend_feedback_label_3', 30) ->nullable(); 
  $table->string('recommend_feedback_label_4') ->nullable(); 
  $table->integer('recommend_feedback_parameter_1') ->nullable(); 
  $table->integer('recommend_feedback_parameter_2') ->nullable(); 
  $table->integer('recommend_feedback_parameter_3') ->nullable(); 
  $table->integer('recommend_feedback_parameter_4') ->nullable(); 
  $table->text('recommender_evaluate_label_1') ->nullable(); 
  $table->text('recommender_evaluate_label_2', 30) ->nullable(); 
  $table->string('recommender_evaluate_label_3') ->nullable(); 
  $table->string('recommender_evaluate_label_4') ->nullable(); 
  $table->integer('recommender_evaluate_parameter_1') ->nullable(); 
  $table->integer('recommender_evaluate_parameter_2') ->nullable(); 
  $table->integer('recommender_evaluate_parameter_3') ->nullable(); 
  $table->integer('recommender_evaluate_parameter_4') ->nullable(); 
  $table->text('demand_side_evaluate_label_1') ->nullable(); 
  $table->text('demand_side_evaluate_label_2', 30) ->nullable(); 
  $table->string('demand_side_evaluate_label_3') ->nullable(); 
  $table->string('demand_side_evaluate_label_4') ->nullable(); 
  $table->integer('demand_side_evaluate_parameter_1') ->nullable(); 
  $table->integer('demand_side_evaluate_parameter_2') ->nullable(); 
  $table->integer('demand_side_evaluate_parameter_3') ->nullable(); 
  $table->integer('demand_side_evaluate_parameter_4') ->nullable(); 
  $table->date('remind_time')  ->nullable()  ;
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
