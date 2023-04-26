<?php

class Post
{
    public $id;
    public $title;
    public $content;

    //     2. Create a static method in the Post class called "createPost" 
    // that inserts a new post into the database using PDO.
    // The method should take the title and content of the post 
    // as arguments.

    public static function createPost($title, $content)
    {
        $conn = new PDO('mysql:host=localhost;dbname=forum', 'root', '');

        $sql = "INSERT INTO posts (title, content) VALUES (?, ?)";
        $result = $conn->prepare($sql);
        $result->bindValue(1, $title);
        $result->bindValue(2, $content);

        $result->execute();
        $conn = null;
    }
}

// Post::createPost('My title', 'and this is content');
