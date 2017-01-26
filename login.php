<?php
/**
 * Created by IntelliJ IDEA.
 * User: FochMaiden
 * Date: 25/01/2017
 * Time: 23:05
 */
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Synchro</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
    <div class="login-wrapper">
        <form action="login.php" method="post">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username"><br>
            <br>
            <label for="pass">Password</label><br>
            <input type="password" name="pass" id="pass"><br>
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
