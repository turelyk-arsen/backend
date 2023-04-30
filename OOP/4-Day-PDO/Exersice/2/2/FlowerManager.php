<?php
require_once 'Flower.php';

class FlowerManager
{

    public function pdo()
    {
        return new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
    }

    public function findAll()
    {
        $pdo = $this->pdo();
        $result = $pdo->query('SELECT * FROM flowers');
        $flowers = $result->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        return $flowers;
    }

    public function findAllClass()
    {
        $pdo = $this->pdo();
        $result = $pdo->query('SELECT * FROM flowers');
        $flowers = $result->fetchAll(PDO::FETCH_CLASS, 'Flower');
        $pdo = null;
        return $flowers;
    }

    public function find($id)
    {
        $pdo = $this->pdo();
        $result = $pdo->prepare('SELECT * FROM flowers WHERE id = :id');
        $result->bindValue(':id', $id);
        $result->execute();
        $flower = $result->fetch(PDO::FETCH_ASSOC);
        $pdo = null;
        return $flower;
    }

    public function findClass($id)
    {
        $pdo = $this->pdo();
        $result = $pdo->prepare('SELECT * FROM flowers WHERE id = :id');
        $result->bindValue(':id', $id);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, 'Flower');
        $flower = $result->fetch();
        $pdo = null;
        return $flower;
    }
}
