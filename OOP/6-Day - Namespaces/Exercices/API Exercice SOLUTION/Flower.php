<?php

namespace Flowers;
// use JsonSerializable;   second methods
class Flower implements \JsonSerializable
{
    public $id;
    public $name;
    private $price;

    public function get_price()
    {
        return $this->price . '$';
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price
        ];
    }
}
