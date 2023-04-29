<?php

require_once 'StringIsEmptyOrNull.php';

class Post
{
    public $id;
    public $title;
    public $content;

    //     2. Create a static method in the Post class called "createPost" 
    // that inserts a new post into the database using PDO.
    // The method should take the title and content of the post 
    // as arguments.

    public static function getPDO($host, $schema, $user, $pwd)
    {
        return new PDO('mysql:host' . $host . ';dbname=' . $schema, $user, $pwd);
    }

    public static function createPost($title, $content)
    {

        if ($title == '' or $title == null) {
            throw new StringIsEmptyOrNull('The title is empty, you must provide a valid title');
        } else if ($content == '' or $content = null) {
            throw new StringIsEmptyOrNull('The content is empty, you must provide valid content');
        }

        $data = array('title' => $title, 'content' => $content);
        $conn = self::getPDO('localhost', 'forum', 'root', '');
        $stmt = $conn->prepare("INSERT INTO posts VALUE (id, :title, :content");
        $stmt->execute($data);
        $conn = null;

        // $conn = new PDO('mysql:host=localhost;dbname=forum', 'root', '');

        // $sql = "INSERT INTO posts (title, content) VALUES (?, ?)";
        // $result = $conn->prepare($sql);
        // $result->bindValue(1, $title);
        // $result->bindValue(2, $content);

        // $result->execute();
        // $conn = null;

    }
    public static function getPosts()
    {
        $conn = self::getPDO('localhost', 'forum', 'root', '');
        $stmt = $conn->query('SELECT * FROM posts');
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        $conn = null;
        return json_encode($posts, JSON_PRETTY_PRINT);
    }
}

// Post::createPost('My title', 'and this is content');
