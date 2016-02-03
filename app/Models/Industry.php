<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'industry';

    protected $fillable = [
        'id','name', 'nubmer', 'level', 'parent_id','remark'
    ];

    public function hasChildren()
    {
        return $this->children->count() > 0;
    }
    
    public function children()
    {
        return $this->hasMany('App\Models\Industry', 'parent_id', 'id');
    }
    
    public function parents()
    {
        return $this->hasOne('App\Models\Industry', 'id', 'parent_id');
    }
}
