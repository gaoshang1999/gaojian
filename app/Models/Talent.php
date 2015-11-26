<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Talent extends Model
{
    
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';
    
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'talent';

    protected $fillable = ['id','name','mobile','last_corporation','sex','id_card','birth_date',' permanent_residence','location','basic_extension_info_1','basic_extension_info_2','basic_extension_info_3','basic_extension_info_4','basic_extension_info_5','english_level','other_language_level','expect_parameter_1','expect_parameter_2','expect_parameter_3','expect_label_1','expect_label_2','expect_label_3','work_year','start_work_time','highest_education','initial_education','highest_education_school','worst_school','college_grade','master_grade','mba_grade','school_comprehensive_grade','college_major','college_school','college_start_time','college_over_time','master_major','master_school','master_start_time','master_over_time','doctor_major','doctor_school','doctor_start_time','doctor_over_time','mba_school','mba_start_time','mba_over_time','additional_education','additional_education_school','additional_start_time','additional_over_time','education_experience','education_parameter_1','education_parameter_2','occupation_label_1','occupation_label_2','occupation_label_3','occupation_label_4','occupation_label_5','expect_occupation','product_label_1','product_label_2','product_label_3','product_label_4','product_label_5','product_label_6','product_label_7','product_label_8','product_label_9','product_label_10','product_parameter_1','product_parameter_2','product_parameter_3','product_parameter_4','product_parameter_5','product_parameter_6','product_parameter_7','product_parameter_8','product_parameter_9','product_parameter_10','current_annual_salary_range','current_pretax_annual_salary','current_pretax_salary','expect_pretax_annual_salary','expect_pretax_salary','expect_salary_increase','salary_structure_parameter_1','salary_structure_parameter_2','salary_structure_parameter_3','salary_structure_parameter_4','corporation_1','corporation_2','corporation_3','corporation_4','corporation_5','corporation_6','corporation_7','corporation_8','corporation_9','corporation_10','start_time_1','start_time_2','start_time_3','start_time_4','start_time_5','start_time_6','start_time_7','start_time_8','start_time_9','start_time_10','over_time_1','over_time_2','over_time_3','over_time_4','over_time_5','over_time_6','over_time_7','over_time_8','over_time_9','over_time_10','job_level_1','job_level_2','job_level_3','job_level_4','job_level_5','job_level_6','job_level_7','job_level_8','job_level_9','job_level_10','experience_1','experience_2','experience_3','experience_4','experience_5','experience_6','experience_7','experience_8','experience_9','experience_10','total_occupation_experience','occupation_status','job_hopping_digit','unemployment_time','occupation_parameter_1','occupation_parameter_2','occupation_parameter_3','occupation_parameter_4','occupation_parameter_5','occupation_parameter_6','corporation_label_1','corporation_label_2','corporation_label_3','corporation_label_4','corporation_label_5','corporation_label_6','corporation_label_7','corporation_label_8','corporation_label_9','corporation_label_10','corporation_parameter_1','corporation_parameter_2','corporation_parameter_3','corporation_parameter_4','corporation_parameter_5','corporation_parameter_6','corporation_parameter_7','corporation_parameter_8','corporation_parameter_9','corporation_parameter_10','tool_label_1','tool_label_2','tool_label_3','certification_label_1','certification_label_2','certification_label_3','tool_parameter_1','tool_parameter_2','tool_parameter_3','certification_parameter_1','certification_parameter_2','certification_parameter_3','resume','resume_segment_1','resume_segment_2','resume_segment_3','resume_segment_4','resume_segment_5','resume_segment_6','grab_status_1','grab_status_2','grab_status_3','analysis_status_parameter_1','analysis_status_parameter_2','analysis_status_parameter_3','analysis_status_parameter_4','analysis_status_parameter_5','analysis_status_parameter_6','age','user_id'];
    
    public function recommends()
    {
        return $this->hasMany('App\Models\Recommend');
    }
    
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id',  'user_id');
    }
}
