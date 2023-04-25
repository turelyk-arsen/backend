<?php

namespace Flowers\Utilities;

require_once 'Flower.php';

use \PDO;

class FlowerAPIManager
{

    private function get_pdo()
    {
        return new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
        // return new \PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
    }

    public function findAll()
    {
        $pdo = $this->get_pdo();
        $results = $pdo->query('SELECT * FROM flower');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flowers\Flower');
        $pdo = null;

        return json_encode($flowers, JSON_PRETTY_PRINT);
    }

    public function find($id)
    {
        $pdo = $this->get_pdo();
        $prep = $pdo->prepare('SELECT * FROM flower WHERE id = :id');
        $prep->bindValue(':id', $id);
        $prep->execute();

        $flower = $prep->fetch(PDO::FETCH_CLASS, 'Flowers\Flower');
        $pdo = null;

        return json_encode($flower, JSON_PRETTY_PRINT);
    }

    public function findByName($name)
    {
        $pdo = $this->get_pdo();
        $prep = $pdo->prepare('SELECT * FROM flowers WHERE name LIKE :name');
        $prep->bindValue(':name', $name);
        $prep->execute();

        $flower = $prep->fetchAll(PDO::FETCH_CLASS, 'Flowers\Flower');
        $pdo = null;

        return json_encode($flower, JSON_PRETTY_PRINT);
    }


    public function sortBy($column, $direction)
    {
        $pdo = $this->get_pdo();
        $prep = $pdo->prepare("SELECT * 
        FROM flowers
        ORDER BY $column $direction");
        $prep->execute();

        $flower = $prep->fetchAll(PDO::FETCH_CLASS, 'Flowers\Flower');
        $pdo = null;

        return json_encode($flower, JSON_PRETTY_PRINT);
    }
}
