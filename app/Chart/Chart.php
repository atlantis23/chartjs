<?php

namespace App\Chart;

/**
 *
 */
class Chart
{
  public $type;
  public $labels = [];
  public $datasets = [];
  public $options = [];

  function __construct($type = 'bar')
  {
    $this->type = $type;
  }

  public function setLabels($labels = []) : Chart
  {
    $this->labels = $labels;
    return $this;
  }

  public function setDatasets($datasets = []) : Chart
  {
    $this->datasets = $datasets;
    return $this;
  }

  public function setOptions($options) : Chart
  {
    $this->options = $options;
    return $this;
  }

  public function get()
  {
      return [
          'type' => $this->type,
          'data' => [
            'labels' => $this->labels,
            'datasets' => $this->datasets
          ],
          'options' => $this->options
      ];
  }
}
