<?php
// 1. Create a PHP class called "User" that will represent a user 
// from the database. The class should have properties for each 
// column in the "users" table. Also create a getter for the private property.

class User
{
    public $id;
    public $username;
    public $email;
    private $password;

    public function get_password()
    {
        return $this->password;
    }

    //     2. Create a static method in the User class called "getAll" 
    // that retrieves all the users from the database using PDO and 
    // fetch them inside the User class.

    public static function getAll()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
        $result = $pdo->query('SELECT * FROM users');
        $users = $result->fetchAll(PDO::FETCH_CLASS, 'User');
        $pdo = null;
    }
}
