<?php

namespace Flowers\Utilities;

require_once 'Flower.php';

use \PDO;

class FlowerAPIManager
{
    private function get_pdo()
    {
        return new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
    }

    public function findAll()
    {
        $pdo = $this->get_pdo();
        $results = $pdo->query('SELECT * FROM flowers');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flowers\Flower');
        $pdo = null;

        return json_encode($flowers, JSON_PRETTY_PRINT);
    }

    public function find($id)
    {
        $pdo = $this->get_pdo();
        $prep = $pdo->prepare('SELECT * FROM flowers WHERE id = :id');
        $prep->bindValue(':id', $id);
        $prep->execute();

        $prep->setFetchMode(PDO::FETCH_CLASS, 'Flowers\Flower');
        $flower = $prep->fetch();
        $pdo = null;

        return json_encode($flower, JSON_PRETTY_PRINT);
    }

}