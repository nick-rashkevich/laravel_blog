<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFour();

        view()->composer('pages._sidebar', function ($view){
            $view->with('popularPosts', Post::getPopularPosts());
            $view->with('recommendedPosts', Post::getRecommendedPosts());
            $view->with('recentPosts', Post::getRecentPosts());
            $view->with('categories', Category::all());
        });
    }
}
