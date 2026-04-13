<?php
session_start();
$errors = [
    'login'=> $_SESSION['login_error']??'',
    'register'=>$_SESSION['register_error']??'',
    'success' => $_SESSION['register_success'] ?? ''
];
$activeForm = $_SESSION['active_form']??'login';
unset($_SESSION['login_error'], $_SESSION['register_error'], $_SESSION['active_form'], $_SESSION['register_success']);
function showError($error){
    return !empty($error)? "<p class='error-message'>$error</p>":'';}
function isActiveForm($formName, $activeForm){
    return $formName ===$activeForm ?'active':'';

} 
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gate</title>
    <link rel="stylesheet" href="style.css">
    <link ref="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <div class="form-box <?= isActiveForm('login',$activeForm); ?>" id= "login-form">
        <form action="login_register.php" method="post">
            <h2 id="login">login</h2>
            <?=showError($errors['login']);?>
            <input type="email" name="email" placeholder="email" required>
            <input type="password" name="password" placeholder="password" required>
            <button type="submit" name="login">login</button>
            <p>Don't have an account?<a href="#" onclick="showform ('register-form')"> Register</a></p>
        </form>
    </div>
    <div class="form-box <?= isActiveForm('register',$activeForm);?>"id="register-form">
        <form action="login_register.php" method="post">
            <h2 id="register">Register</h2>
            <?=showError($errors['register']);?>
            <?= !empty($errors['success']) ? "<p class='success-message'>{$errors['success']}</p>" : '' ?>
            <input type="text" name="name" placeholder="name" required>
            <input type="email" name="email" placeholder="email" required>
            <input type="password" name="password" placeholder="password" required>
            <select name="role" required>
                <option value="">---select role---</option>
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <button type="submit" name="register"> Register</button>
            <p>Already have an account?<a href="#" onclick="showform('login-form')"> Login</a></p>
        </form>
    </div>
</div>
<script src="script.js"></script>

</script>
</body>
</html>