<?php

include 'db.php';

if(isset($_POST['add_member'])){

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $membership = $_POST['membership'];
    $join_date = date("Y-m-d");

if($membership == "1 Month"){

    $expiry_date =
    date("Y-m-d", strtotime("+1 month"));

}elseif($membership == "3 Months"){

    $expiry_date =
    date("Y-m-d", strtotime("+3 months"));

}elseif($membership == "6 Months"){

    $expiry_date =
    date("Y-m-d", strtotime("+6 months"));

}else{

    $expiry_date =
    date("Y-m-d", strtotime("+1 year"));
}

    $sql = "INSERT INTO members
        (name,age,gender,phone,membership,
        join_date,expiry_date)

        VALUES

        ('$name','$age','$gender',
        '$phone','$membership',
        '$join_date','$expiry_date')";
        
    $result = mysqli_query($conn,$sql);

    if($result){

        echo "<script>alert('Member Added Successfully');</script>";

    }else{

        echo "<script>alert('Failed');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Add Member</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow p-4">

                <h2 class="text-center mb-4">
                    Add Gym Member
                </h2>

                <form method="POST">

                    <input type="text"
                    name="name"
                    class="form-control mb-3"
                    placeholder="Enter Name"
                    required>

                    <input type="number"
                    name="age"
                    class="form-control mb-3"
                    placeholder="Enter Age"
                    required>

                    <select name="gender"
                    class="form-control mb-3">

                        <option>Male</option>
                        <option>Female</option>

                    </select>

                    <input type="text"
                    name="phone"
                    class="form-control mb-3"
                    placeholder="Enter Phone Number"
                    required>

                    <select name="membership"
                    class="form-control mb-3">

                        <option>1 Month</option>
                        <option>3 Months</option>
                        <option>6 Months</option>
                        <option>1 Year</option>

                    </select>

                    <button type="submit"
                    name="add_member"
                    class="btn btn-primary w-100">

                    Add Member

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>