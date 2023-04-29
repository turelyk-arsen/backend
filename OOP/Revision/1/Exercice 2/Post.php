<?php

require_once "StringIsEmptyOrNull.php";

class Post
{
    public $id;
    public $title;
    public $content;

    public static function getPdo($host, $schema, $user, $pwd)
    {
        return new PDO('mysql:host=' . $host . ';dbname=' . $schema, $user, $pwd);
    }

    public static function createPost($t, $c)
    {
        if ($t == "" or $t == null) {
            throw new StringIsEmptyOrNull('The title is empty, you must provide a valid title');
        } else if ($c == "" or $c == null) {
            throw new StringIsEmptyOrNull('The content is empty, you must provide valid content');
        }

        $data = array("title" => $t, "content" => $c);
        $conn = self::getPdo('localhost', 'forum', 'root', '');
        $stmt = $conn->prepare("INSERT INTO posts VALUES (id, :title , :content)");
        $stmt->execute($data);
        $conn = null;
    }

    public static function getPosts()
    {
        $conn = self::getPdo('localhost', 'forum', 'root', '');
        $stmt = $conn->query('SELECT * FROM posts');
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        $conn = null;
        return json_encode($posts, JSON_PRETTY_PRINT);
    }
}