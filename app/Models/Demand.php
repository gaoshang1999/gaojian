<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;
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
        'id' ,'recruit_corporation' ,'recruit_user' ,'publish_time' ,'recruit_period' ,'end_time' ,'demand_person_numbers' ,'demand_type_label_1' ,'demand_type_label_2' ,'demand_type_parameter_1' ,'demand_type_parameter_2' ,'post_name' ,'work_location' ,'attach_department' ,'report_object' ,'subordinate_person_numbers' ,'pretax_annual_salary' ,'pretax_salary' ,'social_insurance' ,'bonus' ,'welfare' ,'work_city' ,'interview_flow' ,'demand_label_1' ,'demand_label_2' ,'demand_label_3' ,'demand_label_4' ,'demand_label_5' ,'demand_parameter_1' ,'demand_parameter_2' ,'demand_parameter_3' ,'demand_parameter_4' ,'demand_parameter_5' ,'age_requirement' ,'sex_requirement' ,'major_requirement' ,'work_year_requirement' ,'education_requirement' ,'language_requirement' ,'occupation_requirement' ,'corporation_requirement' ,'product_requirement' ,'certification_requirement' ,'tool_requirement' ,'position_description' ,'additional_specification' ,'corporation_synopsis' ,'position_qualification' ,'whole_jd' ,'highlight' ,'occupation_extension_requirement_1' ,'occupation_extension_requirement_2' ,'occupation_extension_requirement_3' ,'occupation_parameter_1' ,'occupation_parameter_2' ,'occupation_parameter_3' ,'corporation_extension_requirement_1' ,'corporation_extension_requirement_2' ,'corporation_extension_requirement_3' ,'corporation_parameter_1' ,'corporation_parameter_2' ,'corporation_parameter_3' ,'product_extension_requirement_1' ,'product_extension_requirement_2' ,'product_extension_requirement_3' ,'product_parameter_1' ,'product_parameter_2' ,'product_parameter_3' ,'certification_requirement_1' ,'certification_requirement_2' ,'certification_requirement_3' ,'certification_parameter_1' ,'certification_parameter_2' ,'certification_parameter_3' ,'tool_extension_requirement_1' ,'tool_extension_requirement_2' ,'tool_extension_requirement_3' ,'tool_parameter_1' ,'tool_parameter_2' ,'tool_parameter_3' ,'recruit_corporation_label_1' ,'recruit_corporation_label_2' ,'recruit_corporation_label_3' ,'recruit_corporation_label_4' ,'recruit_corporation_parameter_1' ,'recruit_corporation_parameter_2' ,'recruit_corporation_parameter_3' ,'recruit_corporation_parameter_4' ,'background_label_1' ,'background_label_2' ,'background_label_3' ,'background_label_4' ,'background_label_5' ,'background_label_6' ,'background_parameter_1' ,'background_parameter_2' ,'background_parameter_3' ,'background_parameter_4' ,'background_parameter_5' ,'background_parameter_6' ,'reward_amount' ,'lowest_reward_amount' ,'highest_reward_amount' ,'reward_time' ,'reward_time_label_1' ,'reward_time_label_2' ,'reward_label_1' ,'reward_label_2' ,'reward_parameter_1' ,'reward_parameter_2','quantify_duty','quantify_position','quantify_occupation_1','quantify_occupation_2','quantify_occupation_3','quantify_occupation_4','additional_quantify_occupation_1','additional_quantify_occupation_2','additional_quantify_occupation_3','additional_quantify_occupation_4','quantify_occupation_value_1','quantify_occupation_value_2','quantify_occupation_value_3','quantify_occupation_value_4','additional_quantify_occupation_value_1','additional_quantify_occupation_value_2','additional_quantify_occupation_value_3','additional_quantify_occupation_value_4','quantify_occupation_depth_1','quantify_occupation_depth_2','quantify_occupation_depth_3','quantify_occupation_depth_4','additional_quantify_occupation_depth_1','additional_quantify_occupation_depth_2','additional_quantify_occupation_depth_3','additional_quantify_occupation_depth_4','basic_match_strategy','additional_match_strategy_1','additional_match_strategy_2','additional_match_strategy_3','additional_match_strategy_4','additional_match_strategy_5','quantify_recommend_period','quantify_recommend_batch','quantify_recommend_stop_parameter','quantify_recommend_additional_parameter'
       ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'recruit_user');
    }
    
    
    public function recommends()
    {
        return $this->hasMany('App\Models\Recommend');
    }
    
    public function scopeDemand($query)
    {
        return $query->where('demand_parameter_1', '<>',  2);
    }
    
    public function scopeMyDemand($query)
    {
        return $query->where('recruit_user', Auth::user()->id)->where('demand_parameter_1', '<>',  2);
    }
    
    public function scopeOpenDemand($query)
    {
        return $query->where('demand_parameter_5', 1)->where('demand_parameter_1', '<>',  2);
    }
    
    public function scopeDemandForMyTalent($query)
    {
        $user_id = Auth::user()->id;
        return $query-> whereExists(function ($query)  use ($user_id){
                  $query->select(DB::raw(1))
                  ->from('recom')                
                  ->whereRaw('gj_recom.demand_id = gj_demand.id') 
                  -> where('host_id',  $user_id)  ;
              })  ;
    }
    
    public function scopeDemandForMyRecommend($query)
    {
        $user_id = Auth::user()->id;
        return $query-> whereExists(function ($query)  use ($user_id){
            $query->select(DB::raw(1))
            ->from('recom')
            ->whereRaw('gj_recom.demand_id = gj_demand.id')
            -> where('user_id',  $user_id)  ;
        })  ;
    }
}
