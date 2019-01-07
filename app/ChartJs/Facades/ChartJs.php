<?php
namespace App\ChartJs\Facades;

use Illuminate\Support\Facades\Facade;

class ChartJs extends Facade
{
    protected static function getFacadeAccessor() {
        return new \App\ChartJs\ChartJs();
    }
}
