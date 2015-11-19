<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecommendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommend', function (Blueprint $table) { 
  $table->increments('id') ->nullable(); 
  $table->integer('user_id') ->nullable(); 
  $table->integer('talent_id') ->nullable(); 
  $table->integer('demand_id') ->nullable(); 
  $table->date('recommend_time') ->nullable(); 
  $table->integer('recommend_type') ->nullable(); 
  $table->string('recommend_label_1', 30) ->nullable(); 
  $table->string('recommend_label_2', 30) ->nullable(); 
  $table->float('recommend_label_3') ->nullable(); 
  $table->float('recommend_label_4') ->nullable(); 
  $table->float('recommend_parameter_1') ->nullable(); 
  $table->float('recommend_parameter_2') ->nullable(); 
  $table->float('recommend_parameter_3') ->nullable(); 
  $table->float('recommend_parameter_4') ->nullable(); 
  $table->float('match_parameter_1') ->nullable(); 
  $table->float('match_parameter_2') ->nullable(); 
  $table->float('match_parameter_3') ->nullable(); 
  $table->float('match_parameter_4') ->nullable(); 
  $table->float('match_parameter_5') ->nullable(); 
  $table->float('match_parameter_6') ->nullable(); 
  $table->float('match_parameter_7') ->nullable(); 
  $table->float('match_parameter_8') ->nullable(); 
  $table->string('recommend_flow_status_label_1', 30) ->nullable(); 
  $table->string('recommend_flow_status_label_2', 30) ->nullable(); 
  $table->string('recommend_flow_status_label_3', 30) ->nullable(); 
  $table->float('recommend_flow_parameter_1') ->default(1); 
  $table->float('recommend_flow_parameter_2') ->nullable(); 
  $table->float('recommend_flow_parameter_3') ->nullable(); 
  $table->text('recommend_feedback_label_1') ->nullable(); 
  $table->string('recommend_feedback_label_2', 30) ->nullable(); 
  $table->string('recommend_feedback_label_3', 30) ->nullable(); 
  $table->string('recommend_feedback_label_4') ->nullable(); 
  $table->float('recommend_feedback_parameter_1') ->nullable(); 
  $table->float('recommend_feedback_parameter_2') ->nullable(); 
  $table->float('recommend_feedback_parameter_3') ->nullable(); 
  $table->float('recommend_feedback_parameter_4') ->nullable(); 
  $table->text('recommender_evaluate_label_1') ->nullable(); 
  $table->string('recommender_evaluate_label_2', 30) ->nullable(); 
  $table->string('recommender_evaluate_label_3') ->nullable(); 
  $table->string('recommender_evaluate_label_4') ->nullable(); 
  $table->float('recommender_evaluate_parameter_1') ->nullable(); 
  $table->float('recommender_evaluate_parameter_2') ->nullable(); 
  $table->float('recommender_evaluate_parameter_3') ->nullable(); 
  $table->float('recommender_evaluate_parameter_4') ->nullable(); 
  $table->text('demand_side_evaluate_label_1') ->nullable(); 
  $table->string('demand_side_evaluate_label_2', 30) ->nullable(); 
  $table->string('demand_side_evaluate_label_3') ->nullable(); 
  $table->string('demand_side_evaluate_label_4') ->nullable(); 
  $table->float('demand_side_evaluate_parameter_1') ->nullable(); 
  $table->float('demand_side_evaluate_parameter_2') ->nullable(); 
  $table->float('demand_side_evaluate_parameter_3') ->nullable(); 
  $table->float('demand_side_evaluate_parameter_4') ->nullable(); 
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
