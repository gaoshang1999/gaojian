<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRecommendTableChangeType extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recommend', function ($table) {
                    
            
            $table->text('recommend_label_1')
                ->nullable()
                ->change();
            
            $table->text('recommend_flow_status_label_1')
                ->nullable()
                ->change();
            
            $table->text('recommend_flow_status_label_2')
                ->nullable()
                ->change();
            
            $table->text('recommend_feedback_label_2')
                ->nullable()
                ->change();
            
            $table->text('recommender_evaluate_label_2')
                ->nullable()
                ->change();
            
            $table->text('demand_side_evaluate_label_2')
                ->nullable()
                ->change();
            
            $table->date('remind_time')
                ->nullable()
                ;
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
