<!DOCTYPE html>
<html>
<head>
    <title>Add Animal</title>
</head>
<body>
    <h1>Add a New Animal</h1>
    <form action="/animals/store" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="type">Type:</label>
        <input type="text" name="type" id="type">
        <br>
        <label for="fact">Fact:</label>
        <input type="text" name="fact" id="fact">
        <br>
        <input type="submit" value="Add Animal">
    </form>
</body>
</html>
