<?php

namespace App\Providers;

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        DB::listen(function ($query) {
            $sql = Str::of($query->sql)->replace('`', '');

            if ($sql->contains('set slug') || $sql->contains('set excerpt') || $sql->contains('set meta')
            || $sql->contains('set published') || $sql->contains('set featured_image')) {
                app(BlogController::class)->updateIndexedArticles();
            }
        });
    }
}
