<?php
/*session_start();
require_once 'config.php';
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
$checkEmail=$conn->query("SELECT email from users WHERE email='$email'");
   if ($checkEmail->num_rows>0){
    $_SESSION['register_error']= 'email is already registered!';
    $_SESSION['active_form']='register';
       } else {$conn->query("INSERT INTO users (name, email,password,role) VALUES('$name', '$email', '$password','$role')");}
       
    header("location: index.php");
exit();


}
if(isset($_POST['login'])){
    $email=$_POST['email'];
     $password=$_POST['password'];
     $result= $conn->query("SELECT* FROM users WHERE email= '$email'");
     if ($result->num_rows>0){
    $user=$result->fetch_assoc();
    if(password_verify($password,$user['password'])){
     $_SESSION['name']= $user['name'];
     $_SESSION['email']=$user['email'];
     if ($user['role']==='admin'){
        header("location: admin_page.php");
     }else{
        header("location:user_page.php");
        }
        exit();

        if($result->num_rows > 0){
    $_SESSION['user'] = $email;
    header("Location: dashboard.php");
    exit();
        }
      }

$_SESSION["login_error"]='incorrect email or password';
$_SESSION["active_form"]='login';
 header("location: index.php");
     exit();
}

/*session_start();

if($result->num_rows > 0){
    $_SESSION['user'] = $email;
    header("Location: dashboard.php");
    exit();
}*/




session_start();
require_once 'config.php';

// REGISTER
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $checkEmail = $conn->query("SELECT email FROM users WHERE email='$email'");

    if ($checkEmail->num_rows > 0) {
        $_SESSION['register_error'] = 'Email is already registered!';
        $_SESSION['active_form'] = 'register';
    } else {
        $conn->query("INSERT INTO users (name, email, password, role) 
                      VALUES('$name', '$email', '$password', '$role')");
    }

    header("location: index.php");
    exit();
}


// LOGIN
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email='$email'");

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            // Redirect ukurikije role
            if ($user['role'] === 'admin') {
                header("location: admin_page.php");
            } else {
                header("location: dashboard.php"); // aha ni ho ushaka
            }
            exit();
        }
    }

    // login error
    $_SESSION["login_error"] = 'Incorrect email or password';
    $_SESSION["active_form"] = 'login';
    header("location: index.php");
    exit();
}
?>