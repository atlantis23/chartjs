<?php

namespace App\ChartJs;

use App\ChartJs\ChartLabel;

/**
 *
 */
class ChartJs
{
    private $type;
    private $data = [];
    private $options = [];

    public function __construct($type = 'bar')
    {
        $this->type = $type;
    }

    public function setType($type = 'bar')
    {
        $this->type = $type;
        return $this;
    }

    public function setLabels(array $labels)
    {
        return new ChartLabel($this->type, $labels);
    }
}
