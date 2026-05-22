<?php

include 'db.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    $result = mysqli_query($conn,$sql);

    if($result){

    echo "<script>

    alert('Registration Successful');

    window.location='login.php';

    </script>";
}else{

        echo "<script>alert('Registration Failed');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gym Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow p-4">

                <h2 class="text-center mb-4">
                    Gym Registration
                </h2>

                <form method="POST">

                    <input type="text"
                    name="name"
                    class="form-control mb-3"
                    placeholder="Enter Name"
                    required>

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
                    class="btn btn-primary w-100"
                    name="register">

                    Register

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>
<p class="text-center mt-3">

Already have an account?

<a href="login.php">

Login Here

</a>

</p>