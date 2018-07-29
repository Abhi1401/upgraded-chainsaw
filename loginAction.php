<?php
    require_once 'dbconnect.php';
    if(isset($_POST['email'],$_POST['password']))
    {
        $umail = $_POST['email'];
        $p = $_POST['password'];
        $res = mysqli_query($con,"select * from user where email='".$umail."' and password = '".$p."'");
        $row = mysqli_fetch_assoc($res);
        $_SESSION['name']=$row['NAME'];
        $_SESSION['email']=$umail;
        header("location:select-design.php");
    }
    else
    {
        header("location:checkLogin.php");
    }

?>