<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'column';

    protected $fillable = ['cn','cn_segment', 'en', 'desc',
        'type',  'length', 'value_range', 'default', 'page_type', 'table_id', 'rank'
    ];
    

    public function table()
    {
        return $this->belongsTo('App\Models\Table');
    }
}
