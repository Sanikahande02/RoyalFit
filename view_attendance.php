<?php

include 'db.php';

$sql = "SELECT attendance.id,

members.name,

attendance.attendance_date

FROM attendance

INNER JOIN members

ON attendance.member_id = members.id

ORDER BY attendance.attendance_date DESC";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Attendance Records</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2 class="text-center mb-4">

Attendance Records

</h2>

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Member Name</th>
<th>Attendance Date</th>

</tr>

</thead>

<tbody>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['attendance_date']; ?></td>

</tr>

<?php

}

?>

</tbody>

</table>

</div>

</body>
</html>