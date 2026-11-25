<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<?php include __DIR__ . "/header.inc"; ?>

<h1>Welcome Page</h1>

<p>Welcome, <?php echo $_SESSION["user"]; ?>!</p>

<?php include __DIR__ . "/footer.inc"; ?>