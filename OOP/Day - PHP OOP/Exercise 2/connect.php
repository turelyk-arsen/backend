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
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=exercise2_db", 'root', '');
            $query = $pdo->prepare('INSERT INTO users(username, email, password) VALUES (:username, :email, :password)');
            $query->bindValue(':username', $user);
            $query->bindValue(':email', $email);
            $query->bindValue(':password', $password);
            $result = $query->execute();
            $pdo = null;
            return $result;
        } catch (\Exception $e) {
            echo "Something did not go as planned...<br>";
            echo $e;
        }
    }

    public function checkName($name, $email, $password)
    {
        $name = strip_tags(trim($_POST['username']));
        if (empty($name))
            throw new InvalidInputException('Name is mandatory !!!');

        if (empty($email))
            throw new InvalidInputException('Email is mandatory !!!');

        if (empty($password))
            throw new InvalidInputException('Password is mandatory !!!');

        return $name;
        return $email;
        return $password;
    }
}

class InvalidInputException extends Exception
{
}
