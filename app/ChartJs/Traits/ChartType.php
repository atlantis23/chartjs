<?php

namespace App\ChartJs\Traits;

trait ChartType
{
    public function Line(){
        $this->type = 'line';
        return $this;
    }

    public function Bar(){
        $this->type = 'bar';
        return $this;
    }

    public function HorizontalBar(){
        $this->type = 'horizontalBar';
        return $this;
    }

    public function Radar() {
        $this->type = 'radar';
        return $this;
    }

    public function Doughnut() {
        $this->type = 'doughnut';
        return $this;
    }

    public function Pie() {
        $this->type = 'pie';
        return $this;
    }

    public function Polar(){
        $this->type = 'polar';
        return $this;
    }

    public function Bubble(){
        $this->type = 'Bubble';
        return $this;
    }

    public function Scatter(){
        $this->type = 'scatter';
        return $this;
    }

    public function Area(){
        $this->type = 'area';
        return $this;
    }

    public function Mixed(){
        $this->type = 'mixed';
        return $this;
    }
}
