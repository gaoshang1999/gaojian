<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dict extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dict';

    protected $fillable = ['cn', 'en', 'abbr'];
    
    
}
