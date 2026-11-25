<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if ($username === "Abdulrahman" && $password === "106640017") {

    $_SESSION["user"] = $username;

    header("Location: welcome.php");
    exit();

} else {

    echo 'Invalid login. <a href="login.php">Try again</a>';
}

?>