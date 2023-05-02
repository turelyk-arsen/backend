<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>
<?php require_once 'addDB.php' ?>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form method="post">
            <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
            <h1 class="h3 mb-3 fw-normal">Please log in</h1>
            <a href="sign.php">Sign in</a>

            <?php

            // if (isset($_COOKIE['login'])){
            //                     echo "<div style='color: green; font-size: 20px;'>New user was successfully added.</div>";
            //                     header('Location: sign.php');
            // }

            ?>

            <div class="form-floating">
                <input type="name" name="name" class="form-control" id="floatingInput" placeholder="name">
                <label for="floatingInput">Name</label>
                <?php if (isset($errors['name']))
                    echo '<p class="text-danger">' . $errors['name'] . '</p>'; ?>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                <?php if (isset($errors['email']))
                    echo '<p class="text-danger">' . $errors['email'] . '</p>'; ?>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                <?php if (isset($errors['password']))
                    echo '<p class="text-danger">' . $errors['password'] . '</p>'; ?>
            </div>
            <div class="form-floating">
                <input type="password" name='cPassword' class="form-control" id="floatingPassword" placeholder="Password confirm">
                <label for="floatingPassword">Password confirm</label>
                <?php if (isset($errors['cpassword']))
                    echo '<p class="text-danger">' . $errors['cpassword'] . '</p>'; ?>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Log in</button>
            <p class="mt-5 mb-3 text-muted">&copy; Arsen Turelyk 2023</p>
        </form>
        <!-- <div style='color: green; font-size: 20px;'>New user was successfully added.</div> -->

    </main>



</body>

</html>