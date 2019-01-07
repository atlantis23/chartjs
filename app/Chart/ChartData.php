<?php

namespace App\Chart;

use App\Chart\ChartColor;

/**
 *
 */
class ChartData
{
  public $label;
  public $data = [];
  public $backgroundColor;
  public $borderColor;
  public $borderWidth = 2;


  function __construct(string $label, array $data)
  {
     $this->label = $label;
     $this->data = $data;
     $this->set();
  }

  public function set()
  {

    $chartColor = new ChartColor();
    $colors = $chartColor->get(5);

    if ($this->backgroundColor == '') {
      $this->backgroundColor = $colors;
    }

    if ($this->borderColor == '') {
      $this->borderColor = $colors;
    }

     return [
        'label' => $this->label,
        'data' => $this->data,
        'backgroundColor' => $this->backgroundColor,
        'borderColor' => $this->borderColor,
        'borderWidth' => $this->borderWidth
     ];
  }
}
