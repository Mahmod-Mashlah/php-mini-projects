<?php

    session_start(); /******* */


if ($_POST) {

    if (isset($_POST['logout'])) {

        // setcookie('name', null, time());
        // setcookie('email', null, time());
        // setcookie('aboutme', null, time());
        // setcookie('gender', null, time());
        // echo 'You logged out. bye bye! ;)';
        // exit;

        session_unset(); /******* */
       // session_destroy();/******* */
        exit();
    }

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $aboutme = htmlspecialchars($_POST['aboutme']);
    $gender = htmlspecialchars($_POST['gender']);

    $_SESSION["name"] = $name;/***** */
    $_SESSION["email"] = $email;/***** */
    $_SESSION["aboutme"] = $aboutme;/****** */
    $_SESSION["gender"] = $gender;/******* */

    if (empty(trim($name))) {
        echo 'name is required';
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'email must be an email';
        exit;
    }

    echo "Hi $name <br>";
    echo "your email is: $email <br>";
    echo $aboutme;
    echo '<form action="" method="POST">
    <input type="hidden" name="logout">
    <input type="submit" value="Logout">
    </form>';
    // setcookie('name', $name, time()+60*60*24*30);
    // setcookie('email', $email, time()+60*60*24*30);
    // setcookie('aboutme', $aboutme, time()+60*60*24*30);
    // setcookie('gender', $gender, time()+60*60*24*30);
    exit;
}

// if (isset($_COOKIE['name']) && isset($_COOKIE['email']) && isset($_COOKIE['gender']) && isset($_COOKIE['aboutme'])) {
    if (isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['gender']) && isset($_SESSION['aboutme'])) {

    $name = htmlspecialchars($_SESSION['name']);
    $email = htmlspecialchars($_SESSION['email']);
    $aboutme = htmlspecialchars($_SESSION['aboutme']);
    $gender = htmlspecialchars($_SESSION['gender']);
                            
    $name = htmlspecialchars($_COOKIE['name']);
    $email = htmlspecialchars($_COOKIE['email']);
    $aboutme = htmlspecialchars($_COOKIE['aboutme']);
    $gender = htmlspecialchars($_COOKIE['gender']);

    echo "Hi $name <br>";
    echo "your email is: $email <br>";
    echo $aboutme;
    echo '<form action="" method="POST">
    <input type="hidden" name="logout">
    <input type="submit" value="Logout">
    </form>';
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form action="" method="POST">
        Name: <input type="text" name="name"> <br>
        Email: <input type="text" name="email"> <br>
        About Me: <br>
        <textarea name="aboutme"></textarea> <br>
        Gender:
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="male"> Male <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>