<?php

class FlowerAPIManager
{
    public $id;
    public $name;
    private $price;

    public function get_price()
    {
        return $this->price . '$';
    }
    
    public function get_pdo() {
        return new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
    }

    public function findAll()
    {
        $pdo = $this->get_pdo();
        $results = $pdo->query('SELECT * FROM flower');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'FlowerAPIManager');
        $pdo = null;

        echo json_encode($flowers);
    }

    public function find($id) {
        $pdo = $this->get_pdo();
        $prep = $pdo->prepare('SELECT * FROM flower WHERE id=:id');
        $prep->bindValue(':id', $id);
        $prep->execute();

        $prep->setFetchMode(PDO::FETCH_CLASS, 'FlowerAPIManager');
        $flower= $prep->fetch();
        $pdo = null;

        // return $flower;
        echo json_encode($flower);
    }

    
}
