<?php

namespace App\Http\Controllers;

use ChartJs;
use Illuminate\Http\Request;

use App\Chart\Chart;
use App\Chart\ChartData;
use App\Chart\ChartOption;


class ChartController extends Controller
{
  public function chartjs()
  {
     $data1 = new ChartData('data-1', [1, 2, 3, 4, 5]);
     $data1->backgroundColor = ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6'];

     $data2 = new ChartData('data-2', [1, 2, 3, 4, 5]);
     $data2->backgroundColor = ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6'];

     $options = new ChartOption();
     $options->xAxes = 'IP Address';
     $options->yAxes = 'Vulnerabilities';
     $options->xbarPercentage = 2;

     $chart = new Chart("horizontalBar");
     $chart->setLabels(['01/01', '02/01', '03/01', '04/01', '05/01']);
     $chart->setDatasets([$data1]);
     $chart->setOptions($options->set());
     return  $chart->get();
  }


















    public function chart()
    {
        $labels = [
          'Sunday',
          'Monday',
          'Tuesday',
          'Wednesday',
          'Thursday',
          'Friday',
          'Saturday'
        ];

        $data1 = [
            'label' => 'Data 1',
            'data' => [3, 5, 6, 7, 10, 0],
            'backgroundColor' => [],
            'borderColor' => [],
            'borderWidth' => 2,
        ];

        $data2 = [
            'label' => 'Data 2',
            'data' => [7, 4, 5, 1, 0, 10],
            'backgroundColor' => [],
            'borderColor' => [],
            'borderWidth' => 2,
        ];

        return ChartJs::setType('bar')
        ->setLabels($labels)
        ->setDatasets([$data1, $data2])
        ->setOptions([])
        ->get();
    }
}
