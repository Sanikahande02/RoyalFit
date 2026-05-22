<?php

session_start();
include 'db.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE email='$email' 
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_assoc($result);

    $_SESSION['user'] = $row['name'];

    header("Location: user_dashboard.php");

}else{

        echo "<script>alert('Invalid Email or Password');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow p-4">

                <h2 class="text-center mb-4">
                    Login
                </h2>

                <form method="POST">

                    <input type="email"
                    name="email"
                    class="form-control mb-3"
                    placeholder="Enter Email"
                    required>

                    <input type="password"
                    name="password"
                    class="form-control mb-3"
                    placeholder="Enter Password"
                    required>

                    <button type="submit"
                    class="btn btn-success w-100"
                    name="login">

                    Login

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>
<p class="text-center mt-3">

Don't have an account?

<a href="register.php">

Register Here

</a>

</p>