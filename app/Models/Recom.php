<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;
class Recom extends Model
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
    protected $table = 'recom';

    protected $fillable = ['user_id','talent_id','demand_id','host_id', 'type', 'flow_id'];
    
  
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
}
