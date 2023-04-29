<?php
class Connect
{
    public function getUsers()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=exercise2_db", 'root', '');
        $query = $pdo->query('SELECT * FROM users');
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        return $users;
    }
    public function insertUser($user, $email, $password)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=exercise2_db", 'root', '');
        $query = $pdo->prepare('INSERT INTO users(username, password, email) VALUES (:username, :email, :password)');
        $query->bindValue(':username', $user);
        $query->bindValue(':email', $email);
        $query->bindValue(':password', $password);
        $result = $query->execute();
        $pdo = null;
        return $result;
    }
}
