<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cache;

class Constant extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'constant';

    protected $fillable = ['cn', 'en', 'k', 'v', 'desc'];
    
    
    public static $constantCache = 'constantCache';
    
    public static function getInstance(){
      
        $constantCache = Cache::get(Constant::$constantCache);

        if(!$constantCache){
            $constantCache = [];
            $list = Constant::orderBy('en')->orderBy('k')->get()->all();
            foreach($list as $k => $v){
                if(isset($constantCache[$v->en])) {
                    $map = $constantCache[$v->en];
                } else {
                    $map = []; 
                    $map[-1]= "" ;
                    $map[null]= "" ;
                }
                $map[$v->k]= $v->v ;
                $constantCache[$v->en] = $map;                
            }
            
            Cache::forever(Constant::$constantCache, $constantCache);
        }
        
        return $constantCache;
    }
    
}
