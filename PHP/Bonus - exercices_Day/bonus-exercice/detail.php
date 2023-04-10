<?php
$id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '1Root2Arsen!', 'bonus_exercise');
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);


?>
<ul>
    <h4>User: <?= $user['id']; ?></h4>
    <li><strong>Name : </strong>
        <?= $user['name']; ?></li>
    <li><strong>Email : </strong>
        <?= $user['email']; ?></li>
    <li> <h4>Image :</h4>
        <img src="https://picsum.photos/200" alt=""></li>

</ul>