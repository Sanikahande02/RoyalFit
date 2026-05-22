<?php

session_start();

if(isset($_POST['login'])){

$email=$_POST['email'];

$password=$_POST['password'];

if($email=="admin@gmail.com" && $password=="admin123"){

$_SESSION['admin']="Admin";

header("Location: dashboard.php");

}
else{

echo "<script>alert('Invalid Admin Login')</script>";

}

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Admin Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="admin-login-container">

<form method="POST" class="admin-login-form">

<h1>

Admin Login

</h1>

<input type="email"
name="email"
placeholder="Enter Email"
required>

<input type="password"
name="password"
placeholder="Enter Password"
required>

<button type="submit"
name="login">

Login

</button>

</form>

</div>

</body>

</html>