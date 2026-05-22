<?php

include 'db.php';

if(isset($_GET['search'])){

    $search = $_GET['search'];

    $sql = "SELECT * FROM members
            WHERE name LIKE '%$search%'";

}else{

    $sql = "SELECT * FROM members";
}

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>View Members</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">
        Gym Members
    </h2>

    <form method="GET" class="mb-4">

<div class="row">

<div class="col-md-10">

<input type="text"
name="search"
class="form-control"
placeholder="Search Member By Name">

</div>

<div class="col-md-2">

<button class="btn btn-dark w-100">

Search

</button>

</div>

</div>

</form>
    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>

                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Membership</th>
                
                <th>Join Date</th>
                <th>Expiry Date</th>
                <th>Status</th>
                <th>Action</th>

            </tr>

        </thead>

        <tbody>

        <?php

        while($row = mysqli_fetch_assoc($result)){

        ?>

            <tr>

                <td><?php echo $row['id']; ?></td>

                <td><?php echo $row['name']; ?></td>

                <td><?php echo $row['age']; ?></td>

                <td><?php echo $row['gender']; ?></td>

                <td><?php echo $row['phone']; ?></td>

                <td><?php echo $row['membership']; ?></td>

<td><?php echo $row['join_date']; ?></td>

<td><?php echo $row['expiry_date']; ?></td>
<td>

<?php

if($row['expiry_date'] >= date("Y-m-d")){

    echo "<span class='badge bg-success'>
    Active
    </span>";

}else{

    echo "<span class='badge bg-danger'>
    Expired
    </span>";
}

?>

</td>

<td>

<a href="edit_member.php?id=<?php echo $row['id']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a href="delete_member.php?id=<?php echo $row['id']; ?>"
class="btn btn-danger btn-sm">

Delete

</a>

</td>

            </tr>

        <?php

        }

        ?>

        </tbody>

    </table>

</div>

</body>
</html>