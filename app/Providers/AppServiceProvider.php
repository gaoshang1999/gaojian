<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Log;
use Cache;
use App\Models\Constant;

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
