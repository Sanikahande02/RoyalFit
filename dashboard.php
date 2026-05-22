<?php

session_start();
include 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
}
$total_members_query =
"SELECT * FROM members";

$total_members_result =
mysqli_query($conn,$total_members_query);

$total_members =
mysqli_num_rows($total_members_result);



$active_members_query =
"SELECT * FROM members
WHERE expiry_date >= CURDATE()";

$active_members_result =
mysqli_query($conn,$active_members_query);

$active_members =
mysqli_num_rows($active_members_result);



$expired_members_query =
"SELECT * FROM members
WHERE expiry_date < CURDATE()";

$expired_members_result =
mysqli_query($conn,$expired_members_query);

$expired_members =
mysqli_num_rows($expired_members_result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

.card{
    border:none;
    border-radius:15px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
}

</style>

</head>

<body>
<?php include 'sidebar.php'; ?>

<div class="main-content">

<div class="row g-4">

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<h3>Payments</h3>

<p>
Manage member payments
</p>

<a href="payment.php"
class="btn btn-success">

Open

</a>

</div>

</div>


<div class="col-md-4">

<div class="card shadow p-4 text-center">

<h3>Payment Records</h3>

<p>
View payment history
</p>

<a href="view_payments.php"
class="btn btn-primary">

Open

</a>

</div>

</div>
<div class="col-md-4">

<div class="card shadow p-4 text-center">

<h3>Total Members</h3>

<h1>

<?php echo $total_members; ?>

</h1>

</div>

</div>

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<h3>Active Members</h3>

<h1 class="text-success">

<?php echo $active_members; ?>

</h1>

</div>

</div>

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<h3>Expired Members</h3>

<h1 class="text-danger">

<?php echo $expired_members; ?>

</h1>

</div>

</div>

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<h3>Attendance</h3>

<p>
Mark daily attendance
</p>

<a href="attendance.php"
class="btn btn-dark">

Open

</a>

</div>

</div>

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<h3>Attendance Records</h3>

<p>
View attendance history
</p>

<a href="view_attendance.php"
class="btn btn-info">

Open

</a>

</div>

</div>

<!-- Add Member -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<h3>Add Member</h3>

<p>
Register new gym members
</p>

<a href="add_member.php"
class="btn btn-primary">

Open

</a>

</div>

</div>

<!-- View Members -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<h3>View Members</h3>

<p>
Manage all gym members
</p>

<a href="view_members.php"
class="btn btn-success">

Open

</a>

</div>

</div>

<!-- BMI Calculator -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<h3>BMI Calculator</h3>

<p>
Calculate fitness BMI
</p>

<a href="bmi.php"
class="btn btn-warning">

Open

</a>

</div>

</div>

</div>

</div>

</body>
</html>