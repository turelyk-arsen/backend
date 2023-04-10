<?php


/*
    To use pagination, we will use GET method
    For example : songs.php?page=1
*/

$nbPage = 1;

if (isset($_GET['page']))
    $nbPage = $_GET['page'];

echo "Im on the page number : $nbPage";



// Exemple
// Set the number of items per page
$itemsPerPage = 10;

// Get the current page number from the URL
if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

// Calculate the offset of the first item to display
$offset = ($currentPage - 1) * $itemsPerPage;

// Query the database to get the items for the current page
$sql = "SELECT * FROM items LIMIT $offset, $itemsPerPage";
$result = mysqli_query($conn, $sql);

// Loop through the items and display them
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'] . '<br>';
}

// Generate links to the previous and next pages
$previous = $currentPage - 1;
$next = $currentPage + 1;

echo '<a href="?page=' . $previous . '">Previous</a> ';
echo '<a href="?page=' . $next . '">Next</a>';


/*
    You want to use LIMIT.

    If you want to get the first three songs
    SELECT * FROM songs LIMIT 0, 3

    If you want to get the next three songs
    SELECT * FROM songs LIMIT 3, 3


    Helper : 

    Step 1:
        Decide how many elements to display on the page. 2

    Step 2:
        Check if you have a URI param.
        For example : songs.php?page=1
    
     Step 3:
        Thanks to the page number, you can change the query.
        SELECT * FROM songs LIMIT X, 3

        You just have to figure out the X value.

        --- Links (navigate throught the pages)

        Step 1. Create two links/buttons 'previous' / 'next'.
        Previous : currentpage - 1
        Next : currentpage + 1

        Step 2. 
        Make sure that on the first page, 'previous' is disable.
        Make sure that on the last page, 'next' is disable.

        To do that, you have to count how many songs in total.
        Divide that number by the number of songs per page.

*/