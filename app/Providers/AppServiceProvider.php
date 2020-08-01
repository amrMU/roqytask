<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App;
use Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::booted(function()
        {
            if (Config::get('app.locale') == 'en'){
                $title = 'title_en';
                $content = 'content_en';
                $Name= 'nameEn';
                $name= 'name_en';
                $specialize= 'specialize_ar';
            }else{
                $title = 'title_ar';
                $content = 'content_ar';
                $Name= 'nameAr';
                $name= 'name_ar';
                $specialize= 'specialize_en';
            }
            
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);
    }
}
