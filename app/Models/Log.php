<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'log';

    protected $fillable = ['start_time', 'end_time', 'user_id'
        , 'ips', 'method', 'ajax', 'url', 'full_url', 'input', 'cookie', 'header'
        ,'response_code', 'response_header', 'response_content'
    ];
    
    
}
