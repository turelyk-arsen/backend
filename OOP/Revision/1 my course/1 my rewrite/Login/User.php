<?php

namespace Login;

use PDO;

class User {
    public $id;
    public $username;
    public $email;
    private $password;

    public static function getAll() {
        $conn = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
        $result = $conn->query('SELECT * FROM users');
        $users = $result->fetchAll(PDO::FETCH_CLASS, 'Login\User');
        $conn = null;
        return $users;
    }

    public function getPassword () {
        return $this->password;
    }
}