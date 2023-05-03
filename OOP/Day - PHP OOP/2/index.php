<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

</head>
<?php
require_once 'connect.php';

$order = '';
$errors = array();
$users = array();

if (isset($_GET['order']) && isset($_GET['column'])) {

    if ($_GET['column'] == 'lastname') {
        $order = ' ORDER BY lastname';
    } else if ($_GET['column'] == 'firstname') {
        $order = ' ORDER BY firstname';
    } else if ($_GET['column'] == 'birthdate') {
        $order = ' ORDER BY birthdate';
    }

    if ($_GET['order'] == 'asc') {
        $order .= ' ASC';
    } else if ($_GET['order'] == 'desc') {
        $order .= ' DESC';
    }
}

if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        $post[$key] = strip_tags(trim($value));
    }

    if (strlen($post['firstname']) < 3) {
        $errors[] = 'First name must be at least 3 characters';
    }
    if (strlen($post['lastname']) < 3) {
        $errors[] = 'Last name must be at least 3 characters';
    }
    if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }
    if (empty($post['birthdate'])) {
        $errors[] = 'Birthdate is mandatory';
    }
    if (empty($post['city'])) {
        $errors[] = 'City is mandatory';
    }
    if (count($errors) == 0) {
        $insertUser = $db->prepare('INSERT INTO users (gender, firstname, lastname, email, birthdate, city) VALUES(:gender, :firstname, :lastname, :email, :birthdate, :city)');
        $insertUser->bindValue(':gender', $post['gender']);
        $insertUser->bindValue(':firstname', $post['firstname']);
        $insertUser->bindValue(':lastname', $post['lastname']);
        $insertUser->bindValue(':email', $post['email']);
        $insertUser->bindValue(':birthdate', date('Y-m-d', strtotime($post['birthdate'])));
        $insertUser->bindValue(':city', $post['city']);
        if ($insertUser->execute()) {
            $createUser = true;
        } else {
            $errors[] = 'SQL Error';
        }
    }
}

$queryUsers = $db->prepare('SELECT * FROM users'.$order);
if ($queryUsers->execute()) {
    $users = $queryUsers->fetchAll();
}
?>

<body>
    <div class="container">
        <h1>Users list</h1>
        <p>Sort by :
            <a href="index.php?column=firstname&order=asc">First name (ascending)</a> |
            <a href="index.php?column=firstname&order=desc">First name (descending)</a> |
            <a href="index.php?column=lastname&order=asc">Last name (ascending)</a> |
            <a href="index.php?column=lastname&order=desc">Last name (descending)</a> |
            <a href="index.php?column=birthdate&order=asc">Age name (ascending)</a> |
            <a href="index.php?column=birthdate&order=desc">Age name (descending)</a> |
        </p>

        <br>

        <div class="row">
            <?php
            if (isset($createUser) && $createUser == true) {
                echo '<div class="col-md-6 col-md-offset-3">';
                echo '<div class="alert alert-success">New user was successfully added.</div>';
                echo '</div><br>';
            }

            if (!empty($errors)) {
                echo '<div class="col-md-6 col-md-offset-3">';
                echo '<div class="alert alert-danger">' .  implode('<br>', $errors) . '</div>';
                echo '</div><br>';
            }
            ?>
        </div>

        <div class="col-md-7">
            <table class="table">
                <thead>
                    <tr>
                        <th>Gender</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?php echo $user['gender'] ?></td>
                            <td><?php echo $user['firstname'] ?></td>
                            <td><?php echo $user['lastname'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo DateTime::createFromFormat('Y-m-d', $user['birthdate'])->diff(new DateTime('now'))->y; ?> ans</td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <div class="col-md-">
            <form method="post" class="form-horizontal well well-sm">
                <fieldset>
                    <legend>Name</legend>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="gender"></label>
                        <div class="col-md-8">
                            <select id="gender" name="gender" class="form-control input-md" required>
                                <option value="Mlle">Miss</option>
                                <option value="Mme">Madam</option>
                                <option value="M">Mister</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="firstname">First name</label>
                        <div class="col-md-8">
                            <input id="firstname" name="firstname" type="text" class="form-control input-md" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="lastname">Last name</label>
                        <div class="col-md-8">
                            <input id="lastname" name="lastname" type="text" class="form-control input-md" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <div class="col-md-8">
                            <input id="email" name="email" type="email" class="form-control input-md" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="city">City</label>
                        <div class="col-md-8">
                            <input id="city" name="city" type="text" class="form-control input-md" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="birthdate">Birth date</label>
                        <div class="col-md-8">
                            <input id="birthdate" name="birthdate" type="text" placeholder="JJ-MM-AAAA" class="form-control input-md" required>
                            <span class="help-block">au format JJ-MM-AAAA</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4"><button type="submit" class="btn btn-primary">Send</button></div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>