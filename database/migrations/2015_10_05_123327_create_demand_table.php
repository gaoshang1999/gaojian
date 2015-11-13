<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
Schema::create('demand', function (Blueprint $table) { 
  $table->increments('id') ->nullable(); 
  $table->string('recruit_corporation', 30) ->nullable(); 
  $table->string('recruit_user', 30) ->nullable(); 
  $table->date('publish_time') ->nullable(); 
  $table->float('recruit_period') ->nullable(); 
  $table->date('end_time') ->nullable(); 
  $table->float('demand_person_numbers') ->nullable(); 
  $table->string('demand_type_label_1', 30) ->nullable(); 
  $table->string('demand_type_label_2') ->nullable(); 
  $table->float('demand_type_parameter_1') ->nullable(); 
  $table->float('demand_type_parameter_2') ->nullable(); 
  $table->string('post_name', 30) ->nullable(); 
  $table->string('work_location', 30) ->nullable(); 
  $table->string('attach_department', 30) ->nullable(); 
  $table->string('report_object', 30) ->nullable(); 
  $table->float('subordinate_person_numbers') ->nullable(); 
  $table->float('pretax_annual_salary') ->nullable(); 
  $table->float('pretax_salary') ->nullable(); 
  $table->string('social_insurance', 30) ->nullable(); 
  $table->string('bonus', 30) ->nullable(); 
  $table->string('welfare', 30) ->nullable(); 
  $table->string('work_city') ->nullable(); 
  $table->string('interview_flow', 30) ->nullable(); 
  $table->string('demand_label_1', 30) ->nullable(); 
  $table->float('demand_label_2') ->nullable(); 
  $table->string('demand_label_3', 30) ->nullable(); 
  $table->string('demand_label_4', 30) ->nullable(); 
  $table->string('demand_label_5') ->nullable(); 
  $table->float('demand_parameter_1') ->default(0);
  $table->float('demand_parameter_2') ->nullable(); 
  $table->float('demand_parameter_3') ->nullable(); 
  $table->float('demand_parameter_4') ->nullable(); 
  $table->float('demand_parameter_5') ->nullable(); 
  $table->float('age_requirement') ->nullable(); 
  $table->integer('sex_requirement') ->nullable(); 
  $table->string('major_requirement', 30) ->nullable(); 
  $table->float('work_year_requirement') ->nullable(); 
  $table->integer('education_requirement') ->nullable(); 
  $table->string('language_requirement', 30) ->nullable(); 
  $table->string('occupation_requirement', 30) ->nullable(); 
  $table->string('corporation_requirement', 30) ->nullable(); 
  $table->string('product_requirement', 30) ->nullable(); 
  $table->string('certification_requirement', 30) ->nullable(); 
  $table->string('tool_requirement', 30) ->nullable(); 
  $table->text('position_description') ->nullable(); 
  $table->text('additional_specification') ->nullable(); 
  $table->text('corporation_synopsis') ->nullable(); 
  $table->text('position_qualification') ->nullable(); 
  $table->text('whole_jd') ->nullable(); 
  $table->text('highlight') ->nullable(); 
  $table->string('occupation_extension_requirement_1', 30) ->nullable(); 
  $table->string('occupation_extension_requirement_2', 30) ->nullable(); 
  $table->string('occupation_extension_requirement_3', 30) ->nullable(); 
  $table->float('occupation_parameter_1') ->nullable(); 
  $table->float('occupation_parameter_2') ->nullable(); 
  $table->float('occupation_parameter_3') ->nullable(); 
  $table->string('corporation_extension_requirement_1', 30) ->nullable(); 
  $table->string('corporation_extension_requirement_2', 30) ->nullable(); 
  $table->string('corporation_extension_requirement_3', 30) ->nullable(); 
  $table->float('corporation_parameter_1') ->nullable(); 
  $table->float('corporation_parameter_2') ->nullable(); 
  $table->float('corporation_parameter_3') ->nullable(); 
  $table->string('product_extension_requirement_1', 30) ->nullable(); 
  $table->string('product_extension_requirement_2', 30) ->nullable(); 
  $table->string('product_extension_requirement_3', 30) ->nullable(); 
  $table->float('product_parameter_1') ->nullable(); 
  $table->float('product_parameter_2') ->nullable(); 
  $table->float('product_parameter_3') ->nullable(); 
  $table->string('certification_requirement_1', 30) ->nullable(); 
  $table->string('certification_requirement_2') ->nullable(); 
  $table->string('certification_requirement_3') ->nullable(); 
  $table->float('certification_parameter_1') ->nullable(); 
  $table->float('certification_parameter_2') ->nullable(); 
  $table->float('certification_parameter_3') ->nullable(); 
  $table->string('tool_extension_requirement_1', 50) ->nullable(); 
  $table->string('tool_extension_requirement_2') ->nullable(); 
  $table->string('tool_extension_requirement_3') ->nullable(); 
  $table->float('tool_parameter_1') ->nullable(); 
  $table->float('tool_parameter_2') ->nullable(); 
  $table->float('tool_parameter_3') ->nullable(); 
  $table->string('recruit_corporation_label_1', 30) ->nullable(); 
  $table->string('recruit_corporation_label_2', 30) ->nullable(); 
  $table->string('recruit_corporation_label_3') ->nullable(); 
  $table->string('recruit_corporation_label_4') ->nullable(); 
  $table->float('recruit_corporation_parameter_1') ->nullable(); 
  $table->float('recruit_corporation_parameter_2') ->nullable(); 
  $table->float('recruit_corporation_parameter_3') ->nullable(); 
  $table->float('recruit_corporation_parameter_4') ->nullable(); 
  $table->string('background_label_1', 30) ->nullable(); 
  $table->string('background_label_2', 30) ->nullable(); 
  $table->string('background_label_3') ->nullable(); 
  $table->string('background_label_4') ->nullable(); 
  $table->string('background_label_5') ->nullable(); 
  $table->string('background_label_6') ->nullable(); 
  $table->float('background_parameter_1') ->nullable(); 
  $table->float('background_parameter_2') ->nullable(); 
  $table->float('background_parameter_3') ->nullable(); 
  $table->float('background_parameter_4') ->nullable(); 
  $table->float('background_parameter_5') ->nullable(); 
  $table->float('background_parameter_6') ->nullable(); 
  $table->float('reward_amount') ->nullable(); 
  $table->float('lowest_reward_amount') ->nullable(); 
  $table->float('highest_reward_amount') ->nullable(); 
  $table->date('reward_time') ->nullable(); 
  $table->string('reward_time_label_1', 30) ->nullable(); 
  $table->string('reward_time_label_2', 30) ->nullable(); 
  $table->string('reward_label_1', 30) ->nullable(); 
  $table->string('reward_label_2') ->nullable(); 
  $table->float('reward_parameter_1') ->nullable(); 
  $table->float('reward_parameter_2') ->nullable(); 
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
