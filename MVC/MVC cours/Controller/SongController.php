<?php

// Display all songs
function display_songs()
{
    //Ask the Model the data
    require_once './Model/SongModel.php';
    //$song = find_all();

    //Pass the data to the view
    require_once './View/SongsView.php';
}

// Display one song
function display_song($id)
{
    //Ask the Model the data
    require_once './Model/SongModel.php';
    $song = find($id);

    //Check and call the proper view
    if ($song != null) {
        require_once './View/SongDetailsView.php';
    } else {
        $msg = 'Song is not available <br>';
        require_once './View/ErrorView.php';
    }
}
