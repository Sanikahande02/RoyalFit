<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>

<title>User Dashboard</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="user-dashboard">

<h1>

Welcome,
<?php echo $_SESSION['user']; ?>

🎉

</h1>

<div class="user-cards">

<div class="user-card">

<h2>Membership Status</h2>

<p>Active</p>

</div>

<div class="user-card">

<h2>Plan</h2>

<p>Premium Plan</p>

</div>

<div class="user-card">

<h2>Workout Goal</h2>

<p>Physical Fitness</p>

</div>

</div>

<a href="logout.php" class="logout-btn">

Logout

</a>

</div>

</body>

</html>