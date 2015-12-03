<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;
class Recommend extends Model
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
    protected $table = 'recommend';

    protected $fillable = ['user_id','talent_id','demand_id','host_id', 'type', 'recommend_time','recommend_type','recommend_label_1','recommend_label_2','recommend_label_3','recommend_label_4','recommend_parameter_1','recommend_parameter_2','recommend_parameter_3','recommend_parameter_4','match_parameter_1','match_parameter_2','match_parameter_3','match_parameter_4','match_parameter_5','match_parameter_6','match_parameter_7','match_parameter_8','recommend_flow_status_label_1','recommend_flow_status_label_2','recommend_flow_status_label_3','recommend_flow_parameter_1','recommend_flow_parameter_2','recommend_flow_parameter_3','recommend_feedback_label_1','recommend_feedback_label_2','recommend_feedback_label_3','recommend_feedback_label_4','recommend_feedback_parameter_1','recommend_feedback_parameter_2','recommend_feedback_parameter_3','recommend_feedback_parameter_4','recommender_evaluate_label_1','recommender_evaluate_label_2','recommender_evaluate_label_3','recommender_evaluate_label_4','recommender_evaluate_parameter_1','recommender_evaluate_parameter_2','recommender_evaluate_parameter_3','recommender_evaluate_parameter_4','demand_side_evaluate_label_1','demand_side_evaluate_label_2','demand_side_evaluate_label_3','demand_side_evaluate_label_4','demand_side_evaluate_parameter_1','demand_side_evaluate_parameter_2','demand_side_evaluate_parameter_3','demand_side_evaluate_parameter_4','remind_time'];
    
  
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function host()
    {
        return $this->belongsTo('App\Models\User', 'host_id');
    }
    
    public function talent()
    {
        return $this->belongsTo('App\Models\Talent');
    }
    
    public function demand()
    {
        return $this->belongsTo('App\Models\Demand');
    }
    
    public function recom()
    {
        return $this->hasOne('App\Models\Recom', 'id', 'id');
    }
    
    public function flow()
    {
        return $this->belongsTo('App\Models\Flow');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Models\RecommendComment');
    }
    
    //查询当前用户发布的职位,  收到的推荐
    public function scopeMyDemandRecommend($query)
    {
        $user_id = Auth::user()->id;
        return $query->whereExists(function ($query)  use ($user_id){
                $query->select(DB::raw(1))
                ->from('demand')
                ->where('demand.recruit_user',  $user_id)
                ->whereRaw('gj_demand.id = gj_recommend.demand_id') ;
            });
    }
    
    //查询当前用户上传的人才,  收到的推荐
    public function scopeMyTalentRecommend($query)
    {
        $user_id = Auth::user()->id;
        return $query->whereExists(function ($query)  use ($user_id){
            $query->select(DB::raw(1))
                ->from('talent')
                ->where('talent.user_id',  $user_id)
                ->whereRaw('gj_talent.id = gj_recommend.talent_id') ;
        });
    }
    
    //查询当前用户的推荐
    public function scopeMyRecommend($query)
    {
        return $query->where('user_id', Auth::user()->id);
    }
    
    //查询当前用户Host的推荐
    public function scopeMyHostRecommend($query)
    {
        return $query->where('host_id', Auth::user()->id);
    }
}
