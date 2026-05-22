<?php

include 'db.php';

if(isset($_POST['make_payment'])){

    $member_id = $_POST['member_id'];

    $amount = $_POST['amount'];

    $payment_date = date("Y-m-d");

    $sql = "INSERT INTO payments
            (member_id,amount,payment_date)

            VALUES

            ('$member_id',
            '$amount',
            '$payment_date')";

    $result = mysqli_query($conn,$sql);

    if($result){

        echo "<script>alert('Payment Added Successfully');</script>";
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

<title>Payment System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow p-4">

<h2 class="text-center mb-4">

Member Payment

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

<input type="number"
name="amount"

class="form-control mb-3"

placeholder="Enter Amount"

required>

<button type="submit"

name="make_payment"

class="btn btn-success w-100">

Make Payment

</button>

</form>

</div>

</div>

</div>

</div>

</body>
</html>