<?php

namespace App\ChartJs;

class ChartOption
{
    private $type;
    private $data;
    private $options;

    function __construct($type, $data, array $options)
    {
        $this->type = $type;
        $this->data = $data;
        $this->options = $options;
    }

    public function get()
    {
        return [
            'type' => $this->type,
            'data' => $this->data,
            'option' => $this->options
        ];
    }    
}
