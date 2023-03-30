
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            background-color: lightcyan;
        }
    </style>
</head>
<body>
    
    <?php
    /*
-- Exercise 1
- Part 1 :
    You need to create a web page with basics HTML tags.
    In this page, you'll display all the characteristics of an imaginary character, from a role-play game.
        The character information will be saved in different variables.
        There is five (5) informations :
        -- An avatar image (url to img)
        -- The last name
        -- The first name
        -- Attack points
        -- Defense points
    You have to display all the different informations about your character on the page.
*/
$image ='https://picsum.photos/200/300';
$firstName = 'JOHN';
$lastName = 'DOE';
$atack_points = 12;
$defense_points = 12;


echo "<img src=$image>";
echo "<h3>$firstName</h3>";
echo "<h3>$lastName</h3>";
echo "<p>Attack points: $atack_points</p>";
echo "<p>Defense points: $defense_points</p>";

if ($atack_points > 9 || $defense_points > 9) {
        echo "<div class='alert'><strong>Congratulations !</strong> Your character is ready to fight.</strong></div>";
} else {
    echo "<div class='alert'><strong>Congratulations !</strong> Your character is NOT ready to fight.</strong></div>";

}

/*
- Part 2:
	Based on the 'character' exercise, make sure that, if its characteristic "Attak" or "Defense" are greater than 9, an additional message is displayed:
	<div class="alert">
    	<strong>Congratulations !</strong> Your character is ready to fight.</strong>
	</div>
*/
$imageNew = 'banana.png';
?>

<img src="<?php echo $imageNew?>">
<h2><?php echo "$firstName $lastName";?> </h2>
<p>Attack points: <?php echo $atack_points;?> </p>
<p>Defense points: <?php echo $defense_points;?> </p>

<?php 
if($atack_points > 9 or $defense_points > 9) {
    echo '<div class="alert">
    <strong>Congratulations !</strong> Your character is ready to fight.</strong>
</div>';
}
?>

</body>
</html>

