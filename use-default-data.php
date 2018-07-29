<?php
    include_once "dbconnect.php";
    $string = 'select USER_ID from user where EMAIL="'.$_SESSION['email'].'"';
    $query = mysqli_query($con, $string);
   $result =  mysqli_fetch_assoc($query);
    $user_id = $result['USER_ID'];
    $qry = "select * from measurements where id =".$user_id;
    echo $qry;
    $res = mysqli_query($con,$qry);
    $row = mysqli_fetch_assoc($res);
    $string = "insert into book(USER_ID,ARM,BICEP, CHEST, HIP, NECK, SHOULDER, STOMACH, WAIST, WRIST) 
    values(".$user_id.",".$row['arm'].",".$row['bicep'].",".$row['chest'].",".$row['hip'].",".$row['neck'].",".$row['shoulder'].",".$row['stomach'].",".$row['waist'].",".$row['wrist'].")";
    echo $string;
    $res = mysqli_query($con,$string);
    $row = mysqli_fetch_assoc($res);
     header("location:select-tailor.php?user_id=".$user_id);
?>
