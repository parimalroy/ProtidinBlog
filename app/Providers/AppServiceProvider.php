<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontEnd.layouts.master', function(){
            $allPublicationCategories= DB::table('tbl_categories')
                                              ->select('*')
                                              ->where('publication_status',1)
                                              ->get();
            View::share('allPublicationCategories',$allPublicationCategories);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
