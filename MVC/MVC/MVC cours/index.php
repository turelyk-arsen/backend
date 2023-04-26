<?php
/*
    ROUTER - FRONT CONTROLLER

    It will handle every requests from the user.
    Depending on the request, it will call the 'proper' controller. 
    
    For exemple:
        - If you want to display all songs, 
            the router will call the SongController.
        - If you want to retrieve informations about the user, 
            the router will call the UserController. 

    Example of URL: 
        localhost/m_project/index.php
        localhost/m_project/index.php?page=songs
        localhost/m_project/index.php?page=songs&id=45
        localhost/m_project/index.php?page=contact
*/

// Check if there is a request
if (isset($_GET['page'])) {
    //Call the proper controller based on the request
    if ($_GET['page'] == 'songs') {
        require_once 'Controller/SongController.php';

        if (isset($_GET['id']))
            display_song($_GET['id']);
        else
            display_songs();
    } else {
        $msg = "404 - Page not found <br>";
        require_once './View/ErrorView.php';
    }
} else {
    // Display Home Page !
    echo 'Home Page';
}
