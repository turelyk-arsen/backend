<?php
require_once 'candyAdd.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Candy shop</title>
</head>

<body>
  <h2>Insert new Candy</h2>
  <!-- result of the adding in the db -->
  <div id="results"></div>

  <!-- form to add candy in the db -->
  <form method="post">
    <input type="text" name="name" placeholder="Candy" />
    <?php if (isset($errors['name']))
      echo $errors['name']; ?><br />
      
    <input type="text" name="price" placeholder="Price" />
    <?php if (isset($errors['price']))
      echo $errors['price']; ?>
    <br />

    <!-- a dropdown-list of all categories -->
    <label for="category">Category :</label>
    <select name="category" id="category"></select><br />

    <input type="submit" name="submitBtn" value="Insert" />
  </form>

  <!-- AJAX -->
  <script>
    // get category from DB 
    fetch("category.php", {
        method: "post",
      })
      .then((res) => res.text())
      .then(function(result) {
        document.getElementById("category").innerHTML = result;
      });

    // add candy to db
    // document
    //   .querySelector("form")
    //   .addEventListener("submit", function (event) {
    //     event.preventDefault();
    //     let form = this;

    //     fetch("candyAdd.php", {
    //       method: "post",
    //       body: new FormData(form),
    //     })
    //       .then((res) => res.text())
    //       .then(function (result) {
    //         document.getElementById("results").innerHTML = result;
    //       });
    //   });
  </script>

</body>

</html>