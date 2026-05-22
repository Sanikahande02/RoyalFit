<?php

include 'db.php';

if(isset($_POST['mark_attendance'])){

    $member_id = $_POST['member_id'];

    $date = date("Y-m-d");

    $check = "SELECT * FROM attendance

              WHERE member_id='$member_id'

              AND attendance_date='$date'";

    $check_result =
    mysqli_query($conn,$check);

    if(mysqli_num_rows($check_result) > 0){

        echo "<script>alert('Attendance Already Marked');</script>";

    }else{

        $sql = "INSERT INTO attendance
                (member_id,attendance_date)

                VALUES

                ('$member_id','$date')";

        $result = mysqli_query($conn,$sql);

        if($result){

            echo "<script>alert('Attendance Marked');</script>";
        }
    }
}

$members =
mysqli_query($conn,"SELECT * FROM members");

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Attendance</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow p-4">

<h2 class="text-center mb-4">

Mark Attendance

</h2>

<form method="POST">

<select name="member_id"
class="form-control mb-3">

<?php

while($row = mysqli_fetch_assoc($members)){

?>

<option value="<?php echo $row['id']; ?>">

<?php echo $row['name']; ?>

</option>

<?php

}

?>

</select>

<button type="submit"
name="mark_attendance"

class="btn btn-primary w-100">

Mark Attendance

</button>

</form>

</div>

</div>

</div>

</div>

</body>
</html>