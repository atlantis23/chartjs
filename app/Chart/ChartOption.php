<?php

namespace App\Chart;

/**
 *
 */
class ChartOption
{
  private $options = [];
  public $legend = true;
  public $maintainAspectRatio = false;
  public $gridLines;
  public $yAxes = '';
  public $xAxes = '';
  public $xyGridLines = false;
  public $xGridLines = false;
  public $yGridLines = false;
  public $xybarPercentage;
  public $xbarPercentage;
  public $ybarPercentage;
  public $xyticksStartZero = false;
  public $xticksStartZero = false;
  public $yticksStartZero = false;
  public $xyAutoSkip = false;
  public $xAutoSkip = false;
  public $yAutoSkip = false;

  function __construct()
  {

  }

  public function set()
  {
      // legend
    $this->options['legend']['display'] = $this->legend;

      // Maintain Aspect Ratio
    $this->options['maintainAspectRatio'] = $this->maintainAspectRatio;

      // X axis Label
    if ($this->xAxes != '') {
      $this->options['scales']['xAxes'][]['scaleLabel'] = [
        'display' => true,
        'labelString' => $this->xAxes
      ];
    }

      // Y axis Label
    if ($this->yAxes != '') {
      $this->options['scales']['yAxes'][]['scaleLabel'] = [
        'display' => true,
        'labelString' => $this->yAxes
      ];
    }

    // X and Y axis Grid Lines
    if ($this->xyGridLines) {
      $this->options['scales']['xAxes'][0]['gridLines'] = [
        'display' => $this->xyGridLines,
      ];

      $this->options['scales']['yAxes'][0]['gridLines'] = [
        'display' => $this->xyGridLines,
      ];
    }

      // X axis Grid Lines
    if ($this->xGridLines) {
      $this->options['scales']['xAxes'][0]['gridLines'] = [
        'display' => $this->xGridLines,
      ];
    }

      // Y axis Grid Lines
    if ($this->yGridLines) {
      $this->options['scales']['yAxes'][0]['gridLines'] = [
        'display' => $this->yGridLines,
      ];
    }

      // X and Y axis Bar Percentage
      if ($this->xybarPercentage != '') {
        $this->options['scales']['xAxes'][0]['barPercentage'] = $this->xybarPercentage;
        $this->options['scales']['yAxes'][0]['barPercentage'] = $this->xybarPercentage;
      }

      // X axis Bar Percentage
      if ($this->xbarPercentage != '') {
        $this->options['scales']['xAxes'][0]['barPercentage'] = $this->xbarPercentage;
      }

      // Y axis Bar Percentage
      if ($this->ybarPercentage != '') {
        $this->options['scales']['yAxes'][0]['barPercentage'] = $this->ybarPercentage;
      }

      // X and Y axis Ticks Start Zero
    if ($this->xyticksStartZero) {
      $this->options['scales']['xAxes'][0]['ticks']['beginAtZero'] = $this->xyticksStartZero;
      $this->options['scales']['yAxes'][0]['ticks']['beginAtZero'] = $this->xyticksStartZero;
    }

      // X axis Ticks Start Zero
    if ($this->xticksStartZero) {
       $this->options['scales']['xAxes'][0]['ticks']['beginAtZero'] = $this->xticksStartZero;
    }

      // Y axis Ticks Start Zero
    if ($this->yticksStartZero) {
      $this->options['scales']['yAxes'][0]['ticks']['beginAtZero'] = $this->yticksStartZero;
    }

    // X and Y axis Ticks Auto Skip
  if ($this->xyAutoSkip) {
    $this->options['scales']['xAxes'][0]['ticks']['autoSkip'] = $this->xyAutoSkip;
    $this->options['scales']['yAxes'][0]['ticks']['autoSkip'] = $this->xyAutoSkip;
  }

    // X axis Ticks Start Zero
  if ($this->xAutoSkip) {
    $this->options['scales']['xAxes'][0]['ticks']['autoSkip'] = $this->xAutoSkip;
  }

    // Y axis Ticks Start Zero
  if ($this->yAutoSkip) {
      $this->options['scales']['yAxes'][0]['ticks']['autoSkip'] = $this->yAutoSkip;
  }

    return $this->options;
  }
}
