<?php

if (isset($_POST['submit'])) {
    session_start();
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    header('Location: page2.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="name" placeholder="Name">
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <input type="submit" name="submit" value="Submit">
        <br>
    </form>
</body>
</html>