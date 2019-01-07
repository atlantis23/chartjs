<?php

namespace App\ChartJs;

use App\ChartJs\ChartOption;

class ChartDatasets
{
    private $type;
    private $data;
    private $datasets = [];

    function __construct($type, array $labels, array $datasets)
    {
        $this->type = $type;
        $this->dataSetMaker($labels, $datasets);
    }

    public function setOptions(array $options)
    {
        return new ChartOption($this->type, $this->data, $options);
    }

    private function dataSetMaker(array $labels, array $datalists)
    {
        $this->data['labels'] = $labels;
        $this->data['datasets'] = $datalists;
    }
}
