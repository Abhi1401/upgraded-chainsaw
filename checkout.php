<?php
    include_once "dbconnect.php";
    $string = "update book set TAILOR_ID=".$_GET['tailor_id']." where USER_ID=".$_GET['user_id'];
    echo $string;
    $query = mysqli_query($con, $string);
    header("location:index.html");
?>
