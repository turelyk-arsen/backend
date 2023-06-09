<?php

function find_all()
{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=spotify', 'root', 'rootroot');

    $results = $pdo->query('SELECT * FROM songs');
    $songs = $results->fetchAll(PDO::FETCH_ASSOC);
    $pdo = null;

    return $songs;
}

function find($id)
{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=spotify', 'root', 'rootroot');

    $prep = $pdo->prepare('SELECT * FROM songs WHERE id = :id');
    $prep->bindValue(':id', $id);
    $prep->execute();
    $song = $prep->fetch(PDO::FETCH_ASSOC);
    $pdo = null;

    return $song;
}
