<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DB;

class TalentView extends Talent
{
    
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'talent_view';

    public function recommends()
    {
        return $this->hasMany('App\Models\Recommend', 'talent_id', 'id');
    }
    
    
    public function scopeQuantifyTalent($query, $demand)
    {
//         $query = TalentView::query();
        $isset = false;
        if($demand->background_parameter_4){
            $query= TalentView::quantifyTalentByOccupation4($demand);
            $isset = true;
        }
        if($demand->background_parameter_3){
            if($isset){
                $query= $query->union(TalentView::quantifyTalentByOccupation3($demand));
            }else{
                $query=  TalentView::quantifyTalentByOccupation3($demand) ;
            }
            $isset = true;
        }
        if($demand->background_parameter_2){
            if($isset){
                $query= $query->union(TalentView::quantifyTalentByOccupation2($demand));
            }else{
                $query=  TalentView::quantifyTalentByOccupation2($demand) ;
            }
            $isset = true;
        }
        if($demand->background_parameter_1){
            if($isset){
                $query= $query->union(TalentView::quantifyTalentByOccupation1($demand));
            }else{
                $query=  TalentView::quantifyTalentByOccupation1($demand) ;
            }
            $isset = true;
        }        
        
        return $query;
    }
    
    public function scopeQuantifyTalentBasic($query, $demand){
        
        $query = TalentView::where('product_parameter_9', $demand->quantify_duty)
        -> where('product_parameter_10', $demand->quantify_position)
        -> where('match_strategy', $demand->basic_match_strategy)
        ->select('id', 'name', 'last_corporation', 'job_level_1', 'highest_education');
        
        return $query;
    }
    
    public function scopeQuantifyTalentByOccupation1($query, $demand){
        $query = TalentView::quantifyTalentBasic($demand);
        
        if($demand-> quantify_occupation_1){
            $query = $query -> where('occupation_level', 1)  -> where('occupation_parameter', $demand->quantify_occupation_value_1);
        }
        
        $query->orderBy('quantify_value', 'desc');
        return $query;
    }
    public function scopeQuantifyTalentByOccupation2($query, $demand){
        $query = TalentView::quantifyTalentBasic($demand);
    
        if($demand-> quantify_occupation_2){
            $query = $query -> where('occupation_level', 2)  -> where('occupation_parameter', $demand->quantify_occupation_value_2);
        }
    
        $query->orderBy('quantify_value', 'desc');
        return $query;
    }
    public function scopeQuantifyTalentByOccupation3($query, $demand){
        $query = TalentView::quantifyTalentBasic($demand);
    
       if($demand-> quantify_occupation_3){
            $query = $query -> where('occupation_level', 3)  -> where('occupation_parameter', $demand->quantify_occupation_value_3);
        }
    
        $query->orderBy('quantify_value', 'desc');
        return $query;
    }
    public function scopeQuantifyTalentByOccupation4($query, $demand){
        $query = TalentView::quantifyTalentBasic($demand);
    
        if($demand-> quantify_occupation_4){
            $query = $query -> where('occupation_level', 4)  -> where('occupation_parameter', $demand->quantify_occupation_value_4);
        }
    
        $query->orderBy('quantify_value', 'desc');
        return $query;
    }
}
