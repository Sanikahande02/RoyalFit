<?php

include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM members WHERE id='$id'";

$result = mysqli_query($conn,$sql);

if($result){

    header("Location: view_members.php");

}else{

    echo "Delete Failed";
}

?>