<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
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
    protected $table = 'demand';

    protected $fillable = [        
        'id' ,'recruit_corporation' ,'recruit_user' ,'publish_time' ,'recruit_period' ,'end_time' ,'demand_person_numbers' ,'demand_type_label_1' ,'demand_type_label_2' ,'demand_type_parameter_1' ,'demand_type_parameter_2' ,'post_name' ,'work_location' ,'attach_department' ,'report_object' ,'subordinate_person_numbers' ,'pretax_annual_salary' ,'pretax_salary' ,'social_insurance' ,'bonus' ,'welfare' ,'work_city' ,'interview_flow' ,'demand_label_1' ,'demand_label_2' ,'demand_label_3' ,'demand_label_4' ,'demand_label_5' ,'demand_parameter_1' ,'demand_parameter_2' ,'demand_parameter_3' ,'demand_parameter_4' ,'demand_parameter_5' ,'age_requirement' ,'sex_requirement' ,'major_requirement' ,'work_year_requirement' ,'education_requirement' ,'language_requirement' ,'occupation_requirement' ,'corporation_requirement' ,'product_requirement' ,'certification_requirement' ,'tool_requirement' ,'position_description' ,'additional_specification' ,'corporation_synopsis' ,'position_qualification' ,'whole_jd' ,'highlight' ,'occupation_extension_requirement_1' ,'occupation_extension_requirement_2' ,'occupation_extension_requirement_3' ,'occupation_parameter_1' ,'occupation_parameter_2' ,'occupation_parameter_3' ,'corporation_extension_requirement_1' ,'corporation_extension_requirement_2' ,'corporation_extension_requirement_3' ,'corporation_parameter_1' ,'corporation_parameter_2' ,'corporation_parameter_3' ,'product_extension_requirement_1' ,'product_extension_requirement_2' ,'product_extension_requirement_3' ,'product_parameter_1' ,'product_parameter_2' ,'product_parameter_3' ,'certification_requirement_1' ,'certification_requirement_2' ,'certification_requirement_3' ,'certification_parameter_1' ,'certification_parameter_2' ,'certification_parameter_3' ,'tool_extension_requirement_1' ,'tool_extension_requirement_2' ,'tool_extension_requirement_3' ,'tool_parameter_1' ,'tool_parameter_2' ,'tool_parameter_3' ,'recruit_corporation_label_1' ,'recruit_corporation_label_2' ,'recruit_corporation_label_3' ,'recruit_corporation_label_4' ,'recruit_corporation_parameter_1' ,'recruit_corporation_parameter_2' ,'recruit_corporation_parameter_3' ,'recruit_corporation_parameter_4' ,'background_label_1' ,'background_label_2' ,'background_label_3' ,'background_label_4' ,'background_label_5' ,'background_label_6' ,'background_parameter_1' ,'background_parameter_2' ,'background_parameter_3' ,'background_parameter_4' ,'background_parameter_5' ,'background_parameter_6' ,'reward_amount' ,'lowest_reward_amount' ,'highest_reward_amount' ,'reward_time' ,'reward_time_label_1' ,'reward_time_label_2' ,'reward_label_1' ,'reward_label_2' ,'reward_parameter_1' ,'reward_parameter_2'
       ];
    
    
}
