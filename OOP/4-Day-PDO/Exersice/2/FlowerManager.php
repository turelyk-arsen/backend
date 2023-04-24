<?php

class FlowerManager {
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function find($id) {
        if($id == $_GET['id']) {
            return "Name of flower with $id is $this->name with price $this->price <br>";
        }
    }

    public function findAll() {
        return "Name flower is $this->name with price $this->price <br>";
    }
}