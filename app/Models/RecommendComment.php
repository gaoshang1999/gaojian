<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;

class RecommendComment extends Model
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
    protected $table = 'recommend_comment';

    protected $fillable = ['id', 'user_id', 'recommend_id','comment_type','comment','remind_type','remind_time'];
    
  
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function scopeComments($query)
    {
//         return $query->whereIn('recommend_id',  function($query)
//         {
//             $query->select('id')
//                   ->from('recommend')                  
//                  ->where('type', '<>', 2)
//                  ->where('recommend_parameter_1', '<>', 2) 
//                  ->where('user_id', Auth::user()->id) 
//                  ->orWhere('host_id', Auth::user()->id) ;
//         });

        return $query->where('user_id',  Auth::user()->id)->where('comment_type',  'action')->where('enable',  true)->whereRaw('remind_time < now()');
    }
}
