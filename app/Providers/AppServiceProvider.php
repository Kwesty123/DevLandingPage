<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
    // Fetch $headerurl from wherever it's stored
        $headerurl = 'admin.com'; // For example, hard-coded here
        $headerurl2 = 'user.com'; // For example, hard-coded here
        $headerurl3 = 'manager.com'; // For example, hard-coded here


        $message = '<h1>dsadsad</h1>';
  

        // '<script type="text/JavaScript"> 
        // document.getElementById("alert").innerHTML = Congratulation;
        // </script>';  

    // Bind $headerurl to all views
    // Bind $headerurl to all views
    View::composer('*', function ($view) use ($headerurl, $headerurl2,$headerurl3, $message) {
        $view->with(['headerurl' => $headerurl, 'headerurl2' => $headerurl2,'headerurl3'=>$headerurl3,'message'=>$message]);
    });

    }
}
