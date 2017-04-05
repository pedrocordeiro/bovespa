<?php

namespace CVMWeb\Model;

class Company
{
    public $code;
    public $name;

    public function exchangeArray(array $data)
    {
        $this->code = !empty($data['code']) ? $data['code'] : null;
        $this->name = !empty($data['name']) ? $data['name'] : null;
    }
}

?>