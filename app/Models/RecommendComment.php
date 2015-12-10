<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
