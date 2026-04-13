<?php
session_start();

if(!isset($_SESSION['email'])){
    header("location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="css.css">
    
</head>
<body> 
   <div class="container" id="upperline">
    <header>
        <h1>EPR Financial Management</h1>
        </header>
        <nav class="navbar">
    <h2 class="logo">MySite</h2>
    <ul class="nav-links">
            <li><a href="form.html">census</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        
    </ul>
</nav>
    </div>
    <script src="app.js"></script>
</body>

    
</html>