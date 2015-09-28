<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'table';

    protected $fillable = ['cn','cn_segment', 'en', 'desc'];
    
    
    public function columns()
    {
        return $this->hasMany('App\Models\Column', 'table_id');
    }
}
