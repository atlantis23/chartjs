<?php

namespace App\ChartJs\Providers;

use Illuminate\Support\ServiceProvider;

class ChartJsServiceProvider extends ServiceProvider
{
    public function boot () {
        $this->app->bind('chartjs', function() {
            return new \App\ChartJs\ChartJs();
        });
    }
}
