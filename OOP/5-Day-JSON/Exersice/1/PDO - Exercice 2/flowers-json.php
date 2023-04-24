<?php

class FlowerAPIManager
{
    public $id;
    public $name;
    private $price;

    public function findAll()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
        $results = $pdo->query('SELECT * FROM flower');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'FlowerAPIManager');
        $pdo = null;

        echo json_encode($flowers);
    }
}
