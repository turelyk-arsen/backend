<?php

// connect to workbench
$conn = mysqli_connect('localhost', 'root', '1Root2Arsen!');

if (mysqli_connect_errno())
    die("You can not connect to the server. " . mysqli_connect_errno() . "\n");

// create DB christmas_shop
$query_db = "CREATE DATABASE IF NOT EXISTS christmas_shop";
mysqli_query($conn, $query_db);
// echo "Error creating database: " . mysqli_error($conn) . "\n";

// select christmas_shop db
mysqli_select_db($conn, 'christmas_shop');
// echo "Error selected database: " . mysqli_error($conn) . "\n";

// create table
$query_table = "CREATE TABLE IF NOT EXISTS toys (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        price DOUBLE NOT NULL,
        photo VARCHAR(255),
        type ENUM ('dolls','mechanic','puzzle') NOT NULL,
        description TEXT,
        PRIMARY KEY(id)
    )";

$result_create_table = mysqli_query($conn, $query_table);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a form to add a toy in the table</title>
</head>

<body>

    <?php
    // if user press the button....
    $name = $type_message = $price = '';
    if (isset($_POST['submitBtn'])) {
        $errors = array();

        // validate users input
        $name = strip_tags(trim($_POST['name']));
        if (empty($name))
            $errors['name'] = "<p style='color: red;'>Name is mandatory!</p>";

        $price = ($_POST['price']);
        if (empty($price) || !is_numeric($price))
            $errors['price'] = "<p style='color: red;'>Price is mandatory and must be a number!</p>";

        $type = ($_POST['type']);
        $description = ($_POST['description']);

        if ($_FILES['myFile']['error'] != UPLOAD_ERR_OK)
            $errors['file'] = 'Error during upload';
        // die('Error during upload');

        // Limit the type of the file: only IMAGES
        $extension = array_search(
            $_FILES['myFile']['type'],
            array(
                '.jpg' => 'image/jpeg',
                '.png' => 'image/png',
                '.gif' => 'image/gif'
            )
        );

        if (!$extension)
            $errors['file'] = 'File must be an image!';
        // die('File must be an image!');

        // if user add correct information add to DB
        if (empty($errors)) {
            $conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'christmas_shop');
            if (mysqli_connect_errno())
                die("You can not connect to the server. " . mysqli_connect_errno() . "\n");

            // add img
            $fileName = time();
            $filePathe = "uploads/$fileName$extension";
            if (move_uploaded_file($_FILES['myFile']['tmp_name'], $filePathe)) {
                echo 'File uploaded!';
            } else {
                echo 'Problem uploading the file';
            }

            // add info in the table
            $query = "INSERT INTO toys (name, price, type, description, photo)
            VALUES ('$name', '$price', '$type', '$description', '$filePathe')";
            $result = mysqli_query($conn, $query);

            if ($result)
                echo "<p style='color: green'>Successful</p>";
            else
                echo "<p style='color: red'>Problem registering</p>";


            if (isset($_POST['type']))
                $type_message = "<p style='color: green'>Add into database the type $_POST[type].</p>";
            mysqli_close($conn);
        }
    }
    ?>

    <h3>Form to add a toy</h3>
    <form method="post" enctype="multipart/form-data">

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" placeholder="name"> <br>
        <?php if (isset($errors['name']))
            echo $errors['name'];
        ?>

        <label for="price">Price:</label>
        <input type="text" name="price" value="<?php echo $price; ?>" placeholder="price"> <br>
        <?php if (isset($errors['price']))
            echo $errors['price'];
        ?>

        <label for="type">Type:</label>
        <select id="type" name="type" required>
            <option value="dolls">Dolls</option>
            <option value="mechanic">Mechanic</option>
            <option value="puzzle">Puzzle</option>
        </select>
        <?php echo $type_message; ?>

        <br>
        <label for="description">Description:</label> <br>
        <textarea name="description" cols="30" rows="5"></textarea>
        <br>
        <input type="file" name="myFile" id="myFile">
        <br><br>
        <input type="submit" name="submitBtn" value="Send">

    </form>
</body>

<?php
include 'toys.php';
?>

</html>