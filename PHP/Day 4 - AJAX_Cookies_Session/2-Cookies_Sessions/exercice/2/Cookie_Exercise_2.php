<form method='post'>
    <input type="submit" name='resetBtn' value='Reset'>
</form>

<?php
/*

    Step 1: Create a page that indicates how often it has been visited by the user.
    No need for forms, just the $_COOKIE array


Step 2: Also post the date of first visit by the client (everytime).

    Step 3: Add a 'Reset' submit (in a form, of course)
    When you click on the button, the counter is reset.

 */
//Reset button
if(isset($_POST['resetBtn'])) {
    // remove the cookie from the cookie file (permanent)
    setcookie('count', 1, time() -3600);

    // remove the cookie from the array
    unset($_COOKIE['count']);
}

// check if my cookies exists
if (isset($_COOKIE['count'])) {
    // we have to do ++
    $count = $_COOKIE['count'] +1;
    setcookie("count", $count, time() + 60);
    echo 'Number of time visited: '.$_COOKIE['count'].'<br>';
    echo 'Date of first visit: '.$_COOKIE['first_visit'].'<br>';
}
else {
    // Its the first time: initialize to 1
    echo "First time visiting the page! <br>";
    setcookie('count', 1, time() +600);
    setcookie('first_visit', date("d/m/Y H:i:s"), time() +600);

}
    // time() : give you the timestamp of NOW
    // date() : date format FROM the timestamp of NOW




// $first_time = 0;
// if ($id_count == 0)
// $first_time = date('d/m/Y H:i:s').'<br>';
// // echo 'You visit website '. date('d/m/Y H:i:s').'<br>';

// echo 'You visit website ' . $id_count.'<br>';
// echo 'You first time ' . $first_time.'<br>';
// print_r($_COOKIE);

// echo " <form action='Cookie_Exercise_2.php'>
// <input type='submit' value='Click'></form>";

// header('location: Cookie_Exercise_2.php');
// exit();

//  echo '<br>';
//  print_r(count($_COOKIE));
