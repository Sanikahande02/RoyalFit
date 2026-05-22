<?php

include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM members WHERE id='$id'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update_member'])){

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $membership = $_POST['membership'];

    $update = "UPDATE members SET

    name='$name',
    age='$age',
    gender='$gender',
    phone='$phone',
    membership='$membership'

    WHERE id='$id'";

    $run = mysqli_query($conn,$update);

    if($run){

        header("Location: view_members.php");

    }else{

        echo "Update Failed";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Edit Member</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow p-4">

<h2 class="text-center mb-4">
Edit Member
</h2>

<form method="POST">

<input type="text"
name="name"
class="form-control mb-3"

value="<?php echo $row['name']; ?>">

<input type="number"
name="age"
class="form-control mb-3"

value="<?php echo $row['age']; ?>">

<input type="text"
name="gender"
class="form-control mb-3"

value="<?php echo $row['gender']; ?>">

<input type="text"
name="phone"
class="form-control mb-3"

value="<?php echo $row['phone']; ?>">

<input type="text"
name="membership"
class="form-control mb-3"

value="<?php echo $row['membership']; ?>">

<button type="submit"
name="update_member"
class="btn btn-success w-100">

Update Member

</button>

</form>

</div>

</div>

</div>

</div>

</body>
</html>