

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h2>Insert a new flower</h2>

    <form method="post">

        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Name">
        <?php if (isset($errors['name']))
            echo $errors['name']; ?>

        <label for="price">Price</label>
        <input type="text" name="price" placeholder="Price">
        <?php if (isset($errors['price']))
            echo $errors['price']; ?>

        <input type="submit" name="submitBtn" id='submitBtn' value="Send">
    </form>
    <div id="result"></div>
    <script>
        document.querySelector("form").addEventListener('submit', function (event) {
            event.preventDefault();
            let form = this;
            fetch('addFlowersDB.php', {
                method: "POST",
                body: new FormData(form)
            }).then(res => res.text())
                .then(function (result) {
                    // console.log(result);
                    document.getElementById('result').innerHTML = result;
                });
        });
    </script>

</body>

</html>