<?php

class Movie
{
    public $id;
    public $title;
    // public $views;
    public $length;
    public $director_id;
    // public $poster;

    public function get_title()
    {
        return $this->title;
    }

    public function __toString()
    {
        return "Title : $this->title<br>
        Length : $this->length<br>";
    }
}
