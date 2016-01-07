<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   Schema::create('talent', function (Blueprint $table) { 
  $table->increments('id') ; 
  $table->string('name', 30) ->nullable(); 
  $table->string('mobile', 30) ->nullable(); 
  $table->string('last_corporation') ->nullable(); 
  $table->integer('sex') ->nullable(); 
  $table->string('id_card', 30) ->nullable(); 
  $table->date('birth_date') ->nullable(); 
  $table->string('permanent_residence', 30) ->nullable(); 
  $table->string('location') ->nullable(); 
  $table->string('basic_extension_info_1', 30) ->nullable(); 
  $table->string('basic_extension_info_2', 30) ->nullable(); 
  $table->string('basic_extension_info_3', 30) ->nullable(); 
  $table->string('basic_extension_info_4', 30) ->nullable(); 
  $table->date('basic_extension_info_5') ->nullable(); 
  $table->integer('english_level') ->nullable(); 
  $table->string('other_language_level', 30) ->nullable(); 
  $table->string('expect_parameter_1', 30) ->nullable(); 
  $table->string('expect_parameter_2', 30) ->nullable(); 
  $table->string('expect_parameter_3', 30) ->nullable(); 
  $table->string('expect_label_1', 30) ->nullable(); 
  $table->string('expect_label_2', 30) ->nullable(); 
  $table->string('expect_label_3') ->nullable(); 
  $table->integer('work_year') ->nullable(); 
  $table->date('start_work_time') ->nullable(); 
  $table->integer('highest_education') ->nullable(); 
  $table->integer('initial_education') ->nullable(); 
  $table->string('highest_education_school') ->nullable(); 
  $table->string('worst_school') ->nullable(); 
  $table->integer('college_grade') ->nullable(); 
  $table->integer('master_grade') ->nullable(); 
  $table->integer('mba_grade') ->nullable(); 
  $table->integer('school_comprehensive_grade') ->nullable(); 
  $table->string('college_major') ->nullable(); 
  $table->string('college_school') ->nullable(); 
  $table->date('college_start_time') ->nullable(); 
  $table->date('college_over_time') ->nullable(); 
  $table->string('master_major') ->nullable(); 
  $table->string('master_school') ->nullable(); 
  $table->date('master_start_time') ->nullable(); 
  $table->date('master_over_time') ->nullable(); 
  $table->string('doctor_major') ->nullable(); 
  $table->string('doctor_school') ->nullable(); 
  $table->date('doctor_start_time') ->nullable(); 
  $table->date('doctor_over_time') ->nullable(); 
  $table->string('mba_school') ->nullable(); 
  $table->date('mba_start_time') ->nullable(); 
  $table->date('mba_over_time') ->nullable(); 
  $table->string('additional_education') ->nullable(); 
  $table->string('additional_education_school') ->nullable(); 
  $table->date('additional_start_time') ->nullable(); 
  $table->date('additional_over_time') ->nullable(); 
  $table->text('education_experience') ->nullable(); 
  $table->integer('education_parameter_1') ->nullable(); 
  $table->integer('education_parameter_2') ->nullable(); 
  $table->string('occupation_label_1', 100) ->nullable(); 
  $table->string('occupation_label_2', 30) ->nullable(); 
  $table->string('occupation_label_3') ->nullable(); 
  $table->string('occupation_label_4') ->nullable(); 
  $table->string('occupation_label_5') ->nullable(); 
  $table->string('expect_occupation') ->nullable(); 
  $table->string('product_label_1', 100) ->nullable(); 
  $table->string('product_label_2', 30) ->nullable(); 
  $table->string('product_label_3', 30) ->nullable(); 
  $table->string('product_label_4') ->nullable(); 
  $table->string('product_label_5') ->nullable(); 
  $table->string('product_label_6') ->nullable(); 
  $table->string('product_label_7') ->nullable(); 
  $table->string('product_label_8') ->nullable(); 
  $table->string('product_label_9') ->nullable(); 
  $table->string('product_label_10') ->nullable(); 
  $table->integer('product_parameter_1') ->nullable(); 
  $table->integer('product_parameter_2') ->nullable(); 
  $table->integer('product_parameter_3') ->nullable(); 
  $table->integer('product_parameter_4') ->nullable(); 
  $table->integer('product_parameter_5') ->nullable(); 
  $table->integer('product_parameter_6') ->nullable(); 
  $table->integer('product_parameter_7') ->nullable(); 
  $table->integer('product_parameter_8') ->nullable(); 
  $table->integer('product_parameter_9') ->nullable(); 
  $table->integer('product_parameter_10') ->nullable(); 
  $table->integer('current_annual_salary_range') ->nullable(); 
  $table->integer('current_pretax_annual_salary') ->nullable(); 
  $table->integer('current_pretax_salary') ->nullable(); 
  $table->integer('expect_pretax_annual_salary') ->nullable(); 
  $table->integer('expect_pretax_salary') ->nullable(); 
  $table->integer('expect_salary_increase') ->nullable(); 
  $table->integer('salary_structure_parameter_1') ->nullable(); 
  $table->integer('salary_structure_parameter_2') ->nullable(); 
  $table->string('salary_structure_parameter_3') ->nullable(); 
  $table->string('salary_structure_parameter_4') ->nullable(); 
  $table->string('corporation_1', 30) ->nullable(); 
  $table->string('corporation_2') ->nullable(); 
  $table->string('corporation_3') ->nullable(); 
  $table->string('corporation_4') ->nullable(); 
  $table->string('corporation_5') ->nullable(); 
  $table->string('corporation_6') ->nullable(); 
  $table->string('corporation_7') ->nullable(); 
  $table->string('corporation_8') ->nullable(); 
  $table->string('corporation_9') ->nullable(); 
  $table->string('corporation_10') ->nullable(); 
  $table->date('start_time_1') ->nullable(); 
  $table->date('start_time_2') ->nullable(); 
  $table->date('start_time_3') ->nullable(); 
  $table->date('start_time_4') ->nullable(); 
  $table->date('start_time_5') ->nullable(); 
  $table->date('start_time_6') ->nullable(); 
  $table->date('start_time_7') ->nullable(); 
  $table->date('start_time_8') ->nullable(); 
  $table->date('start_time_9') ->nullable(); 
  $table->date('start_time_10') ->nullable(); 
  $table->date('over_time_1') ->nullable(); 
  $table->date('over_time_2') ->nullable(); 
  $table->date('over_time_3') ->nullable(); 
  $table->date('over_time_4') ->nullable(); 
  $table->date('over_time_5') ->nullable(); 
  $table->date('over_time_6') ->nullable(); 
  $table->date('over_time_7') ->nullable(); 
  $table->date('over_time_8') ->nullable(); 
  $table->date('over_time_9') ->nullable(); 
  $table->date('over_time_10') ->nullable(); 
  $table->string('job_level_1') ->nullable(); 
  $table->string('job_level_2') ->nullable(); 
  $table->string('job_level_3') ->nullable(); 
  $table->string('job_level_4') ->nullable(); 
  $table->string('job_level_5') ->nullable(); 
  $table->string('job_level_6') ->nullable(); 
  $table->string('job_level_7') ->nullable(); 
  $table->string('job_level_8') ->nullable(); 
  $table->string('job_level_9') ->nullable(); 
  $table->string('job_level_10') ->nullable(); 
  $table->text('experience_1') ->nullable(); 
  $table->text('experience_2') ->nullable(); 
  $table->text('experience_3') ->nullable(); 
  $table->text('experience_4') ->nullable(); 
  $table->text('experience_5') ->nullable(); 
  $table->text('experience_6') ->nullable(); 
  $table->text('experience_7') ->nullable(); 
  $table->text('experience_8') ->nullable(); 
  $table->text('experience_9') ->nullable(); 
  $table->text('experience_10') ->nullable(); 
  $table->text('total_occupation_experience') ->nullable(); 
  $table->integer('occupation_status') ->nullable(); 
  $table->integer('job_hopping_digit') ->nullable(); 
  $table->date('unemployment_time') ->nullable(); 
  $table->integer('occupation_parameter_1') ->nullable(); 
  $table->integer('occupation_parameter_2') ->nullable(); 
  $table->integer('occupation_parameter_3') ->nullable(); 
  $table->string('occupation_parameter_4', 100) ->nullable(); 
  $table->string('occupation_parameter_5', 100) ->nullable(); 
  $table->string('occupation_parameter_6') ->nullable(); 
  $table->string('corporation_label_1', 100) ->nullable(); 
  $table->string('corporation_label_2', 30) ->nullable(); 
  $table->string('corporation_label_3', 30) ->nullable(); 
  $table->string('corporation_label_4', 30) ->nullable(); 
  $table->string('corporation_label_5', 30) ->nullable(); 
  $table->string('corporation_label_6', 30) ->nullable(); 
  $table->string('corporation_label_7', 30) ->nullable(); 
  $table->string('corporation_label_8', 30) ->nullable(); 
  $table->string('corporation_label_9', 30) ->nullable(); 
  $table->string('corporation_label_10', 30) ->nullable(); 
  $table->integer('corporation_parameter_1') ->nullable(); 
  $table->integer('corporation_parameter_2') ->nullable(); 
  $table->integer('corporation_parameter_3') ->nullable(); 
  $table->integer('corporation_parameter_4') ->nullable(); 
  $table->integer('corporation_parameter_5') ->nullable(); 
  $table->integer('corporation_parameter_6') ->nullable(); 
  $table->integer('corporation_parameter_7') ->nullable(); 
  $table->integer('corporation_parameter_8') ->nullable(); 
  $table->integer('corporation_parameter_9') ->nullable(); 
  $table->integer('corporation_parameter_10') ->nullable(); 
  $table->string('tool_label_1', 100) ->nullable(); 
  $table->string('tool_label_2', 30) ->nullable(); 
  $table->string('tool_label_3') ->nullable(); 
  $table->string('certification_label_1') ->nullable(); 
  $table->string('certification_label_2') ->nullable(); 
  $table->string('certification_label_3') ->nullable(); 
  $table->integer('tool_parameter_1') ->nullable(); 
  $table->integer('tool_parameter_2') ->nullable(); 
  $table->integer('tool_parameter_3') ->nullable(); 
  $table->integer('certification_parameter_1') ->nullable(); 
  $table->integer('certification_parameter_2') ->nullable(); 
  $table->integer('certification_parameter_3') ->nullable(); 
  $table->text('resume') ->nullable(); 
  $table->text('resume_segment_1') ->nullable(); 
  $table->text('resume_segment_2') ->nullable(); 
  $table->text('resume_segment_3') ->nullable(); 
  $table->text('resume_segment_4') ->nullable(); 
  $table->text('resume_segment_5') ->nullable(); 
  $table->text('resume_segment_6') ->nullable(); 
  $table->string('grab_status_1', 30) ->nullable(); 
  $table->string('grab_status_2', 30) ->nullable(); 
  $table->string('grab_status_3', 30) ->nullable(); 
  $table->integer('analysis_status_parameter_1') ->nullable(); 
  $table->integer('analysis_status_parameter_2') ->nullable(); 
  $table->integer('analysis_status_parameter_3') ->nullable(); 
  $table->integer('analysis_status_parameter_4') ->nullable(); 
  $table->integer('analysis_status_parameter_5') ->nullable(); 
  $table->integer('analysis_status_parameter_6') ->nullable(); 
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
