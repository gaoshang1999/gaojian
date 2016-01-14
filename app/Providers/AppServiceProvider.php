<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Log;
use Cache;
use App\Models\Constant;
use App\Models\Recom;
use Mail;
use Queue;

class AppServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
    
        DB::listen(function($sql, $bindings, $time) {
            Log::info  ($sql, $bindings, $time);
        });    
        
        Constant::saved(function ($constant) {
            Cache::forget(Constant::$constantCache);
        });
        
        Constant::deleted(function ($constant) {
            Cache::forget(Constant::$constantCache);
        });
        
         Recom::created(function ($recom) {
             $user = $recom->host;             
             if($user->email){
                    Mail::send('email.recom', ['user' => $user, 'recom' => $recom], function ($m) use ($user) {
                        $m->from(config('mail.username'), '高荐招聘');    
                        $m->to($user->email, $user->name)->subject('您发布的职位收到一个新推荐!');                           
                     });      
             }  
             
      });
         

    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('TranslateService', function ($app) {        

            $translateService = new \App\Providers\Translate\TranslateService();
        
            return $translateService;
        });
    }
}
