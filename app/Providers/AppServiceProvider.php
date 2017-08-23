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
    $allPublicationCategories = DB::table('tbl_categories')
    ->select('*')
    ->where('publication_status', 1)
    ->get();
    $blogsById=DB::table('tbl_blog')
                            ->where('publication_status',1)
                            ->orderBy('blog_id','Dsce')
                            ->get();
    View::share('allPublicationCategories', $allPublicationCategories);
    View::share('blogsById',$blogsById);
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
