<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution Form Ex  2</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="myNumber" placeholder="Your Number"><br>
        <input type="submit" name="multiplyBtn" value="multiply">
    </form>

    <?php
        if (isset($_POST['multiplyBtn'])) {

            // Make sure the number is numeric (not a string or empty)
            if (is_numeric($_POST['myNumber'])) {
                $multiTable = array();
                $x = $_POST['myNumber'];
                // Multiply
                for ($i = 1; $i <= 10; $i++) {
                    $multiTable[$i] = $i * $x;
                }
                // Display
                echo '<table border="1">';
                foreach ($multiTable as $key => $value) {
                    echo "<tr>
                    <td>$key</td>
                    <td>$value</td>
                    </tr>";
                }
                echo '</table>';
            } else {
                echo 'Please enter a numeric value !';
            }
        }
    ?>
    
</body>
</html>