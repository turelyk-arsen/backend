<?php

namespace Flowers\Utilities;

require_once 'Flower.php';

use \PDO;

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
        $flowers = $result->fetchAll(PDO::FETCH_CLASS, 'Flowers\Flower');
        $pdo = null;
        return $flowers;
        // return json_encode($flowers, JSON_PRETTY_PRINT);

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
        $result->setFetchMode(PDO::FETCH_CLASS, 'Flowers\Flower');
        $flower = $result->fetch();
        $pdo = null;
        return $flower;
    }

    public function findByName($name)
    {
        $pdo = $this->pdo();
        $prep = $pdo->prepare('SELECT * FROM flowers WHERE name LIKE :name');
        $prep->bindValue(':name', $name);
        $prep->execute();

        $flower = $prep->fetchAll(PDO::FETCH_CLASS, 'Flowers\Flower');
        $pdo = null;
        // return $flower;

        return json_encode($flower, JSON_PRETTY_PRINT);
    }


    public function sortBy($order)
    {
        $pdo = $this->pdo();
        $prep = $pdo->prepare('SELECT * FROM flowers ORDER BY' . $order);
        if ($prep->execute()) {
            $flowers = $prep->fetchAll(PDO::FETCH_ASSOC);
        }
        // $prep->setFetchMode(PDO::FETCH_CLASS, 'Flower');
        // $flower = $prep->fetch();
        // $flower = $prep->fetchAll(PDO::FETCH_CLASS, 'Flowers\Flower');
        $pdo = null;
        return $flowers;

        // return json_encode($flower, JSON_PRETTY_PRINT);
    }

    public function sendInDB()
    {
        $pdo = $this->pdo();
        $errors = array();

        foreach ($_POST as $key => $value) {
            $post[$key] = strip_tags(trim($value));
        }
        if (strlen($post['name']) < 3) {
            $errors[] = 'Name must be at least 3 characters';
        }
        // if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        //     $errors[] = 'Email is invalid';
        if (empty($post['price'])) {
            $errors[] = 'Price is mandatory';
        } else if (!is_numeric($post['price'])) {
            $errors[] = 'Price is a number';
        }

        if (count($errors) == 0) {
            $addFlower = $pdo->prepare('INSERT INTO flowers (name, price) VALUES(:name, :price)');
            $addFlower->bindValue(':price', $post['price']);
            $addFlower->bindValue(':name', $post['name']);
            // $insertUser->bindValue(':birthdate', date('Y-m-d', strtotime($post['birthdate'])));
            if ($addFlower->execute()) {
                return true;
            } else {
                $errors[] = 'SQL Error';
                return $errors;
            }
        }
        return $errors;

    }
}
