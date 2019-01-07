<?php

namespace App\ChartJs;

use App\ChartJs\ChartDatasets;

class ChartLabel
{
    private $type;
    private $labels = [];


    function __construct($type, array $labels)
    {
        $this->type = $type;
        $this->labels = $labels;
    }
    
    public function setDatasets(array $datasets)
    {
       return new ChartDatasets($this->type, $this->labels, $datasets);
    }
}
