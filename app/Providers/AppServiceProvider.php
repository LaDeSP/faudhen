<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */  
    public function boot()
    {
        Schema::defaultStringLength(191);
        Blade::component('layouts.input', 'input');
        Blade::component('layouts.select', 'select');

        Blade::directive('button', function (String $nome) {

            $button = " 
            <div class='form-group row mb-0'>
                <button type='submit' class='btn-custom btn-c-sm btn-c-primary'>
                    $nome
                </button>
		    </div>
            ";

            return $button;
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
