<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    /**
     * The storage format of the model's date columns.
     *
     * @var  string
     */
    protected $dateFormat = 'Y-m-d H:i:s';
    
    /**
     * The database table used by the model.
     *
     * @var  string
     */
    protected $table = 'job';

    protected $fillable = ['id','job_id','task_id','status','count','total','start_time','over_time'];
    
    
}

