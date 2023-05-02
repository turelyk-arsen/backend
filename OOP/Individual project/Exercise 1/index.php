<?php

require_once 'addFlowersDB.php';
require_once 'displayFlowers.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
            padding: 5px 10px;
        }

        table {
            width: 30%;
        }

        thead {
            background-color: #333;
            color: #fff;
        }
    </style>
    <script>
        function toggleColorInput() {
            var select = document.getElementsByName("type")[0];
            var colorInput = document.getElementById("color-input");

            if (select.value == "flower") {
                colorInput.style.display = "block";
            } else {
                colorInput.style.display = "none";
            }
        }
    </script>
</head>

<body>


    <h2>Add flower</h2>
    <form method='post'>
        <label for="name">Title</label>
        <input type="text" name="name" placeholder="Name">
        <?php if (isset($errors['name']))
            echo $errors['name'];
        ?><br>

        <label for="price">Price</label>
        <input type="text" name="price" placeholder="Price">
        <?php if (isset($errors['price']))
            echo $errors['price'];
        ?>
        <br>

        <label for="add-new">Add new:</label>
        <select name="type" onchange="toggleColorInput()">
            <option value="plant">Plant</option>
            <option value="flower">Flower</option>
        </select>

        <input id="color-input" style="display:none" type="text" name="color" placeholder="Color">
        <?php if (isset($errors['color']))
            echo $errors['color'];
        ?>
        <br>

        <input type="submit" name="submitBtn" value="Send">
    </form>


    <h2>All our flowers</h2>
    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Price</th>
                <th>Color</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flowers as $key => $flower) : ?>
                <tr>
                    <td><?= $key += 1 ?></td>
                    <td><?= $flower->getName() ?></td>
                    <td><?= $flower->getPrice() ?></td>
                    <td><?= $flower->getColor() ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <h2>All our plants</h2>
    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($plants as $key => $plant) : ?>
                <tr>
                    <td><?= $key += 1 ?></td>
                    <td><?= $plant->getName() ?></td>
                    <td><?= $plant->getPrice() ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>

</html>