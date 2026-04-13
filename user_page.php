<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['email'] !== 'admin@example.com') {
    header("location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background:#fff;">
    <h1>welcome,<span><?= $_SESSION['name'] ?></span></h1>
     <p>this is an,<span> user </span> page </p>
     <button onclick="window.location.href='logout.php'"> logout </button>
</body>
</html>