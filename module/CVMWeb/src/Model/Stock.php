<?php

namespace CVMWeb\Model;

class Stock
{
    public $name;
    public $symbol;
    public $market;

    public function exchangeArray(array $data)
    {
        $this->symbol = !empty($data['symbol']) ? $data['symbol'] : null;
        $this->name = !empty($data['name']) ? $data['name'] : null;
        $this->market = !empty($data['market']) ? $data['market'] : null;
    }
}

?>