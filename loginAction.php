<?php
    require_once 'dbconnect.php';
    if(isset($_POST['username'],$_POST['password']))
    {
        $uname = $_POST['username'];
        $p = $_POST['password'];
        $res = mysqli_query($con,"select * from admins where username='".$uname."' and password = '".$p."'");
        header("location:checkLogin.php");

    };

?>