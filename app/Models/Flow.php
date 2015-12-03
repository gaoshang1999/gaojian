<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;
class Flow extends Model
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
    protected $table = 'flow';

    protected $fillable = ['recommend_time','recommend_type','recommend_label_1','recommend_label_2','recommend_label_3','recommend_label_4','recommend_parameter_1','recommend_parameter_2','recommend_parameter_3','recommend_parameter_4','match_parameter_1','match_parameter_2','match_parameter_3','match_parameter_4','match_parameter_5','match_parameter_6','match_parameter_7','match_parameter_8','recommend_flow_status_label_1','recommend_flow_status_label_2','recommend_flow_status_label_3','recommend_flow_parameter_1','recommend_flow_parameter_2','recommend_flow_parameter_3','recommend_feedback_label_1','recommend_feedback_label_2','recommend_feedback_label_3','recommend_feedback_label_4','recommend_feedback_parameter_1','recommend_feedback_parameter_2','recommend_feedback_parameter_3','recommend_feedback_parameter_4','recommender_evaluate_label_1','recommender_evaluate_label_2','recommender_evaluate_label_3','recommender_evaluate_label_4','recommender_evaluate_parameter_1','recommender_evaluate_parameter_2','recommender_evaluate_parameter_3','recommender_evaluate_parameter_4','demand_side_evaluate_label_1','demand_side_evaluate_label_2','demand_side_evaluate_label_3','demand_side_evaluate_label_4','demand_side_evaluate_parameter_1','demand_side_evaluate_parameter_2','demand_side_evaluate_parameter_3','demand_side_evaluate_parameter_4','remind_time'];
     

}
